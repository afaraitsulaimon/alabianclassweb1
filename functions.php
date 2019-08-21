<?php 

	
	

	function sanitize($data){
		global $connect;
		$data = trim($data);
		$data = strip_tags($data);
		$data = mysqli_real_escape_string($connect, $data);
		return $data;
	}