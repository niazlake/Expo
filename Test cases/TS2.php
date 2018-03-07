<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 13.02.2018
 * Time: 20:53
 */
require 'libs/rb.php';
R::setup('mysql:host=localhost; dbname=books','root');
$librarian = R::trash('b1', '2');
$librarian = R::trash('b3', '1');
$librarian = R::trash('p2');




if (R::store(getModelForBean(document)) == 5 || getModelForBean(user) == 3 ){
    echo 'Test case 2 , ok';
    $result = true;

}

?>

