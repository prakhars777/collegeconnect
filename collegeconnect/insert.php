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
@$a=$_POST['name'];
@$b=$_POST['gender'];
@$c=$_POST['username'];
@$d=$_POST['password'];
@$e=$_POST['email'];
@$f=$_POST['college'];
@$g=$_POST['branch'];
@$h=$_POST['semester'];
@$i=$_POST['city'];
@$j=$_POST['country'];
if(@$_POST['submit'])
{
	$check=mysqli_query($conn,"select * from user where username='$c'");
    $checkrows=mysqli_num_rows($check);
	 if($checkrows>0) {
      echo "Username ". $c . " Already Exist! Please select a differen username";
   } else{
	
	$sql = "INSERT INTO user (name, gender, username, password, email, college, branch, semester, city, country) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j')";

if ($conn->query($sql) === TRUE) {
	
  	echo '<script language="javascript">';
	echo 'alert("Registration Successful")';
	echo '</script>';
} else {
	
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
}

?> 
<html><head></head>

<body>	
	<br>
	<a href="login.php"> Please click here to continue... </a>	

</body>

</html>