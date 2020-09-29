<?php

declare(strict_types=1);

require 'Suit.php';
require 'Card.php';
require 'Deck.php';

$deck = new Deck();
$deck->shuffle();
foreach ($deck->getCards() as $card) {
    echo $card->getUnicodeCharacter(true);
    echo '<br>';
}
$blackjack = new Blackjack();
// ====> start a new game

echo "<pre>";
print_r($blackjack->getPlayer());
echo "</pre>";