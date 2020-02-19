<?php

class Game {

    private $winpossible = false;
    private $winOk = false;
    private $winPlayer = "";

    public function checkWin($signej, $signeia) {

        if ( $_SESSION["tab"][0] == "$signej" && $_SESSION["tab"][1] == "$signej" && $_SESSION["tab"][2] == "$signej" || $_SESSION["tab"][0] == "$signeia" && $_SESSION["tab"][1] == "$signeia" && $_SESSION["tab"][2] == "$signeia" ) {
            $this->winOk = true;
            if ( $_SESSION["tab"][0] == "$signej" && $_SESSION["tab"][1] == "$signej" && $_SESSION["tab"][2] == "$signej" ) {
                $this->winPlayer = "$signej";
            }
            else {
                $this->winPlayer = "$signeia";
            }
        }
        elseif ( $_SESSION["tab"][3] == "$signej" && $_SESSION["tab"][4] == "$signej" && $_SESSION["tab"][5] == "$signej" || $_SESSION["tab"][3] == "$signeia" && $_SESSION["tab"][4] == "$signeia" && $_SESSION["tab"][5] == "$signeia" ) {
            $this->winOk = true;
            if ( $_SESSION["tab"][3] == "$signej" && $_SESSION["tab"][4] == "$signej" && $_SESSION["tab"][5] == "$signej" ) {
                $this->winPlayer = "$signej";
            }
            else {
                $this->winPlayer = "$signeia";
            }
        }
        elseif ( $_SESSION["tab"][6] == "$signej" && $_SESSION["tab"][7] == "$signej" && $_SESSION["tab"][8] == "$signej" || $_SESSION["tab"][6] == "$signeia" && $_SESSION["tab"][7] == "$signeia" && $_SESSION["tab"][8] == "$signeia" ) {
            $this->winOk = true;
            if ( $_SESSION["tab"][6] == "$signej" && $_SESSION["tab"][7] == "$signej" && $_SESSION["tab"][8] == "$signej" ) {
                $this->winPlayer = "$signej";
            }
            else {
                $this->winPlayer = "$signeia";
            }
        }
        elseif ( $_SESSION["tab"][0] == "$signej" && $_SESSION["tab"][3] == "$signej" && $_SESSION["tab"][6] == "$signej" || $_SESSION["tab"][0] == "$signeia" && $_SESSION["tab"][3] == "$signeia" && $_SESSION["tab"][6] == "$signeia" ) {
            $this->winOk = true;
            if ( $_SESSION["tab"][0] == "$signej" && $_SESSION["tab"][3] == "$signej" && $_SESSION["tab"][6] == "$signej" ) {
                $this->winPlayer = "$signej";
            }
            else {
                $this->winPlayer = "$signeia";
            }
        }
        elseif ( $_SESSION["tab"][1] == "$signej" && $_SESSION["tab"][4] == "$signej" && $_SESSION["tab"][7] == "$signej" || $_SESSION["tab"][1] == "$signeia" && $_SESSION["tab"][4] == "$signeia" && $_SESSION["tab"][7] == "$signeia" ) {
            $this->winOk = true;
            if ( $_SESSION["tab"][1] == "$signej" && $_SESSION["tab"][4] == "$signej" && $_SESSION["tab"][7] == "$signej" ) {
                $this->winPlayer = "$signej";
            }
            else {
                $this->winPlayer = "$signeia";
            }
        }
        elseif ( $_SESSION["tab"][2] == "$signej" && $_SESSION["tab"][5] == "$signej" && $_SESSION["tab"][8] == "$signej" || $_SESSION["tab"][2] == "$signeia" && $_SESSION["tab"][5] == "$signeia" && $_SESSION["tab"][8] == "$signeia" ) {
            $this->winOk = true;
            if ( $_SESSION["tab"][2] == "$signej" && $_SESSION["tab"][5] == "$signej" && $_SESSION["tab"][8] == "$signej" ) {
                $this->winPlayer = "$signej";
            }
            else {
                $this->winPlayer = "$signeia";
            }
        }
        elseif ( $_SESSION["tab"][0] == "$signej" && $_SESSION["tab"][4] == "$signej" && $_SESSION["tab"][8] == "$signej" || $_SESSION["tab"][0] == "$signeia" && $_SESSION["tab"][4] == "$signeia" && $_SESSION["tab"][8] == "$signeia" ) {
            $this->winOk = true;
            if ( $_SESSION["tab"][0] == "$signej" && $_SESSION["tab"][4] == "$signej" && $_SESSION["tab"][8] == "$signej" ) {
                $this->winPlayer = "$signej";
            }
            else {
                $this->winPlayer = "$signeia";
            }
        }
        elseif ( $_SESSION["tab"][2] == "$signej" && $_SESSION["tab"][4] == "$signej" && $_SESSION["tab"][6] == "$signej" || $_SESSION["tab"][2] == "$signeia" && $_SESSION["tab"][4] == "$signeia" && $_SESSION["tab"][6] == "$signeia" ) {
            $this->winOk = true;
            if ( $_SESSION["tab"][2] == "$signej" && $_SESSION["tab"][4] == "$signej" && $_SESSION["tab"][6] == "$signej" ) {
                $this->winPlayer = "$signej";
            }
            else {
                $this->winPlayer = "$signeia";
            }
        }
        elseif ( $_SESSION["tab"][0] != 0 && $_SESSION["tab"][1] != 0 && $_SESSION["tab"][2] != 0 && $_SESSION["tab"][3] != 0 && $_SESSION["tab"][4] != 0 && $_SESSION["tab"][5] != 0 && $_SESSION["tab"][6] != 0 && $_SESSION["tab"][7] != 0 && $_SESSION["tab"][8] != 0 ) {
            $this->winOk = true;
            $this->winPlayer = "draw";
        }

        return (array($this->winOk, $this->winPlayer));
    }

