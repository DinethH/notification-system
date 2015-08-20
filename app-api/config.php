<?php

//$HOST = "142.4.215.154:3306";



try {
    $db = new PDO('mysql:host=localhost;dbname=c1notisystem;charset=utf8', 'c1notisystem', 'b#6VG1fYPpb');
    //echo "Connection Established";
} catch (PDOException $e) {
    echo 'Connection failed';
}


require_once 'json.php';