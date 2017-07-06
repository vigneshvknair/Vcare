<?php
require "checklogin.php";
    echo "LOL";
    echo"<br>";
    echo $id;
    echo"<br>";
$cat=$_POST['category'];
echo "category is";
echo $cat;
  echo"<br>";
 $amount=$_POST['amount'];
    $date =str_replace("/","",$_POST['date']);
    $date=str_replace(":","",$date);
    $date=str_replace(" ","",$date);
    $month=substr($date,4,2);
    echo $date;
      echo"<br>";
    echo $amount;
    echo"<br>";
    echo $month;
    echo"<br>";
    $query="SELECT * FROM `expense` WHERE `id`='$id' AND MONTH(date) = '$month' AND 'category'='$cat'";
    $result=mysql_query($query)or die(mysql_error());
    $row=mysql_fetch_array($result);
    
    
    if(empty($row))
    {     
    $query= "INSERT INTO expense (id,date,category,expense) VALUES ('$id','$date','$cat','$amount')"; 
    $result=mysql_query($query)or die(mysql_error());

    if(!empty($result))
        { 
       echo "Expense set successfully"; 
        header("location: ../expense.php");
        }
    }
   
    else
    {
        
        $query="UPDATE `expense` SET `expense`='$amount',`category`='$cat' WHERE `id`='$id' AND month(date)='$month'";
        $result=mysql_query($query)or die(mysql_error());
       

    if(!empty($result))
        { 
        echo "Income set successfully"; 
        header("location: ../expense.php");
      }
    }
   
    
   
    ?>