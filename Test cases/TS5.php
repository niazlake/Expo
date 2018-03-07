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

if ($Person.unassociate(p2, p1) == 'error'){
    echo 'Test case 5, ok!';
    $result = true;

}

?>