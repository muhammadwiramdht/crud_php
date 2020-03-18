<?php 
include "connection.php"; 

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];

$sql = "INSERT INTO user (name, address, phone)
		VALUES ('$name', '$address', '$phone')";

if (mysqli_query($conn, $sql)) {
    header('location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>