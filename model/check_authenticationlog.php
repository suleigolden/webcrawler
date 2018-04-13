<?php
error_reporting(E_ALL);
error_reporting(E_ERROR);
ini_set('display_errors', '1');
include_once("connect_toDB.php");
session_start();
$Email_address = $_SESSION['userlog_EmailElement@NaviGaTion'];

$userpsw = $_SESSION['userlog@cralerpsw@NaviGaTion'];

$querycheck= mysqli_query($connect,"SELECT * FROM users WHERE Email_iD='$Email_address' AND passWord_Log ='$userpsw' ");
    while($revnt = mysqli_fetch_assoc($querycheck)){
      $U_NavID = $revnt['User_ID'];
      $getFullName = $revnt['Full_Name'];
      $getuEmail = $revnt['Email_iD'];
      $U_passWord = $revnt['passWord_Log'];
      $DateReg = $revnt['Date_Registered'];
 }
 //check if SESSION has expaired
 if(empty($Email_address) || empty($userpsw) || empty($U_NavID)){
 	echo "<script type='text/javascript'>window.location.href = 'http://localhost/suleiman/webcrawler/';</script>"; 
exit();
}else{
 $_SESSION['userlog@Identication@NaviGaTion'] = $U_NavID; 
}

?>