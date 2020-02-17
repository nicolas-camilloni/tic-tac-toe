<?php

class Game {

    private $winpossible = false;
    private $winOk = false;
    private $winPlayer = "";

    public function checkWin() {

        if ( $_SESSION["case1"] == "x" && $_SESSION["case2"] == "x" && $_SESSION["case3"] == "x" || $_SESSION["case1"] == "o" && $_SESSION["case2"] == "o" && $_SESSION["case3"] == "o" ) {
            $this->winOk = true;
            if ( $_SESSION["case1"] == "x" && $_SESSION["case2"] == "x" && $_SESSION["case3"] == "x" ) {
                $this->winPlayer = "x";
            }
            else {
                $this->winPlayer = "o";
            }
        }
        elseif ( $_SESSION["case4"] == "x" && $_SESSION["case5"] == "x" && $_SESSION["case6"] == "x" || $_SESSION["case4"] == "o" && $_SESSION["case5"] == "o" && $_SESSION["case6"] == "o" ) {
            $this->winOk = true;
            if ( $_SESSION["case4"] == "x" && $_SESSION["case5"] == "x" && $_SESSION["case6"] == "x" ) {
                $this->winPlayer = "x";
            }
            else {
                $this->winPlayer = "o";
            }
        }
        elseif ( $_SESSION["case7"] == "x" && $_SESSION["case8"] == "x" && $_SESSION["case9"] == "x" || $_SESSION["case7"] == "o" && $_SESSION["case8"] == "o" && $_SESSION["case9"] == "o" ) {
            $this->winOk = true;
            if ( $_SESSION["case7"] == "x" && $_SESSION["case8"] == "x" && $_SESSION["case9"] == "x" ) {
                $this->winPlayer = "x";
            }
            else {
                $this->winPlayer = "o";
            }
        }
        elseif ( $_SESSION["case1"] == "x" && $_SESSION["case4"] == "x" && $_SESSION["case7"] == "x" || $_SESSION["case1"] == "o" && $_SESSION["case4"] == "o" && $_SESSION["case7"] == "o" ) {
            $this->winOk = true;
            if ( $_SESSION["case1"] == "x" && $_SESSION["case4"] == "x" && $_SESSION["case7"] == "x" ) {
                $this->winPlayer = "x";
            }
            else {
                $this->winPlayer = "o";
            }
        }
        elseif ( $_SESSION["case2"] == "x" && $_SESSION["case5"] == "x" && $_SESSION["case8"] == "x" || $_SESSION["case2"] == "o" && $_SESSION["case5"] == "o" && $_SESSION["case8"] == "o" ) {
            $this->winOk = true;
            if ( $_SESSION["case2"] == "x" && $_SESSION["case5"] == "x" && $_SESSION["case8"] == "x" ) {
                $this->winPlayer = "x";
            }
            else {
                $this->winPlayer = "o";
            }
        }
        elseif ( $_SESSION["case3"] == "x" && $_SESSION["case6"] == "x" && $_SESSION["case9"] == "x" || $_SESSION["case3"] == "o" && $_SESSION["case6"] == "o" && $_SESSION["case9"] == "o" ) {
            $this->winOk = true;
            if ( $_SESSION["case3"] == "x" && $_SESSION["case6"] == "x" && $_SESSION["case9"] == "x" ) {
                $this->winPlayer = "x";
            }
            else {
                $this->winPlayer = "o";
            }
        }
        elseif ( $_SESSION["case1"] == "x" && $_SESSION["case5"] == "x" && $_SESSION["case9"] == "x" || $_SESSION["case1"] == "o" && $_SESSION["case5"] == "o" && $_SESSION["case9"] == "o" ) {
            $this->winOk = true;
            if ( $_SESSION["case1"] == "x" && $_SESSION["case5"] == "x" && $_SESSION["case9"] == "x" ) {
                $this->winPlayer = "x";
            }
            else {
                $this->winPlayer = "o";
            }
        }
        elseif ( $_SESSION["case3"] == "x" && $_SESSION["case5"] == "x" && $_SESSION["case7"] == "x" || $_SESSION["case3"] == "o" && $_SESSION["case5"] == "o" && $_SESSION["case7"] == "o" ) {
            $this->winOk = true;
            if ( $_SESSION["case3"] == "x" && $_SESSION["case5"] == "x" && $_SESSION["case7"] == "x" ) {
                $this->winPlayer = "x";
            }
            else {
                $this->winPlayer = "o";
            }
        }
        elseif ( $_SESSION ["case1"] != "" && $_SESSION ["case2"] != "" && $_SESSION ["case3"] != "" && $_SESSION ["case4"] != "" && $_SESSION ["case5"] != "" && $_SESSION ["case6"] != "" && $_SESSION ["case7"] != "" && $_SESSION ["case8"] != "" && $_SESSION ["case9"] != "" ) {
            $this->winOk = true;
            $this->winPlayer = "draw";
        }

        return (array($this->winOk, $this->winPlayer));
    }

