<html>

<body>
	
	<?php
	include('server.php');

	$email = $Err = $random = $pass = "";
	if(empty($_POST["mail"])) {
		$Err = "Name is required";
	} else {
		$email = test_input($_POST["mail"]);
	}
	if(empty($_POST["random"])) {
		$Err = "Random number is MUST";
	} else {
		$random = test_input($_POST["random"]);
	}
	if(empty($_POST["pass"])) {
		$Err = "Password is required";
	} else {
		$pass = test_input($_POST["pass"]);
	}	
	
	if(!$Err) {
		$op = do_login($email, $random, $pass);
		
		if($op == 1) {
			echo "login successful: again redirecting for login";
		} else if ($op == 2){
			echo "password is wrong Login failed";
		} else {
			echo "email address wrong";
		}
	} else {
		echo "Login Failure", $Err;
	}
	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	?>
	
</body>

</html>