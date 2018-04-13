//Default function to get and return Element By Id
function _(el) {
  return document.getElementById(el);
}
//function to Check if the uer type correct email address
function check_Emaildd(emailID) {
  if (!emailID.match(/\S+@\S+\.\S+/)) {
    return false;
  }
  if (emailID.indexOf(" ") != -1 || emailID.indexOf("..") != -1) {
    return false;
  }
  return true;
}
//Check if the user input is empty
function checkEmptyval(value){
	if(value==null || value=="" || value==" "){
		return "true";
	}else{
		return "false";
	}
}

//Create new user account
function checkEmail(){
	 var hr = new XMLHttpRequest(); // Create our XMLHttpRequest object
    var url = "controller/user_authenticationlog.php"; // Create some variables we need to send to our user_authenticationlog PHP file
    var eml = _("emailprolog").value;
    var vars = "checkemail_login="+eml;
    hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");  // Set content type header information for sending url encoded variables in the request
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
      if(hr.readyState == 4 && hr.status == 200) {
        var return_data = hr.responseText;
        if(return_data =="true" || return_data.includes("true")){
        	_("check_status").innerHTML = "<label style='color:#5cb85c;'>"+eml+" is OK!</label>";
         }else{
           _("emailprolog").value = "";
           _("check_status").innerHTML = "<label style='color:#F00;'>"+eml+" is taken, please select another email address!</label>";;
        }
      
      }
    }

	if(this.checkEmptyval(eml) =="true"){
		      _("check_status").innerHTML = "<label style='color:#F00; background-color:#FFF; '>Email can Not be Empty.</label>";       
	  }else if(!this.check_Emaildd(eml)){
	      _("check_status").innerHTML = "<label style='color:#F00; background-color:#FFF; '>Type in correct email address.</label>";
	  }else{
	    hr.send(vars); 
	    _("check_status").innerHTML = "<label style='color:#5cb85c;'>processing log in.....</label>";
	}
}
//Create new user account
function createAccount(){
    var hr = new XMLHttpRequest();
    var url = "controller/user_authenticationlog.php";
    var F_Name = _("fname").value;
    var eml = _("emailprolog").value;
    var pswd = _("passwordprolog").value;  

    var vars = "Full_Name="+F_Name+"&emailreg="+eml+"&passwordreg="+pswd;
    hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function() {
      if(hr.readyState == 4 && hr.status == 200) {
        var return_data = hr.responseText;
        if(return_data =="true" || return_data.includes("true")){
           window.location = "?/=userlog&goto=dashboard";
         }else{
           _("reg_status").innerHTML = return_data;
        }
        
      }
    }
   
	if(checkEmptyval(F_Name) =="true"){
	      _("reg_status").innerHTML = "<label style='color:#F00; background-color:#FFF; '>Full Name can Not be Empty.</label>";
	  }else if(this.checkEmptyval(eml) =="true"){
	      _("reg_status").innerHTML = "<label style='color:#F00; background-color:#FFF; '>Email can Not be Empty.</label>";       
	  }else if(!this.check_Emaildd(eml)){
	      _("check_status").innerHTML = "<label style='color:#F00; background-color:#FFF; '>Type in correct email address.</label>";
	  }else if(this.checkEmptyval(pswd) =="true"){
	      _("reg_status").innerHTML = "<label style='color:#F00; background-color:#FFF; '>Password can Not be Empty.</label>";
	  }else{
	    hr.send(vars);     
	    _("reg_status").innerHTML = "<label style='color:#5cb85c;'>processing registration.....</label>";
	}
}
//Log in the user to dashboard function 
function login_user(){
    var hr = new XMLHttpRequest();
    var url = "controller/user_authenticationlog.php";
    var eml = _("emailprolog").value;
    var pswd = _("passwordprolog").value;
    var vars = "email_login="+eml+"&passwordone_login="+pswd;
    hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    hr.onreadystatechange = function() {
      if(hr.readyState == 4 && hr.status == 200) {
        var return_data = hr.responseText;
        if(return_data =="true" || return_data.includes("true")){
           window.location = "?/=userlog&goto=dashboard";
         }else{
           _("logIn_status").innerHTML = return_data;
        }
      
      }
    }
	if(this.checkEmptyval(eml) =="true"){
		      _("logIn_status").innerHTML = "<label style='color:#F00; background-color:#FFF; '>Email can Not be Empty.</label>";       
		  }else if(!this.check_Emaildd(eml)){
		      _("logIn_status").innerHTML = "<label style='color:#F00; background-color:#FFF; '>Type in correct email address.</label>";
		  }else if(this.checkEmptyval(pswd) =="true"){
		      _("logIn_status").innerHTML = "<label style='color:#F00; background-color:#FFF; '>Password can Not be Empty.</label>";
		  }else{
	    hr.send(vars); 
	    _("logIn_status").innerHTML = "<label style='color:#5cb85c;'>processing log in.....</label>";
	}
}

