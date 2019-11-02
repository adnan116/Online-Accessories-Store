<?php
	session_start();

	$temp =FALSE;

	if (isset($_POST['submit'])) {
			$x= $_POST['username'];
			$y= $_POST['password'];
			$myfile = fopen('UserList.txt', 'r');
			
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
				
				header('location:Home.php');
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
</head>
<body>
	<table border="0" width="100%" height="642px" bgcolor="PaleTurquoise">
		<tr>
			<td>
				<form method="POST" action="">
					<table align="center" bgcolor="CornflowerBlue" width="500px" height="300px" cellspacing="20px">
						<tr>
							<td>
								<img src="LoginLogo.jpg" align="left" width="150px" height="150px">
								<center>
									<h1><font color="DarkBlue" face="Cursive"><u>Login Panel</u></font></h1>
								</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<fieldset >
									<legend><h3>Login</h3></legend><br>
									<table cellspacing="30px">
										<tr>
											<td width="35%">
												User Name :
											</td>
											<td>
												<input type="text" name="username" placeholder="Enter a Valid User Name" required>
											</td>
										</tr>
										<tr>
											<td width="35%">
												Password :
											</td>
											<td>
												<input type="Password" name="password" placeholder="Enter the Password" required>
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
			</td>
		</tr>
	</table>
</body>
</html>