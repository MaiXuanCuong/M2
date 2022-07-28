<?php

include ('TennisGame.php');

$tennisGame = new TennisGame();

$tennisGame->getScore('cuong', 'thang', 1, 1 );

echo $tennisGame;