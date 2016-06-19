<?php
/**
 * Created by PhpStorm.
 * User: Tanita
 * Date: 15-Jun-16
 * Time: 22:49
 */
include_once 'src/GameMatrix.php';

$rows = 5;
$columns = 5;
$numberOfObjects = 3;

echo "Hello world";
echo "\n \t rows = $rows";
echo "\n \t columns = $columns";
echo "\n \t no of obj = $numberOfObjects";

$game = new GameMatrix($rows, $columns, $numberOfObjects);
$game->displayMatrix();