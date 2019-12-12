<?php
	session_start();

	$temp =FALSE;

	if (isset($_POST['submit'])) {
			$x= $_POST['username'];
			$y= $_POST['password'];
			$myfile = fopen('php/UserList.txt', 'r');
			
			while (!feof($myfile)) {
				$data = fgets($myfile);
				$str = explode('|', $data);
				for ($i=0; $i <count($str) ; $i++) { 
					if ($x == $str[$i] && $y == $str[$i+1]) {
						$_SESSION['username'] = $str[$i];
						$_SESSION['password'] = $str[$i+1];
						$_SESSION['email'] = $str[$i+2];
						$_SESSION['phone'] = $str[$i+3];
						$_SESSION['type'] = $str[$i+4];
						$temp = TRUE;
						break;
					}
					
				}
			}

			if ($temp == TRUE) {
				
				header('location:view/admin_home.php');
			}else{
				$message = "Invalid Username or Password";
				echo "<script>alert('$message');</script>";
			}	

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/Design.css">
</head>
<body>
	<div class="header">
		<marquee><h1>Online Accessories Store</h1></marquee>
	</div>
	
	<form method="POST" action="">
		<table align="center" bgcolor="LightBlue" width="40%" cellspacing="5px">
			<tr>
				<td>
					<img src="LoginLogo.jpg" align="left" width="100px" height="100px">
					<center>
						<h1><font color="DarkBlue" face="Cursive"><u>Login Panel</u></font></h1>
					</center>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<fieldset>
						<legend><h3>Login</h3></legend><br>
						<table cellspacing="30px">
							<tr>
								<td width="35%">
									<h4>User Name :</h4>
								</td>
								<td>
									<input type="text" name="username" placeholder="Enter a Valid User Name">
								</td>
							</tr>
							<tr>
								<td width="35%">
									<h4>Password :</h4>
								</td>
								<td>
									<input type="Password" name="password" placeholder="Enter the Password">
								</td>
							</tr>
							<tr>
								<td>
									<input type="submit" name="submit" value="Log In">
								</td>
								<td >
									<input type="reset" name="reset" value="Reset">
								</td>
							</tr>
						</table>
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
		
</body>
</html>