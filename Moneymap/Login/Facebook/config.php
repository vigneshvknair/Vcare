<?php
include_once("php/Login/Facebook/inc/facebook.php"); //include facebook SDK
######### Facebook API Configuration ##########
$appId = '1641524572757660'; //Facebook App ID
$appSecret = '2bf46dbd58540189a8ffee27646500eb'; // Facebook App Secret
$return_url = 'http://localhost/moneymap/php/Login/Facebook';  //return url (url to script)
$homeurl = 'http://localhost/moneymap/login.php';  //return to home
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret

));
$fbuser = $facebook->getUser();
?>