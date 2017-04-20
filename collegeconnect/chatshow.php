<html>
<head>

	<!-- refresh every 5 seconds -->
  <meta http-equiv="refresh" content="5">
</head>
<body  style=" background-color: #C289D1; font-weight: bold;">

  
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

	$sql = "SELECT * FROM (
    SELECT * FROM chat ORDER BY id DESC LIMIT 25
) sub
ORDER BY id ASC";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " " . $row["username"]. " : " . $row["message"]. "<br>";
		}
	} else {
    echo "0 results";
	}
	$conn->close();
	?>
	
</body>
</html>	