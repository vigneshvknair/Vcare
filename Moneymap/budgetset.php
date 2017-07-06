<?php
 require "php/checklogin.php";
 $month = date("m");
$query="SELECT * FROM `income` WHERE `id`='$id' AND MONTH(date) = '$month'";
$result=mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result) or die(mysql_error());
$income= $row['income'];

?>
<html lang="en">
<head>

    <meta charset="utf-8">
    <!-- Sidebar links -->
    <title>Set Budget</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="CSS/sidebar.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/sidebar.js"></script>
    <!--DONT USE col-md-4-->
    <!--sidebar end -->
    
    
    <!--- scroll stuff -->
    <script src="js/Bscroll/budgetset.js"></script>
    <script src="js/Bscroll/budgettouch.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bset/bset.css"/>
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>  
    <!--- scroll stuff end -->
</head>
<body>
    <div class="container-fluid" >
        <div class="row">
            <div class="jumbotron">
                <h1 align=center>MoneyMap</h1>
            </div>  
        </div>  
        <div id="wrapper">
            <div class="overlay"></div>
    
            <!-- Sidebar -->
            <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="homepage.php">
                       MoneyMap
                    </a>
                <li>
                     <a href="expense.php">Add expense</a>
                </li>
                <!--<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Wallet<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Dropdown heading</li>
                    <li><a href="#">Balance</a></li>
                    <li><a href="#">Expenditure</a></li>
                    <li><a href="#">Savings</a></li>
                  </ul>
                </li>-->
                <li>
                    <a href="homepage.php">Home</a>
                </li>
                <li>
                    <a href="tablemonth.php">Your history</a>
                </li>
                <li>
                    <a href="chart.php">Chart</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                <li>
                    <a href="php/logout.php">Log Out</a>
                </li>
            </ul>
        </nav>
            <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                   <span class="hamb-top"></span>
        	   	   <span class="hamb-middle"></span>
    	   		   <span class="hamb-bottom"></span>
                </button>
                <div class="container">
                    <div class="row">
                           <div class="alert alert-success">
  <strong><?php echo $fname?></strong> <?php 
    $query="SELECT * FROM `budget` WHERE `id`='$id' AND MONTH(date) = '$month'";
$result=mysql_query($query) or die(mysql_error());
    if($result)
{
$row = mysql_fetch_array($result) or die(mysql_error());
$bud= $row['budget'];
echo "Your currently set budget is Rs.";
echo $bud;
}
else
{
    echo "Set your budget for the current month";
}
?>
</div>
                             <!-- scroll stuff begin -->
                         <div class="price-box">

        <form id="myform" method="post" action="php/budset.php" class="form-horizontal form-pricing">

          <!-- <div class="price-slider">
            <h4 class="great">MONTHLY INCOME</h4>
            <span>Minimum $10 is required</span>
            <div class="col-sm-12">
          <!--  <input name="amt" style="width:400px;"required type="number" /> 
            <div id="slider"></div>
              </div>
          </div> -->
          <div class="price-slider">
            <h4 class="great">% of Income I want to Save</h4>
            
            <div class="col-sm-12">
              <div id="slider2"></div>
            </div>
          </div>

          <div class="price-form">

            <div class="form-group">
              <label for="amount" class="col-sm-6 control-label">Income (Rs): </label>
              <span class="help-text">Income of the month</span>
              <div class="col-sm-6">
                <input type="hidden" name="amount" id="amount" value="<?php echo $income; ?>"  class="form-control">
                <p class="price lead" id="amount-label"></p>
                <span class="price">.00</span>
              </div>
            </div>
            <div class="form-group">
              <label for="duration" class="col-sm-6 control-label">I want to save: </label>
              <span class="help-text"></span>
              <div class="col-sm-6">
                <input type="hidden" name="duration" id="duration" class="form-control">
                <p class="price lead" id="duration-label"></p>
                <span class="price">%</span>
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
                        <!-- scroll stuff end -->
                        
                    </div>
            </div>
            <!-- /#page-content-wrapper -->
                  
        </div>
        <!-- /#wrapper -->
    </div>
    <!--/#container-fluid-->    
    </div>
 <!--footer-->
   
   
	</div>
    <!--footerend-->
</body>
</html>
