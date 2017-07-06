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

 $fullname = $_POST['name'];
 $userName = $_POST['user'];
 $email = $_POST['email'];
 $password = hash('sha256', $_POST['pass']);
  //  echo $password;
	


 $query = "INSERT INTO websiteusers (fname,userName,email,pass) VALUES ('$fullname','$userName','$email','$password')";
 mysql_query($query);
 echo "query daal dia";
}
	/*
  $data = mysql_query ($query)or die(mysql_error());
   if($data) {


                $to=$email;
                $subject = "Moneymap Activation";
                $msgg= "Hello \n".$fullname."!\r\n Welcome to Moneymap! Here is your activation email! Click the link below to activate and start  using your account! \r\n Go here: \n\n";

            $content='<!DOCTYPE HTML>'.
'<head>'.
'<meta http-equiv="content-type" content="text/html">'.
'<title>Email notification</title>'.
'</head>'.
'<body>'.
'<div id="header" style="width: 80%;height: 60px;margin: 0 auto;padding: 10px;color: #E8EEF4;text-align: center;background-color: #E8EEF4;font-family: Open Sans,Arial,sans-serif;">'.
   '<img style="border-width:0; max-width:50%;max-height:50%;" src="https://lh3.googleusercontent.com/ttPmnhj5aJ1r-jcJdGch4Pj_LHxfA1mty0MxuJ-bcaaBPd53lcKbT68pOTCiGiYhtrmmiVH8IlM3bLJjxUxrpW1GZDy1Uh8UcKOrkRg6becjuBL4pkgR_Enf-ZqIKuhr4SGZ65EG8CHPne-QFPvZZDkUtieDY-VZpfnjvxa7ufQBpiO872EB887DrHMyzf4dAY7CUyjeDI6E26_F-SXVIy_m228DyLQvvOmK1mpVv_MlVfrGuenm7_5wc2RGfP6SMg7W-HoFPIdD__RZl0EFhhuPuiZ96PZt25olCXRBVJ7oE0Y5hf7kAMjZExNsbv9IFbRPOTFQiYTwa_nlvHfBLr_5NaNve8pLAL1tL6zDYESewzQsmZXIw-y4Wlx60xXNbMWhp77MWTjOs_1Ae_gh_FVXFTAj6eFdIPPEUk33XwvPumsEghMpOJydb6w1LRAOfH1_UBqE2AhVxSLLSD14SMwMYaGmSiWLB99k4H7Nz06ovIMlB00bO1uqSBfMA5gipD198-lE9jZdI3hEB-FvgLQlfJzgmdf_bg7Gt7Xh3g=w1280-h906-no">'.
'</div>'.

'<div id="outer" style="width: 80%;margin: 0 auto;margin-top: 10px;">'.
   '<div id="inner" style="width: 78%;margin: 0 auto;background-color: #DFF0D8;font-family: Calibri;font-size: 13px;font-weight: normal;line-height: 1.4em;color: #444;margin-top: 10px;">'.
       '<p>'.$msgg.'</p>'.
       '<center> <a href='.$link.'><img src=https://lh3.googleusercontent.com/CG-3K3g3tRsztj2r_acrSZ5-48uK4tbcJ7UhSbx0VvQgR_cpJU4iqowKqNtb2MOAm_pMYIgcx6Xq307puKL7pl9lNN5g8P-iu47DYwsBTJzKM9tqTtAMNKmh_tumG3D8bAum4jQa1vpgTrA6A2vK4J3Q6tebrB9Ldy-suLL4LuKxH1RIbZU-iM1Za7QRICCLubvinbzaNkDgO_t_JZTpDMG2qEAoihJQQbYfdN4nU1rCRdXf0C1t4L220AKL16BuiyLrDnKGYlJwuO-KqYkm4JLxa_Yi538pXtcPNSqJsdpisrgiEGmjGI-Rz36ZYwaSEnb76MEAlGOTm0U06vn0XWZSvyZH4fuQ_GSOJzmJOLDQA-Gbj4cJHrtLvo3dDmupEs3vjtFqeRsmqkVWFEUO_tCjoAKbRrsQ1tJfe-RPEuNguXopuU6pqHoso9_jDoRNpFjBg5iqHa6__YS8V8g5kRFAeiCI9_WnGXqNtnc2zITDqlstcJR95nAae-7TaTi36jQ8zFLuM3rvC6pMuIZnCkL0RFrTBh1vPjmmKoSSFw=w205-h41-no></a></center>'.

   '<br></div>'.
'</div>'.

'<div id="footer" style="width: 80%;height: 40px;margin: 0 auto;text-align: center;padding: 10px;font-family: Verdena;background-color: #E8EEF4;">'.
   'All rights reserved @'. '<b>Moneymap.com 2015</b>'.
'</div>'.
'</body>';





                $headers = "From:moneymaphelp@gmail.com\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                mail($to,$subject,$content,$headers);

                $Message="You are successfully registered! Please check the activation link in your email to activate!";
                //header("Location:../login.php?Message=" . urlencode($Message));

							}
} */

function SignUp()
		{


		if(!empty($_POST['user']))

    		{

 			passcheck();
 			$query = mysql_query("SELECT * FROM websiteusers WHERE userName = '$_POST[user]' OR email = '$_POST[email]'") or die(mysql_error());
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

 SignUp();

	}


 ?>
