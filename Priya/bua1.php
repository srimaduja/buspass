<html>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "busreportingapp";

$Name=$_POST['Name'];
$FatnerName=$_POST['FatherName'];
$Dob=$_POST['DoB'];	
$Age=$_POST['Age'];
$FromPlace=$_POST['FromPlace'];
$ToPlace=$_POST['ToPlace'];
$Mobilno=$_POST['Mobilno'];
$Email=$_POST['Email'];
$Address=$_POST['Address'];
$Gender=$_POST['Gendre'];


// Create connection
$conn =  mysqli_connect( $servername, $username, $password, $database);

// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "INSERT INTO bus (Name, FatherName, DoB, Age, FromPlace, ToPlace, Mobilno, Email, Address, Gender)
VALUES ('$Name','$FatherName','$DoB','$Age','$FromPlace','$ToPlace','$Mobilno','$Email','$Address','$Gender')";

if ($conn->query($sql) === TRUE) {
    echo "record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 
</html>