    public function checkWinPossible() {
        $_SESSION["case1point"] = 0;
        $_SESSION["case2point"] = 0;
        $_SESSION["case3point"] = 0;
        $_SESSION["case4point"] = 0;
        $_SESSION["case5point"] = 0;
        $_SESSION["case6point"] = 0;
        $_SESSION["case7point"] = 0;
        $_SESSION["case8point"] = 0;
        $_SESSION["case9point"] = 0;

        $_SESSION["gocheckcase"] = 0;

        $this->winpossible = false;

        if ( $_SESSION["case1"] == "o" ) {
            $_SESSION["case1point"] = 1;
        }
        if ( $_SESSION["case2"] == "o" ) {
            $_SESSION["case2point"] = 1;
        }
        if ( $_SESSION["case3"] == "o" ) {
            $_SESSION["case3point"] = 1;
        }
        if ( $_SESSION["case4"] == "o" ) {
            $_SESSION["case4point"] = 1;
        }
        if ( $_SESSION["case5"] == "o" ) {
            $_SESSION["case5point"] = 1;
        }
        if ( $_SESSION["case6"] == "o" ) {
            $_SESSION["case6point"] = 1;
        }
        if ( $_SESSION["case7"] == "o" ) {
            $_SESSION["case7point"] = 1;
        }
        if ( $_SESSION["case8"] == "o" ) {
            $_SESSION["case8point"] = 1;
        }
        if ( $_SESSION["case9"] == "o" ) {
            $_SESSION["case9point"] = 1;
        }


        if ( $_SESSION["case1point"] + $_SESSION["case2point"] + $_SESSION["case3point"] == 2 ) {
            if ( $_SESSION["case1"] != "x" && $_SESSION["case2"] != "x" && $_SESSION["case3"] != "x" ) {
                $this->winpossible = true;
                if ( $_SESSION["case1"] == "" ) {
                    $_SESSION["gocheckcase"] = 1;
                }
                if ( $_SESSION["case2"] == "" ) {
                    $_SESSION["gocheckcase"] = 2;
                }
                if ( $_SESSION["case3"] == "" ) {
                    $_SESSION["gocheckcase"] = 3;
                }
            }
        }

        if ( $_SESSION["case4point"] + $_SESSION["case5point"] + $_SESSION["case6point"] == 2 ) {
            if ( $_SESSION["case4"] != "x" && $_SESSION["case5"] != "x" && $_SESSION["case6"] != "x" ) {
                $this->winpossible = true;
                if ( $_SESSION["case4"] == "" ) {
                    $_SESSION["gocheckcase"] = 4;
                }
                if ( $_SESSION["case5"] == "" ) {
                    $_SESSION["gocheckcase"] = 5;
                }
                if ( $_SESSION["case6"] == "" ) {
                    $_SESSION["gocheckcase"] = 6;
                }
            }
        }

        if ( $_SESSION["case7point"] + $_SESSION["case8point"] + $_SESSION["case9point"] == 2 ) {
            if ( $_SESSION["case7"] != "x" && $_SESSION["case8"] != "x" && $_SESSION["case9"] != "x" ) {
                $this->winpossible = true;
                if ( $_SESSION["case7"] == "" ) {
                    $_SESSION["gocheckcase"] = 7;
                }
                if ( $_SESSION["case8"] == "" ) {
                    $_SESSION["gocheckcase"] = 8;
                }
                if ( $_SESSION["case9"] == "" ) {
                    $_SESSION["gocheckcase"] = 9;
                }
            }
        }

        if ( $_SESSION["case1point"] + $_SESSION["case4point"] + $_SESSION["case7point"] == 2 ) {
            if ( $_SESSION["case1"] != "x" && $_SESSION["case4"] != "x" && $_SESSION["case7"] != "x" ) {
                $this->winpossible = true;
                if ( $_SESSION["case1"] == "" ) {
                    $_SESSION["gocheckcase"] = 1;
                }
                if ( $_SESSION["case4"] == "" ) {
                    $_SESSION["gocheckcase"] = 4;
                }
                if ( $_SESSION["case7"] == "" ) {
                    $_SESSION["gocheckcase"] = 7;
                }
            }
        }

        if ( $_SESSION["case2point"] + $_SESSION["case5point"] + $_SESSION["case8point"] == 2 ) {
            if ( $_SESSION["case2"] != "x" && $_SESSION["case5"] != "x" && $_SESSION["case8"] != "x" ) {
                $this->winpossible = true;
                if ( $_SESSION["case2"] == "" ) {
                    $_SESSION["gocheckcase"] = 2;
                }
                if ( $_SESSION["case5"] == "" ) {
                    $_SESSION["gocheckcase"] = 5;
                }
                if ( $_SESSION["case8"] == "" ) {
                    $_SESSION["gocheckcase"] = 8;
                }
            }
        }

        if ( $_SESSION["case3point"] + $_SESSION["case6point"] + $_SESSION["case9point"] == 2 ) {
            if ( $_SESSION["case3"] != "x" && $_SESSION["case6"] != "x" && $_SESSION["case9"] != "x" ) {
                $this->winpossible = true;
                if ( $_SESSION["case3"] == "" ) {
                    $_SESSION["gocheckcase"] = 3;
                }
                if ( $_SESSION["case6"] == "" ) {
                    $_SESSION["gocheckcase"] = 6;
                }
                if ( $_SESSION["case9"] == "" ) {
                    $_SESSION["gocheckcase"] = 9;
                }
            }
        }

        if ( $_SESSION["case1point"] + $_SESSION["case5point"] + $_SESSION["case9point"] == 2 ) {
            if ( $_SESSION["case1"] != "x" && $_SESSION["case5"] != "x" && $_SESSION["case9"] != "x" ) {
                $this->winpossible = true;
                if ( $_SESSION["case1"] == "" ) {
                    $_SESSION["gocheckcase"] = 1;
                }
                if ( $_SESSION["case5"] == "" ) {
                    $_SESSION["gocheckcase"] = 5;
                }
                if ( $_SESSION["case9"] == "" ) {
                    $_SESSION["gocheckcase"] = 9;
                }
            }
        }

        if ( $_SESSION["case3point"] + $_SESSION["case5point"] + $_SESSION["case7point"] == 2 ) {
            if ( $_SESSION["case3"] != "x" && $_SESSION["case5"] != "x" && $_SESSION["case7"] != "x" ) {
                $this->winpossible = true;
                if ( $_SESSION["case3"] == "" ) {
                    $_SESSION["gocheckcase"] = 3;
                }
                if ( $_SESSION["case5"] == "" ) {
                    $_SESSION["gocheckcase"] = 5;
                }
                if ( $_SESSION["case7"] == "" ) {
                    $_SESSION["gocheckcase"] = 7;
                }
            }
        }
    }



