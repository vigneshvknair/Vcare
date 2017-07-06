<?php 
include_once "php/connect.php";
$query="SELECT * FROM `income` WHERE `id`=3 AND MONTH(date) = 10";
$result=mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result) or die(mysql_error());
echo $row['income'];
?>