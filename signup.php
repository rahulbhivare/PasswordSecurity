<html>

<body>
	
	<?php
	include('server.php');
	
	$name = $email = $Err = "";

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_POST["mail"])) {
			$Err = "Name is required: Redirecting to login-register page";
		} else {
			$email = test_input($_POST["mail"]);
		}
		if(empty($_POST["pass"])){
			$Err = "Password is required: Redirecting to login-register page";
		} else {
			if(ctype_digit($_POST["pass"])) {
				$pass = test_input($_POST["pass"]);
			} else {
				$Err = "Password must be numeric: Redirecting to login-register page";
			}
			if($pass < 9999) {
				$Err = "Password length must be 5-digit to 8-digit";
			} else if($pass > 99999999) {
				$Err = "Password length must be 5-digit to 8-digit";
			}
		}
		if(empty($_POST["cpass"])){
			$Err = "Password is not confirmed, retype password: Redirecting to login-register page";
		} else {
			$cpass = test_input($_POST["cpass"]);
			if ($cpass != $pass)
				$Err = "Password not matching!!: Redirecting to login-register page";
		}
		if(empty($_POST["opc"])){
			$Err = "Kindly enter operation code: Redirecting to login-register page";
		} else {
			if(ctype_digit($_POST["opc"])) {
				$opc = test_input($_POST["opc"]);
			} else {
				$Err = "Operation code must be numeric: Redirecting to login-register page";
			}
		}
	}	
		
	if(!$Err) {
		$op = do_signup($email, $pass, $opc);
		if($op == 1) {
			echo "Registration successfull: again redirecting for login";
		} else {
			echo "User already exists";
		}
		header("refresh:5; url=index.php");
	}
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	?>
	<?php
	if ($Err) {
		echo $Err;
		//header('refresh:5; location:index.html');
		header("refresh:5; url=index.php");
	} else ?>
			<p> test <p> </br> </br>
			Welcome  <?php echo $email ?> <br>
	
 </body>

</html>