<DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Book My Stay (Hotel Room Booking)</title>
		<link rel="stylesheet" type="text/css" href="Css/Style.css">
		<link  href="Img/hotel.png" type="img/icon"  rel="icon">
	</head>
	<body>
	<div id="full">
		
			<div id="header">

				<div id="logo">
					<h1><font color="white">My Project</font></h1>

					</div>
						<div><button id="btn">|||</button></div>
							<div id="nav">
								<ul>
									<li><a href="index.php">Home </a></li>
									<li><a href="contact.php">Contact Us </a></li>
									<li><a href="bms.php">Book My Stay </a></li>
									<li><a href="ourhotel.php">Our Hotels </a></li>
									<li><a href="#">Help </a></li>

								</ul>
							</div>
			
					</div>
			
		
	<div id="f1" style="background-color: yellow; top-margin: red">
		<form action="r1.php" method="get">
		<center><table>
			<tr>
				<th width="20%" height="50px"> Destination </th>
				<th width="20%" height="50px"> Check In Date </th>
				<th width="20%" height="50px"> Check Out Date </th>
				<th width="20%" height="50px"> Room </th>
				<td rowspan="2"><input type="submit" value="check" name="sub"></td>
			</tr>
			<tr>
				<th width="20%" height="50px"> <input type="text" name="d1" placeholder="Enter Destination" name=""></th>
				<th width="20%" height="50px"> <input type="date" name="ci" > </th>
				<th width="20%" height="50px"> <input type="date" name="co"> </th>
				<th width="20%" height="50px"> 
					<center><select name="room">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
						<option>13</option>
						<option>14</option>
						<option>15</option>
					

					</center></select>
				</th>
			</tr>
		</table>
		</center>
		</form>
	</div>
	
	</div>
	</body>
	</html>