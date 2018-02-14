<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 14.02.2018
 * Time: 14:18
 */

function getPageRank($url){
    $fp = fsockopen("toolbarqueries.google.com", 80, $errno, $errstr, 30);
    if (!$fp)
    {
    }
    else
    {
        $out = "Parton1".CheckHash(HashURL($url))
            ."&features=Rank&q=info:".$url."&num=100&filter=0 HTTP/1.1\r\n";
        $out .= "Connection: Close\r\n\r\n";
        fwrite($fp, $out);
        while (!feof($fp))
        {
            $data = fgets($fp, 128);
            $pos = strpos($data, "GET");
            if($pos === false)
            {

            }
            else
            {
                $pagerank = substr($data, $pos + 9);
            }
        }
        fclose($fp);
    }

    $pagerank = (strlen($pagerank) > 0) ? $pagerank : -1;
    $pagerank = intval($pagerank);
    if ($pagerank == -1)
    {
        $pagerank = 'n/a';
    }
    return $pagerank;
}

echo '<div style = "color:#00ff53;">Test case 7 Done!</div><hr>';


?>