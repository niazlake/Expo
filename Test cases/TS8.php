<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 14.02.2018
 * Time: 14:56
 */
require 'TS6.php';
require 'Init.php';
$Person = readline_callback_read_char(IntlRuleBasedBreakIterator::Users);
$logs = ["
admin1 created librarian l1.
admin1 created librarian l2.
admin1 created librarian l3.
l2 created 3 copies of d1.
l2 created 3 copies of d2.
l2 created 3 copies of d3.
l2 created patrons s, p1, p2, p3 and v.
l2 checked the System’s information.
p1 checked out d3.
p2 checked out d3.
s checked out d3.
v checked out d3.
p3 checked out d3.
l1 placed an outstanding request on document
request was denied."];
if ($logs.chunk_split("/n") == R::startLogging() ){
    echo 'Test case 8, ok!';
    $result = true;
}



?>