<html>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "busreportingapp";

$n1=$_POST['uname'];
$n2=$_POST['uemail'];
$n3=$_POST['ureport'];	

// Create connection
$conn =  mysqli_connect( $servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "INSERT INTO reportform (uname, uemail,ureport)
VALUES ('$n1','$n2','$n3')";

if ($conn->query($sql) === TRUE) {
    echo "record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 
</html>