function SaveUrl(){
var hr = new XMLHttpRequest();
var url = "controller/user_authenticationlog.php";
var links = document.getElementsByName("URLlink[]");
var allurl = "";
var i; var chk = "";
for (i = 0; i < links.length; i++) {
        if (links[i].value) {
            allurl = allurl + links[i].value + "*^*";
            chk = "yes";
        }else{
            chk = "no";
        }
    }
  var vars = "Savenew_Url_log="+allurl;
    hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    hr.onreadystatechange = function() {
      if(hr.readyState == 4 && hr.status == 200) {
        var return_data = hr.responseText;
         _("saveMessage").innerHTML = return_data;
      }
    }

    if(this.checkEmptyval(allurl) =="true" || chk== "no"){
      _("saveMessage").innerHTML = "<label style='color:#F00; background-color:#FFF; '>Url can Not be Empty.</label>";
    }else{
       hr.send(vars); 
      _("saveMessage").innerHTML = "<label style='color:#5cb85c;'>Saving Url.....</label>";
    }
    
}

function get_llURL_links(user,type){
  var vars = "displayAllURldetails="+user+"&view_type="+type;
  var hr = new XMLHttpRequest();
  var url = "controller/user_authenticationlog.php";
  hr.open("POST", url, true);
  hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  hr.onreadystatechange = function() {
    if (hr.readyState == 4 && hr.status == 200) {
      var return_data = hr.responseText;
        _("all_URL_links").innerHTML =return_data;
        _("LoadingurltMessage").innerHTML = "";
    }
  }
  hr.send(vars);
  //_("LoadingurltMessage").innerHTML = "<label style='color:#5cb85c;'>Loading all URL please waite.....</label>";
  
}

function deleteURL(link){
var vars = "Deletethis_URldetails="+link;
  var hr = new XMLHttpRequest();
  var url = "controller/user_authenticationlog.php";
  hr.open("POST", url, true);
  hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  hr.onreadystatechange = function() {
    if (hr.readyState == 4 && hr.status == 200) {
      var return_data = hr.responseText;
       if(return_data =="true" || return_data.includes("true")){
          _("urldelterecord"+link).innerHTML = "";
         }else{
           _("urldeltemessage"+link).innerHTML = "<i style='color:#5cb85c;'>Error..</i>";
        }
        
    }
  }
  hr.send(vars);
  _("urldeltemessage"+link).innerHTML = "<i style='color:#5cb85c;'>deleting...</i>";
  
}

function CrawlURL(urlid,url){
var vars = "IDCrawlURL="+urlid+"&DCrawlURL_this_URldetails="+url;
  var hr = new XMLHttpRequest();
  var url = "controller/user_authenticationlog.php";
  hr.open("POST", url, true);
  hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  hr.onreadystatechange = function() {
    if (hr.readyState == 4 && hr.status == 200) {
      var return_data = hr.responseText;
       if(return_data =="failed" || return_data.includes("failed")){
          _("crawlStatus"+urlid).innerHTML = "<i style='color:#5cb85c;'>crawling failed</i>";
         }else{
           _("urldelterecord"+urlid).innerHTML = return_data;
        }
        
    }
  }
  hr.send(vars);
  _("crawlStatus"+urlid).innerHTML = "<i style='color:#5cb85c;'>crawling</i>";
  _("urlcrawmessage"+urlid).innerHTML = "<i style='color:#5cb85c;'>crawling</i>";
  
}