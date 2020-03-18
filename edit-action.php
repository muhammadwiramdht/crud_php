<?php 
include "connection.php"; 

$user_id = $_POST['user_id'];
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];

$sql = "UPDATE user SET name='$name', 
						address='$address', 
						phone='$phone'  
					WHERE user_id=$user_id";

if (mysqli_query($conn, $sql)) {
    header('location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>