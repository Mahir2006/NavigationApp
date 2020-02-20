<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("1011501820772-0foromlehpp5o0mk7sg1fc4q0cc5asul.apps.googleusercontent.com");
	$gClient->setClientSecret("IRt1Mq3TQe7kW21j3MwEFval");
	$gClient->setApplicationName("CPI Login Tutorial");
	$gClient->setRedirectUri("https://mtalk.000webhostapp.com/app//g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
