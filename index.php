<?php

declare(strict_types=1);

spl_autoload_register(static function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

session_start();
if (!isset($_SESSION['blackjack'])) {
    $_SESSION['blackjack'] = serialize(new Blackjack());
}


//$_SESSION['blackjack'] = serialize(new Blackjack());
//var_dump($_SESSION);
//die;
//save the instance in the session
$blackjack = unserialize($_SESSION['blackjack'], ['allowed_classes' => true]) ?? new Blackjack();
$player = $blackjack->getPlayer();

if (!empty($_POST['action'])) {
    switch ($_POST['action']) {
        case Player::ACTION_HIT: //should add a card to the player. If this brings him above 21, set lost property to true.
            $player->hit($blackjack->getDeck());
            break;
        case Player::ACTION_STAND: //stand does not have a method in the player class but will instead call hit on the dealer instance.
            echo 'stand';
            break;
        case Player::ACTION_SURRENDER: //Surrender should make you surrender the game. 
            echo 'surrender';
            break;
        case Player::ACTION_NEW:
            session_destroy();
            $_SESSION['blackjack'] = serialize(new Blackjack());
            break;
    }
}
//save session
$_SESSION['blackjack'] = serialize($blackjack);

require('view_form.php');