<?php 

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'moneymap'); 
define('DB_USER','root');
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 

$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

function passcheck()
{
	if($_POST['pass']!=$_POST['cpass'])
	{
	echo "Passwords dont match";
	exit;
	}
}
function NewUser()
 { 
 
 $fullname = $_POST['name']; 
 $userName = $_POST['user']; 
 $email = $_POST['email']; 
 $password = hash('sha256', $_POST['pass']);
 
 
 
 $query = "INSERT INTO websiteusers (fname,userName,email,pass) VALUES ('$fullname','$userName','$email','$password')"; 
  
  $data = mysql_query ($query)or die(mysql_error()); if($data) { echo "YOUR REGISTRATION IS COMPLETED..."; } } 

function SignUp() { if(!empty($_POST['user'])) 

 { 
 
 passcheck();
 $query = mysql_query("SELECT * FROM websiteusers WHERE userName = '$_POST[user]' OR email = '$_POST[email]'") or die(mysql_error());

 
 if(!$row = mysql_fetch_array($query)) { newuser(); } 
 
 else { 
 echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
        header("location: ../login.html"); } } } 

if(isset($_POST['submit']))
  { 
 
 SignUp(); } 
 
 
 ?>

