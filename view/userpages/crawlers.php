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
<script type="text/javascript">get_llURL_links("<?php echo $U_NavID; ?>","all");</script>
        <div class="row">
          <div class="col-lg-12">
            <h1>All <small>URL</small> display</h1>
            <div id="LoadingurltMessage" style="text-align: center; color:#5cb85c;">Loading all URL please waite.....</div>
          </div>
          <div class="panel panel-default">
                        <div class="panel-heading">
                            All URL
                            <a onClick="get_llURL_links('<?php echo $U_NavID; ?>','new')" class="btn btn-primary"><i class="fa fa-search"></i> View New Url </a>
                            <a onClick="get_llURL_links('<?php echo $U_NavID; ?>','crawling')" class="btn btn-primary"><i class="fa fa-search"></i> View Crawling Url </a>
                            <a onClick="get_llURL_links('<?php echo $U_NavID; ?>','done')" class="btn btn-primary"><i class="fa fa-search"></i> View Don Url </a>
                            <a onClick="get_llURL_links('<?php echo $U_NavID; ?>','all')" class="btn btn-primary"><i class="fa fa-search"></i> View All Url </a>
                        </div>
                        <div class="panel-body">
                        
                            <div class="table-responsive">

                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>URL</th>
                                            <th>Insert at</th>
                                            <th>Status</th>
                                            <th>HTML Title</th>
                                            <th>External Links</th>
                                            <th>Google Analytics?</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="all_URL_links">
                                       
                                    </tbody>
                                </table>
                            </div>
                            
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
