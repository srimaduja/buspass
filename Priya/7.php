<html>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "busreportingapp";

$n1=$_POST['Name'];
$n2=$_POST['FatherName'];
$n3=$_POST['Route'];	
$n4=$_POST['PNo'];
$n5=$_POST['Email'];
$n6=$_POST['Address'];
$n7=$_POST['IdProof'];

// Create connection
$conn =  mysqli_connect( $servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "INSERT INTO renewal (Name, FatherName, Route, PNo, Email, Address, IdProof)
VALUES ('$n1','$n2','$n3','$n4','$n5','$n6','$n7')";

if ($conn->query($sql) === TRUE) {
    echo "record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 
</html>

