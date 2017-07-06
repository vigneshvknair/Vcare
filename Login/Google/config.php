<?php
session_start();
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$clientId = '886700361912-cj68r4tdc73flrluhunjccrn85u1cqi8.apps.googleusercontent.com'; //Google CLIENT ID
$clientSecret = '85yDqEuKTukAknUtOBdXw2FG'; //Google CLIENT SECRET
$redirectUrl = 'http://localhost/moneymap/login';  //return url (url to script)
$homeUrl = 'http://localhost/moneymap';  //return to home

##################################

$gClient = new Google_Client();
$gClient->setApplicationName('moneymap');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>