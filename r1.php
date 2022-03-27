<?php
	include 'connection.php';
	 $r=$_GET['room'];
	 $ci=$_GET['ci'];
	 $co=$_GET['co'];

	 $r=$r;
	 $ci=$ci;
	 $co=$co;

?>
<DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Form</title>
		<link rel="stylesheet" type="text/css" href="Css/Style.css">
		<link  href="Img/hotel.png" type="img/icon"  rel="icon">
		

	</head>
	<body>
	<div id="full">
		<div id="bg" style="background-image: url('Img/r1.jpg'); height: 1200px;">

			<div id="header">

				<div id="logo">
					<h1><font color="white">My Project</font></h1>

					</div>
				
						<div id="nav">
							<ul>
								<li><a href="index.php">Home </a></li>
								<li><a href="contact.php">Contact Us </a></li>
								<li><a href="#">Book My Stay </a></li>
								<li><a href="#">Our Hotels </a></li>
								<li><a href="#">Help </a></li>

							</ul>
						</div>
			
					</div>
			<div id="banner">
				<div id="form">
				<form action="r1.php" method="post">
				<table style="color: yellow;">
					<?php
						$q1="select * from room where status='Un Book'";
						$run=mysqli_query($a,$q1);
						$row=mysqli_fetch_array($run);
						$rno=$row['rno'];

							$q="select * from room where status='Un Book'";
							$run=mysqli_query($a,$q);
							$num=mysqli_num_rows($run);
							echo $num;
							if ($r<=$num) {
					?>
						<tr>
							<td>Status</td>
							<td><input type="text" name="status" value="Available" disabled="disabled" title="Status">
							</td>						
						</tr>
							
							<tr>
								<td>Name</td>
								<td><input type="text0" name="name" placeholder="Enter Name" title="Name"></td>
								<td>ID No.</td>
								<td><input type="text" name="indo" placeholder="Enter ID" title="ID"></td>
							</tr>
							
									<tr>
										<td>Province</td>
											<td><select name="prov">
												<option>--Select--</option>
												<option>Province No. 1</option>
												<option>Province No. 2</option>
												<option>Province No. 3</option>
												<option>Gandaki Pradesh</option>
												<option>Province No. 5</option>
												<option>Karnali Pradesh</option>
												<option>Sudurpashchim Pradesh	</option>
										</select></td>
									</tr>
									<tr>
										<td>District</td>
											<td><select name="dis">
														<option>--Select--</option>
														 <option>Achham</option>
														<option>Arghakhanchi</option>
														<option>Baglung</option>
														<option>Baitadi</option>
														<option>Bajhang</option>
														<option>Bajura</option>
														<option>Banke</option>
														<option>Bara</option>
														<option>Bardiya</option>
														<option>Bhaktapur</option>
														<option>Bhojpur</option>
														<option>Chitwan</option>
														<option>Dadeldhura</option>
												</select></td>
									</tr>
									<tr>
											<td>City</td>
											<td><select name="city">
												<option>--Select--</option>
												<option>Kathmandu</option>
												<option>Lalitpur</option>
												<option>Bhaktapur</option>
											</select></td>
										</tr>
									
										
									<tr>
										<td>Enter Your Mail</td>
										<td><input type="text" name="email" placeholder="Enter Email" title="E-mail"></td>
									</tr>
									<tr>
										<td>Check-IN Date</td>
										<td><input type="text" name="coin" value="<?php echo $ci;?>" title="Check"></td>
										<td>Check Out</td>
										<td><input type="text" name="coout" value="<?php echo $co;?>" title="Check Out"></td>
									</tr>
									<tr>
										<td>Enter Member</td>
										<td><input type="text" name="members" placeholder="Enter Member" title="Member"></td>
									</tr>
									<td>
										<td><input style="width: 120px; height: 30px; border-radius: 20px; opacity: 0.47;" type="submit" name="submit" value="submit"></td>
									</td>
					<?php  	}		
					else
					{
						?>
						<tr>
							<td>Status</td>
							<td><input type="text " name="Status" value=" Not Available" disabled="disabled" title="Status"></td>
						</tr>
					<?php 
							}

					?>
			
									

						
					</table>
				</form>
	<?php
		if(isset($_POST['submit']))
			{
				$name=$_POST['name'];
				$indo=$_POST['indo'];
				$city=$_POST['city'];
				$dis=$_POST['dis'];
				$prov=$_POST['prov'];
				$email=$_POST['email'];
				$cidate=$_POST['coin'];
				$codate=$_POST['coout'];
				$m=$_POST['members'];


					if(mysqli_query($a, "insert into f1(name,indo,city,dis,prov,email,cidate,codate,m) value('$name','$indo','$city','$dis','$prov','$email','$cidate','$codate','$m')"))
					{
						mysqli_query($a,"update room set status='book' where rno=$rno");
						header ("location: fi.php");
					}else{ echo "hello";
							
					}
				}
	?>
</div>
			</div>
			</div>
		</div>
	
	</body>
	</html>




	