<?php
	session_start();
	$_SESSION['type'] = trim($_SESSION['type']);
	if ($_SESSION['username'] AND $_SESSION['type']=='Admin') {
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="../css/Navigate.css">
</head>
<body style="background-color: CornflowerBlue; margin: 0;">

	<div style="background-color: DodgerBlue; padding: 20px; text-align: center;">
		<marquee scrolldelay="1" behavior="alternate"><h1 style="font-family:Cursive; color: DarkBlue">Welcome To Admin Panel</h1></marquee>
	</div>

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

	<div style="width: 15%; margin-top: 2.5%; margin-left: 5%">
		<a href="admin_addProduct.php" class="a1">Add Product</a>
		<a href="admin_addUser.php" class="a1">Add User</a>
		<a href="admin_generateReport.php" class="a1">Generate Report</a>
		<a href="admin_generatePromoCode.php" class="a1">Generate Promo</a>
		<a href="admin_profile.php" class="a1">My Profile</a>
	</div>

	<div style="background-color: DodgerBlue; padding: 5px; text-align: center; margin-top: 2.5%">
		<p style="text-align: right; font-weight: bold;">Admin Dashboard</p>
	</div>
</body>
</html>


<?php
	}else{
		header('location: ../index.php');
		echo "You are not Admin";
	}

?>

