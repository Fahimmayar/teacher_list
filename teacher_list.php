<?php

	$con = new mysqli('localhost', 'root', '' , 'teacher');
	if(!$con){
		echo "Connection Failed";
	}

	$result = $con->query("SELECT * FROM teacher_list");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Teacher List</title>
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Email</th>
			<th>Department</th>
		</tr>
		<?php while($row = $result->fetch_assoc()){ ?>
			<tr>
				<td><?php echo $row['id'] ?></td>
				<td><?php echo $row['first_name'] ?></td>
				<td><?php echo $row['last_name'] ?></td>
				<td><?php echo $row['email'] ?></td>
				<td><?php echo $row['department'] ?></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>
