<?php

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$ch_box = empty($_POST['ch_box']) ? "No": "Yes" ;

require './dbcon.php';

if(!$link){
	echo 'ERROR: Unable to connect to the MyQSL'. PHP_EOL;
	exit;
}

$sql = "INSERT INTO users(name, email, gender, subscribe) VALUES ('$name', '$email', '$gender', '$ch_box')";

$res = mysqli_query($link, $sql);

if(!$res){
	die('Couldn\'t add user' . mysqli_error($link));
}

echo 'User added Succussfully';

