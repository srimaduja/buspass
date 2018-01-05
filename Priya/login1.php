<html>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "busreportingapp";

$n11=$_POST['PUsername'];
$n12=$_POST['PId'];
$n13=$_POST['PEmail'];

// Create connection
$conn =  mysqli_connect( $servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "INSERT INTO login(PUsername, PId, PEmail) VALUES ('$n11','$n12','$n13')";

if ($conn->query($sql) === TRUE) {
    echo "record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 
</html>

