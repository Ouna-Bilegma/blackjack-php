<?php

//require 'Player.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />



    <title>PHP OOP Blackjack</title>
</head>


<body class="">


    <div class="">

        <header>

            <div class="container mx-auto px-6 py-3">
                <div class="flex items-center justify-between">
                    <div class="hidden w-full text-gray-600 md:flex md:items-center">

                    </div>
                    <div class="text">Welcome to the Blackjack! </div>
                    <div class="flex items-center justify-end w-full">
                        <button @click="cartOpen = !cartOpen" class="text-gray-600 focus:outline-none mx-4 sm:mx-0">

                            <path
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                            </svg>
                        </button>

                        <div class="flex sm:hidden">
                            <button @click="isOpen = !isOpen" type="button"
                                class="text-gray-600 hover:text-gray-500 focus:outline-none focus:text-gray-500"
                                aria-label="toggle menu">
                                <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                    <path fill-rule="evenodd"
                                        d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <?php //require ('view_nav.php'); 
                ?>

            </div>

        </header>

        <main class="my-8">

            <div class="container mx-auto px-6">

                <?php
                foreach ($player->getCards() as $card) {
                    echo '<span style="font-size: 100px;">' . $card->getUnicodeCharacter(true) . '</span>';
                }
                ?>

                <p style="font-size: 20px;color:aliceblue">Your score: <?php echo $player->getScore(); ?></p>
                <?php if ($player->hasLost()) { ?>
                <p style="font-size: 20px; color:aliceblue">You lost!</p>
                <?php } ?>

                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="">

                    <?php require('form-blackjack.php'); ?>

                </form>

            </div>

        </main>

        <footer class="bg-gray-200">
            <div class="container mx-auto px-6 py-3 flex justify-between items-center">
                <p class="py-2 text-gray-500 sm:py-0" style="color:black">Blackjack Becode 2020</p>
                <p class="py-2 text-gray-500 sm:py-0" style="color:black">All rights reserved</p>
            </div>
        </footer>

    </div>

</body>

</html>