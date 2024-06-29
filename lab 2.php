<html>

<head>
	<title>PHP - Lab1</title>
</head>

<body>

	<?php
	//? ======================================[ task 1 ]==============================================

	echo nl2br("hi\r\nnew line\r\n");
	//? =============================================================================================



	//? ======================================[ task 2 ]==============================================

	//? explode, implode, ltrim
	//! explode
	$str = "hi and welcome";
	$arr1 = explode(" ", $str);
	var_dump($arr1);
	echo "<br>";


	echo "<br><br><br>";

	//! implode
	$arr2 = ['name', 'age', 'mobile'];
	var_dump(implode(" , ", $arr2));

	echo "<br><br><br>";

	//! ltrim
	$str2 = "          waleed 3mar";
	echo "<pre>" . $str2 . "</pre>";
	echo "<pre>" . ltrim($str2) . "</pre>";
	//? ============================================================================================




	//? ======================================[ task 3 ]==============================================

	// $arr = $_SERVER;
	// foreach( $arr as $i => $key){

	// 	// print $arr[$i] . " =====> " . $i;
	// 	echo '<table border=1>';
	// 	echo '<tr>';
	// 	echo '<td style="color:red; width: 350px">' . $i . '</td>';
	// 	echo '<td style="color:blue; width: 350px">' . $key . '</td>';
	// 	// echo '<br>	';
	// 	echo '</tr>';
	// }
	//? ===============================================================================================



	//? ======================================[ task 4 ]==============================================

	$values = array(12, 45, 10, 25);
	$sum = 0;
	$avrg = 0;

	foreach ($values as $value) {
		$sum += $value;
	}
	$avrg = $sum / count($values);
	echo 'sum = ' . $sum . '<br>';
	echo 'avrg = ' . $avrg . '<br>';

	echo 'reverse order: ';
	arsort($values);
	foreach ($values as $value) {
		echo $value . ', ';
	}
	echo '<br>';

	//? ===============================================================================================



	//? ======================================[ task 5 ]==============================================

	$names = array("Sara" => 31, "John" => 41, "Walaa" => 39, "aamy" => 40);
	//! --- ascending
	// sort($names);
	// foreach ($names as $name) {
	// 	echo $name . ', ';
	// }

	echo ' <br> ';

	// krsort($names);
	// foreach ($names as $name => $value) {
	// 	echo $name . ', ';
	// }


	//! --- descending 
	// ksort($names);
	// foreach ($names as $name => $value) {
	// 	echo $name . ', ';
	// }

	arsort($names);
	foreach ($names as $name) {
		echo $name . ', ';
	}

	?>
</body>

</html>