<?php
	//Start session
	session_start();
	
	//Connect to mysql server
	require "db.php";
	
	//Function to sanitize values received from the form. Prevents SQL injection
	/*function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}*/
	

	$login = $_POST['username'];
	$password = $_POST['password'];
	

	$qry="SELECT * FROM admin WHERE username='$login' AND password='$password'";
	$result=mysqli_query($db,$qry);

	if($result) {
		if(mysqli_num_rows($result) > 0) {

			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['username'];
			session_write_close();

			header("location: admin/dashboard.php");
			exit();
		}else {
	
			header("location: index.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>