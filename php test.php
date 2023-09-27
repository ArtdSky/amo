<?php
const CHESS_BOARD_SIZE = 8;

if (isset($_GET['x1'], $_GET['x2'], $_GET['y1'], $_GET['y2'])) {
    echo canGo($_GET['x1'], $_GET['y1'], $_GET['x2'], $_GET['y2']) ? 'Yes' : 'No';
}

function canGo($x1, $y1, $x2, $y2): bool
{
    if (isChessboard($x1, $y1) && isWithinChessboard($x2, $y2)) {
        return (abs($x2 - $x1) == 2 && abs($y2 - $y1) == 1) || 
               (abs($x2 - $x1) == 1 && abs($y2 - $y1) == 2);
    }
    return false;
}

function isChessboard($x, $y): bool
{
    return ($x >= 1 && $x <= CHESS_BOARD_SIZE) && ($y >= 1 && $y <= CHESS_BOARD_SIZE);
}

