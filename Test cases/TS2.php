<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 13.02.2018
 * Time: 20:53
 */
require 'libs/rb.php';
require 'Init.php';
R::setup('mysql:host=localhost; dbname=books', 'root');

R::store("Librarian", "1",$l1);
R::store("Librarian", "2",$l2);
R::store("Librarian", "3",$l3);

if (len(R::findAll("Librarian"))==3){
    echo 'Test case 3 , OK';
}

?>

