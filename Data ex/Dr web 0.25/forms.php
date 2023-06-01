<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','WebDoctor');

// get the post records
$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtPhone = $_POST['subject'];
$txtMessage = $_POST['message'];

// database insert SQL code
$sql = "INSERT INTO `Contact` (`Name`, `Email`, `Subject`, `Description`) VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>