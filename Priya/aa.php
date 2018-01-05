<html>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "registerform";

$n1=$_POST['Gender'];
$n2=$_POST['Name*'];
$n3=$_POST['FatherName'];
$n4=$_POST['DoB'];
$n5=$_POST['Age'];
$n6=$_POST['FromPlace'];
$n7=$_POST['ToPlace'];
$n8=$_POST['Mobilno'];
$n9=$_POST['E-mail'];
$n10=$_POST['Address'];
// Create connection
$conn =  mysqli_connect( $servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "INSERT INTO register (Gender, Name*, FatherName, DoB, Age, FromPlace, ToPlace, Mobilno, E-mail, Address)
VALUES ('$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8','$n9','$n10')";
if ($conn->query($sql) === TRUE) {
    echo "record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 
</html>