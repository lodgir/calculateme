<?php
define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', '');
        define('DB_DATABASE', 'calculateme');
        $db = mysqli_connect('localhost','root','','calculateme');
        if($db === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
        }
?>