<?php

$host="localhost";
        $login="root";
        $password="";
        $database_name="Babyshev";
        $mysqli = new mysqli($host,$login,$password,$database_name);
        
        if ($mysqli->connect_error){
            die("Возникла ошибка: ".$mysqli->connect_error);
        }

?>