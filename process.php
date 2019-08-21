<?php

	// $states = array("Imo", "Anambra", "Koggi", "Bauchi");

	// echo implode(", ", $states);
	// exit();

	$name = $phoneNo = $email = $referer = $message = "";
	if(isset($_POST["send"])){
		$errors = array();
		$name = sanitize($_POST["name"]);
		$phoneNo = sanitize($_POST["phoneNo"]);
		$email = sanitize($_POST["email"]);
		$referer = sanitize($_POST["referer"]);
		$message = sanitize($_POST["message"]);
		$gender = isset($_POST["gender"]);

		if(empty($name)){
			$errors[]  = "Name is required";
		}

		if(empty($phoneNo)){
			$errors[]  = "Phone is required";
		}

		if(empty($email)){
			$errors[]  = "Email is required";
		}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errors[] = "Invalid Email format";
		}

		if(!$gender){
			$errors[] = "Gender is required";
		}

		
		

		
		if(empty($errors)){
			$education = implode(", ", $_POST["edu"]);
			$sql = "INSERT INTO contact(name, phoneNo, email, referer, edu, message, gender)";
			$sql .= " VALUES('$name', '$phoneNo', '$email', '$referer', '$education', '$message', '$gender')";
			$insertQuery = mysqli_query($connect, $sql);
			if(!$insertQuery){
				die("Could not run query ".mysqli_error($connect));
			}
			header("location:contact.php?status=success");
			exit();		

		}else{
			$errorMessage = "<ul class='list-unstyled'>";
				foreach($errors as $theError){
					$errorMessage .="<li>{$theError}</li>";
				}
			$errorMessage .= "<ul>";
		}



	}






 ?>