<?php

	$name="";
	$pass="";
	$conpass="";
	$email="";
	$pno=0;
	$utype="";
	if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$pass=$_POST['newpass'];
		$conpass=$_POST['connewpass'];
		$email=$_POST['email'];
		$pno=$_POST['pno'];
		$utype=$_POST['utype'];

		if ($name == "" || $pass == "" || $email == "" || $pno == "" || $utype == "") {
			$message = "Fill up all fields";
			echo "<script>alert('$message');</script>";
		}
		elseif (filter_var($email, FILTER_VALIDATE_EMAIL)==false) {
			$message = "Email is not valid";
			echo "<script>alert('$message');</script>";
		}
		elseif (strlen(strval($pno)) != 13) {
			$message = "Phone Number is not valid";
			echo "<script>alert('$message');</script>";
		}
		elseif ($pass != $conpass) {
			$message = "Password is not match";
			echo "<script>alert('$message');</script>";
		}
		else{
			$myfile = fopen('UserList.txt', 'a');
			fwrite($myfile, $name."|".$pass."|".$email."|".$pno."|".$utype."\n");
			fclose($myfile);
			$message = "Successfully user added";
			echo "<script>alert('$message');</script>";
		}

	}

	session_start();

	if (isset($_SESSION['username'])) {	

?>





<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="../css/Navigate.css">
	<link rel="stylesheet" type="text/css" href="../css/Design.css">
</head>
<body style="background-color: CornflowerBlue; margin: 0;">

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

	<form method="POST" action="">
		<table align="center" bgcolor="CornflowerBlue" cellspacing="30px">
			<tr>
				<td colspan="4">
					<center><h1><font color="DarkBlue" face="Cursive"><u>New User Registration</u></font></h1></center>
				</td>
			</tr>
			<tr>
				<td>
					User ID:
				</td>
				<td>
					<input type="text" name="uid" placeholder="Enter User ID">
				</td>
				<td>
					First Name:
				</td>
				<td>
					<input type="text" name="fname" placeholder="Enter First Name">
				</td>
			</tr>
			<tr>
				<td>
					Last Name:
				</td>
				<td>
					<input type="text" name="lname" placeholder="Enter Last Name">
				</td>
				<td>
					Username:
				</td>
				<td>
					<input type="text" name="uname" placeholder="Enter Username">
				</td>
			</tr>
			<tr>
				<td>
					Email:
				</td>
				<td>
					<input type="text" name="email" placeholder="Enter User Email">
				</td>
				<td>
					Image:
				</td>
				<td>
					<input type="file" name="uimage">
				</td>
			</tr>
			<tr>
				<td>
					Password:
				</td>
				<td>
					<input type="Password" name="upass" placeholder="Enter Password">
				</td>
				<td>
					Confirm Password:
				</td>
				<td>
					<input type="Password" name="ucpass" placeholder="Enter Confirm Password">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Add User">
				</td>
				<td >
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>


<?php
	}else{
		header('location: ../index.php');
	}
?>