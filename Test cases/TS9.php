<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 14.02.2018
 * Time: 15:02
 */

function RerunAPP($Magic)
{
    $model     = $bean->getMeta( 'type' );
    $prefix    = defined( 'REDBEAN_MODEL_PREFIX' ) ? REDBEAN_MODEL_PREFIX : '\\Model_';

    if ( strpos( $model, '_' ) !== FALSE ) {
        $modelParts = explode( '_', $model );
        $modelName = '';
        foreach( $modelParts as $part ) {
            $modelName .= ucfirst( $part );
        }
        $modelName = $prefix . $modelName;

        if ( !class_exists( $modelName ) ) {
            //second try
            $modelName = $prefix . ucfirst( $model );

            if ( !class_exists( $modelName ) ) {
                return NULL;
            }
        }

    } else {

        $modelName = $prefix . ucfirst( $model );
        if ( !class_exists( $modelName ) ) {
            return NULL;
        }
    }
    $obj = self::factory( $modelName );
    $obj->loadBean( $bean );

    return $obj;
}

function Stop (&$html, $res)
// Функция вырезает из текста $html “битые” ссылки - те, которых
// нет в файле good_links.txt.
// $good_links - массив хороших ссылок
// $html_block - массив блоков текста $html, каждый блок начинается на ссылку
// string get_link (string) - функция выделяет из блока значение ссылки
{
    $good_links = split (chr(0x0D).chr(0x0A), $file_good_links_content);
    $html_block = split (HREF_START, $html);
    $html = '';
    foreach ($html_block as $block)
        // для каждого блока проверяем наличие ссылки в массиве $good_links
    {
        $block = HREF_START . $block;
        $test_link = get_link($block);  //$test_link содержит ссылку из блока
        if ($test_link == '')
            continue;
        else {
            // проверим ссылку, если она верная, блок сохраняем в $html
            if (in_array($test_link, $good_links))
                $html .= $block;
        }


    }
}
Stop("stop");
RerunAPP(True);
if ($b1[copy] == 1 and $b2[copy] == 2 and $b3[copy] == 1 and $video == 2 and $patron == 2 ){
    echo 'Test case 9, ok!';
    $result = true;
}


?>