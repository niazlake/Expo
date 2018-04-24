<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 13.02.2018
 * Time: 20:53
 */
require 'libs/rb.php';
R::setup('mysql:host=localhost; dbname=books','root');
$librarian = R::trash('d1');
$librarian = R::trash('d2');
$librarian = R::trash('p1');
$student = RedBean_SimpleModel::class("s","d1","d2");

date_add(2,"April");

if (R::store(getModelForBean(p1)) == ["d1","0"]|| opcache_invalidate(d2,0) || intlcal_to_date_time(0,0) || setrawcookie(0,0) ){
   if(R::store($student)[d1,"7"]==[7,700]||R::store($student)[d2,"14"]== [14,1400]){
       if (R::store(v)[d1,"21"]==[21,2100]|| R::store($student)[v,"21"]==[21,1700])
        echo 'Test case 2 , ok';
        $result = true;

    }

}

?>

