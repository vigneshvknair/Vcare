<?php 
require "php/checklogin.php"; ?>
<html lang="en">
<head>

      <meta charset="utf-8">
    <!-- Sidebar links -->
    <title>Expense table range</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="CSS/sidebar.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/sidebar.js"></script>
    <!--DONT USE col-md-4-->
    <!--sidebar end -->
    
     <!--date links-->
    <script type="text/javascript" src="js/trans/moment.js"></script>
    <link rel="stylesheet" type="text/css" href="CSS/trans/bootstrap-datetimepicker.min.css">
    <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>

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
                    <div class="alert alert-success">
  <strong><?php echo $fname?></strong> Which date range do you want your expense to be displayed?
</div>
                    <div class="row">
                        <div class='col-md-5'>
                            <form method="post" action="table.php">
        <div class="form-group">
            <div class='input-group date' id='datetimepicker6'>
                <input type='text' name='date1' id='date1' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class='col-md-5'>
        <div class="form-group">
            <div class='input-group date' id='datetimepicker7'>
                <input type='text' name='date2' id="date2" class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker6').datetimepicker({format: "YYYY/MM/DD"});
        
        $('#datetimepicker7').datetimepicker({
            format: "YYYY/MM/DD",
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>
                            <div class="form-group col-sm-offset-5 col-sm-4">
                                <button type="submit" class="btn btn-primary">Submit Range</button>
                            </div>
                            </form>
                    </div>
            </div>
            <!-- /#page-content-wrapper -->
                  
        </div>
        <!-- /#wrapper -->
    </div>
    <!--/#container-fluid-->    
    </div>

   <!--footer-->
    <div id="footer">
		
			<div id="connect">
				<a href="https://www.facebook.com/vignesh.vk" target="_blank" class="button pulse"></a>
			
			</div>
			<p>
				© 2015 Moneymap. All Rights Reserved.
			</p>
		
	</div>
    <!--footerend-->
</body>
</html>
