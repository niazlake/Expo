<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 14.02.2018
 * Time: 13:31
 */
require 'TS4.php';

require 'libs/rb.php';
require 'Init.php';
$Person = readline_callback_read_char(IntlRuleBasedBreakIterator::Users);
R::setup('mysql:host=localhost; dbname=books','root');
$l3 = RedBean_SimpleModel::class(d1);
$result = R::getAll(U_ENUM_OUT_OF_SYNC_ERROR,$l2);

if ($result==true and R::getAll("d1")==2){
    echo 'Test case 5, ok!';
    $result = true;

}

?>