<?php

session_start();

if ( isset($_POST["restart"]) ) {
    session_destroy();
    header("Location: tictactoe.php");
}

if ( !isset($_SESSION["tab"]) ) {
    $_SESSION["tab"] = array(0, 0, 0, 0, 0, 0, 0, 0, 0);
}

$tab = $_SESSION["tab"];
// var_dump($tab);

if ( !isset($_SESSION["tour"]) ) {
    $choix = array(1, 2);
    shuffle($choix);
    $_SESSION["tour"] = $choix[0];
    $_SESSION["tourall"] = 1;

}

if ( !isset($_SESSION["signechoix"]) ) {
    $signes = array(1, 2);
    shuffle($signes);
    $_SESSION["signeia"] = $signes[0];
    $_SESSION["signej"] = $signes[1];
    $_SESSION["signechoix"] = "Ok";
}

$signej = $_SESSION["signej"];
$signeia = $_SESSION["signeia"];

if ( $signeia == 1 ) {
    $symboleia = "x";
}
else {
    $symboleia = "o";
}

if ( $signej == 1 ) {
    $symbolej = "x";
}
else {
    $symbolej = "o";
}

include("ia.php");

$game = new Game();
$game->checkWin($signej, $signeia);

// var_dump($game->checkWin($signej, $signeia));

if ( $_SESSION["tour"] == 2 ) {
    $game->checkWinPossible($signej, $signeia);
    $game->checkCounterPossible($signej, $signeia);
    $test = $game->ia($tab, $signeia);
    if ( is_int($test) ) {
        $_SESSION["tab"][$test] = $signeia;
        $_SESSION["tour"] = 1;
        $_SESSION["tourall"] += 1;
    }
}

elseif ( $_SESSION["tour"] == 1 ) {
    $game->gestionTourJoueur($signej);
    $_SESSION["tourall"] += 1;
}

// echo $_SESSION["tourall"];

$tab = $_SESSION["tab"];

// var_dump($test);
// var_dump($_SESSION["tour"]);
// var_dump($_SESSION["gocheckcase"]);
// var_dump($game->checkWin($signej, $signeia));
// var_dump($_SESSION["tab"]);

// echo $signej;

// echo $_SESSION["tab"][0];

?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Tic Tac Toe</title>
    <link rel="stylesheet" href="css/style.css">
    <?php
        if ( $symbolej == "x" ) {
            ?>
            <link rel="stylesheet" href="css/croix.css">
            <?php
        }
        if ( $symbolej == "o" ) {
            ?>
            <link rel="stylesheet" href="css/rond.css">
            <?php
        }
        ?>
