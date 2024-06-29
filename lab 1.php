<html>

<head>
	<title>PHP - Lab1</title>
</head>

<body>

	<?php
	//! Task1
	//phpinfo();

	//! Task2
	// define('site_name', $_SERVER['SERVER_NAME']);
	define('site_name', 'My_Website');
	echo 'Your site name is: ' . site_name . '<br><br><br>';


	//! Task3
	$age = 0;
	switch ($age) {
		case $age < 5:
			print('Stay at home');
			break;
		case $age == 5:
			print('Go to Kindergarden');
			break;
		case $age > 12:
			print('Your Age' . '('.$age .')' . ' is over than 12');
			break;
		default:
				print('Go to grade '. $age-5);
				break;
	}
	
	
	?>
</body>

</html>