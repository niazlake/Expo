<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 25.04.2018
 * Time: 16:06
 */

require 'Init.php';
require 'TS4.php';
$result = R::findAll("book", "title", " Algorithms " and " Programming");
if ($result == []) {
    echo 'Test case 13, ok!';
    $result = true;
}
?>