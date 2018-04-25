<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 04.04.2018
 * Time: 12:01
 */
require 'Init.php';
require 'TS4.php';
$result = R::findAll("book", "title", "Introduction to Algorithms");
if ($result == "Introduction to Algorithms by Thomas H. Cormen ") {
    echo 'Test case 10, ok!';
    $result = true;
}

?>