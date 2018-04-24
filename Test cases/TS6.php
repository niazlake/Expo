<?php

require 'Init.php';
$Person = readline_callback_read_char(IntlRuleBasedBreakIterator::Users);
$p1 = RedBean_SimpleModel::class(d3);
$p2 = RedBean_SimpleModel::class(d3);
$s = RedBean_SimpleModel::class(d3);
$v = RedBean_SimpleModel::class(d3);
$p3 = RedBean_SimpleModel::class(d3);
$chek = MQSERIES_MQCA_STORAGE_CLASS_DESC(p1,s,v);

if ($chek = [s,v,p3]){
    echo 'Test case 6, ok!';
    $result = true;

}

    ?>