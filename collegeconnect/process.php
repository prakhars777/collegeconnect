<?php
	
	
	
	$servername = "localhost";
	$usern = "root";
	$password = "prakhar123";
	$dbname = "connect";
	$url = "profile.php";
	$url2 = "login.php";

// Create connection
$conn = new mysqli($servername, $usern, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	@$u = $_POST['user'];
    	@$p = $_POST['password'];
if(@$_POST['submit']){
	$sql = "select id from user where username = '$u' and password = '$p'";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
			session_start();
			$_SESSION["myuser"] = $u;
			header('Location: '.$url);
    }else{
			echo '<script language="javascript">';
			echo 'alert("Enter correct details")';
			echo '</script>';
			header('Location: '.$url2);
		}
}
?>



