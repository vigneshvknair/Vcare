<?php
require "php/checklogin.php";
?>
<html>
<head>

    <meta charset="utf-8">
    <!-- Sidebar links -->
    <title>Expense</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="CSS/sidebar.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <!--DONT USE col-md-4-->

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
          <!-- Sidebar -->
        <div id="wrapper">
            <div class="overlay"></div>


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
                    <div>
                         <form method="post" action="php/expenseset.php" >
                            <div class="row">
                                <div class="form-group col-sm-offset-4 col-sm-4">
                                    <div class="input-group">
                                        <div class="input-group-addon">Rs.</div>
                                        <input type="text" class="form-control" name="amount" id="amount" placeholder="Expense">
                                        <div class="input-group-addon">.00</div>
                                    </div>
                                </div>
                            </div>
                             <input type='hidden' id="cat" name="cat" value=""/>
                            <div class="row">
                                <div class="form-group col-sm-offset-4 col-sm-4">

                                    <select class="form-control" id="category" name="category">

                                        <option value="1">Food</option>
                                        <option value="2">Travel</option>
                                        <option value="3">Party</option>
                                        <option value="4">Miscellaneous</option>
                                    </select>
                                </div>
                            </div>
                            <p>
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class='col-sm-4'>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' name="date" id="date" class="form-control" />
                                            <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    $(function () {
                                      $('#datetimepicker1').datetimepicker({
                                            format: "YYYY/MM/DD hh:mm:ss ",
                                            sideBySide: true
                                        });
                                    });
                                </script>
                            </div>
                            </p>
                            <div class="form-group col-sm-offset-5 col-sm-4">
                                <button type="submit" class="btn btn-primary">Add Expense</button>
                            </div>
                        </form>
                    </div>
                    <!--footer-->
                    <div class="row">
                        <div id="footer">
                            <p>Copyright © GareebiSolutions</p>
                        </div>
                    </div>
                    <!--/footer-->
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->
    </div>
    <!--/#container-fluid-->
<script type="text/javascript" src="js/sidebar.js"></script>
    
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
