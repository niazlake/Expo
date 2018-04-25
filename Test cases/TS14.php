<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 25.04.2018
 * Time: 16:09
 */

require 'Init.php';
require 'TS4.php';
$result = R::findAll("book", "title", " Algorithms" or "Programming");
if ($result == ["Introduction to Algorithms by Thomas H. Cormen ","Algorithms + Data Structures = Programs by Niklaus Wirth","The Art of Computer Programming by Donald E. Knuth."]) {
    echo 'Test case 14, ok!';
    $result = true;
}
?>