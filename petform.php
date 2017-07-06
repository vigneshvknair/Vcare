<?php
require "php/checklogin.php";

if (isset($_GET['Message'])) {
    $msg=$_GET['Message'];
}
else
    $msg=0;
?>

<html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Pet form" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <link rel="shortcut icon" href="../favicon.ico">
         <link rel="stylesheet" type="text/css" href="CSS/sidebar.css">
        <script src="../moneymap/js/login/signup.js"></script>
        <link rel="stylesheet" type="text/css" href="css/login/loginmodule.css" />
		<link rel="stylesheet" type="text/css" href="css/login/loginanimate-custom.css" />

        <!-- Latest compiled and minified CSS -->

    </head>
    <body>
        <div class="jumbotron" style="background-color: #80CBC4;">
	<h1 align=center>MoneyMap</h1>
	<div class="one" style="position:absolute;
	right:100px;">

  	</div>
</div>

        <div class="alert alert-info" id="alerty">
            <p align=center><?php echo $msg;?></p>
</div>


            <section>
                <div id="container_demo" >
                    <a class="hiddenanchor" id="petform"></a>
                    <div id="wrapper">

                        <div id="petform" class="animate form">





                            <form id="signupform" method="post" action="php/signup.php">
                                <h1> Pet details </h1>

                                <p>
                                    <label class="name" data-icon="u">Pet's name</label>
                                    <input name="pname" required type="text" value="John" placeholder="Mithila" />
                                </p>
                                <p>
                                    <label class="name" data-icon="u">Pet's age</label>
                                    <input name="age" required type="text" value="John" placeholder="Singhal" />
                                </p>
                                <p>
                                    <label class="mail" data-icon="e" > Species</label>
                                    <input name="species" required type="text" value="A cuddly dog" placeholder="Dog"/>
                                </p>
                                <p>
                                    <label class="phone" data-icon="u"> Photo </label>
                                  <input type="file" name="pic" accept="image/*">
                                </p>
                                 <p>


                                <p class="signin button">
									<input id="button" type="submit"  name="submit" value="Submit"/>
								</p>




                            </form>

                        </div>

                    </div>


                        </div>


            </section>


        <!-- Google signup
        <a href="https://goo.gl/rUoUQp"><img src="php/Login/Google/images/glogin.png"></a> -->

        <!--footer-->
   <!-- <div id="footer">

			<div id="connect">
				<a href="https://www.facebook.com/vignesh.vk" target="_blank" class="button pulse"></a>

			</div>
			<p>
				© 2015 Moneymap. All Rights Reserved.
			</p>

	</div>
    <!--footerend-->

         <script type="text/javascript">

        var msg=<?php echo $msg; ?>;
        var div = document.getElementById('alerty');

        //window.alert(msg);
        if(msg=='0')
       div.style.visibility = 'hidden';

        </script>


    </body>
</html>
