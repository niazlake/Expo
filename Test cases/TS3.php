<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 14.02.2018
 * Time: 12:34
 */


require 'Init.php';
$Person = readline_callback_read_char(IntlRuleBasedBreakIterator::Users);

$p1 = RedBean_SimpleModel::class(p1,d1);
$s =  RedBean_SimpleModel::class(s,d2);
$v =  RedBean_SimpleModel::class(v,d2);
$librarioan = R::configureFacadeWithToolbox(p1,s,v);
if ($p1 == ["d1","April","30"] || s == ["d2","April","16"]|| $v== ["d2","April","9"] ) {
    echo 'Test case 3 , OK';
    $result = true;

}


?>