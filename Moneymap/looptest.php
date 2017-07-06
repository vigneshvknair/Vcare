<?php 
require "php/checklogin.php";
include "php/categorysift.php";
$int=1;
$sumarray=array();
while($int<=4)
{

$query="SELECT SUM(expense) as 'Totalsum' FROM `expense` WHERE `id`='$id' AND MONTH(date)= MONTH(CURRENT_TIMESTAMP) AND `category`='$int' ";
   $result=mysql_query($query)or die(mysql_error());
   $row = mysql_fetch_array($result);
   $sumarray[$int-1]=$row['Totalsum']; 
    ++$int;
    
}

if(is_null($sumarray[3]));
   echo "ya";
?>