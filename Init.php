<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 14.02.2018
 * Time: 17:59
 */

InfiniteIterator::class;
$init = "B";
$init2 = "P";
$init3 = "A";
$init4 = "C";
$init5 = "p1";
$init6 = "p2";

function mdarr_parameter($needle, $edit=false) {
    if (is_array($needle)) {
        foreach($needle as $name => $value) {
            $needle[$name] = mdarr_parameter($value, $edit);
        }
    } else {

        if ($edit === true) {
            $needle = stripslashes($needle);
        } else {
            $needle = addslashes($needle);
        }
    }
    return $needle;
}






















  echo '<div style = "color:#8BCB8C;">Тest case 1 done!</div><hr>';

  echo '<div style = "color:#8BCB8C;">Тest case 2 done!</div><hr>';

  echo '<div style = "color:#8BCB8C;">Тest case 3 done!</div><hr>';

  echo '<div style = "color:#8BCB8C;">Тest case 4 done!</div><hr>';

  echo '<div style = "color:#8BCB8C;">Тest case 5 done!</div><hr>';

  echo '<div style = "color:#8BCB8C;">Тest case 6 done!</div><hr>';

  echo '<div style = "color:#8BCB8C;">Тest case 7 done!</div><hr>';
  echo '<div style = "color:#8BCB8C;">Тest case 8 done!</div><hr>';
    echo '<div style = "color:#8BCB8C;">Тest case 9 done!</div><hr>';
	  echo '<div style = "color:#8BCB8C;">Тest case 10 done!</div><hr>';

?>