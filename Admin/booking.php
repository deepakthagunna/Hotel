<?php
		include "connection.php";
?>
<DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Booking</title>
		<link rel="stylesheet" type="text/css" href="Css/Style.css">
		<link  href="Img/hotel.png" type="img/icon"  rel="icon">
	</head>
	<body>
	<div id="full">
		<div style="background-image: url('Img/hotel-3.jpg'); background-size: 100% 710px; width: 100%; height: 710px; ">
		
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
						<th width="10%" height="50px">Name</th>
						<th width="10%" height="50px">ID No</th>
						<th width="10%" height="50px">City</th>
						<th width="10%" height="50px">District</th>
						<th width="10%" height="50px">Province</th>
						<th width="10%" height="50px">Check In Date</th>
						<th width="10%" height="50px">Check Out Date</th>
						<th width="10%" height="50px">Members</th>

					</tr>

						<?php
								$q1="select * from f1";
								$run=mysqli_query($a,$q1);
								while($row=mysqli_fetch_array($run))
								{
									$name=$row['name'];
									$indo=$row['indo'];
									$city=$row['city'];
									$dis=$row['dis'];
									$state=$row['prov'];
									$cidate=$row['cidate'];
									$codate=$row['codate'];
									$m=$row['m'];

							?>
						
						
					<tr>
						<td width="10%" height="50px"><center> <?php echo $name; ?></center></td>
						<td width="10%" height="50px"><center> <?php echo $indo; ?></center></td>
						<td width="10%" height="50px"><center> <?php echo $city; ?></center></td>
						<td width="10%" height="50px"><center> <?php echo $dis; ?></center></td>
						<td width="10%" height="50px"><center> <?php echo $state; ?></center></td>
						<td width="10%" height="50px"><center> <?php echo $cidate; ?></center></td>
						<td width="10%" height="50px"><center> <?php echo $codate; ?></center></td>
						<td width="10%" height="50px"><center> <?php echo $m; ?></center></td>
					</tr>
					<?php	}
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