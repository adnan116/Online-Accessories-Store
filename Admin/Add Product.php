<?php 
	
	session_start();

	if (isset($_SESSION['username'])) {	
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
</head>
<body>
	<form method="POST" action="">
		<table border="1" width="100%" height="642px" bgcolor="PaleTurquoise">
			<tr>
				<td>
					<table align="center" bgcolor="CornflowerBlue" cellspacing="30px">
						<tr>
							<td colspan="2">
								<center><h1><font color="DarkBlue" face="Cursive"><u>Add Product</u></font></h1></center>
							</td>
						</tr>
						<tr>
							<td>
								Product ID:
							</td>
							<td>
								<input type="text" name="pid" placeholder="Enter Product ID">
							</td>
						</tr>
						<tr>
							<td>
								Product Name:
							</td>
							<td>
								<input type="text" name="pname" placeholder="Enter Product Name">
							</td>
						</tr>
						<tr>
							<td>
								Category:
							</td>
							<td>
								<input type="text" name="pname" placeholder="Enter Product Category">
							</td>
						</tr>
						<tr>
							<td>
								Sub-Category:
							</td>
							<td>
								<input type="text" name="pname" placeholder="Enter Product Sub-Category">
							</td>
						</tr>
						<tr>
							<td>
								Quantity:
							</td>
							<td>
								<input type="number" name="quantity" placeholder="Enter Quantity">
							</td>
						</tr>
						<tr>
							<td>
								Buying Price:
							</td>
							<td>
								<input type="number" name="buyprice" placeholder="Enter Buying Price">
							</td>
						</tr>
						<tr>
							<td>
								Selling Price:
							</td>
							<td>
								<input type="number" name="sellprice" placeholder="Enter Selling Price">
							</td>
						</tr>
						<tr>
							<td>
								Incoming Date:
							</td>
							<td>
								<input type="date" name="incomedate">
							</td>
						</tr>
						<tr>
							<td>
								<input type="submit" name="submit" value="Add Product">
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