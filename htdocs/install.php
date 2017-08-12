<?php

require_once ('db.php');


if(mysql_query("CREATE DATABASE ".$db_name,$db_link)){
}else {
    echo 'db 생성 실패 ' . mysql_error() . "\n";
}

mysql_select_db($db_name);

$query = "CREATE TABLE IF NOT EXISTS `sensor_data` (
  `name` varchar(20) NOT NULL,
  `value` float NOT NULL,
  `date` datetime NOT NULL
)DEFAULT CHARSET=utf8";

$result = mysql_query($query);

if($result){
 echo "완료";
}

?>
