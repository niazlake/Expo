<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
* Date: 23.01.2018
* Time: 16:22
*/
require 'libs/rb.php';
R::setup('mysql:host=127.0.0.1; dbname=Accounts','root', '');
if( !R::testConnections() ){
    exit('Нету подключения');
}
session_start();