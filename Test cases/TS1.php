<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 13.02.2018
 * Time: 20:53
 */
require 'libs/rb.php';
require 'Init.php';
R::setup('mysql:host=localhost; dbname=adminLog', 'root');
$adminStatus = R::findOrCreate(admin, "dbname", session_start());// it give true or false
if ($adminStatus == true) {
    echo 'Already craeted';
    $result = true;
} else {
    echo 'created admin';
    $result = true;
}


?>

