<?php
require_once('db.php');
require_once('sensor.php');


setSensor($_GET['name'],$_GET['value']);
echo "fin";
?>
