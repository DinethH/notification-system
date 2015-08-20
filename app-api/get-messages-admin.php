<?php
    session_start();
    session_set_cookie_params(43200);
    require_once 'config.php';

        

if ($_SESSION['USERTYPE'] == 1) {
    $stmt = $db->query("SELECT * FROM messages
        LEFT JOIN users ON users.ID=messages.user");
    $affected_rows = $stmt->rowCount();
    $row = $stmt->fetchAll(); 
   
    jsonOut ($row);

}
