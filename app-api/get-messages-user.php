<?php
    session_start();
    session_set_cookie_params(43200);
    require_once 'config.php';

        

if ($_SESSION['USERTYPE'] == 2) {
    $memberID = $_SESSION['SESSIONID'];
    
    $stmt = $db->query("SELECT * FROM messages
        LEFT JOIN users ON users.ID=messages.user WHERE users.ID=$memberID");
    $affected_rows = $stmt->rowCount();
    $row = $stmt->fetchAll(); 
   
    jsonOut ($row);

}
