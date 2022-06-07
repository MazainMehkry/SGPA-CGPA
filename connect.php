<?php
        
	$name = $_POST['name'];
	$USN = $_POST['USN'];
	$semester = $_POST['semester'];
	$Subject1 = $_POST['Subject1'];
	$Subject2 = $_POST['Subject2'];
	$Subject3 = $_POST['Subject3'];
	$Subject4 = $_POST['Subject4'];
	$Subject5 = $_POST['Subject5'];
	$Subject6 = $_POST['Subject6'];
	$Subject7 = $_POST['Subject7'];
	$Subject8 = $_POST['Subject8'];
	



// Database connection
	$conn = new mysqli('localhost','root','','student');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into result(name, USN, semester, Subject1, Subject2, Subject3, Subject4, Subject5, Subject6, Subject7, Subject8) values(?, ?, ?, ?, ?, ?,? ,?,?, ?, ?)");
		$stmt->bind_param("ssissssssss", $name, $USN , $semester, $Subject1,$Subject2,$Subject3,$Subject4,$Subject5,$Subject6,$Subject7,$Subject8);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