    public function checkCounterPossible() {
        if ( $this->winpossible == false ) {
        $_SESSION["case1point"] = 0;
        $_SESSION["case2point"] = 0;
        $_SESSION["case3point"] = 0;
        $_SESSION["case4point"] = 0;
        $_SESSION["case5point"] = 0;
        $_SESSION["case6point"] = 0;
        $_SESSION["case7point"] = 0;
        $_SESSION["case8point"] = 0;
        $_SESSION["case9point"] = 0;

        $_SESSION["gocheckcase"] = 0;

        if ( $_SESSION["case1"] == "x" ) {
            $_SESSION["case1point"] = 1;
        }
        if ( $_SESSION["case2"] == "x" ) {
            $_SESSION["case2point"] = 1;
        }
        if ( $_SESSION["case3"] == "x" ) {
            $_SESSION["case3point"] = 1;
        }
        if ( $_SESSION["case4"] == "x" ) {
            $_SESSION["case4point"] = 1;
        }
        if ( $_SESSION["case5"] == "x" ) {
            $_SESSION["case5point"] = 1;
        }
        if ( $_SESSION["case6"] == "x" ) {
            $_SESSION["case6point"] = 1;
        }
        if ( $_SESSION["case7"] == "x" ) {
            $_SESSION["case7point"] = 1;
        }
        if ( $_SESSION["case8"] == "x" ) {
            $_SESSION["case8point"] = 1;
        }
        if ( $_SESSION["case9"] == "x" ) {
            $_SESSION["case9point"] = 1;
        }


        if ( $_SESSION["case1point"] + $_SESSION["case2point"] + $_SESSION["case3point"] == 2 ) {
            if ( $_SESSION["case1"] == "" ) {
                $_SESSION["gocheckcase"] = 1;
            }
            if ( $_SESSION["case2"] == "" ) {
                $_SESSION["gocheckcase"] = 2;
            }
            if ( $_SESSION["case3"] == "" ) {
                $_SESSION["gocheckcase"] = 3;
            }
        }

        if ( $_SESSION["case4point"] + $_SESSION["case5point"] + $_SESSION["case6point"] == 2 ) {
            if ( $_SESSION["case4"] == "" ) {
                $_SESSION["gocheckcase"] = 4;
            }
            if ( $_SESSION["case5"] == "" ) {
                $_SESSION["gocheckcase"] = 5;
            }
            if ( $_SESSION["case6"] == "" ) {
                $_SESSION["gocheckcase"] = 6;
            }
        }

        if ( $_SESSION["case7point"] + $_SESSION["case8point"] + $_SESSION["case9point"] == 2 ) {
            if ( $_SESSION["case7"] == "" ) {
                $_SESSION["gocheckcase"] = 7;
            }
            if ( $_SESSION["case8"] == "" ) {
                $_SESSION["gocheckcase"] = 8;
            }
            if ( $_SESSION["case9"] == "" ) {
                $_SESSION["gocheckcase"] = 9;
            }
        }

        if ( $_SESSION["case1point"] + $_SESSION["case4point"] + $_SESSION["case7point"] == 2 ) {
            if ( $_SESSION["case1"] == "" ) {
                $_SESSION["gocheckcase"] = 1;
            }
            if ( $_SESSION["case4"] == "" ) {
                $_SESSION["gocheckcase"] = 4;
            }
            if ( $_SESSION["case7"] == "" ) {
                $_SESSION["gocheckcase"] = 7;
            }
        }

        if ( $_SESSION["case2point"] + $_SESSION["case5point"] + $_SESSION["case8point"] == 2 ) {
            if ( $_SESSION["case2"] == "" ) {
                $_SESSION["gocheckcase"] = 2;
            }
            if ( $_SESSION["case5"] == "" ) {
                $_SESSION["gocheckcase"] = 5;
            }
            if ( $_SESSION["case8"] == "" ) {
                $_SESSION["gocheckcase"] = 8;
            }
        }

        if ( $_SESSION["case3point"] + $_SESSION["case6point"] + $_SESSION["case9point"] == 2 ) {
            if ( $_SESSION["case3"] == "" ) {
                $_SESSION["gocheckcase"] = 3;
            }
            if ( $_SESSION["case6"] == "" ) {
                $_SESSION["gocheckcase"] = 6;
            }
            if ( $_SESSION["case9"] == "" ) {
                $_SESSION["gocheckcase"] = 9;
            }
        }

        if ( $_SESSION["case1point"] + $_SESSION["case5point"] + $_SESSION["case9point"] == 2 ) {
            if ( $_SESSION["case1"] == "" ) {
                $_SESSION["gocheckcase"] = 1;
            }
            if ( $_SESSION["case5"] == "" ) {
                $_SESSION["gocheckcase"] = 5;
            }
            if ( $_SESSION["case9"] == "" ) {
                $_SESSION["gocheckcase"] = 9;
            }
        }

        if ( $_SESSION["case3point"] + $_SESSION["case5point"] + $_SESSION["case7point"] == 2 ) {
            if ( $_SESSION["case3"] == "" ) {
                $_SESSION["gocheckcase"] = 3;
            }
            if ( $_SESSION["case5"] == "" ) {
                $_SESSION["gocheckcase"] = 5;
            }
            if ( $_SESSION["case7"] == "" ) {
                $_SESSION["gocheckcase"] = 7;
            }
        }
        }

    }




