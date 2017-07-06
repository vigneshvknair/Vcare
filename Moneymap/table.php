<?php 
require "php/checklogin.php";
include "php/categorysift.php";
 $date1 =str_replace("/","-",$_POST['date1']);
    $date1=str_replace(":","",$date1);
    $date1=str_replace(" ","",$date1);
    $month1=substr($date1,4,2);
    //echo $date1;
    //echo "-------";
 $date2 =str_replace("/","-",$_POST['date2']);
    $date2=str_replace(":","",$date2);
    $date2=str_replace(" ","",$date2);
    $month2=substr($date2,4,2);
    //echo $date2;
    //echo "-------";
$query="SELECT * FROM `expense` WHERE `id`='$id' AND DATE(date) >= '$date1' AND DATE(date) < '$date2'";
   $result=mysql_query($query)or die(mysql_error());
    $int=0;
    


?>
<html>
<head>

      <meta charset="utf-8">
     <style type="text/css">
        .custab{
    border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }
    </style>
    <!-- Sidebar links -->
    <title>Expense Table</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="CSS/sidebar.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/sidebar.js"></script>
    <!--DONT USE col-md-4-->
    <!--sidebar end -->
     
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

                    </div>
            </div>
            <!-- /#page-content-wrapper -->
                  
        </div>
           
            
            <!-- table -->
            
           
            <div class="row col-md-6 col-md-offset-2 custyle">
                
    <table class="table table-striped custab">
    
    <a href="expense.php" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new expense</a>
        <tr>
            <th>SRNO</th>
            <th>Date</th>
            <th>Category</th>
            <th>Expense</th>
            
        </tr>
    
        <?php
         
            while($row = mysql_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo ++$int?></td>
                    <td><?php echo $row['date']?></td>
                    <td><?php $cat=$row['category'];sift($cat);?></td>
                    <td><?php echo "Rs."; echo $row['expense']?></td>
                
                </tr>

            <?php
            }
            ?>
          
        
    </table>

    </div>
        <!-- table -->
    </div>
        <!-- /#wrapper -->
        
    </div>
    <!--/#container-fluid-->
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
