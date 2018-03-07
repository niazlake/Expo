<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 14.02.2018
 * Time: 13:22
 */

require 'Init.php';

$Person = readline_callback_read_char(IntlRuleBasedBreakIterator::Users);



$chek1= false;
$chek2 = ' Name: Elvira Espindola
Address: Via del Corso, 22
Phone Number: 30003
Lib. card ID: 1100
Type: Student
(document checked-out, due date):';
if ($Person[p2] == $chek1 and $Person[p3] == $chek2 ){
    echo 'Test Case 4, ok!';
    $result = true;
}


?>