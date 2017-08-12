<?php
require_once('db.php');



function getSensor($name=''){
    $list = array();
    $query = "SELECT * FROM `sensor_data` WHERE `name` like '%$name%'";
    $result = mysql_query($query);
    if($result){
      while($row = mysql_fetch_row($result)){
        array_push($list,[$row[2],floatval($row[1])]);
      }
      mysql_free_result($result);
    }else{
      mysql_error();
    }

    return $list;

}

function setSensor($name,$value){
  $query = "INSERT INTO `sensor_data` (`name`,`value`,`date`) VALUES ('$name','$value',NOW())";
  $result = mysql_query($query);
  if(!$result){
    //ERROR
  }
  return $result;
}

?>
