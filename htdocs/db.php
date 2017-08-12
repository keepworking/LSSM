<?php
$db_link = mysql_connect('127.0.0.1','root','123456');
$db_name = 'LSSM';

if(!$db_link){
    echo "mysql connection error";
    exit;
}

if(!mysql_select_db($db_name)){
  echo mysql_error().'<br>';
}
?>
