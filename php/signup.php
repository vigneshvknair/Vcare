<?php

require "connect.php";

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

 $fname = $_POST['fname'];
 $lname=$_POST['lname'];
 $pname = $_POST['pname'];
 $email = $_POST['email'];
 $password = hash('sha256', $_POST['pass']);
 $phno = $_POST['phno'];
// echo $phno;
  //  echo $password;



 $query = "INSERT INTO websiteusers (fname,lname,pname,phno,email,pass,visitno) VALUES ('$fname','$lname','$pname','$phno','$email','$password',0)";
 mysql_query($query);


// echo $row['id'];
 /*

*/

}

function SignUp()
		{


		if(!empty($_POST['email']))

    		{

 			passcheck();
 			$query = mysql_query("SELECT * FROM websiteusers WHERE email = '$_POST[email]'") or die(mysql_error());
			$rows = array();


			if(!$row = mysql_fetch_array($query))
			{
				newuser();
 			}

 		else
		{

     	$Message="Sorry You are already registered User. Please login or reset password";
     	header("Location:../login.php?Message=" . urlencode($Message));

    }
    		}

    }

if(isset($_POST['submit']))
  {
		//	echo "Sethai bhai";
 SignUp();

 $query2 = mysql_query("SELECT * FROM websiteusers WHERE email = '$_POST[email]'") or die(mysql_error());
 $row = mysql_fetch_array($query2) or die(mysql_error());
 $id=$row['id'];
 $pname = $row['pname'];

  if (!file_exists("Patients/$id/$pname")) {
     mkdir("../Patients/$id/$pname", 0777, true);
 }
	}
$Message="Signup successful";
header("Location:../login.php?Message=" . urlencode($Message));
 ?>
