<?php
		include "connection.php";
?>
<DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Room Details</title>
		<link rel="stylesheet" type="text/css" href="Css/Style.css">
		<link  href="Img/hotel.png" type="img/icon"  rel="icon">
	</head>
	<body>
	<div id="full">
		<div style="background-image: url('Img/hotel-3.jpg'); background-size: 25%0% 725%px; width: 25%0%; height: 725%px; ">
		
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
			<div id="banner"> <br><br><br><br><br>
				<h1 style="color:blue;text-align:center ;">Welcome</h1>
				<div style="background-color: rgba(155,155,155,0.8);">
				<table>
					
					<tr>
						<th width="25%%" height="50px">Room No</th>
						<th width="25%%" height="50px">Room Type</th>
						<th width="25%%" height="50px">Price</th>
						<th width="25%%" height="50px">Status</th>
						<th width="25%%" height="50px">Option</th>
						

					</tr>
					<?php
								$q1="select * from room";
								$run=mysqli_query($a,$q1);
								while($row=mysqli_fetch_array($run))
								{
									$rno=$row['rno'];
									$type=$row['type'];
									$price=$row['price'];
									$status=$row['status'];
									

					?>
					<tr>
						<td width="25%%" height="50px"><center> <?php echo $rno; ?></center></td>
						<td width="25%%" height="50px"><center> <?php echo $type; ?></center></td>
						<td width="25%%" height="50px"><center> <?php echo $price; ?></center></td>
						<td width="25%%" height="50px"><center> <?php echo $status; ?></center></td>
						<td ><a style="color: green;" href="co.php?rno=<?php echo $rno; ?>">Check Out</a></td>
					<?php
				}
				?>

				</table>
				</div>
				
			</div>
			<center>
	
		</center>
		</div>
	
	</div>
	</body>
	</html>