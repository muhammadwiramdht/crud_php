<?php 
include "connection.php"; 

$user_id = $_GET['user_id'];
$sql = "SELECT * FROM user WHERE user_id = $user_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit New User</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<h1>Edit New User</h1>
		<p><a href="index.php">< Back</a></p>
		<form action="edit-action.php" method="post">
			<input type="hidden" name="user_id" value="<?php echo $row["user_id"]; ?>">
			<table>
				<tr>
					<td><label for="name">Name:</label></td>
					<td><input type="text" id="name" name="name" value="<?php echo $row["name"]; ?>"></td>
				</tr>
				<tr>
					<td><label for="address">Address:</label></td>
					<td><input type="text" id="address" name="address" value="<?php echo $row["address"]; ?>"></td>
				</tr>
				<tr>
					<td><label for="phone">Phone:</label></td>
					<td><input type="text" id="phone" name="phone" value="<?php echo $row["phone"]; ?>"></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="Submit">
					</td>
				</tr>
			</table> 
		</form>
	</body>
</html> 