    public function checkWinPossible($signej, $signeia) {
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

        if ( $_SESSION["tab"][0] == "$signeia" ) {
            $_SESSION["case1point"] = 1;
        }
        if ( $_SESSION["tab"][1] == "$signeia" ) {
            $_SESSION["case2point"] = 1;
        }
        if ( $_SESSION["tab"][2] == "$signeia" ) {
            $_SESSION["case3point"] = 1;
        }
        if ( $_SESSION["tab"][3] == "$signeia" ) {
            $_SESSION["case4point"] = 1;
        }
        if ( $_SESSION["tab"][4] == "$signeia" ) {
            $_SESSION["case5point"] = 1;
        }
        if ( $_SESSION["tab"][5] == "$signeia" ) {
            $_SESSION["case6point"] = 1;
        }
        if ( $_SESSION["tab"][6] == "$signeia" ) {
            $_SESSION["case7point"] = 1;
        }
        if ( $_SESSION["tab"][7] == "$signeia" ) {
            $_SESSION["case8point"] = 1;
        }
        if ( $_SESSION["tab"][8] == "$signeia" ) {
            $_SESSION["case9point"] = 1;
        }


        if ( $_SESSION["case1point"] + $_SESSION["case2point"] + $_SESSION["case3point"] == 2 ) {
            if ( $_SESSION["tab"][0] != "$signej" && $_SESSION["tab"][1] != "$signej" && $_SESSION["tab"][2] != "$signej" ) {
                $this->winpossible = true;
                if ( $_SESSION["tab"][0] == 0 ) {
                    $_SESSION["gocheckcase"] = 1;
                }
                if ( $_SESSION["tab"][1] == 0 ) {
                    $_SESSION["gocheckcase"] = 2;
                }
                if ( $_SESSION["tab"][2] == 0 ) {
                    $_SESSION["gocheckcase"] = 3;
                }
            }
        }

        if ( $_SESSION["case4point"] + $_SESSION["case5point"] + $_SESSION["case6point"] == 2 ) {
            if ( $_SESSION["tab"][3] != "$signej" && $_SESSION["tab"][4] != "$signej" && $_SESSION["tab"][5] != "$signej" ) {
                $this->winpossible = true;
                if ( $_SESSION["tab"][3] == 0 ) {
                    $_SESSION["gocheckcase"] = 4;
                }
                if ( $_SESSION["tab"][4] == 0 ) {
                    $_SESSION["gocheckcase"] = 5;
                }
                if ( $_SESSION["tab"][5] == 0 ) {
                    $_SESSION["gocheckcase"] = 6;
                }
            }
        }

        if ( $_SESSION["case7point"] + $_SESSION["case8point"] + $_SESSION["case9point"] == 2 ) {
            if ( $_SESSION["tab"][6] != "$signej" && $_SESSION["tab"][7] != "$signej" && $_SESSION["tab"][8] != "$signej" ) {
                $this->winpossible = true;
                if ( $_SESSION["tab"][6] == 0 ) {
                    $_SESSION["gocheckcase"] = 7;
                }
                if ( $_SESSION["tab"][7] == 0 ) {
                    $_SESSION["gocheckcase"] = 8;
                }
                if ( $_SESSION["tab"][8] == 0 ) {
                    $_SESSION["gocheckcase"] = 9;
                }
            }
        }

        if ( $_SESSION["case1point"] + $_SESSION["case4point"] + $_SESSION["case7point"] == 2 ) {
            if ( $_SESSION["tab"][0] != "$signej" && $_SESSION["tab"][3] != "$signej" && $_SESSION["tab"][6] != "$signej" ) {
                $this->winpossible = true;
                if ( $_SESSION["tab"][0] == 0 ) {
                    $_SESSION["gocheckcase"] = 1;
                }
                if ( $_SESSION["tab"][3] == 0 ) {
                    $_SESSION["gocheckcase"] = 4;
                }
                if ( $_SESSION["tab"][6] == 0 ) {
                    $_SESSION["gocheckcase"] = 7;
                }
            }
        }

        if ( $_SESSION["case2point"] + $_SESSION["case5point"] + $_SESSION["case8point"] == 2 ) {
            if ( $_SESSION["tab"][1] != "$signej" && $_SESSION["tab"][4] != "$signej" && $_SESSION["tab"][7] != "$signej" ) {
                $this->winpossible = true;
                if ( $_SESSION["tab"][1] == 0 ) {
                    $_SESSION["gocheckcase"] = 2;
                }
                if ( $_SESSION["tab"][4] == 0 ) {
                    $_SESSION["gocheckcase"] = 5;
                }
                if ( $_SESSION["tab"][7] == 0 ) {
                    $_SESSION["gocheckcase"] = 8;
                }
            }
        }

        if ( $_SESSION["case3point"] + $_SESSION["case6point"] + $_SESSION["case9point"] == 2 ) {
            if ( $_SESSION["tab"][2] != "$signej" && $_SESSION["tab"][5] != "$signej" && $_SESSION["tab"][8] != "$signej" ) {
                $this->winpossible = true;
                if ( $_SESSION["tab"][2] == 0 ) {
                    $_SESSION["gocheckcase"] = 3;
                }
                if ( $_SESSION["tab"][5] == 0 ) {
                    $_SESSION["gocheckcase"] = 6;
                }
                if ( $_SESSION["tab"][8] == 0 ) {
                    $_SESSION["gocheckcase"] = 9;
                }
            }
        }

        if ( $_SESSION["case1point"] + $_SESSION["case5point"] + $_SESSION["case9point"] == 2 ) {
            if ( $_SESSION["tab"][0] != "$signej" && $_SESSION["tab"][4] != "$signej" && $_SESSION["tab"][8] != "$signej" ) {
                $this->winpossible = true;
                if ( $_SESSION["tab"][0] == 0 ) {
                    $_SESSION["gocheckcase"] = 1;
                }
                if ( $_SESSION["tab"][4] == 0 ) {
                    $_SESSION["gocheckcase"] = 5;
                }
                if ( $_SESSION["tab"][8] == 0 ) {
                    $_SESSION["gocheckcase"] = 9;
                }
            }
        }

        if ( $_SESSION["case3point"] + $_SESSION["case5point"] + $_SESSION["case7point"] == 2 ) {
            if ( $_SESSION["tab"][2] != "$signej" && $_SESSION["tab"][4] != "$signej" && $_SESSION["tab"][6] != "$signej" ) {
                $this->winpossible = true;
                if ( $_SESSION["tab"][2] == 0 ) {
                    $_SESSION["gocheckcase"] = 3;
                }
                if ( $_SESSION["tab"][4] == 0 ) {
                    $_SESSION["gocheckcase"] = 5;
                }
                if ( $_SESSION["tab"][6] == 0 ) {
                    $_SESSION["gocheckcase"] = 7;
                }
            }
        }
    }



