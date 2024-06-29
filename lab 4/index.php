<html>

<head>
	<title>PHP - Lab3</title>
</head>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Regester</title>
	<link rel="stylesheet" href="./style.css" />
	<style>
		* {
			box-sizing: border-box;
			font-family: Arial, Helvetica, sans-serif;
		}

		table {
			margin-bottom: 50px;
		}

		td,
		th {
			padding: 15px;
			text-transform: capitalize;
			border: 1px solid #333;
		}

		tr .male {
			color: #2196F3;

		}

		tr .female {
			color: #E91E63;
		}

		.female td {
			border-color: #E91E63;
		}

		.male td {
			border-color: #2196F3;
		}

		.container {
			margin-left: auto;
			width: 70%;
			margin-top: 150px;
		}

		.add-btn {
			text-decoration: none;
			color: #fff;
			background-color: #43A047;
			;
			padding: 5px 15px;
			border-radius: 30px;
			transition: .2s all ease-in-out;

		}

		.add-btn:hover {
			background-color: #4CAF50;
		}
		span{
			color: #9E9E9E;
			text-transform: uppercase;
		}
	</style>
</head>

<body>
	<?php
	echo '<div class="container" >';
	echo '<h1>List of Users </h1>';
	echo '<table >';
	require 'dbcon.php';
	$sql = "SELECT * FROM users";
	mysqli_select_db($link, "cms-q3");
	$res = mysqli_query($link, $sql);
	if (!$res) {
		die('Could not get data: ' . mysqli_error($link));
	}
	if (mysqli_num_rows($res) > 0) {
		echo '<tr> <th>#</th> <th>Name</th> <th>Email</th> <th>Gender</th> <th>Subscribed</th> </tr>';
		while ($row = mysqli_fetch_assoc($res)) {
			echo '<tr class = ' . $row['gender'] . '>';
			echo '<td>' . $row['id'] . '</td>' .
				'<td>' . $row['name'] . '</td>' .
				'<td>' . $row['email'] . '</td>' .
				'<td class = ' . $row['gender'] . '>' . $row['gender'] . '</td>' .
				'<td>' . $row['subscribe'] . '</td>';
			echo '</tr>';
		}
	} else {
		echo '<span> no users added yet </span>';
	}
	echo '</table>';
	echo '<a class="add-btn" href="./addUser.php"> Add User </a>';
	echo '</div>';
	?>

	<div class="form-container">
	</div>

</body>

</html>

<body>
</body>

</html>