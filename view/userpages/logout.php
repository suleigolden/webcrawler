<?php
error_reporting(E_ALL);
error_reporting(E_ERROR);
session_start();
$_SESSION = array();
	if($_COOKIE[session_name()])
	setcookie(session_name(), '', time()-42000, '/');
	session_destroy();
echo "<script type='text/javascript'>window.location.href = 'http://localhost/suleiman/webcrawler/';</script>"; 
exit();
?>