    public function checkCounterPossible($signej, $signeia) {
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

            if ( $_SESSION["tab"][0] == "$signej" ) {
                $_SESSION["case1point"] = 1;
            }
            if ( $_SESSION["tab"][1] == "$signej" ) {
                $_SESSION["case2point"] = 1;
            }
            if ( $_SESSION["tab"][2] == "$signej" ) {
                $_SESSION["case3point"] = 1;
            }
            if ( $_SESSION["tab"][3] == "$signej" ) {
                $_SESSION["case4point"] = 1;
            }
            if ( $_SESSION["tab"][4] == "$signej" ) {
                $_SESSION["case5point"] = 1;
            }
            if ( $_SESSION["tab"][5] == "$signej" ) {
                $_SESSION["case6point"] = 1;
            }
            if ( $_SESSION["tab"][6] == "$signej" ) {
                $_SESSION["case7point"] = 1;
            }
            if ( $_SESSION["tab"][7] == "$signej" ) {
                $_SESSION["case8point"] = 1;
            }
            if ( $_SESSION["tab"][8] == "$signej" ) {
                $_SESSION["case9point"] = 1;
            }


            if ( $_SESSION["case1point"] + $_SESSION["case2point"] + $_SESSION["case3point"] == 2 ) {
                if ( $_SESSION["tab"][0] == 0 ) {
                    $_SESSION["gocheckcase"] = 1;
                }
                if ( $_SESSION["tab"][1] == 0 ) {
                    $_SESSION["gocheckcase"] = 2;
                }
                if ( $_SESSION["tab"][2] == 0 ) {
                    $_SESSION["gocheckcase"] = 3;
                }
            }

            if ( $_SESSION["case4point"] + $_SESSION["case5point"] + $_SESSION["case6point"] == 2 ) {
                if ( $_SESSION["tab"][3] == 0 ) {
                    $_SESSION["gocheckcase"] = 4;
                }
                if ( $_SESSION["tab"][4] == 0 ) {
                    $_SESSION["gocheckcase"] = 5;
                }
                if ( $_SESSION["tab"][5] == 0 ) {
                    $_SESSION["gocheckcase"] = 6;
                }
            }

            if ( $_SESSION["case7point"] + $_SESSION["case8point"] + $_SESSION["case9point"] == 2 ) {
                if ( $_SESSION["tab"][6] == 0 ) {
                    $_SESSION["gocheckcase"] = 7;
                }
                if ( $_SESSION["tab"][7] == 0 ) {
                    $_SESSION["gocheckcase"] = 8;
                }
                if ( $_SESSION["tab"][8] == 0 ) {
                    $_SESSION["gocheckcase"] = 9;
                }
            }

            if ( $_SESSION["case1point"] + $_SESSION["case4point"] + $_SESSION["case7point"] == 2 ) {
                if ( $_SESSION["tab"][0] == 0 ) {
                    $_SESSION["gocheckcase"] = 1;
                }
                if ( $_SESSION["tab"][3] == 0 ) {
                    $_SESSION["gocheckcase"] = 4;
                }
                if ( $_SESSION["tab"][6] == 0 ) {
                    $_SESSION["gocheckcase"] = 7;
                }
            }

            if ( $_SESSION["case2point"] + $_SESSION["case5point"] + $_SESSION["case8point"] == 2 ) {
                if ( $_SESSION["tab"][1] == 0 ) {
                    $_SESSION["gocheckcase"] = 2;
                }
                if ( $_SESSION["tab"][4] == 0 ) {
                    $_SESSION["gocheckcase"] = 5;
                }
                if ( $_SESSION["tab"][7] == 0 ) {
                    $_SESSION["gocheckcase"] = 8;
                }
            }

            if ( $_SESSION["case3point"] + $_SESSION["case6point"] + $_SESSION["case9point"] == 2 ) {
                if ( $_SESSION["tab"][2] == 0 ) {
                    $_SESSION["gocheckcase"] = 3;
                }
                if ( $_SESSION["tab"][5] == 0 ) {
                    $_SESSION["gocheckcase"] = 6;
                }
                if ( $_SESSION["tab"][8] == 0 ) {
                    $_SESSION["gocheckcase"] = 9;
                }
            }

            if ( $_SESSION["case1point"] + $_SESSION["case5point"] + $_SESSION["case9point"] == 2 ) {
                if ( $_SESSION["tab"][0] == 0 ) {
                    $_SESSION["gocheckcase"] = 1;
                }
                if ( $_SESSION["tab"][4] == 0 ) {
                    $_SESSION["gocheckcase"] = 5;
                }
                if ( $_SESSION["tab"][8] == 0 ) {
                    $_SESSION["gocheckcase"] = 9;
                }
            }

            if ( $_SESSION["case3point"] + $_SESSION["case5point"] + $_SESSION["case7point"] == 2 ) {
                if ( $_SESSION["tab"][2] == 0 ) {
                    $_SESSION["gocheckcase"] = 3;
                }
                if ( $_SESSION["tab"][4] == 0 ) {
                    $_SESSION["gocheckcase"] = 5;
                }
                if ( $_SESSION["tab"][6] == 0 ) {
                    $_SESSION["gocheckcase"] = 7;
                }
            }

            // if ( $_SESSION["case1point"] + $_SESSION["case5point"] + $_SESSION["case9point"] == 2 && $_SESSION["tourall"] <= 5 ) {
            //     if ( $_SESSION["tab"][3] == 0 ) {
            //         $_SESSION["gocheckcase"] = 4;
            //     }
            //     if ( $_SESSION["tab"][5] == 0 ) {
            //         $_SESSION["gocheckcase"] = 6;
            //     }
            // }

            // if ( $_SESSION["case3point"] + $_SESSION["case5point"] + $_SESSION["case7point"] == 2 && $_SESSION["tourall"] <= 5 ) {
            //     if ( $_SESSION["tab"][3] == 0 ) {
            //         $_SESSION["gocheckcase"] = 4;
            //     }
            //     if ( $_SESSION["tab"][5] == 0 ) {
            //         $_SESSION["gocheckcase"] = 6;
            //     }
            // }
            
            if ( $_SESSION["case7point"] + $_SESSION["case2point"] == 2 && $_SESSION["tourall"] <= 5 ) {
                if ( $_SESSION["tab"][0] == 0 ) {
                    $_SESSION["gocheckcase"] = 1;
                }
            }

            if ( $_SESSION["case7point"] + $_SESSION["case6point"] == 2 && $_SESSION["tourall"] <= 5 ) {
                if ( $_SESSION["tab"][8] == 0 ) {
                    $_SESSION["gocheckcase"] = 9;
                }
            }

            if ( $_SESSION["case9point"] + $_SESSION["case4point"] == 2 && $_SESSION["tourall"] <= 5 ) {
                if ( $_SESSION["tab"][6] == 0 ) {
                    $_SESSION["gocheckcase"] = 7;
                }
            }

            if ( $_SESSION["case9point"] + $_SESSION["case2point"] == 2 && $_SESSION["tourall"] <= 5 ) {
                if ( $_SESSION["tab"][2] == 0 ) {
                    $_SESSION["gocheckcase"] = 3;
                }
            }

            if ( $_SESSION["case1point"] + $_SESSION["case6point"] == 2 && $_SESSION["tourall"] <= 5 ) {
                if ( $_SESSION["tab"][2] == 0 ) {
                    $_SESSION["gocheckcase"] = 3;
                }
            }

            if ( $_SESSION["case1point"] + $_SESSION["case8point"] == 2 && $_SESSION["tourall"] <= 5 ) {
                if ( $_SESSION["tab"][6] == 0 ) {
                    $_SESSION["gocheckcase"] = 7;
                }
            }

            if ( $_SESSION["case3point"] + $_SESSION["case4point"] == 2 && $_SESSION["tourall"] <= 5 ) {
                if ( $_SESSION["tab"][0] == 0 ) {
                    $_SESSION["gocheckcase"] = 1;
                }
            }

            if ( $_SESSION["case3point"] + $_SESSION["case8point"] == 2 && $_SESSION["tourall"] <= 5 ) {
                if ( $_SESSION["tab"][8] == 0 ) {
                    $_SESSION["gocheckcase"] = 9;
                }
            }

            if ( $_SESSION["case2point"] + $_SESSION["case6point"] == 2 && $_SESSION["tourall"] <= 5 ) {
                if ( $_SESSION["tab"][2] == 0 ) {
                    $_SESSION["gocheckcase"] = 3;
                }
            }

            if ( $_SESSION["case2point"] + $_SESSION["case4point"] == 2 && $_SESSION["tourall"] <= 5 ) {
                if ( $_SESSION["tab"][0] == 0 ) {
                    $_SESSION["gocheckcase"] = 1;
                }
            }

            if ( $_SESSION["case8point"] + $_SESSION["case4point"] == 2 && $_SESSION["tourall"] <= 5 ) {
                if ( $_SESSION["tab"][6] == 0 ) {
                    $_SESSION["gocheckcase"] = 7;
                }
            }

            if ( $_SESSION["case8point"] + $_SESSION["case6point"] == 2 && $_SESSION["tourall"] <= 5 ) {
                if ( $_SESSION["tab"][8] == 0 ) {
                    $_SESSION["gocheckcase"] = 9;
                }
            }

            if ( $_SESSION["case1point"] + $_SESSION["case2point"] + $_SESSION["case3point"] + $_SESSION["case4point"] + $_SESSION["case5point"] + $_SESSION["case6point"] + $_SESSION["case7point"] + $_SESSION["case8point"] + $_SESSION["case9point"] == 1 && $_SESSION["tourall"] <= 5 ) {
                if ( $_SESSION["case1point"] == 1 ) {
                    if ( $_SESSION["tab"][8] == 0 ) {
                        $_SESSION["gocheckcase"] = 9;
                    }
                }
                if ( $_SESSION["case3point"] == 1 ) {
                    if ( $_SESSION["tab"][6] == 0 ) {
                        $_SESSION["gocheckcase"] = 7;
                    }
                }
                if ( $_SESSION["case7point"] == 1 ) {
                    if ( $_SESSION["tab"][2] == 0 ) {
                        $_SESSION["gocheckcase"] = 3;
                    }
                }
                if ( $_SESSION["case9point"] == 1 ) {
                    if ( $_SESSION["tab"][0] == 0 ) {
                        $_SESSION["gocheckcase"] = 1;
                    }
                }
            }

        }

    }




    public function ia($board, $signe) {
        if ( $_SESSION["tour"] == 2 && $this->winOk == false ) {
            if ( $_SESSION["gocheckcase"] == 1 ) {
                return 0;
                $_SESSION["tour"] = 1;
            }
            elseif ( $_SESSION["gocheckcase"] == 2 ) {
                return 1;
                $_SESSION["tour"] = 1;
            }
            elseif ( $_SESSION["gocheckcase"] == 3 ) {
                return 2;
                $_SESSION["tour"] = 1;
            }
            elseif ( $_SESSION["gocheckcase"] == 4 ) {
                return 3;
                $_SESSION["tour"] = 1;
            }
            elseif ( $_SESSION["gocheckcase"] == 5 ) {
                return 4;
                $_SESSION["tour"] = 1;
            }
            elseif ( $_SESSION["gocheckcase"] == 6 ) {
                return 5;
                $_SESSION["tour"] = 1;
            }
            elseif ( $_SESSION["gocheckcase"] == 7 ) {
                return 6;
                $_SESSION["tour"] = 1;
            }
            elseif ( $_SESSION["gocheckcase"] == 8 ) {
                return 7;
                $_SESSION["tour"] = 1;
            }
            elseif ( $_SESSION["gocheckcase"] == 9 ) {
                return 8;
                $_SESSION["tour"] = 1;
            }
            elseif ( $_SESSION["gocheckcase"] == 0 ) {
                if ( $board[4] == 0 ) {
                    return 4;
                    $_SESSION["tour"] = 1;
                }
                elseif ( $board[0] != 0 && $board[2] != 0 && $board[6] != 0 && $board[8] != 0 ) {
                    $casesrestantes = array();
                    if ( $board[1] == 0 ) {
                        array_push($casesrestantes, 1);
                    }
                    if ( $board[3] == 0 ) {
                        array_push($casesrestantes, 3);
                    }
                    if ( $board[5] == 0 ) {
                        array_push($casesrestantes, 5);
                    }
                    if ( $board[7] == 0 ) {
                        array_push($casesrestantes, 7);
                    }
                    shuffle($casesrestantes);
                    return $casesrestantes[0];
                    $_SESSION["tour"] = 1;
                }
                else {
                    $casesrestantes = array();
                    if ( $board[0] == 0 ) {
                        array_push($casesrestantes, 0);
                    }
                    if ( $board[2] == 0 ) {
                        array_push($casesrestantes, 2);
                    }
                    if ( $board[6] == 0 ) {
                        array_push($casesrestantes, 6);
                    }
                    if ( $board[8] == 0 ) {
                        array_push($casesrestantes, 8);
                    }
                    shuffle($casesrestantes);
                    return $casesrestantes[0];
                    $_SESSION["tour"] = 1;
                }
            }
        }
    }




    public function gestionTourJoueur($signej) {
        if ( $_SESSION["tour"] == 1 && $this->winOk == false ) {
            if ( $_SESSION["tab"][0] == 0 && isset( $_POST["1"]) ) {
                echo "Ok";
                $_SESSION["tab"][0] = $signej;
                $_SESSION["tour"] = 2;
                echo $_SESSION["tab"][0];
                header("Location: tictactoe.php");
            }
            if ( $_SESSION["tab"][1] == 0 && isset( $_POST["2"]) ) {
                $_SESSION["tab"][1] = $signej;
                $_SESSION["tour"] = 2;
                header("Location: tictactoe.php");
            }
            if ( $_SESSION["tab"][2] == 0 && isset( $_POST["3"]) ) {
                $_SESSION["tab"][2] = $signej;
                $_SESSION["tour"] = 2;
                header("Location: tictactoe.php");
            }
            if ( $_SESSION["tab"][3] == 0 && isset( $_POST["4"]) ) {
                $_SESSION["tab"][3] = $signej;
                $_SESSION["tour"] = 2;
                header("Location: tictactoe.php");
            }
            if ( $_SESSION["tab"][4] == 0 && isset( $_POST["5"]) ) {
                $_SESSION["tab"][4] = $signej;
                $_SESSION["tour"] = 2;
                header("Location: tictactoe.php");
            }
            if ( $_SESSION["tab"][5] == 0 && isset( $_POST["6"]) ) {
                $_SESSION["tab"][5] = $signej;
                $_SESSION["tour"] = 2;
                header("Location: tictactoe.php");
            }
            if ( $_SESSION["tab"][6] == 0 && isset( $_POST["7"]) ) {
                $_SESSION["tab"][6] = $signej;
                $_SESSION["tour"] = 2;
                header("Location: tictactoe.php");
            }
            if ( $_SESSION["tab"][7] == 0 && isset( $_POST["8"]) ) {
                $_SESSION["tab"][7] = $signej;
                $_SESSION["tour"] = 2;
                header("Location: tictactoe.php");
            }
            if ( $_SESSION["tab"][8] == 0 && isset( $_POST["9"]) ) {
                $_SESSION["tab"][8] = $signej;
                $_SESSION["tour"] = 2;
                header("Location: tictactoe.php");
            }
        }
    }

        public function gestionTourJoueur1($signej1) {
        if ( $_SESSION["tour"] == 1 && $this->winOk == false ) {
            if ( $_SESSION["tab"][0] == 0 && isset( $_POST["1"]) ) {
                echo "Ok";
                $_SESSION["tab"][0] = $signej1;
                $_SESSION["tour"] = 2;
                echo $_SESSION["tab"][0];
                header("Location: pvp.php");
            }
            if ( $_SESSION["tab"][1] == 0 && isset( $_POST["2"]) ) {
                $_SESSION["tab"][1] = $signej1;
                $_SESSION["tour"] = 2;
                header("Location: pvp.php");
            }
            if ( $_SESSION["tab"][2] == 0 && isset( $_POST["3"]) ) {
                $_SESSION["tab"][2] = $signej1;
                $_SESSION["tour"] = 2;
                header("Location: pvp.php");
            }
            if ( $_SESSION["tab"][3] == 0 && isset( $_POST["4"]) ) {
                $_SESSION["tab"][3] = $signej1;
                $_SESSION["tour"] = 2;
                header("Location: pvp.php");
            }
            if ( $_SESSION["tab"][4] == 0 && isset( $_POST["5"]) ) {
                $_SESSION["tab"][4] = $signej1;
                $_SESSION["tour"] = 2;
                header("Location: pvp.php");
            }
            if ( $_SESSION["tab"][5] == 0 && isset( $_POST["6"]) ) {
                $_SESSION["tab"][5] = $signej1;
                $_SESSION["tour"] = 2;
                header("Location: pvp.php");
            }
            if ( $_SESSION["tab"][6] == 0 && isset( $_POST["7"]) ) {
                $_SESSION["tab"][6] = $signej1;
                $_SESSION["tour"] = 2;
                header("Location: pvp.php");
            }
            if ( $_SESSION["tab"][7] == 0 && isset( $_POST["8"]) ) {
                $_SESSION["tab"][7] = $signej1;
                $_SESSION["tour"] = 2;
                header("Location: pvp.php");
            }
            if ( $_SESSION["tab"][8] == 0 && isset( $_POST["9"]) ) {
                $_SESSION["tab"][8] = $signej1;
                $_SESSION["tour"] = 2;
                header("Location: pvp.php");
            }
        }
    }


