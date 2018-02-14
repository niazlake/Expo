<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 14.02.2018
 * Time: 12:34
 */


require 'libs/rb.php';
R::setup('mysql:host=localhost; dbname=books','root');
$user = R::dispense('books');


$data = $_POST;
/*
$user = R::findOne('book', 'title = ?', array($data['books']));
*/
/*
* Returns string status information.
* Can be changed to int or bool return types.
*/
function ChekOut($url, $file)
{
    if( !cURLcheckBasicFunctions() ) return "UNAVAILABLE:  Basic Functions";
    $ch = curl_init();
    if($ch)
    {
        $fp = fopen($file, "w");
        if($fp)
        {
            if( !curl_setopt($ch, CURLOPT_URL, $url) )
            {
                fclose($fp); // to match fopen()
                curl_close($ch); // to match curl_init()
                return "FAIL: curl_setopt(CURLOPT_URL)";
            }
            if( !curl_setopt($ch, CURLOPT_FILE, $fp) ) return "FAIL: curl_setopt(CURLOPT_FILE)";
            if( !curl_setopt($ch, CURLOPT_HEADER, 0) ) return "FAIL: curl_setopt(CURLOPT_HEADER)";
            if( !curl_exec($ch) ) return "FAIL: curl_exec()";
            curl_close($ch);
            fclose($fp);
            return "SUCCESS: $file [$url]";
        }
        else return "FAIL: 4 week";
    }
    else return "FAIL: more than 4 week";
}

if (isset($data['do_login1'])) {
    echo '<div style = "color:#ff4d24;">Book is not reciev (5 week)</div><hr>';
}else{
    echo '<div style = "color:#fffa3d;">Please input</div><hr>';
}

?>

<h1>Test Case 1</h1>
<form action="TS2.php" method="POST">
    <input type="text" required placeholder="Name of book" name="patron1">
    <button type="submit" name="do_login1">Enter</button>
</form>



?>