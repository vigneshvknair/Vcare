<?php 
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
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
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
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form method="post" action="php/signin.php" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label class="user" data-icon="u" > Your email or username </label>
                                    <input name="user" required type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label class="pass" data-icon="p"> Your password </label>
                                    <input name="pass" required type="password" value="" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                  <input id="button" type="submit" name="submit" value="Log-In"> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            
                            
                            
                            
                            
                            <form id="signupform" method="post" action="php/signup.php"> 
                                <h1> Sign up </h1> 
                               
                                <p> 
                                    <label class="name" data-icon="u">Your fullname</label>
                                    <input name="name" required type="text" value="John" placeholder="John hamm" />
                                </p>
                                <p> 
                                    <label class="mail" data-icon="e" > Your email</label>
                                    <input name="email" required type="email" value="John@gmail.com" placeholder="mysupermail@mail.com"/> 
                                </p>
                                 <p> 
                                    <label class="uname" data-icon="u">Your username</label>
                                    <input name="user" required type="text" value="John" placeholder="username" />
                                </p>
                                <p> 
                                    <label class="youpasswd" data-icon="p">Your password </label>
                                    <input name= "pass" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers." required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"  type= "password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input name="cpass" title="Please enter the same Password as above." type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" placeholder="eg. X8df!90EO"/>
                                </p>
                               
                               
                               
                               
                               
                                <p class="signin button"> 
									<input id="button" type="submit"  name="submit" value="Sign up"/> 
								</p>
                                
                                
                                
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
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