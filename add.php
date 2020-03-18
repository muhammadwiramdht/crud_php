<!DOCTYPE html>
<html>
	<head>
		<title>Add New User</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<h1>Add New User</h1>
		<p><a href="index.php">< Back</a></p>
		<form action="add-action.php" method="post">
			<table>
				<tr>
					<td><label for="name">Name:</label></td>
					<td><input type="text" id="name" name="name"></td>
				</tr>
				<tr>
					<td><label for="address">Address:</label></td>
					<td><input type="text" id="address" name="address"></td>
				</tr>
				<tr>
					<td><label for="phone">Phone:</label></td>
					<td><input type="text" id="phone" name="phone"></td>
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