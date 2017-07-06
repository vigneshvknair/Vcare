<?php 

include_once "connect.php";

// $ID = $_POST['user']; $Password = $_POST['pass']; 

function SignIn() { 
    
    $password=hash('sha256',$_POST['pass']);
    session_start(); //starting the session for user profile page 
                   
                   if(!empty($_POST['user'])) 
                       //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
                   { $query = mysql_query("SELECT * FROM websiteusers where userName = '$_POST[user]' OR email='$_POST[user]' AND pass = '$password'") or die(mysql_error());
                    
                    $row = mysql_fetch_array($query) or die(mysql_error()); if(!empty($row['userName']) AND !empty($row['pass'])) {
                        
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['name']= $row['fname'];
                        
                        echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
                        header("location: ../homepage.php");

                    } 
                    
                    else { 
                        
                        echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
                        header("location: ../login.html");
                    }
                   } 
                  } 

if(isset($_POST['submit']))

{ 
    SignIn(); 

} ?>

