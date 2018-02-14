<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 14.02.2018
 * Time: 13:22
 */


function checked_out ($session_name = 'PHPSESSID', $session_save_handler = 'files') {
    $session_data = array();
    if (array_key_exists($session_name, $_COOKIE)) {
        $session_id = $_COOKIE[$session_name];
        $old_session_id = session_id();

        session_write_close();

        $old_session_save_handler = ini_get('session.save_handler');
        ini_set('session.save_handler', $session_save_handler);

        $old_session_name = session_name($session_name);
        session_id($session_id);
        session_start();
       $session_data = $_SESSION;

        # close this session, switch back to the original handler, then restart the old session
        session_write_close();
        ini_set('session.save_handler', $old_session_save_handler);
        session_name($old_session_name);
        session_id($old_session_id);
        session_start();
    }

    # now return the data we just retrieved
    return $session_data;
}



?>