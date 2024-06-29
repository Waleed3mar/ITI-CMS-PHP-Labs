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
	<style>
		* {
			box-sizing: border-box;
			font-family: sans-serif;
		}

		.container,
		.form-container {
			padding: 100px 100px 0px 100px;
		}

		.form-container {
			padding: 0px 100px;
		}

		td {
			border: 1px solid #333;
			padding: 10px;
		}

		.S_val,
		.C_val {
			border-top-right-radius: 5px;
			border-bottom-right-radius: 5px;
			color: #2196F3;
		}

		.S_key,
		.C_key {
			border-top-left-radius: 5px;
			border-bottom-left-radius: 5px;
		}

		table {
			margin: 30px 0px;
		}

		h3 {
			padding: 30px 13px 0px 13px;
			text-decoration: underline;
			margin: 0px;
		}

		input {
			background: none;
			border: 0;
			padding: 10px 20px;
			border-radius: 10px;
			color: #fff;
			box-shadow: 1px 2px 3px #333;
			transition: .1s all ease-in-out;
		}

		input:hover {
			padding: 10px 25px;
			filter: brightness(1.1);
		}

		#end {
			background-color: #FF9800;
		}

		#dlt {
			background-color: #FF5722;
		}
	</style>
</head>

<body>
	<?php
	session_start();
	setcookie('name', 'waleed');
	$_SESSION['name'] = 'Waleed';

	if (isset($_SESSION['page_count'])) $_SESSION['page_count'] += 1;
	else $_SESSION['page_count'] = 1;
	echo '<div class="container">';
	echo '<h2>This Page has been visited <span style="color:red"> ' . $_SESSION["page_count"] . '</span> Times</h2>';
	echo '<table>';
	echo '<tr> <td style="border:0 "><h3>SESSION Variables </h3></td> </tr>';
	foreach ($_SESSION as $key => $value) {
		echo "<tr>";
		echo '<td class="S_key"> ' . $key . ' </td> <td class="S_val"> ' . $value . ' </td>';
		echo "</tr>";
	}
	echo '<tr> <td style="border:0"><h3>COOKIE Variables </h3></td> </tr>';
	foreach ($_COOKIE as $key => $value) {
		echo "<tr>";
		echo '<td class="C_key"> ' . $key . ' </td> <td class="C_val"> ' . $value . ' </td>';
		echo "</tr>";
	}
	echo '</table>';
	echo '</div>';

	function endSes()
	{
		session_destroy();
	}
	function dltPHPSESS()
	{
		setcookie("PHPSESSID", "", time() - 1, "/");
	}

	if (isset($_POST["endSess"])) endSes();
	elseif (isset($_POST["dltPHPSess"])) dltPHPSESS();
	?>

	<div class="form-container">
		<form action="<?php $_PHP_SELF ?>" method="POST">
			<input id="end" type="submit" name="endSess" value="End Session">
			<input id="dlt" type="submit" name="dltPHPSess" value="Delete PHPSESSID">
		</form>
	</div>

</body>

</html>

<body>
</body>

</html>