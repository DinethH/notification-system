<?php
error_reporting(E_ALL);

    session_start();
    session_set_cookie_params(43200);
    require_once 'config.php';

    if (isset($_REQUEST['email']) && isset($_REQUEST['password'])) {
        $email = $_REQUEST['email'];
        $password = sha1($_REQUEST['password']);
        $stmt = $db->prepare("SELECT * FROM users WHERE email='$email' AND password='$password'");
        $stmt->execute();
        
        $row = $stmt->fetchAll();
        
        if (count($row) > 0) {

            $_SESSION['SESSIONID'] = $row[0]['ID'];
            $_SESSION['USERTYPE'] = $row[0]['type'];
            
            jsonOut ($row[0]['type']);
        } else {
            jsonOut (0);
        }
        
    } else {
        jsonOut (-1);
    }
