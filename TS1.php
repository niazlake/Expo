<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 13.02.2018
 * Time: 20:53
 */
require "Init.php";
require 'libs/rb.php';
R::setup('mysql:host=localhost; dbname=books','root');


$data = $_POST;
/*
$user = R::findOne('book', 'title = ?', array($data['books']));
*/
$First_main = "FirstUser";
$Herer_now = "SecondUser";
if ($First_main )
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

    echo '<div style = "color:#ff4d24;">Not find a copy book</div><hr>';



?>