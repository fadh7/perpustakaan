<!DOCTYPE html>
<html>
<head>
<title>Login</title>
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
		<h1>LOGIN SIMPUSDA</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="" method="post">
					<input class="text" type="text" name="username" placeholder="Username" required="">
					
					<input class="text w3lpass" type="password" name="password" placeholder="Password" required="">
					<input type="submit" name="Submit" value="Login">
				</form>
				<p>Belum punya akun? <a href="daftar.php"> Daftar disini!</a></p>
				<?php
          if(isset($_POST['Submit'])){
            //$id = $_POST['id'];
            $username = $_POST['username'];
            $password = $_POST['password'];

			session_start();
            //include database connection file
            include('../admin/config.php');

            //insert user data into table
            $result = mysqli_query($mysqli, "SELECT * FROM m_user where username='$username' and password='$password' and m_role_id ='2'");
			$cek = mysqli_num_rows($result);
			if($cek > 0){
				$data = mysqli_fetch_assoc($result);

				if($data['username'] && $data['password']){
					$_SESSION['username'] = $username;
					header("location:index.php");
				}
				else{
				// 	echo "Username dan Password anda salah";
				// }
				// else if($data['m_role_id'] == "2"){
				// 	$_SESSION['username'] = $username;
				// 	$_SESSION['m_role_id'] = "2";
				// 	header("locationindex.php");
				}
			}
          }
          ?>
			</div>
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