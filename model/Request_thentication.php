<?php
include_once("connect_toDB.php");
error_reporting(E_ALL);
error_reporting(E_ERROR);
ini_set('display_errors', '1');
//Function to check SQL injection
function check_injection($connect,$value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  $value = mysqli_real_escape_string($connect,$value);
  return $value;
}
class Users_Request{

function checkMail($connect,$mail){
	$sendbackemail = check_injection($connect,htmlentities($mail));
	$query = mysqli_query($connect,"SELECT Email_iD FROM users WHERE Email_iD='".$sendbackemail."' "); 
	$email_check = mysqli_num_rows($query);

	if($email_check > 0 ){
	  echo "Nop";
	}else{
	 echo "true";
	}

	
}
//Function to insert ot register new user to the system
function registerUser($connect){
$F_name =  check_injection($connect,htmlentities($_POST['Full_Name']));
$Email_address =  check_injection($connect,htmlentities($_POST['emailreg']));
$psw =  check_injection($connect,htmlentities($_POST['passwordreg']));

include_once('pass_word_Encrypt_usER_Log.php');
if(empty($F_name) || $F_name ==null || $F_name == "" || $F_name == " "){
   echo "<label style='color:#F00;'>Full Name can not be empty.</label>";
}else if(empty($Email_address) ||$Email_address ==null || $Email_address == "" || $Email_address == " "){
  echo "<label style='color:#F00;'>Email can not be empty</label>";
}else if(empty($psw) || $psw ==null || $psw == "" || $psw == " "){
   echo "<label style='color:#F00;'>Password can not be empty.</label>";
}else if(strlen($psw) < 7){
   echo "<label style='color:#F00;'>Password Must be more than 6 characters!.</label>";
}else{

$userpsw = encrypt_UseRWorD($psw);

$queryeml = mysqli_query($connect,"SELECT * FROM users WHERE Email_iD= '$Email_iD' ");
  $check_email = mysqli_num_rows($queryeml);
  if($check_email > 0){
    echo $Email_address." Is teken, select or use another email.";
  }else{
   
  if(mysqli_query($connect,"INSERT INTO users VALUES ('','$F_name','$Email_address','$userpsw',Now())")){
    $result = $this -> setLogSESSION($Email_address,$userpsw);
      echo $result;
      }else{
       echo "not_true";
      }
    }
  }
}


//Function to log in the user to the system
function loginUser($connect){
$Email_address =  check_injection($connect,htmlentities($_POST['email_login']));
$password_one =  check_injection($connect,htmlentities($_POST['passwordone_login']));
include_once('pass_word_Encrypt_usER_Log.php');
$userpsw = encrypt_UseRWorD($password_one);
$query = mysqli_query($connect,"SELECT * FROM users WHERE Email_iD= '$Email_address' AND passWord_Log='$userpsw'");
  $check_user = mysqli_num_rows($query);
  if($check_user > 0){
     $result = $this -> setLogSESSION($Email_address,$userpsw);
      echo $result;
  }else{
     echo "<label style='color:#F00;'>Invalid Email or Password!</label>";
  }
}

//function to set user SESSION
public function setLogSESSION($Email,$psw){
	session_start();
	 $_SESSION['userlog_EmailElement@NaviGaTion'] = $Email;
     $_SESSION['userlog@cralerpsw@NaviGaTion'] = $psw;
     return "true";
}
//function to check if URL exist in the database before saving
public function Save_this_Url($connect,$U_NavID,$url){
	$query = mysqli_query($connect,"SELECT URL FROM urls_metrics WHERE URL='".$url."' "); 
	$email_url = mysqli_num_rows($query);
	if($email_url > 0 ){
	 return $url." already exit in the database.";
	}else{
	 if(mysqli_query($connect,"INSERT INTO urls_metrics VALUES ('','$U_NavID','$url','new','','',Now())")){
			return  "yes";
		}else{
			return "no";
		}

	}
}
//Function to send Save new URL request
function SaveUrl_new($connect,$url_links){
session_start();
$set_title =  check_injection($connect,htmlentities($title));
$U_NavID = $_SESSION['userlog@Identication@NaviGaTion']; 

//Save the first Url
$url = strtok($url_links,'*^*');
$saveStaus = $this -> Save_this_Url($connect,$U_NavID,$url);
//Check and Save the rest of url if the user want to save more than one URL 
while($more_url = strtok('*^*')){
	$saveStaus = $this -> Save_this_Url($connect,$U_NavID,$more_url);
}

if($saveStaus == "yes"){
	echo '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
               Save Successful.</br><a href="?/&goto=crawlers"><i class="fa fa-table"></i> View all URL </a>
</div>';
}else if($saveStaus == "no"){
	echo '<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
               Error Saving... please try again
</div>';
}else{
	echo '<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             '.$saveStaus.'
</div>';
}


}


}

?>