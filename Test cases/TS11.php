<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 25.04.2018
 * Time: 15:58
 */
require 'Init.php';
require 'TS4.php';
$result = R::findAll("book", "title", " Algorithms");
if ($result == ["Introduction to Algorithms by Thomas H. Cormen ","Algorithms + Data Structures = Programs by Niklaus Wirth"]) {
    echo 'Test case 11, ok!';
    $result = true;
}

?>