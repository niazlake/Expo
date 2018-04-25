<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 14.02.2018
 * Time: 13:22
 */

require 'Init.php';
require 'libs/rb.php';
require 'TS2.php';

$l2 = R::create("d1", 3);
R::store($l2);
$l2 = R::create("d2", 3);
R::store($l2);
$l2 = R::create("d3", 3);
R::store($l2);
$l2 = R::usePartialBeans("s",1);
R::store($l2);
$l2 = R::usePartialBeans("p1", 1);
R::store($l2);
$l2 = R::usePartialBeans("p2", 1);
R::store($l2);
$l2 = R::usePartialBeans("p3", 1);
R::store($l2);
$l2 = R::usePartialBeans("v", 1);
R::store($l2);
$result = R::getAll(U_ENUM_OUT_OF_SYNC_ERROR,$l2);

if($result == true and accelerator_set_status($l2)==true) {
    echo 'Test Case 4, ok!';
    $result = true;
}


?>