<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 14.02.2018
 * Time: 15:02
 */

require 'TS7.php';
require 'Init.php';
$Person = readline_callback_read_char(IntlRuleBasedBreakIterator::Users);
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
l3 placed an outstanding request on document d3.
Waiting list for document d3 was deleted.
p1, p1 and p2 were notified to return the respective books.
v and p3 were notified that document d3 remove list"];
if ($logs.chunk_split("/n") == R::startLogging()  ){
    echo 'Test case 9, ok!';
    $result = true;
}

?>