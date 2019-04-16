<?php

$model=$_POST['model'];
$battery=$_POST['battery'];
$camera_characteristic=$_POST['camera_characteristic'];
$advisory_services=$_POST['advisory_services'];
$range_flight=$_POST['range_flight'];
$flight_time=$_POST['flight_time'];
$max_speed=$_POST['max_speed'];
$json=file_get_contents("http://babyshev/api/server.php?uid=1&key=qwerty&query=insert&table=Copters&fields=model,battery,id_blades,cost,
camera_characteristic,advisory_services,range_flight,flight_time,max_speed&values=$model,$battery,$cost,$camera_characteristic,$advisory_services,$range_flight,$flight_time,$max_speed&where=id=%22'.$id.'%22");

?>