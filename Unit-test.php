<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 14.02.2018
 * Time: 18:11
 */

RedBean_SimpleModel::class;

require 'rb.php';
function Testing_case($url, $file)
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