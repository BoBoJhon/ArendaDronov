<!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css"/>
    <script src="main.js"></script>
    </head>
    <body>
    <?php
    $id=$_GET['id'];
    $json=file_get_contents('http://Babyshev/api/server.php?uid=1&key=qwerty&query=select&table=Copters&fields=id,model,battery,id_blades,cost,camera_characteristic,advisory_services,range_flight,flight_time,max_speed&values=%22mavic%22,%221000V%22,%225000%22,%22topchick%22,%22yes%22,%223002%22,%2250%22,%221302%22,%22123%22');
    echo $json;
    $result=json_decode($json, TRUE);
    echo "<br>";

    foreach ($result as $value) {
    echo $value['id'];
    echo $value['model'];
    echo $value['battery'];
    echo $value['cost'];
    echo $value['camera_characteristic'];
    echo $value['advisory_services'];
    echo $value['range_flight'];
    echo $value['flight_time'];
    echo $value['obstacle_flying_system'];
    echo $value['Tracking_moving_objects'];
    echo $value['Weight'];
    echo $value['Maximum_flight_above_sea_level'];
    echo $value['memory'];


    ?>
    <a href="show.php?id=<?=$value['id']?>">Заказать</a>
    <?
    }
    ?>

    </body>
    </html>


