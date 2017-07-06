<?php
require "checklogin.php";
    
    $amount=$_POST['amount'];
    $date =str_replace("/","",$_POST['date']);
    $date=str_replace(":","",$date);
    $date=str_replace(" ","",$date);
    $month=substr($date,4,2);
    $query="SELECT * FROM `income` WHERE `id`='$id' AND MONTH(date) = '$month'";
    $result=mysql_query($query)or die(mysql_error());
    $row=mysql_fetch_array($result);
    
    
    if(empty($row))
    {     
    $query= "INSERT INTO income (id,date,income) VALUES ('$id','$date','$amount')"; 
    $result=mysql_query($query)or die(mysql_error());

    if(!empty($result))
        { 
        echo "Income set successfully"; 
        header("location: ../budgetset.php");
        }
    }
   
    else
    {
        
        $query="UPDATE `income` SET `income`='$amount' WHERE `id`='$id' AND month(date)='$month'";
        $result=mysql_query($query)or die(mysql_error());
       

    if(!empty($result))
        { 
        echo "Income updated successfully"; 
        header("location: ../budgetset.php"); 
      }
    }
   
    
   
    ?>