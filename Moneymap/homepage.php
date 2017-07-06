<?php 
include_once "php/checklogin.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/sidebar.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/panel.css">
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
                    <a href="income.php"><div class="col-lg-8 col-lg-offset-2">
                        <div class="col-sm-4">
                            <div class="tile blue">
                                <h3 class="title">Add Income</h3>
                            </div>
                        </div>
                    </a> 
                    <div class="col-sm-2"></div>
                    <a href="expense.php">    
                        <div class="col-sm-4">
                            <div class="tile purple">
                                <h3 class="title">Add Expense</h3>
                            </div>
                        </div>
                    </a>
                    <a href="chart.php">
                        <div class="col-sm-4">
                            <div class="tile red">
                                <h3 class="title">View Piecharts</h3>
                            </div>
                        </div>
                    </a>    
                    <div class="col-sm-2"></div>
                    <a href="budgetset.php">
                        <div class="col-sm-4">
                            <div class="tile green">
                                <h3 class="title">Set budget</h3>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div>
        </div>
        <!-- /#page-content-wrapper -->
        <div class="row">   
            <div id="footer">
                <p>Copyright © GareebiSolutions</p>
            </div>
        </div>     
    </div>
    <!-- /#wrapper -->
        <script type="text/javascript" src="js/sidebar.js"></script>
<script type="text/javascript">
/*$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
</script>
</body>
</html>
