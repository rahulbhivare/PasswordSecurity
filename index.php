<!DOCTYPE html >
<html>
<head>
<script src="jquery-3.4.1.min.js"></script>
<title>"Hack My Password" Challenge</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body id="body_bg" >
<div class="topnav" style="font-family:Open Sans; letter-spacing:1px;">
	<!--<img src="1.png" style="height:3vw"></img>-->
 <b> <a href="#product">Product Brief</a>
  <a href="#Contact">Contact Us</a>
  <a class="active" href="#home">Home</a></b>
</div> 

	
	<div align="center">
		<!--<h1 style="font-size:5vw; font-family:Open Sans; letter-spacing:4px" >H<span style="color:red">A</span><span style="color:darkolivegreen">C</span><span style="color:red">K</span> M<span style="color:blueviolet">Y</span> P<span style="color:red">A</span>SSW<span style="color:red">O</span>RD CHALLENGE</h1>-->
		<h1 style="font-size:5vw; color:snowhite; font-family:Open Sans; letter-spacing:4px" >HACK MY PASSWORD CHALLENGE</h1>
	</div>
	<div id="home">	
	<table>
		<tr>
		<td style="width:25%; border: 1px solid #7395ae;;  vertical-align:top;">
			<div>
				<b><center> <h4>Registration Steps</center></b></h4>
				<ul style="list-style-type:square;">
			<!--	<li> Select valid e-mail </br> -->
				<li>Password rules :-  </br>
					Only numeric. Length between 4 to 8 numbers. (This limitation is to simplify job of hackers) </br></br>
				<li>Ooperation code :- </br>
					Any number between 100 to 999 will do. We decide “what operations to be performed to generate password”.
				</ul>
				<h4><b><center> PassGen Application  </center></b></h4>
				<ul style="list-style-type:square;">
					<li> Create a folder "Pass" on your PC.</br> </br> 
					<li> Download "PassGen" applictaion for your OS. </br></br>
					<li> First time setup : </br> Application will ask for your password and operations code. It will generate many temperary files in folder, Which are referred for generating password for every login session. 
				</ul>

			</div>
		
		</td>
		<td style="width:25%; border: 1px solid #7395ae; vertical-align:top;">
			<div>
				<h4><b><center> Login Steps</center></b></h4>
				<ul style="list-style-type:square;">
					<li> Below e-mail, 8-digit 'passcode' is displayed. </br></br>
					<li> Run 'PassGen" Appication. Provide 8-digit passcode to it.</br></br>
					<li> Application will generate 8-digit password. </br> </br>
					<li> Add this password for login.</br></br>
				<i><u>Note</u>: For every login session, new pasword is generated. </i>
				</ul>
			</div>
		
		</td>
		<td style="width:25%; border: 1px solid #7395ae;; border-radius:4px; vertical-align:top;">
			<div>
				<h4><b><center> Password authentication System Benefits</center></b></h4>
				 This 'Single step/factor' authentication system:
				 <ul>
					<li> Detects 'robot attack or automated program attack' </br> 
					<li> Generate new password for every login session.</br>
				</ul>
				</br></br>
				
		 This system protects password from 
		 <ul>
		 <li> Social engineering attack 
		 <li> Phishing e-mails" attack.
		 </ul>
		 Note that, 80% pasword hacks happens using this method..</br> </br>
			<p><a href="#test" style="color:yellow">click to know details of "Hackers challenge"</a></p>
			</div>
		
		</td>
		<td style="vertical-align:top; border: 1px solid #7395ae; ">
			<div align="right"  style="background-color:black; text-align: left;">
				<table border="0.5">
				<tr>
				<td>
					<a href="#" onclick='show(1);'> <strong><span style="color:white; font-size:2vw"> Login</span></strong>   </a> &nbsp&nbsp&nbsp
				</td>
				<td>
					<a href="#" onclick='show(2);'> <strong><span style="color:white; font-size:2vw "> Register</span></strong>   </a> 
				</td>
				</tr>
				</table>
			
				<div id="login" style="display:block; color:white; text-align: left;">
					<form id="login-form" method="post" action=''>
						<table border="0.5">
							<tr>
								<td><label for="user_id">e-mail</label></td>
								<td><input type="email" name="mail" id="user_id" ></td>
							</tr>
							
							<tr>
								<td Colspan="2"><strong> <p id="demo1"></p></strong></td>
							</tr>
							<tr>
								<td><label for="pass_id">password</label></td>
								<td><input type="password" name="pass" id="pass_id" ></td>
							</tr>
							<tr>
								<!--<td><input type="submit" value="Submit" />-->
								<td><input type="submit" name="submit" id="submit_btn" value="Send" /></td>
								<td><input type="reset" value="Reset"/></td>
							</tr>
						</table>
					</form>	
				</div>
				
				<div id="register" style="display:none;">
					<form id="login-form" method="post" action="signup.php" >
						<table border="0.5" >
							<tr>
								<td><label for="user_id">e-mail</label></td>
								<td><input type="email" name="mail" id="user_id" ></td>
							</tr>
							<tr>
								<td><label for="user_pass">Password</label></td>
								<td><input type="password" name="pass" id="user_pass"  ></input></td>
							</tr>
							<tr>
								<td><label for="user_pass">Confirm Password</label></td>
								<td><input type="password" name="cpass" id="user_pass"  ></input></td>
							</tr>
							<tr>
								<td><label for="user_pass">Enter 3 digit operation code</label></td>
								<td><input type="password" name="opc" id="user_pass"  ></input></td>
							</tr>					
							<tr>
								<td><input type="submit" value="Sign-In" /></td>
								<td><input type="reset" value="Reset"/></td>
							</tr>
						</table>
					</form>	
				</div>
			</div>
			<div>
				<table>
					<td style="vertical-align:top;">
						<p><strong>Download PassGen Application:</strong><p>
						<a href="./Executables/ClientGenPassword.exe" download>
						<img src="./1.png" alt="Windows" Width="40%">
						</a> &nbsp 
						<a href="./Executables/ClientGenPassword.out" download>
						<img src="./2.png" alt="Linux" Width="40%">
						</a>
					</td>
				</table>
			</div>
		</tr>
		</td>
	</table>
	</div>
	<div id="test">
		</br>
		<b> <center> Known limiations of this demo (Not present in final product) </center></b>
		<ol>
			<li> Remotely executing "Get Password" application i.e. hacker will remotely execute "Get Password" application on target's machine and login into website without password. In final product, we added security for this, though it is not added in demo version. But, if you could hack using this method then also I will give you 4 marks out of 5.
			<li> Security from "reverse engineering application to detect the password".This is not added because my application will be integrated in another application. BUT, if you can hack using this method, I will give you 3.5 marks out of 5.
			<li> Database protection: As it is not part of this research and already there are proven methods for this. Hence penetration testing to hack password is NOT ALLOWED. 
		</ol>
	</div>
	<hr>
	<div id="product">
		<b> <center> Features of final product : </b> </center>
		<ol>
			<li> User can decide any alphaneumeric password. 
			<li> Operation codes can also be alphaneumeric.
			<li> Final variable login password is only 5 characters (which is easier for user, as less probability of making typing mistakes)
			<li> No time variable used i.e. no time sync between server-client needed.
			<li> User selected mathematical operations. Users will be given options and user can select mathematical operations. This is stored as "operation code"
			<li> "User name + password + operation code" forms unique identity of user.
		</ol>
		
		<hr>
		
		<b> <center>Benefits to companies and users :</b> </center>
		<ol>
			<li> No need to change password periodically 
			<li> No need of sending any SMS or next level of authentication 
			<li> Easier to integrate in existing system 
		</ol>
		<hr>
		<b> <center> This technique provides security from </b> </center>
		<ol>
			<li> Phishing attacks to steal password. 
			Evenif attacker understands one password, he/she cannot use that next time 
			<li> Using keylogger. Evenif somebody decides to log all keys, still he cannot guess next time login password.
			<li> Using screen recorder:
			<li> Brute force attack 
			As for every login new password is generated for every new entry. Hence, it is impossible to use this attack mathematically.
			Like for every 8-digit number, there are 10^8 possible combinations possibe based on user registration time negotiations.
			<li> Rainbow table attacks
			<li> Social engineering
			It is almost impossible to get all information like "password + operations code" using social engineering.
			And eveif you know both, but the mathematics used to generaate password is still unknown to hacker and hence it is impossible for hacker to 
			use that information to crack password. This mathematics is different for different users, based on "time and date of registration". So, eveif he knows mathematics of one user, it may not guarantees that it will work for all users.
		</ol>
		
		<hr> 
		
		<b> <center> FAQ:</b> </center>
		<ol>
			<li> Do I need to make a many changes in database to use this system in my authentication system? </br>
			<u>Answer :</u> No. To integrate this method will take less than 2 days and no needto change database. Even, we don't ask database access to add this in server. On server side, you just need to call our application and provide inputs to our application. It is as simple as that.
			</br></br>
			<li> Do client or end user need to install special app if we decide to use given method in our authentication system? </br>
			<u>Answer :</u> No. The answer to this varies from case to case basis. But, we already designed multiple ways to give access to user. These methods are disclosed to interested companies.
			</br></br>
			<li> What if somebody reverse engieered your application, uderstood underlying function used and hacked system ? </br>
			<u>Answer :</u> Though it is nearly impossible. But, we will be periodically updating and changing our application.Hence, hacker need to continue his reverse engieering studies :-) . His previous version hacking may not be useful for next version. And as far as users concerned, they just need to update application. This is adding next layer of security.
		</ol>

	</div>
	<hr>
	<div id="Contact">
		<b> <center> Contact Us </b> </br>
		e-mail id : rahul.bhivare@gmail.com, HackMyPassword@gmail.com </br>
		Kindly refer "Hack My Password" website name in your e-mail for immediate attention. Thank you!</center>
	</div>
</body>
<script>
	function show(nr) {
		if(nr == 1) {
			document.getElementById("login").style.display="block";
			document.getElementById("register").style.display="none";
		} else {
			document.getElementById("login").style.display="none";
			document.getElementById("register").style.display="block";
		}
	}	


	
$(document).ready(function(){
	
	/* generate random number */
	var random;

	var d = new Date();
	var n = d.getTime();
	
  	n = n & 0x5F5E0FF;
    var m = n & 0xFFFF;
	m = m << 16;
	n = m + n;
	random = n & 0x5F5E0FF;

	document.getElementById("demo1").innerHTML = "Passcode : " + random;
				
	$("#login-form").submit(function(e){
		var mail = $("#user_id").val();
		var pass = $("#pass_id").val();
		 e.preventDefault();
			$.ajax({
			    url:'login.php',
			    type:'post',
			    data:{mail:mail, random:random, pass:pass},
			    success:function(response){
					document.getElementById("demo1").innerHTML = response;
			    }
			});
		});
	});

</script>

</html>