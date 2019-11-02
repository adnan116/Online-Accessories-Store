<?php 
	
	session_start();

	if (isset($_SESSION['username'])) {	
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Details</title>
</head>
<body>
	
		<table border="0" width="100%" bgcolor="PaleTurquoise">
			<tr>
				<td width="100%" height="50px">
					<center><h1><font color="DarkBlue" face="Cursive"><u>User Details</u></font></h1></center>
				</td>
			</tr>
			<tr>
				<td align="right">
					<input type="text" name="search" placeholder="Search User">
					<button type="button">Search</button>
				</td>
			</tr>
			<tr>
				<td>
					<table bgcolor="CornflowerBlue" width="100%" cellspacing="20px">
						<tr>
							<th>User Name</th>
							<th>Email</th>
							<th>Phone Number</th>
							<th>User Type</th>
						</tr>
						<tr align="center">
							<td>admin</td>
							<td>admin@gmail.com</td>
							<td>8801234567890</td>
							<td>Admin</td>
						</tr>
						<tr align="center">
							<td>seller</td>
							<td>seller@yahoo.com</td>
							<td>8801631287459</td>
							<td>Seller</td>
						</tr>
						<tr align="center">
							<td>admin2</td>
							<td>admin2@yahoo.com</td>
							<td>8801795328617</td>
							<td>Admin</td>
						</tr>
						<tr align="center">
							<td>owner</td>
							<td>owner@gmail.com</td>
							<td>8801912345678</td>
							<td>Admin</td>
						</tr>
						<tr align="center">
							<td>service</td>
							<td>service@outlook.com</td>
							<td>8801898745632</td>
							<td>Seller</td>
						</tr>
						<tr align="center">
							<td>salesman</td>
							<td>salesman@gmail.com</td>
							<td>8801545698712</td>
							<td>Seller</td>
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