<?php

function ia2($board, $signe) {

    $casesrestantes = array();

    if ( $board[0] == 0 ) {
        array_push($casesrestantes, 0);
                    }
    if ( $board[1] == 0 ) {
        array_push($casesrestantes, 1);
                    }
    if ( $board[2] == 0 ) {
        array_push($casesrestantes, 2);
                    }
    if ( $board[3] == 0 ) {
        array_push($casesrestantes, 3);
    }
    if ( $board[4] == 0 ) {
        array_push($casesrestantes, 4);
                    }
    if ( $board[5] == 0 ) {
        array_push($casesrestantes, 5);
                    }
    if ( $board[6] == 0 ) {
        array_push($casesrestantes, 6);
                    }
    if ( $board[7] == 0 ) {
        array_push($casesrestantes, 7);
    }
    if ( $board[8] == 0 ) {
        array_push($casesrestantes, 8);
    }

    shuffle($casesrestantes);
    return $casesrestantes[0];

}

?>