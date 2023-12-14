<?php
	$fullname = $_POST['fullname'];
	$village = $_POST['village'];
	$phonenumber = $_POST['phonenumber'];
	$gender = $_POST['gender'];


	//connection avec du database

	$conn = new mysqli('localhost', 'root', 'touan1998', 'data');
	if ($conn->connect_error) {
		die('Connection failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare('insert into register(fullname, village, phonenumber, gender)values(?, ?, ?, ?)');
		$stmt->bind_param("ssis",$fullname, $village, $phonenumber, $gender);
		$stmt->execute();
		echo "Registered successfully...";
		$stmt->close();
		$conn->close();
	}


?>
<p> <a href="app.html">Back home</a> </p>