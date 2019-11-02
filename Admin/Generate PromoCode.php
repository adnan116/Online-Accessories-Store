<?php 
	
	session_start();

	if (isset($_SESSION['username'])) {	
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>Generate Promo Code</title>
</head>
<body>
	<table border="0" width="100%" height="642px" bgcolor="PaleTurquoise">
		<tr>
			<td>
				<form method="POST" action="">
					<table align="center" bgcolor="CornflowerBlue" width="500px" height="300px" cellspacing="20px">
						<tr>
							<td>
								<center>
									<h1><font color="DarkBlue" face="Cursive"><u>Generate Promo Code</u></font></h1>
								</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
									<table cellspacing="30px">
										<tr>
											<td width="35%">
												Promo Code :
											</td>
											<td>
												<input type="text" name="promocode" placeholder="Enter the Promo Code" required>
											</td>
										</tr>
										<tr>
											<td width="35%">
												Discount Percentage :
											</td>
											<td>
												<input type="number" name="discount" placeholder="Enter the Discount Percentage" required>
											</td>
										</tr>
										<tr>
											<td>
												<input type="submit" name="submit" value="Generate Promo">
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