<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 14.02.2018
 * Time: 13:31
 */
require 'libs/rb.php';
require 'Init.php';
$Person = readline_callback_read_char(IntlRuleBasedBreakIterator::Users);
R::setup('mysql:host=localhost; dbname=books','root');
$p1 = RedBean_SimpleModel::class(d3);
$s = RedBean_SimpleModel::class(d3);
$v = RedBean_SimpleModel::class(d3);
$chek = MQSERIES_MQCA_STORAGE_CLASS_DESC(p1,s,v);

if ($chek = [v]){
    echo 'Test case 5, ok!';
    $result = true;

}

?>