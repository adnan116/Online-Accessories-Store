<?php

	$name="";
	$pass="";
	$conpass="";
	$email="";
	$pno=0;
	$utype="";
	if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$pass=$_POST['newpass'];
		$conpass=$_POST['connewpass'];
		$email=$_POST['email'];
		$pno=$_POST['pno'];
		$utype=$_POST['utype'];

		if ($name == "" || $pass == "" || $email == "" || $pno == "" || $utype == "") {
			$message = "Fill up all fields";
			echo "<script>alert('$message');</script>";
		}
		elseif (filter_var($email, FILTER_VALIDATE_EMAIL)==false) {
			$message = "Email is not valid";
			echo "<script>alert('$message');</script>";
		}
		elseif (strlen(strval($pno)) != 13) {
			$message = "Phone Number is not valid";
			echo "<script>alert('$message');</script>";
		}
		elseif ($pass != $conpass) {
			$message = "Password is not match";
			echo "<script>alert('$message');</script>";
		}
		else{
			$myfile = fopen('UserList.txt', 'a');
			fwrite($myfile, $name."|".$pass."|".$email."|".$pno."|".$utype."\n");
			fclose($myfile);
			$message = "Successfully user added";
			echo "<script>alert('$message');</script>";
		}

	}

	session_start();

	if (isset($_SESSION['username'])) {	

?>





<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form method="POST" action="">
		<table border="1" width="100%" height="642px" bgcolor="PaleTurquoise">
			<tr>
				<td>
					<table align="center" cellspacing="30px" bgcolor="CornflowerBlue">
						<tr>
							<td colspan="2">
								<center><h1><font color="DarkBlue" face="Cursive"><u>New User Registration</u></font></h1></center>
							</td>
						</tr>
						<tr>
							<td>
								Name:
							</td>
							<td>
								<input type="text" name="name" placeholder="Enter Your Name">
							</td>
						</tr>

						<tr>
							<td>
								Email:
							</td>
							<td>
								<input type="text" name="email" placeholder="Enter Your Email">
							</td>
						</tr>

						<tr>
							<td>
								Phone Number:
							</td>
							<td>
								<input type="number" name="pno" placeholder="Enter Your Phone Number" value="880">
							</td>
						</tr>

						<tr>
							<td>
								User Type:
							</td>
							<td>
								<select name="utype">
									<option value=""></option>
									<option value="Admin">Admin</option>
									<option value="Seller">Seller</option>
								</select>
							</td>
						</tr>

						<tr>
							<td>
								Password:
							</td>
							<td>
								<input type="Password" name="newpass" placeholder="Enter Your Password">
							</td>
						</tr>

						<tr>
							<td>
								Confirm Password:
							</td>
							<td>
								<input type="Password" name="connewpass" placeholder="Enter Your Password Again">
							</td>
						</tr>

						<tr>
							<td>
								<input type="submit" name="submit" value="Create Account">
							</td>
							<td >
								<input type="reset" name="reset" value="Reset">
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</form>

</body>
</html>


<?php
	}else{
		header('location: index.php');
	}
?>