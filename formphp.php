<?php
 $fname = $_POST["fname"];
 $lname = $_POST["lname"];
 $email = $_POST["email"];
 $Address = $_POST["Address"];
 $gender = $_POST["gender"];

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "travel";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO registrationtbl(fname, lname, email, Address, gender) values ('$fname','$lname','$email','$Address','$gender')";
if ($conn->query($sql)){
// echo "<h1>SucessFully Registetered</h1>";
	header('Status: 301 Moved Permanently', false, 301);
	header("location: http://localhost/newtravel/blog.html");
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
?>