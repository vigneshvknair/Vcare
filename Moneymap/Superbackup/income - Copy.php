<?php
 include_once "php/checklogin.php";
?>
<html lang="en">
<head>

    <meta charset="utf-8">
    <!-- Sidebar links -->
    <title>Income</title>
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
   <!-- <script type="text/javascript" src="js/trans/bootstrap-datetimepicker.min.js"></script> -->

</head>
<body>
    <div class="container-fluid" >
        <div class="row" style="border">
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
            <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                   <span class="hamb-top"></span>
        	   	   <span class="hamb-middle"></span>
    	   		   <span class="hamb-bottom"></span>
                </button>
                <div class="container">
                    <div class="row" >
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                        
                        <br><br><br>
                        <form class="form-inline" method="post" action="php/incomeset.php">
                                
                            <div class="col-sm-4"></div>
                            <div class="form-group">
                                &nbsp;
                                <label class="sr-only" for="amount">Amount</label>
                                <div class="input-group">   
                                    <div class="input-group-addon">Rs.</div>
                                    <input type="text" class="form-control" name="amount" id="amount" placeholder="Amount">
                                    <div class="input-group-addon">.00</div>
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
                            <!--<div class="col-md-4"></div>                -->
                            <div class="indent">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="submit" class="btn btn-primary" value="Add Income" />
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

</body>
</html>
