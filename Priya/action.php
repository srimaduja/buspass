<html>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "busreportingapp";

$n1=$_POST['Name'];
$n2=$_POST['FatherName'];
$n3=$_POST['DoB'];	
$n4=$_POST['Age'];
$n5=$_POST['Gender'];
$n6=$_POST['FormPlace'];
$n7=$_POST['ToPlace'];
$n8=$_POST['Mobilno'];
$n9=$_POST['Email'];
$n10=$_POST['Village'];
$n11=$_POST['Address'];


// Create connection
$conn =  mysqli_connect( $servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "INSERT INTO register (Name, FatherName, DoB, Age, Gender, FromPlace, ToPlace, Mobilno, Email, village,Address)
VALUES ('$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8','$n9','$n10','$n11')";

if ($conn->query($sql) === TRUE) {
    echo "record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 
</html>

