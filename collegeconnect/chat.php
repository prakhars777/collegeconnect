<?php	session_start();
				$usern = $_SESSION["myuser"];
		?>

<!DOCTYPE HTML>
<!--
	MegaCorp by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
	<link rel="icon" href="icon.png">
		<style>
	input[type=text], select {
	
	font-size:120%;
    width: 100%;
    padding: 12px 20px;
	padding-left: 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	font-weight: bold;
	}
	
	input[type=text]:focus {
    background-color: ;
	}
	
	input[type=submit] {
	font-family: "Times New Roman", Times, serif;
	font-size:120%;
    width: 90%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 0px 0;
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
    border: 1px solid #ccc;
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
	
    padding-right: 2px;
	font-size:100%;
	font-weight: bold;
	}
	</style>
		<title>Chat</title>
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
	<body >

		<!-- Header -->
		<div id="header-wrapper" >
		
        	<div id="header" class="container" >
            
            	<div id="logo"><h1><a href="#">CollegeConnect</a></h1></div>
                <nav id="nav">
                    <ul>                        
                        <li><a href="profile.php">My Profile</a></li>
                        <li class="current_page_item"><a href="chat.php">Chat</a></li> 
						<li><a href="maintenance.php">Resources</a></li> 
						<li><a href="members.php">Members</a></li> 
                    </ul>
                </nav>
                
            </div>

		</div>
		
				<div id="featured-wrapper" style="padding-top: 1.5em; height: 11em;">
			
				
						
                        
                            
							
	                            <h3 style="font-size: 2em; font-weight: bold">Welcome <?php echo $usern; ?>!</h3>
                            <pra align="center">
							<form method="post" action="" >
							<table align="right" width="90%"">
							
								<tr>
									
									<td>
									<input type="text" name="message" placeholder="Type your message here...">
									</td>
									<td>
									<input type="submit" name="submit" value="Send">
									</td>
								</tr>
							</table>
							</form>
							</pra>
                            
                            
                            

                        
					
					
				
				
			
			</div>
		
		
		
			<div align="center" style="padding-top: 1.5em" >
			<iframe height="500px" width="750px" id='dynamic-content' src='chatshow.php' style="border:2px solid grey;  border-radius: 4px;"/>
			<div>		
		<hr>
           <footer  ALIGN="center" >
				© Copyright CollegeConnect 2017
				<br>
			Designed & Developed by Prakhar Saxena
		   </footer>			
				
			
		
          


	</body>
	
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "prakhar123";
$dbname = "connect";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
				
session_start();
			
@$a=$_POST['message'];
@$b=$_SESSION["myuser"];	


if(@$_POST['submit']){	
	$sql = "INSERT INTO chat (username, message) VALUES ('$b', '$a')";

if ($conn->query($sql) === TRUE) {
  	
} else {
	
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>