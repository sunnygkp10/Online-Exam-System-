



<?php
 include_once 'dbConnection.php';
session_start();
  if(!(isset($_SESSION['email']))){
header("location:index.php");

}
else
{
$name = $_SESSION['name'];
$email=$_SESSION['email'];
$servername = "localhost";
$username = "root";
$password = "";	
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname)or die ("Unable to connect");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}

$name1 = $_GET['name'];
$gender = $_GET['gender']; 	
$mob = $_GET['mob'];
$college = $_GET['college']; 
$email = $_GET['email']; 

//$sql1 = "UPDATE user SET gender = '$gender', mob='$mob', college='$college' WHERE email = $email";

$sql = "UPDATE user SET name = '$name1', gender = '$gender', mob='$mob', college='$college', email='$email' WHERE name = '$name'";





if ($conn -> query($sql) === TRUE) {
    echo "Account successfully Updated";
		echo "<br>Redirecting to Log in page after 2 seconds.";
	header( "refresh:5;url=login.php" );
}
$conn->close();
	}

?>