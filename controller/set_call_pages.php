<?php

class Controller_pages {

 //Function to Navigate to Home page and handle naviagtion before the user log in to his/her page 
public function HomePage(){
    //include_once("view/home.php");
    $this -> CheckpageNotFound("view/home.php");
}
//Function to Navigate to user define page
public function set_New_pages($page){ 
 
 //Remove the Question mark (?) and  assign .php to the name before Navigating to the page
 $page = strtok($page, '?');
 $this -> CheckpageNotFound("view/".$page.".php");      
 }
//function to handle all the navugation of user page
 public function profile_UserDashboard($dir, $userpage){
 	if($userpage == "dashboard"){
      $this ->CheckpageNotFound("view/userpages/dashboard.php");
    }else{
       $userpage = strtok($userpage, '?');
     $this ->CheckpageNotFound("view/userpages/".$userpage.".php");
      
    }
 }


function CheckpageNotFound($page){
  $not_found = "404notfound";
if(!file_exists($page)){
        return include_once("view/".$not_found.".php");
      } else {
        return include_once($page);
      }
 }


}

?>
