<html>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "busreportingapp";


// Create connection
$conn =  mysqli_connect( $servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
echo "<br> " . "Name". "  -----  " . "FatherName". "  -----  ". "DoB". "  -----  ". "Age". "  -----  " . "Gender". "  -----  "  . "FromPlace". "  -----  " . "ToPlace". "  -----  " . "Mobilno". "  -----  " . "Email". " ------    " . "Address". "<br>";

$sql = "SELECT Name, FatherName, DoB, Age, FromPlace, ToPlace, Mobilno, Email, Address, Gender FROM bus";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<br>" .$row["Name"]. " ----- " .$row["FatherName"]. " ------ " .$row["DoB"]." ----- " . $row["Age"]. " ----- " . $row["FromPlace"]. " ----- " . $row["ToPlace"]. " ----- " . $row["Mobilno"]. " ----- " . $row["Email"]. " ----- " . $row["Address"]. "-----". $row["Gender"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

?> 

</html>