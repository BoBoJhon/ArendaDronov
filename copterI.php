<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
<script src="main.js"></script>
</head>
<body>
<?php
$id=$_GET['id'];
$json=file_get_contents('http://babyshev/api/server.php?uid=1&key=qwerty&query=select&table=Copters&fields=model,battery,id_blades,cost,camera_characteristic,advisory_services,range_flight,flight_time,max_speed,obstacle_flying_system,Tracking_moving_objects,weight,Maximum_flight_above_sea_level,memory&values=%22mavic%22,%221000V%22,%225000%22,%22topchick%22,%22yes%22,%223002%22,%2250%22,%221302%22,%22123%22&where=id=%22'.$id.'%22');
echo $json;
$result=json_decode($json, TRUE);
echo "<br>";
// $blades=$mysqli->query("SELECT number,name from blades WHERE id=$result[0]['id_blades']");
echo($result[0]['model']);
echo($result[0]['battery']);
echo($result[0]['cost']);
?>
</body>
</html>