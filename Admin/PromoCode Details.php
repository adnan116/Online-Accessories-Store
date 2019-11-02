<?php 
	
	session_start();

	if (isset($_SESSION['username'])) {	
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>Promo Code Details</title>
</head>
<body>
	
		<table border="0" width="100%" bgcolor="PaleTurquoise">
			<tr>
				<td width="100%" height="50px">
					<center><h1><font color="DarkBlue" face="Cursive">Promo Code Details</font></h1></center>
				</td>
			</tr>
			<tr>
				<td align="right">
					<input type="text" name="search" placeholder="Search Promo Code">
					<button type="button">Search</button>
				</td>
			</tr>
			<tr>
				<td>
					<table bgcolor="CornflowerBlue" width="100%" cellspacing="20px">
						<tr>
							<th>Promo Code</th>
							<th>Discount Percentage</th>
							<th>Status</th>
						</tr>
						<tr align="center">
							<td>BDXVHE</td>
							<td>10%</td>
							<td>Enable</td>
						</tr>
						<tr align="center">
							<td>BDpHdE</td>
							<td>15%</td>
							<td>Disable</td>
						</tr>
						<tr align="center">
							<td>AlPerd</td>
							<td>20%</td>
							<td>Disable</td>
						</tr>
						<tr align="center">
							<td>PDerLH</td>
							<td>25%</td>
							<td>Enable</td>
						</tr>
						<tr align="center">
							<td>BDALL</td>
							<td>5%</td>
							<td>Enable</td>
						</tr>
						<tr align="center">
							<td>BlKVHE</td>
							<td>10%</td>
							<td>Disable</td>
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
	}
?>