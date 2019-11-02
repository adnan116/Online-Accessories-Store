<?php 
	
	session_start();

	if (isset($_SESSION['username'])) {	
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>Remove Product</title>
</head>
<body>
	<form method="POST" action="">
		<table border="1" width="100%" height="642px" bgcolor="PaleTurquoise">
			<tr>
				<td>
					<table align="center" bgcolor="CornflowerBlue" cellspacing="30px">
						<tr>
							<td colspan="2">
								<center><h1><font color="DarkBlue" face="Cursive"><u>Remove Product</u></font></h1></center>
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
								<input type="text" name="pid" disabled>
							</td>
						</tr>
						<tr>
							<td>
								Product Name:
							</td>
							<td>
								<input type="text" name="pname" disabled>
							</td>
						</tr>
						<tr>
							<td>
								Category:
							</td>
							<td>
								<input type="text" name="pname" disabled>
							</td>
						</tr>
						<tr>
							<td>
								Sub-Category:
							</td>
							<td>
								<input type="text" name="pname" disabled>
							</td>
						</tr>
						<tr>
							<td>
								Quantity:
							</td>
							<td>
								<input type="number" name="quantity" disabled>
							</td>
						</tr>
						<tr>
							<td>
								Buying Price:
							</td>
							<td>
								<input type="number" name="buyprice" disabled>
							</td>
						</tr>
						<tr>
							<td>
								Selling Price:
							</td>
							<td>
								<input type="number" name="sellprice" disabled>
							</td>
						</tr>
						<tr>
							<td>
								Incoming Date:
							</td>
							<td>
								<input type="date" name="incomedate" disabled>
							</td>
						</tr>
						<tr>
							<td>
								<input type="submit" name="submit" value="Remove Product">
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