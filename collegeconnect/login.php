<!DOCTYPE HTML>
<!--
	MegaCorp by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<style>
	input[type=text], select {
	font-family: "Times New Roman", Times, serif;
	font-size:120%;
    width: 100%;
    padding: 12px 20px;
	padding-left: 10px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	
	}
	
	
	
	
	
	
	input[type=text]:focus {
    background-color: ;
	}
	
	input[type=submit] {
	font-family: "Times New Roman", Times, serif;
	font-size:120%;
    width: 30%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	}
	
	
	input[type=password], select {
	font-family: "Times New Roman", Times, serif;
	font-size:120%;
    width: 100%;
    padding: 12px 20px;
	padding-left: 10px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	}

	select {
    width: 100%;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
	}
	input[type=submit]:hover {
    background-color: #41A7EA;
	}

	pra {
    padding-right: 8px;
	font-size:120%;
	font-weight: bold;
	}
	
	form{
		background: #D3CDAE; width: 30%; border: 1px solid white;
    border-radius: 4px;
    box-sizing: border-box;
	padding-top: 15px;
	}
	
	@media only screen and (max-width: 500px) {
	
	form{
		background: #D3CDAE; width: 80%; border: 1px solid white;
   
	}
	
	
	}
	</style>
		<title>Login</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
	<body>

		<!-- Header -->
		<div id="header-wrapper">
		
        	<div id="header" class="container">
            
            	<div id="logo"><h1><a href="#">CollegeConnect</a></h1></div>
                <nav id="nav">
                    <ul>
                        <li><a href="index.php">Homepage</a></li>
                        <li><a href="registration.php">Register</a></li>
                        <li class="current_page_item"><a href="login.php">Login</a></li>
                      
                    </ul>
                </nav>
                
            </div>

		</div>
		<div id="featured-wrapper" style="padding-top: 1.5em; height: 2px; padding-bottom: 4em;">
		 <h3 style="font-size: 3em; ">Login</h3>
		</div>
		
				<div class="container" style="padding-top: 2px" align="center">
					
					
						<pra align="center">
                    	<form method="post" action="process.php">
			<center> <table style="width:80%">
				
				<tr>
					
					<td><input type="text" placeholder="Username" name="user"  required="" >  
					</td>
				</tr>
				<tr>
					
					<td><input type="password" placeholder="Password" name="password" required="">
					</td>
					
				</tr>
			</table>
			<input type="submit" name="submit" value="Login">
			
			
			</form>
		</center>
		</div>
	
        </pra>
		<hr>
         
		   
	</body>
	<footer  ALIGN="center">
				&copy; Copyright CollegeConnect 2017
				<br>
			Designed & Developed by Prakhar Saxena
		   </footer>
</html>