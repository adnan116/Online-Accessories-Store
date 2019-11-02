<?php 
	
	session_start();

	if (isset($_SESSION['username'])) {	
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update User</title>
</head>
<body>
	<form method="POST" action="">
		<table border="1" width="100%" height="642px" bgcolor="PaleTurquoise">
			<tr>
				<td>
					<table align="center" cellspacing="30px" bgcolor="CornflowerBlue">
						<tr>
							<td colspan="2">
								<center><h1><font color="DarkBlue" face="Cursive"><u>Update User</u></font></h1></center>
							</td>
						</tr>
						<tr>
							<td colspan="2" align="right">
								<input type="text" name="search" placeholder="Search User">
								<button type="button">Search</button>
							</td>
						</tr>
						<tr>
							<td>
								Name:
							</td>
							<td>
								<input type="text" name="name">
							</td>
						</tr>

						<tr>
							<td>
								Email:
							</td>
							<td>
								<input type="text" name="email">
							</td>
						</tr>

						<tr>
							<td>
								Phone Number:
							</td>
							<td>
								<input type="text" name="pno">
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
								<input type="Password" name="newpass">
							</td>
						</tr>

						<tr>
							<td>
								Confirm Password:
							</td>
							<td>
								<input type="Password" name="connewpass">
							</td>
						</tr>

						<tr>
							<td>
								<input type="submit" name="submit" value="Update Account">
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