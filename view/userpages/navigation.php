<?php
$navigate_to = '?/&goto';
?>
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $navigate_to; ?>=dashboard">Suleiman web Crawler</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="<?php echo $navigate_to; ?>=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo $navigate_to; ?>=newcrawler"><i class="fa fa-edit"></i> Add new Crawler</a></li>
            <li><a href="<?php echo $navigate_to; ?>=crawlers"><i class="fa fa-table"></i> View Crawler</a></li>
            
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $getFullName; ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>