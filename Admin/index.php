<?php
		include "connection.php";
?>
<DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Login</title>
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
								<li><a href="#">Home </a></li>
								<li><a href="#">Contact Us </a></li>
								<li><a href="#">Book My Stay </a></li>
								<li><a href="#">Our Hotels </a></li>
								<li><a href="#">Help </a></li>

							</ul>
						</div>
			
					</div>
			<div id="banner"> <br><br><br><br><br>
				<center><div style="background:rgba(255,255,255,.5); width:80%">
	<form action="" method="post">
		<table>
			<tr>
				<td width="50%" height="50px">Username</td>
				<td width="50%" height="50px" ><input type="text" name="un" placeholder="Enter Username" title="Enter USername"></td>
			</tr>
			<tr>
				<td width="50%" height="50px">Password</td>
				<td width="50%" height="50px" ><input type="password" name="ps" placeholder="Enter Password" title="Enter Password"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="sub" value="Login" style="width: 150px; height: 50px; border-radius: 30px; opacity: 0.8;"></td>
			</tr>

		</table>
		</form>
		<?php
		if(isset($_POST['sub']))
		{
			$un=$_POST['un'];
			$ps=$_POST['ps'];
			$q1="select * from admin";
			$run=mysqli_query($a,$q1);
			$row=mysqli_fetch_array($run);
			  $u=$row['un'];
			  $p=$row['ps'];
				if ($un==$u && $ps==$p) {
					header("location: ahome.php");

				}else{
					header("location: index.php?Wrong User");
				}

		 }
		?>
		</div></center>
			</div>
			<center>
	
		</center>
		</div>
	
	</div>
	</body>
	</html>