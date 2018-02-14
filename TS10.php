<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 14.02.2018
 * Time: 15:10
 */

function Read($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    // откуда пришли на эту страницу
    curl_setopt($ch, CURLOPT_REFERER, $url);
    //запрещаем делать запрос с помощью POST и соответственно разрешаем с помощью GET
    curl_setopt($ch, CURLOPT_POST, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    //отсылаем серверу COOKIE полученные от него при авторизации
    curl_setopt($ch, CURLOPT_COOKIEFILE, $_SERVER['DOCUMENT_ROOT'].'/text.txt');
    curl_setopt($ch, CURLOPT_USERAGENT, "webit");

    $result = curl_exec($ch);

    curl_close($ch);

    return $result;
}

function add_currency($id, $rate = 'CBRF', $plus = 0)
{
$rate = strtoupper($rate);
        $plus = str_replace(',', '.', $plus);
        if ($rate=='CBRF' && $plus>0)
            $this->currencies[] = array('id'=>$this->prepare_field(strtoupper($id)), 'rate'=>'CBRF', 'plus'=>(float)$plus);
        else
        {
            $rate = str_replace(',', '.', $rate);
            $this->currencies[] = array('id'=>$this->prepare_field(strtoupper($id)), 'rate'=>(float)$rate);
        }
        return true;
    }

    # добавление категории если их нету
    function add_category($name, $id, $parent_id = -1)
    {
        if ((int)$id<1||trim($name)=='') return false;
        if ((int)$parent_id>0)
            $this->categories[] = array('id'=>(int)$id, 'parentId'=>(int)$parent_id, 'name'=>$this->prepare_field($name));
        else
            $this->categories[] = array('id'=>(int)$id, 'name'=>$this->prepare_field($name));
        return true;
    }

echo '<div style = "color:#00ff53;">Test case 10 Done!</div><hr>';
?>