<?php 
	
	session_start();

	if (isset($_SESSION['username'])) {	
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Product</title>
</head>
<body>
	<form method="POST" action="">
		<table border="1" width="100%" height="642px" bgcolor="PaleTurquoise">
			<tr>
				<td>
					<table align="center" bgcolor="CornflowerBlue" cellspacing="30px">
						<tr>
							<td colspan="2">
								<center><h1><font color="DarkBlue" face="Cursive"><u>Update Product</u></font></h1></center>
							</td>
						</tr>
						<tr>
							<td colspan="2" align="right">
								<input type="text" name="search" placeholder="Search Product">
								<button type="button">Search</button>
							</td>
						</tr>
						<tr>
							<td>
								Product ID:
							</td>
							<td>
								<input type="text" name="pid">
							</td>
						</tr>
						<tr>
							<td>
								Product Name:
							</td>
							<td>
								<input type="text" name="pname">
							</td>
						</tr>
						<tr>
							<td>
								Category:
							</td>
							<td>
								<input type="text" name="pname">
							</td>
						</tr>
						<tr>
							<td>
								Sub-Category:
							</td>
							<td>
								<input type="text" name="pname">
							</td>
						</tr>
						<tr>
							<td>
								Quantity:
							</td>
							<td>
								<input type="number" name="quantity">
							</td>
						</tr>
						<tr>
							<td>
								Buying Price:
							</td>
							<td>
								<input type="number" name="buyprice">
							</td>
						</tr>
						<tr>
							<td>
								Selling Price:
							</td>
							<td>
								<input type="number" name="sellprice">
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
								<input type="submit" name="submit" value="Update Product">
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