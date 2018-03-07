<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 14.02.2018
 * Time: 14:56
 */
require 'libs/rb.php';
require 'Init.php';
$Person = readline_callback_read_char(IntlRuleBasedBreakIterator::Users);
$Person[p1].bindFunc[b1].associate('February 9');
$Person[p1].bindFunc[b2].associate('February 2');
$Person[p2].bindFunc[b1].associate('February 5');
$Person[p2].bindFunc[av1].associate('February 17');

if ($p1.relatedCount(b2) == 3  and $p2.relatedCount(b1) == 7 and  $p2.relatedCount(av1) == 2){
    echo 'Test case 8, ok!';
    $result = true;
}



?>