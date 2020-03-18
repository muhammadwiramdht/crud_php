<?php include "connection.php"; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>User List</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<h1>User List</h1>
		<p><a href="add.php">+ Add New User</a></p>
		<table>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Address</th>
				<th>Phone</th>
				<th>Action</th>
			</tr>
			<?php 
				$sql = "SELECT * FROM user";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					$no = 0;
					while($row = mysqli_fetch_assoc($result)) {
						$no++;
			?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $row["name"];?></td>
				<td><?php echo $row["address"];?></td>
				<td><?php echo $row["phone"];?></td>
				<td>
					<a href="edit.php?user_id=<?php echo $row['user_id']; ?>">Edit</a> | 
					<a href="delete.php?user_id=<?php echo $row['user_id']; ?>">Hapus</a> 
				</td>
			</tr>
			<?php } } else { ?>
				<td colspan="5">0 results</td>
			<?php }
				mysqli_close($conn);
			?>
		</table> 		
	</body>
</html> 