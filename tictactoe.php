<?php

session_start();
if ( !isset($_SESSION["case1"]) || !isset($_SESSION["case2"]) || !isset($_SESSION["case3"]) || !isset($_SESSION["case4"]) || !isset($_SESSION["case5"]) || !isset($_SESSION["case6"]) || !isset($_SESSION["case7"]) || !isset($_SESSION["case8"]) || !isset($_SESSION["case9"]) ) {
    $_SESSION["case1"] = "";
    $_SESSION["case2"] = "";
    $_SESSION["case3"] = "";
    $_SESSION["case4"] = "";
    $_SESSION["case5"] = "";
    $_SESSION["case6"] = "";
    $_SESSION["case7"] = "";
    $_SESSION["case8"] = "";
    $_SESSION["case9"] = "";
}

if ( !isset($_SESSION["tour"]) ) {
    $choix = array(1, 2);
    shuffle($choix);
    $_SESSION["tour"] = $choix[0];

}

include("game.php");

$game = new Game();
$game->gestionTourJoueur();
$game->checkWin();

if ( $_SESSION["tour"] == "2" ) {
    $game->checkWinPossible();
    $game->checkCounterPossible();
    $game->gestionTourIA();
}

?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Tic Tac Toe</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h1><span class="blue">TIC</span> <span class="red">TAC</span> <span class="blue">TOE</span></h1>
        <form class="grille" method="post" action="tictactoe.php">
            <section class="row">
            <?php
            if ( $_SESSION["case1"] != "" ) {
                if ( $_SESSION["case1"] == "o" ) {
                    echo "<section class=\"o\">o</section>";
                }
                else {
                    echo "<section class=\"x\">x</section>";
                }
            }
            elseif ( $_SESSION["case1"] == "" && $game->checkWin()[0] == false ) {
                ?><input class="btn" type="submit" value="1" name="1"><?php
            }
            elseif ( $_SESSION["case1"] == "" && $game->checkWin()[0] == true ) {
                echo "<section></section>";
            }
            if ( $_SESSION["case2"] != "" ) {
                if ( $_SESSION["case2"] == "o" ) {
                    echo "<section class=\"o deux\">o</section>";
                }
                else {
                    echo "<section class=\"x deux\">x</section>";
                }
            }
            elseif ( $_SESSION["case2"] == "" && $game->checkWin()[0] == false ) {
                ?><input class="btn deux" type="submit" value="2" name="2"><?php
            }
            elseif ( $_SESSION["case2"] == "" && $game->checkWin()[0] == true ) {
                echo "<section></section>";
            }
            if ( $_SESSION["case3"] != "" ) {
                if ( $_SESSION["case3"] == "o" ) {
                    echo "<section class=\"o\">o</section>";
                }
                else {
                    echo "<section class=\"x\">x</section>";
                }
            }
            elseif ( $_SESSION["case3"] == "" && $game->checkWin()[0] == false ) {
                ?><input class="btn" type="submit" value="3" name="3"><?php
            }
            elseif ( $_SESSION["case3"] == "" && $game->checkWin()[0] == true ) {
                echo "<section></section>";
            }
            ?>

            </section>
            <section class="row">

            <?php
            if ( $_SESSION["case4"] != "" ) {
                if ( $_SESSION["case4"] == "o" ) {
                    echo "<section class=\"o quatre\">o</section>";
                }
                else {
                    echo "<section class=\"x quatre\">x</section>";
                }
            }
            elseif ( $_SESSION["case4"] == "" && $game->checkWin()[0] == false ) {
                ?><input class="btn quatre" type="submit" value="4" name="4"><?php
            }
            elseif ( $_SESSION["case4"] == "" && $game->checkWin()[0] == true ) {
                echo "<section></section>";
            }
            if ( $_SESSION["case5"] != "" ) {
                if ( $_SESSION["case5"] == "o" ) {
                    echo "<section class=\"o cinq\">o</section>";
                }
                else {
                    echo "<section class=\"x cinq\">x</section>";
                }
            }
            elseif ( $_SESSION["case5"] == "" && $game->checkWin()[0] == false ) {
                ?><input class="btn cinq" type="submit" value="5" name="5"><?php
            }
            elseif ( $_SESSION["case5"] == "" && $game->checkWin()[0] == true ) {
                echo "<section></section>";
            }
            if ( $_SESSION["case6"] != "" ) {
                if ( $_SESSION["case6"] == "o" ) {
                    echo "<section class=\"o six\">o</section>";
                }
                else {
                    echo "<section class=\"x six\">x</section>";
                }
            }
            elseif ( $_SESSION["case6"] == "" && $game->checkWin()[0] == false ) {
                ?><input class="btn six" type="submit" value="6" name="6"><?php
            }
            elseif ( $_SESSION["case6"] == "" && $game->checkWin()[0] == true ) {
                echo "<section></section>";
            }
            ?>

            </section>
            <section class="row">

            <?php
            if ( $_SESSION["case7"] != "" ) {
                if ( $_SESSION["case7"] == "o" ) {
                    echo "<section class=\"o\">o</section>";
                }
                else {
                    echo "<section class=\"x\">x</section>";
                }
            }
            elseif ( $_SESSION["case7"] == "" && $game->checkWin()[0] == false ) {
                ?><input class="btn" type="submit" value="7" name="7"><?php
            }
            elseif ( $_SESSION["case7"] == "" && $game->checkWin()[0] == true ) {
                echo "<section></section>";
            }
            if ( $_SESSION["case8"] != "" ) {
                if ( $_SESSION["case8"] == "o" ) {
                    echo "<section class=\"o huit\">o</section>";
                }
                else {
                    echo "<section class=\"x huit\">x</section>";
                }
            }
            elseif ( $_SESSION["case8"] == "" && $game->checkWin()[0] == false ) {
                ?><input class="btn huit" type="submit" value="8" name="8"><?php
            }
            elseif ( $_SESSION["case8"] == "" && $game->checkWin()[0] == true ) {
                echo "<section></section>";
            }
            if ( $_SESSION["case9"] != "" ) {
                if ( $_SESSION["case9"] == "o" ) {
                    echo "<section class=\"o\">o</section>";
                }
                else {
                    echo "<section class=\"x\">x</section>";
                }
            }
            elseif ( $_SESSION["case9"] == "" && $game->checkWin()[0] == false ) {
                ?><input class="btn" type="submit" value="9" name="9"><?php
            }
            elseif ( $_SESSION["case9"] == "" && $game->checkWin()[0] == true ) {
                echo "<section></section>";
            }
    ?>
            </section>
        </form>
        <?php
        if ( $game->checkWin()[0] == true ) {
            if ( $game->checkWin()[1] == "x" ) {
                echo "<p class=\"blue\">Vous avez gagné !</p>";
                ?>
                <form action="tictactoe.php" method="post">
                    <input class="btnrestart" type="submit" value="Recommencer" name="restart">
                </form>
                <?php
            }
            elseif ( $game->checkWin()[1] == "draw" ) {
                echo "<p class=\"orange\">EGALITE</p>";
                ?>
                <form action="tictactoe.php" method="post">
                    <input class="btnrestart" type="submit" value="Recommencer" name="restart">
                </form>
                <?php
            }
            else {
                echo "<p class=\"red\">PERDU</p>";
                ?>
                <form action="tictactoe.php" method="post">
                    <input class="btnrestart" type="submit" value="Recommencer" name="restart">
                </form>
                <?php
            }
        }
        if ( isset($_POST["restart"]) ) {
            session_destroy();
            header("Location: tictactoe.php");
        }
        ?>
    </main>
</body>
</html>