    public function gestionTourIA() {
        if ( $_SESSION["tour"] == 2 && $this->winOk == false ) {
            if ( $_SESSION["gocheckcase"] == 1 ) {
                $_SESSION["case1"] = "o";
                $_SESSION["tour"] = 1;
            }
            elseif ( $_SESSION["gocheckcase"] == 2 ) {
                $_SESSION["case2"] = "o";
                $_SESSION["tour"] = 1;
            }
            elseif ( $_SESSION["gocheckcase"] == 3 ) {
                $_SESSION["case3"] = "o";
                $_SESSION["tour"] = 1;
            }
            elseif ( $_SESSION["gocheckcase"] == 4 ) {
                $_SESSION["case4"] = "o";
                $_SESSION["tour"] = 1;
            }
            elseif ( $_SESSION["gocheckcase"] == 5 ) {
                $_SESSION["case5"] = "o";
                $_SESSION["tour"] = 1;
            }
            elseif ( $_SESSION["gocheckcase"] == 6 ) {
                $_SESSION["case6"] = "o";
                $_SESSION["tour"] = 1;
            }
            elseif ( $_SESSION["gocheckcase"] == 7 ) {
                $_SESSION["case7"] = "o";
                $_SESSION["tour"] = 1;
            }
            elseif ( $_SESSION["gocheckcase"] == 8 ) {
                $_SESSION["case8"] = "o";
                $_SESSION["tour"] = 1;
            }
            elseif ( $_SESSION["gocheckcase"] == 9 ) {
                $_SESSION["case9"] = "o";
                $_SESSION["tour"] = 1;
            }
            elseif ( $_SESSION["gocheckcase"] == 0 ) {
                if ( $_SESSION["case5"] == "" ) {
                    $_SESSION["case5"] = "o";
                    $_SESSION["tour"] = 1;
                }
                elseif ( $_SESSION["case1"] != "" && $_SESSION["case3"] != "" && $_SESSION["case7"] != "" && $_SESSION["case9"] != "" ) {
                    $casesrestantes = array();
                    if ( $_SESSION["case2"] == "" ) {
                        array_push($casesrestantes, 2);
                    }
                    if ( $_SESSION["case4"] == "" ) {
                        array_push($casesrestantes, 4);
                    }
                    if ( $_SESSION["case6"] == "" ) {
                        array_push($casesrestantes, 6);
                    }
                    if ( $_SESSION["case8"] == "" ) {
                        array_push($casesrestantes, 8);
                    }
                    shuffle($casesrestantes);
                    $_SESSION["case$casesrestantes[0]"] = "o";
                    $_SESSION["tour"] = 1;
                }
                else {
                    $casesrestantes = array();
                    if ( $_SESSION["case1"] == "" ) {
                        array_push($casesrestantes, 1);
                    }
                    if ( $_SESSION["case3"] == "" ) {
                        array_push($casesrestantes, 3);
                    }
                    if ( $_SESSION["case7"] == "" ) {
                        array_push($casesrestantes, 7);
                    }
                    if ( $_SESSION["case9"] == "" ) {
                        array_push($casesrestantes, 9);
                    }
                    shuffle($casesrestantes);
                    $_SESSION["case$casesrestantes[0]"] = "o";
                    $_SESSION["tour"] = 1;
                }
            }
        }
    }




