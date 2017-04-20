<!DOCTYPE HTML>
<!--
	MegaCorp by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                         <li><a href="profile.php">My Profile</a></li>
                        <li><a href="chat.html">Chat</a></li> 
						<li><a href="maintenance.php">Resources</a></li> 
						<li class="current_page_item"><a href="members.php">Members</a></li> 
                      
                    </ul>
                </nav>
                
            </div>

		</div>
		
		<div id="featured-wrapper" style="padding-top: 1.5em; height: 2px; padding-bottom: 4em;">
		 <h3 style="font-size: 3em; ">Members</h3>
		</div>
		
			<div class="row">
				<div class="\-2.4u">Name</div>
				<div class="\-2.4u">College</div>
				<div class="\-2.4u">Branch</div>
				<div class="\-2.4u">Semester</div>
				<div class="\-2.4u">City</div>
			</div>	
		
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
				
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		
			$a=$row["branch"];
			$b=$row["name"];
			$c=$row["city"];
			$d=$row["college"];
			$e=$row["semester"];
			$f=$row["username"];
			echo '<table>';
			echo '<tr align="center">';
			echo  	'<td><a href = "member.php?link='. $f .'" style="text-decoration:none">'.$b.'</a></td>';
			echo	'<td>'.$d.'</td>';
			echo	'<td>'.$a.'</td>';
			echo	'<td>'.$e.'</td>';
			echo	'<td>'.$c.'</td>';
			echo '</tr>';
			echo '</table>';
		
		 
		
		
    }
} else {
    echo "0 results";
	
	
}



mysqli_close($conn);
?>

			
			
				
		<hr>
           <footer  ALIGN="center">
				&copy; Copyright CollegeConnect 2017
				<br>
			Designed & Developed by Prakhar Saxena
		   </footer>


	</body>
</html>