<?php
include_once("connect_toDB.php");

function check_injection($connect,$value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  $value = mysqli_real_escape_string($connect,$value);
  return $value;
}
class Users_Request{

function checkMail($connect,$mail){
	
}
function registerUser($connect){
	
}
function loginUser($connect){
	
}


}

?>