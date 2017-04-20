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
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	}
	
	input[type=text]:focus {
    background-color: #757479;
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
	
    padding-right: 8px;
	font-size:120%;
	font-weight: bold;
	}
	</style>
		<title>User Profile</title>
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
	if ($_GET['link'])
{
	$l = $_GET['link'];

}			

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		if($l== $row["username"])
		{
			$a=$row["username"];
			$b=$row["name"];
			$c=$row["email"];
			$d=$row["gender"];
			$e=$row["branch"];
			$f=$row["semester"];
			$g=$row["city"];
			$h=$row["country"];
			$i=$row["about"];
			$j=$row["college"];
       
		}
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

		<!-- Header -->
		<div id="header-wrapper">
		
        	<div id="header" class="container">
            
            	<div id="logo"><h1><a href="#">CollegeConnect</a></h1></div>
                <nav id="nav">
                    <ul>                        
                        <li class="current_page_item"><a href="profile.php">User Profile</a></li>
                        <li><a href="chat.php">Chat</a></li>    
						<li><a href="maintenance.php">Resources</a></li> 
						<li><a href="members.php">Members</a></li> 
                    </ul>
                </nav>
                
            </div>

		</div>
		
		<div id="box"> 
			
			
			
			
				<div class="container"  align="center" style="padding-top: 20px">
					
						
                        
                            <header>
	                            <h3 style="font-size: 3em; font-weight: bold;">Profile</h3>
                            </header>
							<br><br>
                            <span class="pennant"><span class="fa fa-user"></span></span>
                            <pra align="center">
							<div align="center" style="width: 320px; padding: 2px; border: 5px solid gray;   margin: 0; ">
								<strong>About: </strong>
								<br>
								<?php echo $i; ?>
							</div>
							<br>
							<table>
							<col width="50px">
								<tr style="border-top: 1px solid #212124">
									<td align="right" style="padding-right:20px">Name:
									</td>
									<td align="left"><?php echo $b; ?>
									</td>
								<tr>
								<tr>
									<td align="right" style="padding-right:20px">Gender:
									</td>
									<td align="left"><?php echo $d; ?>
									</td>
								<tr>
								<tr>
									<td align="right" style="padding-right:20px">Username:
									</td>
									<td align="left"><?php echo $a; ?>
									</td>
								<tr>
								<tr>
									<td align="right" style="padding-right:20px">E-mail:
									</td>
									<td align="left"><?php echo $c; ?>
									</td>
								<tr>
								<tr>
									<td align="right" style="padding-right:20px">College:
									</td>
									<td align="left"><?php echo $j; ?>
									</td>
								<tr>
								<tr>
									<td align="right" style="padding-right:20px">Branch:
									</td>
									<td align="left"><?php echo $e; ?>
									</td>
								<tr>
								<tr>
									<td align="right" style="padding-right:20px">Semester:
									</td>
									<td align="left"><?php echo $f; ?>
									</td>
								<tr>
								<tr>
									<td align="right" style="padding-right:20px">City:
									</td>
									<td align="left"><?php echo $g; ?>
									</td>
								<tr>
								<tr>
									<td align="right" style="padding-right:20px">Country:
									</td>
									<td align="left"><?php echo $h; ?>
									</td>
								<tr>
								<tr style="border-top: 1px solid #212124">
									<td></td>
									<td></td>
								<tr>
							</table>
							</pra>
							<br>
                            
							<a href="logout.php" class="button button-style1">Log Out</a>
                       
						
                        
					
					</div>
				</div>
				
			
			<br>
		<hr>
           <footer  ALIGN="center">
				&copy; Copyright CollegeConnect 2017
				<br>
			Designed & Developed by Prakhar Saxena
		   </footer>


	</body>
</html>