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

function mdarr_parameter($needle, $job=false) {
    if (is_array($needle)) {
        foreach($needle as $name => $value) {
            $needle[$name] = mdarr_parameter($value, $job);
        }
    } else {
        // Now you do anything you want...
        if ($job === true) {
            $needle = stripslashes($needle);
        } else {
            $needle = addslashes($needle);
        }
    }
    return $needle;
}

