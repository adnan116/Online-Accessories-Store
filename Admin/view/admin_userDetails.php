<?php 
	
	session_start();

	if (isset($_SESSION['username'])) {	
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Details</title>
	<link rel="stylesheet" type="text/css" href="../css/Navigate.css">
	<link rel="stylesheet" type="text/css" href="../css/Design.css">
	<link rel="stylesheet" type="text/css" href="../css/Table.css">
</head>
<body>
	<div class="nav">

		<a href="admin_home.php" class="a1">Home</a>

		<div class="dropdown">
			<button class="dropbtn">Products</button>
		    <div class="dropdown-content">
		    	<a href="admin_addProduct.php">Add Product</a>
		    	<a href="admin_updateProduct.php">Update Product</a>
		    	<a href="admin_removeProduct.php">Remove Product</a>
		    	<a href="admin_productDetails.php">Product Details</a>
		  	</div>
		</div>

		<div class="dropdown">
			<button class="dropbtn">Manage Users</button>
		    <div class="dropdown-content">
		    	<a href="admin_addUser.php">Add User</a>
		    	<a href="admin_updateUser.php">Update User</a>
		    	<a href="admin_removeUser.php">Remove User</a>
		    	<a href="admin_userDetails.php">User Details</a>
		  	</div>
		</div>

		<div class="dropdown">
			<button class="dropbtn">Sales Report</button>
		    <div class="dropdown-content">
		    	<a href="admin_generateReport.php">Generate Report</a>
		    	<a href="admin_viewReport.php">View Report</a>
		  	</div>
		</div>

		<div class="dropdown">
			<button class="dropbtn">Promo Code</button>
		    <div class="dropdown-content">
		    	<a href="admin_generatePromoCode.php">Generate Promo Code</a>
		    	<a href="admin_enableOrDisablePromoCode.php">Enable/Disable Promo Code</a>
		    	<a href="admin_promoCodeDetails.php">Promo Code Details</a>
		  	</div>
		</div>

		<div class="dropdown">
			<button class="dropbtn">Profile</button>
		    <div class="dropdown-content">
		    	<a href="admin_profile.php">My Profile</a>
		    	<a href="admin_changePassword.php">Change Password</a>
		    	<a href="../php/Logout.php">Logout</a>
		  	</div>
		</div>
	</div>
	<center>
		<h1><font color="DarkBlue" face="Cursive"><u>User Details</u></font></h1><br><br>
		<input type="text" name="searchkey" placeholder="Search User">
		<button type="button" class="btn">Search</button>
	</center>
	
	<table bgcolor="CornflowerBlue" width="100%" cellspacing="20px" style="margin-top: 2.5%">
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
			
</body>
</html>

<?php
	}else{
		header('location: ../index.php');
	}
?>