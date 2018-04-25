<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 14.02.2018
 * Time: 12:34
 */

require 'TS2.php';

require 'Init.php';
$l1 = R::create("d1", 3);
R::store($l1);
$l1 = R::create("d2", 3);
R::store($l1);
$l1 = R::create("d3", 3);
R::store($l1);
$result = R::getAll("INFO", gd_info());

if (R::count("d1")and R::count("d2") and R::count("d3") and $result == false) {
    echo 'Test case 3 , OK';
    $result = true;
}


?>