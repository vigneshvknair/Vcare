<?php
require "checklogin.php";
    echo "LOL";
    $budget=$_POST['budget'];
    $saving =$_POST['total'];
    
    $month = date("m");
    $query1="SELECT * FROM `budget` WHERE `id`='$id' AND MONTH(date) = '$month'";
    $result=mysql_query($query1);
    $row=mysql_fetch_array($result);
    
    if(empty($row))
    {
    $query2 = "INSERT INTO budget (id,date,budget,Saving) VALUES ('$id',CURRENT_TIMESTAMP,'$budget','$saving')"; 
    $result2 = mysql_query($query2);
    if($result2)
        { 
          header("location: ../homepage.php");
        }
    }
   
    else
    {
        $query2="UPDATE `budget` SET `budget`='$budget',`Saving`='$saving' WHERE `id`='$id' AND month(date)='$month'";
        $result2 = mysql_query($query2);
    if($result2)
        { 
        echo "Updated";
        header("location: ../homepage.php");
        }
    }
   
    ?>