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
				
$sql = "SELECT id, username, name, email, college FROM user";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		
			$a=$row["id"];
			$b=$row["name"];
			$c=$row["email"];
			$d=$row["college"];
			
			
			
			echo '<tr align="center">';
			echo  	'<td>'.$b.'</td>';
			echo	'<td>'.$d.'</td>';
			echo	'<td>'.$a.'</td>';
			echo	'<td>'.$e.'</td>';
			echo	'<td>'.$c.'</td>';
			echo '</tr>';
		
		
		 
		
		
    }
} else {
    echo "0 results";
	
	
}



mysqli_close($conn);
?>
