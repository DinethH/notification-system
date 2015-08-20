<?php
    session_start();
    session_set_cookie_params(43200);
    require_once 'config.php';
    date_default_timezone_set('America/Chicago');

    $memberID = $_SESSION['SESSIONID'];
    $message = $_REQUEST['message'];


    $stmt = $db->prepare("INSERT INTO messages(message,user) 
            VALUES(:message,:user)");
    $stmt->execute(array(':message' => $message, ':user' => $memberID));
    $affected_rows = $stmt->rowCount();
    if ($affected_rows > 0) {
        jsonOut (1);
    } else {
        jsonOut (0);
    }
