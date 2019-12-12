<?php 
	
	if (isset($_POST['submit'])) {
		
		$old = $_POST['oldpass'];
		$new = $_POST['newpass'];
		$con = $_POST['connewpass'];
		$myfile = fopen('UserList.txt', 'r');
		while (!feof($myfile)) {
				$data = fgets($myfile);
				$str = explode('|', $data);
				for ($i=0; $i <count($str) ; $i++) { 
					if ($old == $str[$i+1]) {
					
						$str[$i+1] = $new;
						$user = array('username' =>$str[$i] ,'password' =>$str[$i+1], 'email' =>$str[$i+2] , 'phone' =>$str[$i+3] , 'type' =>$str[$i+4]);
					}
					
				}
				print_r($user);
			}

		/*$myfile = fopen('UserList.txt', 'w');
		fwrite($myfile,"");
		fclose($myfile);*/
	}




	session_start();

	if (isset($_SESSION['username'])) {	
		
?>

?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<body>
	<table border="0" width="100%" height="642px" bgcolor="PaleTurquoise">
		<tr>
			<td>
				<form method="POST" action="">
					<table align="center" bgcolor="CornflowerBlue" width="500px" height="300px" cellspacing="20px">
						<tr>
							<td>
								<center>
									<h1><font color="DarkBlue" face="Cursive"><u>Change Password</u></font></h1>
								</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
									<table cellspacing="30px">
										<tr>
											<td width="35%">
												Old Password :
											</td>
											<td>
												<input type="text" name="Oldpass" placeholder="Enter the Old Password" required>
											</td>
										</tr>
										<tr>
											<td width="35%">
												New Password :
											</td>
											<td>
												<input type="Password" name="newpass" placeholder="Enter the New Password" required>
											</td>
										</tr>
										<tr>
											<td width="35%">
												Confirm New Password :
											</td>
											<td>
												<input type="Password" name="connewpass" placeholder="Enter the New Password Again" required>
											</td>
										</tr>
										<tr>
											<td>
												<input type="submit" name="submit" value="Change Password">
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

<?php
	}else{
		header('location: ../index.php');
	}

?>