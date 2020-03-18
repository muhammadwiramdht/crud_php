<?php 
include "connection.php"; 

$user_id = $_GET['user_id'];

// sql to delete a record
$sql = "DELETE FROM user WHERE user_id = $user_id";

if (mysqli_query($conn, $sql)) {
    header('location: index.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>