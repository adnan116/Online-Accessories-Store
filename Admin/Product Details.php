<?php 
	
	session_start();

	if (isset($_SESSION['username'])) {	
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>Product Details</title>
</head>
<body>
	
		<table border="0" width="100%" bgcolor="PaleTurquoise">
			<tr>
				<td width="100%" height="50px">
					<center><h1><font color="DarkBlue" face="Cursive"><u>Product Details</u></font></h1></center>
				</td>
			</tr>
			<tr>
				<td align="right">
					<input type="text" name="search" placeholder="Search Product">
					<button type="button">Search</button>
				</td>
			</tr>
			<tr>
				<td>
					<table bgcolor="CornflowerBlue" width="100%" cellspacing="20px">
						<tr>
							<th>Product ID</th>
							<th>Product Name</th>
							<th>Category</th>
							<th>Sub-Category</th>
							<th>Quantity</th>
							<th>Buying Price</th>
							<th>Selling Price</th>
							<th>Incoming Date</th>
						</tr>
						<tr align="center">
							<td>P0001</td>
							<td>Power Bank</td>
							<td>Mobile</td>
							<td>Xiomi</td>
							<td>100</td>
							<td>900</td>
							<td>1000</td>
							<td>12/10/2019</td>
						</tr>	
						<tr align="center">
							<td>P0002</td>
							<td>Power Bank</td>
							<td>Mobile</td>
							<td>Adata</td>
							<td>120</td>
							<td>920</td>
							<td>1200</td>
							<td>12/10/2019</td>
						</tr>
						<tr align="center">
							<td>P0003</td>
							<td>Power Bank</td>
							<td>Mobile</td>
							<td>DTel</td>
							<td>150</td>
							<td>800</td>
							<td>950</td>
							<td>12/10/2018</td>
						</tr>
						<tr align="center">
							<td>P0004</td>
							<td>Power Bank</td>
							<td>Mobile</td>
							<td>Symphony</td>
							<td>90</td>
							<td>750</td>
							<td>850</td>
							<td>12/05/2019</td>
						</tr>
						<tr align="center">
							<td>P0005</td>
							<td>Charger</td>
							<td>Mobile</td>
							<td>Xiomi</td>
							<td>90</td>
							<td>750</td>
							<td>850</td>
							<td>12/05/2019</td>
						</tr>
						<tr align="center">
							<td>P0006</td>
							<td>Charger</td>
							<td>Mobile</td>
							<td>Apple</td>
							<td>100</td>
							<td>1500</td>
							<td>2200</td>
							<td>12/04/2019</td>
						</tr>
						<tr align="center">
							<td>P0007</td>
							<td>Charger</td>
							<td>Mobile</td>
							<td>Remax</td>
							<td>90</td>
							<td>750</td>
							<td>850</td>
							<td>12/05/2019</td>
						</tr>
						<tr align="center">
							<td>P0008</td>
							<td>Headphone</td>
							<td>Mobile</td>
							<td>Apple</td>
							<td>90</td>
							<td>2000</td>
							<td>3000</td>
							<td>12/01/2019</td>
						</tr>
						<tr align="center">
							<td>P0009</td>
							<td>Headphone</td>
							<td>Mobile</td>
							<td>Xiomi</td>
							<td>90</td>
							<td>250</td>
							<td>400</td>
							<td>02/02/2019</td>
						</tr>
						<tr align="center">
							<td>P0010</td>
							<td>Mouse</td>
							<td>Computer</td>
							<td>Logitech</td>
							<td>90</td>
							<td>350</td>
							<td>400</td>
							<td>12/01/2019</td>
						</tr>
						<tr align="center">
							<td>P0011</td>
							<td>Mouse</td>
							<td>Computer</td>
							<td>Logitech</td>
							<td>100</td>
							<td>500</td>
							<td>700</td>
							<td>12/01/2019</td>
						</tr>	
						<tr align="center">
							<td>P0012</td>
							<td>Mouse</td>
							<td>Computer</td>
							<td>HP</td>
							<td>90</td>
							<td>500</td>
							<td>700</td>
							<td>12/01/2019</td>
						</tr>
						<tr align="center">
							<td>P0013</td>
							<td>Mouse</td>
							<td>Computer</td>
							<td>Xiomi</td>
							<td>90</td>
							<td>500</td>
							<td>700</td>
							<td>12/01/2019</td>
						</tr>
						<tr align="center">
							<td>P0014</td>
							<td>Mouse</td>
							<td>Computer</td>
							<td>Apple</td>
							<td>90</td>
							<td>8000</td>
							<td>11000</td>
							<td>12/01/2018</td>
						</tr>
						<tr align="center">
							<td>P0015</td>
							<td>Keyboard</td>
							<td>Computer</td>
							<td>Logitech</td>
							<td>200</td>
							<td>400</td>
							<td>600</td>
							<td>12/06/2019</td>
						</tr>	
						<tr align="center">
							<td>P0016</td>
							<td>Keyboard</td>
							<td>Computer</td>
							<td>A4Tech</td>
							<td>220</td>
							<td>400</td>
							<td>500</td>
							<td>12/01/2018</td>
						</tr>
						<tr align="center">
							<td>P0017</td>
							<td>Keyboard</td>
							<td>Computer</td>
							<td>HP</td>
							<td>230</td>
							<td>400</td>
							<td>600</td>
							<td>12/06/2019</td>
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