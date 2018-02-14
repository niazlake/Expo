<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 13.02.2018
 * Time: 20:53
 */
require 'libs/rb.php';
R::setup('mysql:host=localhost; dbname=books','root');


$data = $_POST;
/*
$user = R::findOne('book', 'title = ?', array($data['books']));
*/

if (!defined('T_ML_COMMENT')) {
   define('T_ML_COMMENT', T_COMMENT);
} else {
   define('T_DOC_COMMENT', T_ML_COMMENT);
}

$source = file_get_contents('TS1.php');
$tokens = token_get_all($source);

foreach ($tokens as $token) {
   if (is_string($token)) {
       // простая 1-буквенная лексема
   } else {
       // токен-массив
       list($id, $text) = $token;

       switch ($id) { 
           case T_COMMENT: 
           case T_ML_COMMENT: // мы определили это
           case T_DOC_COMMENT: // и это
               // нет действий для комментариев
               break;

           default:
               // все остальное -> выводим "как есть"
               break;
       }
   }
}


if (isset($data['do_login1'])) {
    echo '<div style = "color:#ff4d24;">Not find a copy book</div><hr>';
}


?>

<h1>Test Case 1</h1>
<form action="TS1.php" method="POST">
    <input type="text" required placeholder="Name of book" name="patron1">
    <button type="submit" name="do_login1">Enter</button>
</form>
