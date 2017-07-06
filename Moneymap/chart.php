<?php 
require "php/checklogin.php";
include "php/categorysift.php";
$int=1;
$sumarray=array();
for($int=1;$int<=4;$int++)
{
$query="SELECT SUM(expense) as 'Totalsum' FROM `expense` WHERE `id`='$id' AND MONTH(date)= MONTH(CURRENT_TIMESTAMP) AND `category`='$int' ";
   $result=mysql_query($query)or die(mysql_error());
   $row = mysql_fetch_array($result);
   $sumarray[$int-1]=$row['Totalsum'];
    if(is_null($sumarray[$int-1]))
        $sumarray[$int-1]=0;
}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
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
            <input type="hidden" name="n1" id="n2" value='<?php echo ($sumarray[0]);?>' class="form-control">
            <input type="hidden" name="n2" id="n2" value="<?php echo ($sumarray[1]);?>" class="form-control">
            <input type="hidden" name="n3" id="n3" value="<?php echo ($sumarray[2]);?>" class="form-control">
            <input type="hidden" name="n4" id="n4" value="<?php echo ($sumarray[3]);?>" class="form-control">
        
            <script type="text/javascript">
             
$(function () {
  
       
     
    // Radialize the colors
    Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    });

    
        var a= parseFloat($("#n1").val(),10);        
        var b= parseFloat($("#n2").val(),10);
        var c= parseFloat($("#n3").val(),10);
        var d= parseFloat($("#n4").val(),10);
        
      /*  var a=5;
        var b=6;
        var c=7;
        var d=8; */
    
        var a=<?php echo ($sumarray[0]);?>;
        var b=<?php echo ($sumarray[1]);?>;
        var c=<?php echo ($sumarray[2]);?>;
        var d=<?php echo ($sumarray[3]);?>;
    // Build the chart
    $('#container').highcharts({
        
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Expenses for current month'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    },
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: "Spent on",
            data: [
                {name: "Food",y:a},
                {
                    name: "Travel",
                    y:b,
                    sliced: true,
                    selected: true
                },
                {name: "Party", y: c},
                {name: "Misc", y:d}
            ]
        }]
    });
});
		</script>  
            
          
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
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
    <!--footerend--
<script src="js/chart/highcharts.js"></script>
<script src="js/chart/exporting.js"></script> -->

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

	</body>
</html>
