<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 14.02.2018
 * Time: 14:07
 */



function template($__fname, $vars) {
    // Перехватываем выходной поток.
    ob_start();
    // Запускаем файл как программу на PHP.
    extract($vars, EXTR_OVERWRITE);
    include($__fname);
    // Получаем перехваченный текст.
    $text = ob_get_contents();
    ob_end_clean();
    return $text;
}

function mailx_manual($mail, &$reason=false) {
    $reason = [];
    // Выделяем заголовок To.
    $to = "";
    if (preg_match('Error to gettings', $mail, $p)) {
        $to = @$p[1]; // сохраняем
    }
    // Вначале выделяем имя хоста.
    if (!preg_match('/@([\w.-]*)/', $to, $pockets)) {
        $reason[] = "invalid e-mail address - $to: no host";
        return false;
    }
    $host = $pockets[1];
    // По стандарту SMTP, если нет ни одной MX-записи, то в качестве
    // почтового сервера выступает сам хост.
    if (!getmxrr($host, $mxes, $weights)) {
        $mxes = array($host);
    }
    // Проходимся по всем MX-записям. Для простоты веса не
    // учитываем - большой беды от этого не будет.
    foreach ($mxes as $mx) {
        $result = socketmail($mx, $mail, $r);
        $reason = array_merge($reason, $r);
        // Если письмо отослано, все сделано.
        if ($result) return true;
    }
    $reason[] = "could not connect to any of (".join(", ", $mxes).")";
    return false;
}
echo '<div style = "color:#00ff53;">Test case 6 Done!</div><hr>';

// Заебись работает , если нет просто reset();

?>