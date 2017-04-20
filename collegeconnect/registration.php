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
    width: 110%;
    padding: 12px 20px;
	padding-left: 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	}
	
	
	form {
		background: #D3CDAE; width: 55%; border: 1px solid white;
    border-radius: 5px;
    box-sizing: border-box;
	padding-top: 20px;
	padding-bottom: 10px;
	}
	input[type=text]:focus {
    background-color:   ;
	}
	
	input[type=submit] {
	font-family: "Times New Roman", Times, serif;
	font-size:120%;
    width: 10%;
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
    width: 110%;
    padding: 12px 20px;
	padding-left: 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	}
	
	select {
    width: 110%;
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
	@media only screen and (max-width: 500px) {
	form {
		width:90%;
		text-align: center;
	}
	pra {
    padding-right: 8px;
	text-align: right;
	font-size:100%;
	font-weight: bold;
	}
	input[type=submit] {
	font-family: "Times New Roman", Times, serif;
	font-size:100%;
    width: 10%;
    background-color: #4CAF50;
    color: white;    
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	}
	
	h3{
		font-weight:bold;
	}
	featured-wrapper.h3{
		font-size:50px;
	}
	
	}
	</style>
		<title>User Registeration</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		
				<script>
					function check()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  
				</script>
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
                        <li class="current_page_item"><a href="registration.php">Register</a></li>
                        <li><a href="login.php">Login</a></li>
                      
                    </ul>
                </nav>
                
            </div>

		</div>
		
		<div id="featured-wrapper" style="padding-top: 1.5em; height: 2px; padding-bottom: 4em;">
		 <h3 style="font-size: 3em; ">New User Registeration</h3>
		</div>
		
			
					<center>
						<pra align="center">
                    	<form  method="post" action="insert.php">
			 <table style="width:85%">
				<col width="26%">
				<tr>
					<td>Name:
					</td>
					<td><input type="text" name="name" placeholder="Full Name" required="">  
					</td>
				</tr>
				<tr>
					<td>Gender:
					</td>
					<td align="left"><input type="radio" name="gender" value="male"> Male
					<input type="radio" name="gender" value="female"> Female
					</td>
					
				</tr>
				<tr>
					<td>Username:
					</td>
					<td><input type="text" name="username" placeholder="Username" required="">
					</td>
				</tr>
				<tr>
					<td>Password:
					</td>
					<td><input type="password" name="password" placeholder="Password" id="pass1" required="">
					</td>
				</tr>
				<tr>
					<td>Confirm Password:
					</td>
					<td><input type="password" name="confirm_password" placeholder="Re-type password" id="pass2" onkeyup="check()" required=""> 
					<span id="confirmMessage" class="confirmMessage"></span>
					</td>
				</tr>
				<tr>
					<td>E-mail:
					</td>
					<td><input type="text" placeholder="E-mail" name="email" required="">
					</td>
				</tr>
				<tr>
					<td>College:
					</td>
					<td><input type="text" name="college" placeholder="College" required=""> 
					</td>
				</tr>
				<tr>
					<td>Branch:
					</td>
					<td><select name="branch">
						<option value="Computer Science">Computer Science</option>
						<option value="Information Technology">Information Technology</option>
						<option value="Mechanical">Mechanical</option>
						<option value="Electrical">Electrical</option>
						<option value="Electronics">Electronics</option>
						<option value="Electronics and Communication">Electronics and Communication</option>
						<option value="Other">Other</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Semester:
					</td>
					<td>
					<input type="radio" name="semester" value="I"> I &nbsp;&nbsp;
					<input type="radio" name="semester" value="II"> II &nbsp;&nbsp;
					<input type="radio" name="semester" value="III"> III &nbsp;&nbsp;
					<input type="radio" name="semester" value="IV"> IV &nbsp;&nbsp;
					<input type="radio" name="semester" value="V"> V &nbsp;&nbsp;
					<input type="radio" name="semester" value="VI"> VI &nbsp;&nbsp;
					<input type="radio" name="semester" value="VII"> VII &nbsp;&nbsp;
					<input type="radio" name="semester" value="VIII"> VIII
					</td>
				</tr>
				<tr>
					<td>City:
					</td>
					<td><input type="text" name="city" placeholder="City"> 
					</td>
				</tr>
				<tr>
					<td>Country:
					</td>
					<td><input type="text" name="country" placeholder="Country">
					</td>
				</tr>
			</table>
			
			
			
			<input  style="width: 25%" type="submit" name="submit" value="Register">
			
			</form>
			
			

		
        </pra>
		</center>
				
		<hr>
           <footer  ALIGN="center">
				&copy; Copyright CollegeConnect 2017
				<br>
			Designed & Developed by Prakhar Saxena
		   </footer>


	</body>
</html>