<?php
	session_start();
	$_SESSION['type'] = trim($_SESSION['type']);
	if ($_SESSION['username'] AND $_SESSION['type']=='Admin') {
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>
	<table border="0" width="100%" bgcolor="PaleTurquoise">
		<tr>
			<td colspan="2">
				<center><h1><font color="DarkBlue" face="Cursive">Welcome To Admin Panel</font></h1></center><br>
				<center><h2>User Name: <?php echo $_SESSION['username']; ?></h2></center>
			</td>
		</tr>

		<tr>
			<td>
				<table border="0" cellspacing="10px" align="left" bgcolor="CornflowerBlue" width="220px">
					<tr >
						<td align="center">
							<h3>Products</h3>
							<hr><hr>
						</td>
					</tr>
					<tr >
						<td align="center">
							<a href="Add Product.php" target="_blank">Add Product</a>
						</td>
					</tr>
					<tr>
						<td align="center">
							<a href="Update Product.php" target="_blank">Update Product</a>
						</td>
					</tr>
					<tr>
						<td align="center">
							<a href="Remove Product.php" target="_blank">Remove Product</a>
						</td>
					</tr>
					<tr>
						<td align="center">
							<a href="Product Details.php" target="_blank">Product Details</a>
						</td>
					</tr>
				</table>
			</td>

			<td>
				<table border="0" cellspacing="10px" align="right" bgcolor="CornflowerBlue" width="220px">
					<tr >
						<td align="center">
							<h3>Profile</h3>
							<hr><hr>
						</td>
					</tr>
					<tr>
						<td align="center">
							<a href="My Profile.php" target="_blank">My Profile</a>
						</td>
					</tr>
					<tr>
						<td align="center">
							<a href="Change Password.php" target="_blank">Change Password</a>
						</td>
					</tr>
					<tr>
						<td align="center">
							<a href="Logout.php">Logout</a>
						</td>
					</tr>
				</table>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<table border="0" cellspacing="10px" align="left" bgcolor="CornflowerBlue" width="220px">
					<tr >
						<td align="center">
							<h3>Manage Users</h3>
							<hr><hr>
						</td>
					</tr>
					<tr>
						<td align="center">
							<a href="Add User.php" target="_blank">Add User</a>
						</td>
					</tr>
					<tr>
						<td align="center">
							<a href="Update User.php" target="_blank">Update User</a>
						</td>
					</tr>
					<tr>
						<td align="center">
							<a href="Remove User.php" target="_blank">Remove User</a>
						</td>
					</tr>
					<tr>
						<td align="center">
							<a href="User Details.php" target="_blank">User Details</a>
						</td>
					</tr>
				</table>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<table border="0" cellspacing="10px" align="left" bgcolor="CornflowerBlue" width="220px">
					<tr >
						<td align="center">
							<h3>Sales Report</h3>
							<hr><hr>
						</td>
					</tr>
					<tr>
						<td align="center">
							<a href="Generate Report.php" target="_blank">Generate Report</a>
						</td>
					</tr>
					<tr>
						<td align="center">
							<a href="View Report.php" target="_blank">View Report</a>
						</td>
					</tr>
				</table>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<table border="0" cellspacing="10px" align="left" bgcolor="CornflowerBlue" width="220px">
					<tr >
						<td align="center">
							<h3>Promo Code</h3>
							<hr><hr>
						</td>
					</tr>
					<tr>
						<td align="center">
							<a href="Generate PromoCode.php" target="_blank">Generate Promo Code</a>
						</td>
					</tr>
					<tr>
						<td align="center">
							<a href="Enable PromoCode.php" target="_blank">Enable Promo Code</a>
						</td>
					</tr>
					<tr>
						<td align="center">
							<a href="Disable PromoCode.php" target="_blank">Disable Promo Code</a>
						</td>
					</tr>
					<tr>
						<td align="center">
							<a href="PromoCode Details.php" target="_blank">Promo Code Details</a>
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
		echo "You are not Admin";
	}

?>

