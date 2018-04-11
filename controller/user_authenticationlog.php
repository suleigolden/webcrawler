<?php

include_once("../model/Request_thentication.php");

$Request = new Users_Request();
if(isset($_POST['checkemail_login'])){
	$Request ->  checkMail($connect,$_POST['checkemail_login']);
}elseif (isset($_POST['Full_Name']) && isset($_POST['emailreg']) && isset($_POST['passwordreg'])) {
	$Request ->  registerUser($connect);
}elseif (isset($_POST['email_login']) && isset($_POST['passwordone_login'])) {
	$Request ->  loginUser($connect);
}
?>