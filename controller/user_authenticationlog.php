<?php

include_once("../model/Request_thentication.php");

$Request = new Users_Request();
if(isset($_POST['checkemail_login'])){
	$Request ->  checkMail($connect,$_POST['checkemail_login']);
}else if (isset($_POST['Full_Name']) && isset($_POST['emailreg']) && isset($_POST['passwordreg'])) {
	$Request ->  registerUser($connect);
}elseif (isset($_POST['email_login']) && isset($_POST['passwordone_login'])) {
	$Request ->  loginUser($connect);
}else if(isset($_POST['Savenew_Url_log'])){
	$Request ->  SaveUrl_new($connect,$_POST['Savenew_Url_log']);
}else if(isset($_POST['displayAllURldetails'])){
	$Request ->  getallURL($connect,$_POST['displayAllURldetails']);
}



?>