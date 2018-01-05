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
echo "<br> " . "name". "  -----  " ."Email". " ------    " ."Report". "<br>";

$sql = "SELECT uname, uemail, ureport FROM reportform";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> " . $row["uname"]. " -----   " . $row["uemail"]. "  ------   " . $row["ureport"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

?> 
</html>