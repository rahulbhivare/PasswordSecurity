<?php
	
	function do_signup($mail, $password, $operations) {
		define('DB_SERVER', 'localhost:3306');
		define('DB_USERNAME', 'root');
		define('DB_PASSWORD', '');
		define('DB_DATABASE', 'password');
		$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	  
		$errors = array(); 
	  
		if (!$db) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		$query = "SELECT * FROM users WHERE email='$mail'";
		
		$result = mysqli_query($db, $query);
		$user = mysqli_fetch_assoc($result);
		if ($user) { // if user exists
			if ($user['email'] === $mail) {
			  array_push($errors, "email already exists");
			}
			return 2;
		} else {
			$query = "INSERT INTO users (email, password, operations) 
				  VALUES('$mail', '$password', '$operations')";
			mysqli_query($db, $query);
			$_SESSION['username'] = $mail;
			$_SESSION['success'] = "You are now logged in";
			return 1;
		}
		
		$db->close();
	}
	
	function do_login( $email, $random, $password) {
		define('DB_SERVER', 'localhost:3306');
		define('DB_USERNAME', 'root');
		define('DB_PASSWORD', '');
		define('DB_DATABASE', 'password');
		$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
		
		$query = "SELECT * FROM users WHERE email='$email'";
		$results = mysqli_query($db, $query);
		
		if (mysqli_num_rows($results) == 1) {
			$obj = mysqli_fetch_object($results);
		
			exec(".\Executables\ServerGenPassword.exe {$random} {$obj->password}", $out, $ret );
			//echo "return :", $ret;
			
			if($ret == $password) {
				return 1;
			} else { 
				return 2;
			}
			$_SESSION['username'] = $mail;
			$_SESSION['success'] = "You are now logged in";
		}else {
			return 3;
		}
	}
?>




