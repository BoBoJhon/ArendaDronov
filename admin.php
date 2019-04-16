<meta charset="utf-8">

<?php

require_once("connect.php");

$results = $mysqli->query("SELECT id, model, battery, id_blades, cost, camera_characteristic, advisory_services, range_flight, flight_time, max_speed, obstacle_flying_system, Tracking_moving_objects, weight, Maximum_flight_above_sea_level, memory from Copters");

while($row = $results->fetch_assoc()) {
    echo $row["id"]."<br>";
    echo $row["name"]."<br>";
    ?>
    <a href="">Подробнее...</a>
    <?php
}
?>