</head>
<body>
    <header>
        <form class="top" action="index.php" method="post">
            <input class="btnindex" type="submit" value="ACCUEIL" name="restart">
        </form>
    </header>
    <main>
        <h1><span class="blue">TIC</span> <span class="red">TAC</span> <span class="blue">TOE</span></h1>
        <form class="grille" method="post" action="tictactoe.php">
            <section class="row">
            <?php
            if ( $tab[0] != 0 ) {
                if ( $tab[0] == $signeia ) {
                    echo "<section class=\"$symboleia\">o</section>";
                }
                else {
                    echo "<section class=\"$symbolej\">x</section>";
                }
            }
            elseif ( $tab[0] == 0 && $game->checkWin($signej, $signeia)[0] == false ) {
                ?><input class="btn" type="submit" value="1" name="1"><?php
            }
            elseif ( $tab[0] == 0 && $game->checkWin($signej, $signeia)[0] == true ) {
                echo "<section></section>";
            }
            if ( $tab[1] != 0 ) {
                if ( $tab[1] == $signeia ) {
                    echo "<section class=\"$symboleia deux\">o</section>";
                }
                else {
                    echo "<section class=\"$symbolej deux\">x</section>";
                }
            }
            elseif ( $tab[1] == 0 && $game->checkWin($signej, $signeia)[0] == false ) {
                ?><input class="btn deux" type="submit" value="2" name="2"><?php
            }
            elseif ( $tab[1] == 0 && $game->checkWin($signej, $signeia)[0] == true ) {
                echo "<section></section>";
            }
            if ( $tab[2] != 0 ) {
                if ( $tab[2] == $signeia ) {
                    echo "<section class=\"$symboleia\">o</section>";
                }
                else {
                    echo "<section class=\"$symbolej\">x</section>";
                }
            }
            elseif ( $tab[2] == 0 && $game->checkWin($signej, $signeia)[0] == false ) {
                ?><input class="btn" type="submit" value="3" name="3"><?php
            }
            elseif ( $tab[2] == 0 && $game->checkWin($signej, $signeia)[0] == true ) {
                echo "<section></section>";
            }
            ?>

            </section>
            <section class="row">

            <?php
            if ( $tab[3] != 0 ) {
                if ( $tab[3] == $signeia ) {
                    echo "<section class=\"$symboleia quatre\">o</section>";
                }
                else {
                    echo "<section class=\"$symbolej quatre\">x</section>";
                }
            }
            elseif ( $tab[3] == 0 && $game->checkWin($signej, $signeia)[0] == false ) {
                ?><input class="btn quatre" type="submit" value="4" name="4"><?php
            }
            elseif ( $tab[3] == 0 && $game->checkWin($signej, $signeia)[0] == true ) {
                echo "<section></section>";
            }
            if ( $tab[4] != 0 ) {
                if ( $tab[4] == $signeia ) {
                    echo "<section class=\"$symboleia cinq\">o</section>";
                }
                else {
                    echo "<section class=\"$symbolej cinq\">x</section>";
                }
            }
            elseif ( $tab[4] == 0 && $game->checkWin($signej, $signeia)[0] == false ) {
                ?><input class="btn cinq" type="submit" value="5" name="5"><?php
            }
            elseif ( $tab[4] == 0 && $game->checkWin($signej, $signeia)[0] == true ) {
                echo "<section></section>";
            }
            if ( $tab[5] != 0 ) {
                if ( $tab[5] == $signeia ) {
                    echo "<section class=\"$symboleia six\">o</section>";
                }
                else {
                    echo "<section class=\"$symbolej six\">x</section>";
                }
            }
            elseif ( $tab[5] == 0 && $game->checkWin($signej, $signeia)[0] == false ) {
                ?><input class="btn six" type="submit" value="6" name="6"><?php
            }
            elseif ( $tab[5] == 0 && $game->checkWin($signej, $signeia)[0] == true ) {
                echo "<section></section>";
            }
            ?>

            </section>
            <section class="row">

            <?php
            if ( $tab[6] != 0 ) {
                if ( $tab[6] == $signeia ) {
                    echo "<section class=\"$symboleia\">o</section>";
                }
                else {
                    echo "<section class=\"$symbolej\">x</section>";
                }
            }
            elseif ( $tab[6] == 0 && $game->checkWin($signej, $signeia)[0] == false ) {
                ?><input class="btn" type="submit" value="7" name="7"><?php
            }
            elseif ( $tab[6] == 0 && $game->checkWin($signej, $signeia)[0] == true ) {
                echo "<section></section>";
            }
            if ( $tab[7] != 0 ) {
                if ( $tab[7] == $signeia ) {
                    echo "<section class=\"$symboleia huit\">o</section>";
                }
                else {
                    echo "<section class=\"$symbolej huit\">x</section>";
                }
            }
            elseif ( $tab[7] == 0 && $game->checkWin($signej, $signeia)[0] == false ) {
                ?><input class="btn huit" type="submit" value="8" name="8"><?php
            }
            elseif ( $tab[7] == 0 && $game->checkWin($signej, $signeia)[0] == true ) {
                echo "<section></section>";
            }
            if ( $tab[8] != 0 ) {
                if ( $tab[8] == $signeia ) {
                    echo "<section class=\"$symboleia\">o</section>";
                }
                else {
                    echo "<section class=\"$symbolej\">x</section>";
                }
            }
            elseif ( $tab[8] == 0 && $game->checkWin($signej, $signeia)[0] == false ) {
                ?><input class="btn" type="submit" value="9" name="9"><?php
            }
            elseif ( $tab[8] == 0 && $game->checkWin($signej, $signeia)[0] == true ) {
                echo "<section></section>";
            }
    ?>
            </section>
        </form>
        <?php
        if ( $game->checkWin($signej, $signeia)[0] == true ) {
            if ( $game->checkWin($signej, $signeia)[1] == "$signej" ) {
                echo "<p class=\"blue\">Vous avez gagné !</p>";
                ?>
                <form action="tictactoe.php" method="post">
                    <input class="btnrestart" type="submit" value="Recommencer" name="restart">
                </form>
                <?php
            }
            elseif ( $game->checkWin($signej, $signeia)[1] == "draw" ) {
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
        ?>
    </main>
</body>
</html>