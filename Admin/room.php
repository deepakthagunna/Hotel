<?php
	include 'connection.php';
?>
<DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Room Update</title>
		<link rel="stylesheet" type="text/css" href="Css/Style.css">
		<link  href="Img/hotel.png" type="img/icon"  rel="icon">
		

	</head>
	<body>
	<div id="full" >
		<div id="bg" style="background-image: url('Img/r1.jpg'); height: 1200px;">

			<div id="header">

				<div id="logo">
					<h1><font color="white">My Project</font></h1>

					</div>
				
						<div id="nav">
							<ul>
								<li><a href="ahome.php">Home </a></li>
								<li><a href="room.php">ROom Update </a></li>
								<li><a href="booking.php">booking</a></li>
								<li><a href="rd.php">Room Details </a></li>
								<li><a href="#">Help </a></li>

							</ul>
						</div>
			
					</div>
			<div id="banner">
				<center><div id="form">
				<form action="room.php" method="post">
				<table style="color: purple;">
						
							
							<tr>
								<td>Room No</td>
								<td><input type="text" name="rno" placeholder="Enter Room No" title="Enter Room no"></td>
							</tr>
							<tr>	
								<td>Room Type</td>
								<td><input type="text" name="type" placeholder="Enter Room Type" title="Enter Room Type"></td>
							</tr>
							<tr>	
								<td>Room Price</td>
								<td><input type="text" name="price" placeholder="Enter Room price" title="Enter Room price"></td>
							</tr>
					<td>
						<td><input style="width: 120px; height: 38px; border-radius: 20px; opacity: 0.7;" type="submit" name="submit"></td>
					</td>
	
				</table>
				</form>
					<?php
						if(isset($_POST['submit']))
						{
							$rno=$_POST['rno'];
							$type=$_POST['type'];
						
							$p=$_POST['price'];
						if(mysqli_query($a,"insert into room(rno,type,price) value ('$rno','$type','$p')"))
						{
							echo "Data Inserted";
						}else{
							echo "Not Inserted";
						}
						}

					?>
				</center>
			</div>
			</div>
		</div>
	
	</body>
	</html>




	