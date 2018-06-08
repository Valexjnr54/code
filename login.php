<?php
	
   // Starting Session
   session_start(); 
   $error = '';
   if (isset($_POST['submit'])) {
   	if ($username = 'admin' && $password = 'admin45') {
   		$_SESSION['login_user']=$username; // Initializing Session
            // header("location: ./users/profile.php"); // Redirecting To Other Page
            echo "<script> alert('success');
            		window.location = './admin/dashboard.php';
            	</script>";
   	} else {
   		 	if (empty($_POST['username']) || empty($_POST['password'])) {
   		$error = "Username or Password is invalid";
   	} else {
   		//Define username and password
   		$username=$_POST['username'];
		$password=md5($_POST['password']);
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = mysqli_connect("localhost", "root", "");
		// To protect MySQL injection for Security purpose
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysqli_real_escape_string($connection,$username);
		$password = mysqli_real_escape_string($connection,$password);
		// Selecting Database
		$db = mysqli_select_db( $connection,"job_db");
		// SQL query to fetch information of registerd users and finds user match.
		$query = mysqli_query( $connection,"select * from `user_table` where `password`='$password' AND `username`='$username'");
		$rows = mysqli_num_rows($query);
		echo $rows;
		if ($rows == 1) {
			$_SESSION['login_user']=$username; // Initializing Session
            // header("location: ./users/profile.php"); // Redirecting To Other Page
            echo "<script> alert('success');
            		window.location = './users/profile.php';
            	</script>";
		} else{
			$error = "Username or Password is invalid";
		}
		mysqli_close($connection); // Closing Connection
   	   }
   	}
   	
  
   	
   }
  

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Valex">

		<link rel="shortcut icon" href="users/assets/images/envato.jpg">

	   <title>Victor's Agency | Official Website</title>
		<link href="admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <script src="admin/assets/js/modernizr.min.js"></script>

	</head>
	<body>

		<div class="account-pages"></div>
		<div class="clearfix"></div>
		
		<div class="wrapper-page">
			<div class="card-box">
				<div class="panel-heading">
					<h3 class="text-center"> Log In to <strong class="text-primary">Victor's Agency</strong></h3>
				</div>

				<div class="panel-body">
					<form class="form-horizontal m-t-20" action="" method="POST">

						<div class="form-group ">
							<div class="col-xs-12">
								<input class="form-control" type="text" required="" placeholder="Username" name="username">
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-12">
								<input class="form-control" type="password" required="" placeholder="Password" name="password">
							</div>
						</div>

						<div class="form-group ">
							<div class="col-xs-12">
								<div class="checkbox checkbox-primary">
									<input id="checkbox-signup" type="checkbox">
									<label for="checkbox-signup"> Remember me </label>
								</div>

							</div>
						</div>

						<div class="form-group text-center m-t-40">
							<div class="col-xs-12">
								<button class="btn btn-primary btn-block text-uppercase waves-effect waves-light" type="submit" name="submit">
									Log In
								</button>
							</div>
						</div>

						<div class="form-group m-t-20 m-b-0">
							<div class="col-sm-12">
								<a href="reset.php" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
							</div>
						</div>
						
					</form>

				</div>
			</div>
		</div>

<?php

 	//require_once 'users-login.php';

?>

		<script>
			var resizefunc = [];
		</script>

		<!-- jQuery  -->
        <script src="admin/assets/js/jquery.min.js"></script>
        <script src="admin/assets/js/bootstrap.min.js"></script>
        <script src="admin/assets/js/detect.js"></script>
        <script src="admin/assets/js/fastclick.js"></script>
        <script src="admin/assets/js/jquery.slimscroll.js"></script>
        <script src="admin/assets/js/jquery.blockUI.js"></script>
        <script src="admin/assets/js/waves.js"></script>
        <script src="admin/assets/js/wow.min.js"></script>
        <script src="admin/assets/js/jquery.nicescroll.js"></script>
        <script src="admin/assets/js/jquery.scrollTo.min.js"></script>
        <script src="admin/assets/js/jquery.core.js"></script>
        <script src="admin/assets/js/jquery.app.js"></script>

	</body>
</html>