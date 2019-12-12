<?php 
	
	session_start();

	if (isset($_SESSION['username'])) {	
		
?>


<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
	<link rel="stylesheet" type="text/css" href="../css/Navigate.css">
	<style type="text/css">
		body {
			background-color: CornflowerBlue;
  			margin: 0;
		}

		.a1:hover, .a1:active {
  			background-color: DarkBlue;
		}

	</style>
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
	
	<table align="center" cellspacing="30px" bgcolor="CornflowerBlue">
		<tr>
			<td colspan="3" align="center">
				<h1><font color="DarkBlue" face="Cursive"><u>My Profile</u></font></h1>
			</td>
		</tr>
		<tr>
			<td>
				User ID:
			</td>
			<td>
				1
			</td>
			<td rowspan="4">
				<img src="../LoginLogo.jpg" width="150px" height="200px">
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
				Username:
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
			<td rowspan="2">
				<a href="admin_home.php" class="a1" style="">Update Profile</a>
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
		
</body>
</html>

<?php
	}else{
		header('location: ../index.php');
	}
?>