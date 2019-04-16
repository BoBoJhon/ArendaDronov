<?php

require_once('connect.php');

$model=$_POST['model'];
$battery=$_POST['battery'];
$id_blades=$_POST['blades'];
$cost=$_POST['cost'];
$camera_characteristic=$_POST['Camera'];
$advisory_sevices=$_POST['Advisory services'];
$range_flight=$_POST['Flight range'];
$flight_time=$_POST['Flight time'];
$max_speed=$_POST['Maximum speed'];
$obstacle_flying_system=$_POST['Obstacle flying system'];
$Trackig_moving_objects=$_POST['Tracking moving object'];
$wheight=$_POST['wheight'];
$Maximum_flight_above_sea_level=$_POST['Maximum flight above sea level'];
$memory=$_POST['SD card'];

$results=$mysqli->query("INSERT INTO Copters(model,battery,id_blades,cost,camera_characteristic,advisory_services,range_flight,flight_time,max_speed,obstacle_flying_system,Tracking_moving_objects,weight,Maximum_flight_above_sea_level,memory)
VALUES (\"$model\",\"$battery\",\"$id_blades\",\"$cost\",\"$camera_charcetistic\",\"$advisory_services\",\"$range_flight\",\"$flight_time\",\"$max_speed\",\"$obstacle_flying_system\",\"$Trackig_moving_objects\",\"$wheight\",\"$Maximum_flight_above_sea_level\",\"$memory\");");

if (!$results) {
    echo $mysqli->error;
}
?>