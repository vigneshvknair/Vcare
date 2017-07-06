<?php
 include "php/checklogin.php";
 $month = date("m");
$query="SELECT * FROM `income` WHERE `id`='$id' AND MONTH(date) = '$month'";
$result=mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result) or die(mysql_error());
$income= $row['income'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Bootstrap Pricing Slider [Mobile Touch UI] - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    
    
    <!---GENERAL STUFF --->

    
    <!----CSS -->
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 
    <!--sidebar requirements-->
   
     <!-- Sidebar links -->
     <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/sidebar.js"></script>
    <link rel="stylesheet" type="text/css" href="CSS/sidebar.css">
    
  
    <!--DONT USE col-md-4-->
    <!---sidebar end-->

    <!-- GENERAL STUFF END---> 
   
    
    
    <!--- scroll stuff -->
    <script src="js/Bscroll/budgetset.js"></script>
    <script src="js/Bscroll/budgettouch.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bset/bset.css"/>
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>  
    <!--- scroll stuff end -->
    
    
    
    
</head>
<body>

  
      
    
    <!-- header --
        <div class="jumbotron" style="background-color: #80CBC4;">
	<h1 align=center>MoneyMap</h1>
	<div class="one" style="position:absolute;
	right:100px;">
		<ul class="nav nav-pills" padding:right>
  			<li role="presentation" class="active"><a href="www.google.com">Home</a></li>
  			<li role="presentation"><a href="www.google.com">Sign In</a></li>
  			<li role="presentation"><a href="www.google.com">About Us</a></li>
			<li role="presentation"><a href="www.google.com">Contact Us</a></li>
		</ul>
  	</div>
</div>
    -->
    
   
            <!-- Sidebar -->
             <div class="container-fluid">
                 <div class="row">
            <div class="jumbotron">
                <h1 align=center>MoneyMap</h1>
            </div>  
        </div> 
            <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        MoneyMap
                    </a>
                </li>
                <li>
                    <a href="#">Edit Profile</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Wallet<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <!--<li class="dropdown-header">Dropdown heading</li>-->
                        <li><a href="#">Balance</a></li>
                        <li><a href="#">Expenditure</a></li>
                        <li><a href="#">Savings</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                <li>
                    <a href="#">Log Out</a>
                </li>
            </ul>
            </nav>
    </div>
            <!-- /#sidebar-wrapper -->
    
    
   
      <!-- START -->
    <div class="container">
                 <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
              <span class="hamb-top"></span>
              <span class="hamb-middle"></span>
              <span class="hamb-bottom"></span>
            </button>
                     
                     
      <div class="price-box">

        <form id="myform" method="post" class="form-horizontal form-pricing">

          <!-- <div class="price-slider">
            <h4 class="great">MONTHLY INCOME</h4>
            <span>Minimum $10 is required</span>
            <div class="col-sm-12">
          <!--  <input name="amt" style="width:400px;"required type="number" /> 
            <div id="slider"></div>
              </div>
          </div> -->
          <div class="price-slider">
            <h4 class="great">% of Budget I want to Save</h4>
            
            <div class="col-sm-12">
              <div id="slider2"></div>
            </div>
          </div>

          <div class="price-form">

            <div class="form-group">
              <label for="amount" class="col-sm-6 control-label">Amount ($): </label>
              <span class="help-text">Please choose your amount</span>
              <div class="col-sm-6">
                <input type="hidden" name="amount" id="amount" value="<?php echo $income; ?>"  class="form-control">
                <p class="price lead" id="amount-label"></p>
                <span class="price">.00</span>
              </div>
            </div>
            <div class="form-group">
              <label for="duration" class="col-sm-6 control-label">Duration: </label>
              <span class="help-text">Choose your commitment</span>
              <div class="col-sm-6">
                <input type="hidden" name="duration" id="duration" class="form-control">
                <p class="price lead" id="duration-label"></p>
                <span class="price">days</span>
              </div>
            </div>
            <hr class="style">
              
            <div class="form-group total">
              <label for="total" class="col-sm-6 control-label"><strong>Saving: </strong></label>
              <span class="help-text">Amount to be saved:</span>
              <div class="col-sm-6">
                <input type="hidden" name="total" id="total" class="form-control">
                <p class="price lead" id="total-label"></p>
                <span class="price">.00</span>
              </div>
            </div>
              <br>  
             <div class="form-group total">
              <label for="budget" class="col-sm-6 control-label"><strong>Budget: </strong></label>
              <span class="help-text">Budget for the month:</span>
              <div class="col-sm-6">
                <input type="hidden" name="budget" id="budget" class="form-control">
                <p class="price lead" id="budget-label"></p>
                <span class="price">.00</span>
              </div>
            </div>
              
              
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary btn-lg btn-block"> Proceed <span class="glyphicon glyphicon-chevron-right pull-right" style="padding-right: 10px;"></span></button>
            </div>
          </div>
         
        </form>

      

      </div>

    </div>
    </div>
      
    
</body>
</html