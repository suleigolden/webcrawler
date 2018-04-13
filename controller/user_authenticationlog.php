<?php

include_once("../model/Request_thentication.php");

$Request = new Users_Request();
if(isset($_POST['checkemail_login'])){
	$Request ->  checkMail($connect,$_POST['checkemail_login']);
}else if (isset($_POST['Full_Name']) && isset($_POST['emailreg']) && isset($_POST['passwordreg'])) {
	$Request ->  registerUser($connect);
}elseif (isset($_POST['email_login']) && isset($_POST['passwordone_login'])) {
	$Request ->  loginUser($connect);
}elseif (isset($_POST['IDCrawlURL']) && isset($_POST['DCrawlURL_this_URldetails'])) {
	$Request ->  Crawl_this_URL($connect,$_POST['IDCrawlURL'],$_POST['DCrawlURL_this_URldetails']);
}else if(isset($_POST['Savenew_Url_log'])){
	$Request ->  SaveUrl_new($connect,$_POST['Savenew_Url_log']);
}else if(isset($_POST['displayAllURldetails']) && isset($_POST['view_type'])){
	$Request ->  getallURL($connect,$_POST['displayAllURldetails'],$_POST['view_type']);
}else if(isset($_POST['Deletethis_URldetails'])){
	$Request ->  delete_URL($connect,$_POST['Deletethis_URldetails']);
}



?>