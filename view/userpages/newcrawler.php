<!DOCTYPE html>
<html lang="en">
<?php
include_once("headlinks.php");
?>
  <body>

    <div id="wrapper">
     <!-- Include navigation links -->
<?php
include_once("navigation.php");
?>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Add new <small>URL</small></h1>
          </div>
          <div class="col-lg-6">

           
          <div id='TextBoxesGroup'>
			<div id="TextBoxDiv1">
              <div class="form-group">
                <label>Type in URL</label>
                <input class="form-control" placeholder="Enter URL" name="URLlink[]" id="URLlink">
                <p class="help-block"></p>
              </div>
             </div>
             <p id="removeMessage" style="color:#F00;"></p>
			 </div>

              <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save Url</button>
              <button type="reset" class="btn btn-primary" id='addButton'><i class="fa fa-edit"></i> Add Url</button> 
              <button type="reset" class="btn btn-danger" id='removeButton'><i class="fa fa-trash-o"></i> Remove Url</button> 
              

<script type="text/javascript" src="assets/sbadmin/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="assets/scripts/addTextBoxvalidation.js"></script>


         

          </div>
        </div>

      </div>

    </div>
<?php
include_once("footer.php");
?>  
  </body>
</html>
