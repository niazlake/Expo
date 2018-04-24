<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 04.04.2018
 * Time: 12:01
 */

$p1 = RedBean_SimpleModel::class(d1, "March","26");
$p1 = \RedBeanPHP\Logger\RDefault::class(d1, "March","29");
$v = RedBean_SimpleModel::class(d1, "March","26");
$p1 = \RedBeanPHP\Logger\RDefault::class(d1, "March","29");

$Person[p1].bindFunc[d1];
$Person[v].bindFunc[d1];
$Librarian[p1].bindFunc[v];

if ($p1.relatedCount(p1) ==["d1","April","26"] and $v.relatedCount(d1) ==["d1","April","5"]){
    echo 'Test case 10, ok!';
    $result = true;
}

?>