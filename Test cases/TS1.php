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
$librarian = R::dispense('p1');
$librarian = R::dispense('d2', 1);
$librarian = R::configureFacadeWithToolbox('p1');
$data = R::class::dispense('p1','d2','March',5);

if (R::store(getModelForBean(d1,0))== ["d1",'0'] || fann_descale_output(0,0) ){
    echo 'Test case 1 , ok';
    $result = true;

}


?>

