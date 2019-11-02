<?php 
	
	session_start();

	if (isset($_SESSION['username'])) {	
		
?>


<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
</head>
<body>
	<table border="0" width="100%" height="642px" bgcolor="PaleTurquoise">
		<tr>
			<td colspan="2">
				<table align="center" cellspacing="30px" bgcolor="CornflowerBlue">
					<tr>
						<td colspan="2" align="center">
							<h1><font color="DarkBlue" face="Cursive"><u>My Profile</u></font></h1>
						</td>
					</tr>
					<tr>
						<td>
							Name:
						</td>
						<td>
							<?php echo $_SESSION['username']; ?>
						</td>
					</tr>

					<tr>
						<td>
							Email:
						</td>
						<td>
							<?php echo $_SESSION['email']; ?>
						</td>
					</tr>
					<tr>
						<td>
							Phone Number:
						</td>
						<td>
							<?php echo $_SESSION['phone']; ?>
						</td>
					</tr>
					<tr>
						<td>
							User Type:
						</td>
						<td>
							<?php echo $_SESSION['type']; ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>

<?php
	}else{
		header('location: index.php');
	}
?>