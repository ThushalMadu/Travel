<?php
 $name = $_POST["name"];
 $email = $_POST["email"];
 $subject = $_POST["subject"];
 $message = $_POST["message"];

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
$sql = "INSERT INTO contacttbl(name, email, subject, message) values ('$name','$email','$subject','$message')";
	
if ($conn->query($sql)){
//echo "<h1>SucessFully Sent a Message</h1>";

	header('Status: 301 Moved Permanently', false, 301);
	header("location: http://localhost:8080/newtravel/contact.html");
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
?>