<!DOCTYPE html>
<html>
<head>
<title>SIMPUSDA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
<!-- Custom Theme files -->
<link href="css/login.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Daftar Keanggotaan</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="" method="post">
					<!-- <input class="text" type="text" name="nik" placeholder="NIK/NISN/NIM" required="">
					<input class="text email" type="text" name="namadepan" placeholder="Nama Depan" required="">
					<input class="text" type="text" name="namabelakang" placeholder="Nama Belakang" required="">
					<input class="text w3lpass" type="text" name="alamat" placeholder="Alamat" required="">
					<input class="text" type="text" name="instansi" placeholder="Instansi" required="">
					<input class="text w3lpass" type="text" name="phone" placeholder="No Telpon" onkeypress="return event.charCode <=57" maxlength="14" required="">
					<input class="text" type="email" name="email" placeholder="Email" required="">
					<input class="text w3lpass" type="password" name="password" placeholder="Password" required=""> -->
					<input class="text" type="text" name="username" placeholder="Username" required="">
					<input class="text w3lpass" type="password" name="password" placeholder="Password" required="">
					<input class="text" type="text" name="nama_depan" placeholder="Nama Depan" required="">
					<input class="text w3lpass" type="text" name="nama_belakang" placeholder="Nama Belakang" required="">
					<input class="text" type="hidden" name="m_role_id" value="2" required="">
					<div class="wthree-text">
						<!-- <label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label> -->
						<div class="clear"> </div>
					</div>
					<input type="submit" name="Submit" value="DAFTAR">
				</form>
				<p>Sudah punya akun? <a href="login.php"> Login Sekarang!</a></p>
			</div>
			<?php
          if(isset($_POST['Submit'])){
            //$id = $_POST['id'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $nama_depan = $_POST['nama_depan'];
            $nama_belakang = $_POST['nama_belakang'];
            $m_role_id = $_POST['m_role_id'];

            //include database connection file
            include('../admin/config.php');

            //insert user data into table
            $result = mysqli_query($mysqli, 'INSERT INTO m_user(username, password, nama_depan, nama_belakang, m_role_id) VALUES ("'.$username.'","'.$password.'","'.$nama_depan.'","'.$nama_belakang.'","'.$m_role_id.'")');

            //show message when user added
            //echo "User added successfully. <a href = 'user.php'>View Users </a>";
            echo "<script>window.location.href='login.php';</script>";
          }
          ?>
		</div>
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>