<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 14.02.2018
 * Time: 13:31
 */

function Check_two_patrons (&$html)
// Функция вырезает из текста $html “битые” ссылки - те, которых
// нет в файле good_links.txt.
// $good_links - массив хороших ссылок
// $html_block - массив блоков текста $html, каждый блок начинается на ссылку
// string get_link (string) - функция выделяет из блока значение ссылки
{
    $file_good_links_content = file_get_contents ('../Estemate.txt');
    $good_links = split (chr(0x0D).chr(0x0A), $file_good_links_content);
    $html_block = split (HREF_START, $html);
    $html = '';
    foreach ($html_block as $block)
        // для каждого блока проверяем наличие ссылки в массиве $good_links
    {
        $block = HREF_START.$block;
        $test_link = get_link($block);  //$test_link содержит ссылку из блока
        if ($test_link == '')
            continue;
        else
        {
            // проверим ссылку, если она верная, блок сохраняем в $html
            if (in_array($test_link, $good_links))
                $html .= $block;
        }
    }
}
echo '<div style = "color:#00ff53;">Test case 5 Done!</div><hr>';


?>