<?php
error_reporting(E_ALL);

    session_start();
    session_set_cookie_params(43200);
    require_once 'config.php';

    if ($_SESSION['SESSIONID'] && $_SESSION['USERTYPE']) {
        
        
        $userType = $_REQUEST['type'];
        if ($userType == $_SESSION['USERTYPE']) {
            jsonOut (1);
        } else {
            jsonOut (0);
        }
    } else {
        jsonOut (-1);
    }
