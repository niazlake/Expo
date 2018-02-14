<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 13.02.2018
 * Time: 20:53
 */
require 'libs/rb.php';
R::setup('mysql:host=localhost; dbname=books','root');
$user = R::dispense('books');


$data = $_POST;
/*
$user = R::findOne('book', 'title = ?', array($data['books']));
*/

if (!defined('T_ML_COMMENT')) {
    define('T_ML_COMMENT', T_COMMENT);
} else {
    define('T_DOC_COMMENT', T_ML_COMMENT);
}

// create curl resource
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "TS2.php");

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
$output = curl_exec($ch);

// close curl resource to free up system resources
curl_close($ch);



if (isset($data['do_login1'])) {
    echo '<div style = "color:#ff4d24;">Not find a book</div><hr>';
}else{
    echo '<div style = "color:#fffa3d;">Search</div><hr>';
}

?>

<h1>Test Case 1</h1>
<form action="TS2.php" method="POST">
    <input type="text" required placeholder="Name of book" name="patron1">
    <button type="submit" name="do_login1">Enter</button>
</form>
