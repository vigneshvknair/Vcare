<?php 

require "connect.php";

// $ID = $_POST['user']; $Password = $_POST['pass']; 

function SignIn() { 
    
    $password=hash('sha256',$_POST['pass']);
    session_start(); //starting the session for user profile page 
                   
                   if(!empty($_POST['user'])) 
                       //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
                   { $query = mysql_query("SELECT * FROM websiteusers where userName = '$_POST[user]' OR email='$_POST[user]' AND pass = '$password'") or die(mysql_error());
                    
                    $row = mysql_fetch_array($query) or die(mysql_error()); 
                    
                    if(!empty($row['userName']) AND !empty($row['pass']) AND $row['Activation']==1) {
                        
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['name']= $row['fname'];
                    
                        
                          $Message="Logged in!";
                        header("Location:../homepage.php?Message=" . urlencode($Message)); 

                    } 
                    
                    else {
                    $query1=mysql_query("SELECT * FROM websiteusers where userName = '$_POST[user]' OR email='$_POST[user]'") or die(mysql_error());
                    
                    $rowy = mysql_fetch_array($query1) or die(mysql_error());
                        
                        
                if($rowy['Activation']==1) { 
                                                $Message="Wrong credentials!";
                                            header("Location:../login.php?Message=" . urlencode($Message)); 
                         
                    }
                    else
                    {
                        $Message="Please Activate Account first. Go to your registered email.!";
                         header("Location:../login.php?Message=" . urlencode($Message)); 
                         
                    }
                         }
                   } 
                  } 

if(isset($_POST['submit']))

{ 
    SignIn(); 

} ?>

