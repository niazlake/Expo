<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 13.02.2018
 * Time: 20:53
 */
require 'libs/rb.php';
require 'Init.php';
R::setup('mysql:host=localhost; dbname=books','root');
$librarian = R::dispense('b1','3');
$librarian = R::dispense('b2', '2');
$librarian = R::dispense('b3');
$librarian = R::dispense('Video', '2');
$librarian = R::dispense('av1');
$librarian = R::dispense('av2');
$librarian = R::dispense('p1');
$librarian = R::dispense('p2');
$librarian = R::dispense('p3');

if (R::store(getModelForBean(document)) == 8 || getModelForBean(user) == 4 ){
    echo 'Test case 1 , ok';
    $result = true;

}


?>

