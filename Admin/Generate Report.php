<?php 
	
	session_start();

	if (isset($_SESSION['username'])) {	
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>Generate Sales Report</title>
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
									<h1><font color="DarkBlue" face="Cursive"><u>Generate Sales Report</u></font></h1>
								</center>
							</td>
						</tr>
						<tr>
							<td colspan="2">
									<table cellspacing="30px">
										<tr>
											<td width="35%">
												Transaction Date:
											</td>
											<td>
												<input type="date" name="trandate"required>
											</td>
										</tr>
										<tr>
											<td width="35%">
												Transaction ID:
											</td>
											<td>
												<input type="text" name="tranid" placeholder="Enter the Transaction ID" required>
											</td>
										</tr>
										<tr>
											<td width="35%">
												Order Number:
											</td>
											<td>
												<input type="text" name="orderno" placeholder="Enter the Order Number" required>
											</td>
										</tr>
										<tr>
											<td width="35%">
												Amount:
											</td>
											<td>
												<input type="number" name="amount" placeholder="Enter the Amount" required>
											</td>
										</tr>
										<tr>
											<td width="35%">
												Profit:
											</td>
											<td>
												<input type="number" name="profit" placeholder="Enter the Profit" required>
											</td>
										</tr>
										<tr>
											<td>
												<input type="submit" name="submit" value="Generate Report">
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