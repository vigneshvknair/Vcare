<?php 
require "connect.php";
if (isset($_GET['key'])) {
    $key=$_GET['key'];
    $email=$_GET['email'];
}
else
{
    $Message="Activation data not found retry signup or activation link.";
                header("Location:../login.php?Message=" . urlencode($Message)); 
}

$query2="UPDATE `websiteusers` SET `Activation`='1' WHERE `email`='$email' AND `Activation`='$key'";
        $result2 = mysql_query($query2);
    if($result2)
        { 
       $Message="Activation successful please login!";
                header("Location:../login.php?Message=" . urlencode($Message)); 
        }
    else {
        
            $Message="Activation not updated retry!";
                header("Location:../login.php?Message=" . urlencode($Message)); 
    }
?>