public function gestionTourJoueur2($signej2) {
        if ( $_SESSION["tour"] == 1 && $this->winOk == false ) {
            if ( $_SESSION["tab"][0] == 0 && isset( $_POST["1"]) ) {
                echo "Ok";
                $_SESSION["tab"][0] = $signej2;
                $_SESSION["tour"] = 2;
                echo $_SESSION["tab"][0];
                header("Location: pvp.php");
            }
            if ( $_SESSION["tab"][1] == 0 && isset( $_POST["2"]) ) {
                $_SESSION["tab"][1] = $signej2;
                $_SESSION["tour"] = 2;
                header("Location: pvp.php");
            }
            if ( $_SESSION["tab"][2] == 0 && isset( $_POST["3"]) ) {
                $_SESSION["tab"][2] = $signej2;
                $_SESSION["tour"] = 2;
                header("Location: pvp.php");
            }
            if ( $_SESSION["tab"][3] == 0 && isset( $_POST["4"]) ) {
                $_SESSION["tab"][3] = $signej2;
                $_SESSION["tour"] = 2;
                header("Location: pvp.php");
            }
            if ( $_SESSION["tab"][4] == 0 && isset( $_POST["5"]) ) {
                $_SESSION["tab"][4] = $signej2;
                $_SESSION["tour"] = 2;
                header("Location: pvp.php");
            }
            if ( $_SESSION["tab"][5] == 0 && isset( $_POST["6"]) ) {
                $_SESSION["tab"][5] = $signej2;
                $_SESSION["tour"] = 2;
                header("Location: pvp.php");
            }
            if ( $_SESSION["tab"][6] == 0 && isset( $_POST["7"]) ) {
                $_SESSION["tab"][6] = $signej2;
                $_SESSION["tour"] = 2;
                header("Location: pvp.php");
            }
            if ( $_SESSION["tab"][7] == 0 && isset( $_POST["8"]) ) {
                $_SESSION["tab"][7] = $signej2;
                $_SESSION["tour"] = 2;
                header("Location: pvp.php");
            }
            if ( $_SESSION["tab"][8] == 0 && isset( $_POST["9"]) ) {
                $_SESSION["tab"][8] = $signej2;
                $_SESSION["tour"] = 2;
                header("Location: pvp.php");
            }
        }
    }

}

?>
