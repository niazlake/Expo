<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 14.02.2018
 * Time: 13:22
 */

require 'Init.php';

$Person = readline_callback_read_char(IntlRuleBasedBreakIterator::Users);


$librarian = \RedBeanPHP\Logger\RDefault::class(d2);
$p1 = RedBean_SimpleModel::class(d1);
$s = RedBean_SimpleModel::class(d2);
$v = RedBean_SimpleModel::class(d2);
$chek = MQSERIES_MQCA_STORAGE_CLASS_DESC(p1,s,v);

if ($p1 == ["d1","April","30"] and $s == ["d2","April","2"] and $v == ["d2","April","2"]  ){
    echo 'Test Case 4, ok!';
    $result = true;
}


?>