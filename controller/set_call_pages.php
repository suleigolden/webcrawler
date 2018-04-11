<?php

class Controller_pages {

//Navigate to Home page 
public function HomePage(){
    include_once("view/home.php");
}

//Navigate to user define page
public function set_New_pages($page){

//Remove the Question mark (?) and  assign .php to the name before Navigating to the page 
 $page = strtok($page, '?');
 include_once("view/".$page.".php");
        
 }


}

?>
