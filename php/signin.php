<?php

include "connect.php";
// $ID = $_POST['user']; $Password = $_POST['pass'];

function SignIn() {
    $user=$_POST['user'];
    $password=hash('sha256',$_POST['pass']);
    session_start(); //starting the session for user profile page
    $query="SELECT * FROM `websiteusers` WHERE `userName`='$user' AND `pass`='$password'";
    $result = mysql_query($query);
    if(mysql_num_rows($result)==0)
    {
        $Message="Please try again!";

       header("Location:../login.php?Message=" . urlencode($Message)); 
    }

   else {

                        $row = mysql_fetch_array($result) or die(mysql_error());
                        echo $row['id'];


                        if(!empty($row['userName']) && !empty($row['pass']) ) {

                        $_SESSION['id'] = $row['id'];
                        $_SESSION['name']= $row['fname'];

                        $Message="Logged in!";
                        header("Location:../homepage.php?Message=" . urlencode($Message));

                    }



                    }
                   }


if(isset($_POST['submit']))

{
    echo "ok";
    SignIn();
    echo "ok";
} ?>
