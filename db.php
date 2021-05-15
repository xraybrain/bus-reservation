<?php
$mysql_hostname = "us-cdbr-east-03.cleardb.com";
$mysql_user = "b6a2811383209b";
$mysql_password = "bf9c01f5";
$mysql_database = "heroku_ccf9ece95dea209";
$prefix = "";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($bd, $mysql_database) or die("Could not select database");
?>