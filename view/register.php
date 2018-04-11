<!DOCTYPE html>
<html>

<?php
include_once("head.php");
?>
<body class="">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                    <h3 style="text-align: center;">
                    	<img src="images/logo.png" alt=""/>
                    </h3>
                       <h3 class="panel-title">
                        Create New Account</h3>
                    </div>
                    <div class="panel-body">
                            <fieldset>
                            	<div class="form-group">
                                    <input class="form-control" type="text" placeholder="Full Name" id="fname" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="Email" placeholder="Email" id="emailprolog" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control"type="password" placeholder="Password" id="passwordprolog" required>
                                </div>
                                <button type="submit" class="btn btn-success" onclick="createAccount();" style="width:100%;">Sign Up</button>
                             <div id="reg_status"></div> 
                             <hr>
                             <a href="?/=home">Already have an Account?. Log In</a> 
                            </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include_once("footer.php");
?>

</body>

</html>
