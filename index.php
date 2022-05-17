<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="TimsStyle.css">
<title>Tim Horton's Orders</title>
<img src="images/logo-en.jpg">
<header>
	<h1>Welcome to Tim Hortons</h1>
</header>
</head>
<body>
	<p>
	
	
	<h3>Please enter your order below</h3>
	</p>
	<br>
	<form action="order.php" method="get">
		<table>
			<tr>
				<td>Number of Coffees:</td>
				<td><input type="number" name="count"></input></td>
			</tr>
			<tr>
				<td>Size:</td>
				<td><input list="size" name="size"> <datalist id="size">
						<option value="small">
						
						
						<option value="medium">
						
						
						<option value="large">
						
						
						<option value="extra-large">
					
					</datalist></td>
			</tr>
			<tr>
				<td>How many creams?</td>
				<td><input type="number" name="cream"></input></td>
			</tr>
			<tr>
				<td>How many sugars?</td>
				<td><input type="number" name="sugar"></input></td>
			</tr>
		</table>

		<input type="submit" value="Submit">
	</form>
</body>
</html>