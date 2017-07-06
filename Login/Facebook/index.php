<?php
include_once("php/Login/Facebook/config.php");
include_once("php/Login/Facebook/includes/functions.php");
//destroy facebook session if user clicks reset
if(!$fbuser){
	$fbuser = null;
	$loginUrl = $facebook->getLoginUrl(array('redirect_uri'=>$homeurl,'scope'=>$fbPermissions));
	echo '<a href="'.$loginUrl.'"><img src="images/fb_login.png"></a>'; 	
}else{
	$user_profile = $facebook->api('/me?fields=id,first_name,last_name,email,gender,locale');
	$user = new Users();
	$user_data = $user->checkUser('facebook',$user_profile['id'],$user_profile['first_name'],$user_profile['last_name'],$user_profile['email'],$user_profile['gender'],$user_profile['locale']);
	if(!empty($user_data)){
		session_start();
		$_SESSION['userdata'] = $user_data;
		header("Location: php/Login/Facebook/account.php");
	}else{
		die('Some problem occurred, please try again.');
	}
}

?>