    public function gestionTourJoueur() {
        if ( $_SESSION["tour"] == 1 && $this->winOk == false ) {
            if ( $_SESSION["case1"] != 1 && isset( $_POST["1"]) ) {
                $_SESSION["case1"] = "x";
                $_SESSION["tour"] = 2;
                // header("Location: tictactoe.php");
            }
            if ( $_SESSION["case2"] != 1 && isset( $_POST["2"]) ) {
                $_SESSION["case2"] = "x";
                $_SESSION["tour"] = 2;
                // header("Location: tictactoe.php");
            }
            if ( $_SESSION["case3"] != 1 && isset( $_POST["3"]) ) {
                $_SESSION["case3"] = "x";
                $_SESSION["tour"] = 2;
                // header("Location: tictactoe.php");
            }
            if ( $_SESSION["case4"] != 1 && isset( $_POST["4"]) ) {
                $_SESSION["case4"] = "x";
                $_SESSION["tour"] = 2;
                header("Location: tictactoe.php");
            }
            if ( $_SESSION["case5"] != 1 && isset( $_POST["5"]) ) {
                $_SESSION["case5"] = "x";
                $_SESSION["tour"] = 2;
                header("Location: tictactoe.php");
            }
            if ( $_SESSION["case6"] != 1 && isset( $_POST["6"]) ) {
                $_SESSION["case6"] = "x";
                $_SESSION["tour"] = 2;
                header("Location: tictactoe.php");
            }
            if ( $_SESSION["case7"] != 1 && isset( $_POST["7"]) ) {
                $_SESSION["case7"] = "x";
                $_SESSION["tour"] = 2;
                header("Location: tictactoe.php");
            }
            if ( $_SESSION["case8"] != 1 && isset( $_POST["8"]) ) {
                $_SESSION["case8"] = "x";
                $_SESSION["tour"] = 2;
                header("Location: tictactoe.php");
            }
            if ( $_SESSION["case9"] != 1 && isset( $_POST["9"]) ) {
                $_SESSION["case9"] = "x";
                $_SESSION["tour"] = 2;
                header("Location: tictactoe.php");
            }
        }
    }
}

?>