<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		td {
			padding: 15px;
		}

		.CMS {
			color: red;
		}
	</style>
</head>

<body>

	<table border="1">
		<?php
		include "./students.php";

		$keys = array_keys($students[0]);
		echo '<tr>';
		foreach ($keys as $key) {
			echo '<th>' . ucfirst($key) . '</th>' ;
		}
		echo '</tr>';

		foreach ($students as $key => $value) {

			//! 1st Solution

			// echo '<tr>';
			// echo '<td>' . $value["name"] . '</td>';
			// echo '<td>' . $value["email"] . '</td>';
			// echo $value["track"]!= "CMS"? '<td>' . $value["track"] . '</td>': '<td style="color:red">' . $value["track"] . '</td>' ;
			// echo '</tr>';



			//! 2nd Solution

			echo '<tr class=' . $value["track"] . '>';
			echo '<td>' . $value["name"] . '</td>';
			echo '<td>' . $value["email"] . '</td>';
			echo '<td>' . $value["track"] . '</td>';
			echo '</tr>';
		}
		?>
	</table>
</body>

</html>