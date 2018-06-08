<?php
	session_start();
  $servername = "localhost";
	  $serverusername = "root";
	  $serverpassword = "";
	  $dbname = "job_db";
	  $conn;

	  $conn = mysqli_connect($servername, $serverusername, $serverpassword);

	  if(! $conn ) {  
      die('Could not connect: ' . mysql_error()); 
   } 
    
   //echo 'Connected successfully'; 
    
   mysqli_select_db( $conn,'job_db' );

if (isset($_POST["submit"])) {
				$first_name = $_POST["first_name"];
			    $last_name = $_POST["last_name"];
			    $username = $_POST["username"];
			    $email = $_POST["email"];
			    $password = $_POST["password"];
			    $c_password = $_POST["c_password"];
			    $err="";
			    	if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['username'])&& !empty($_POST['email'])  && !empty($_POST['password']) && !empty($_POST['c_password'])){
			    		if ($password == $c_password) {
			    				$passwordhash = md5($password);
								$c_passwordhash = md5($c_password);

								 $query="INSERT INTO `user_table`(`first_name`,`last_name`, `username`,`email`,`password`, `c_password`,`date`) VALUES ('$first_name','$last_name','$username','$email','$passwordhash','$c_passwordhash','" . date('Y-m-d')."')";
								 $run_query = mysqli_query($conn, $query);
								 if ($run_query) {
								 	header("Location:./users/cv.php");
								 } else {
								 	 $err = "<span class=' alert alert-danger'>could not insert</span>";
								 }
								 
			    		} else {
			    			 $err = "<span class='alert alert-danger'>incorrect password</span>";
			    		}
			    		
						
			} else {
				 $err = "<span class='alert alert-danger'>All fields required</span>";
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
					<h3 class="text-center"> Sign Up to <strong class="text-primary">Victor's Agency</strong></h3>
				</div>

				<div class="panel-body">
					<form class="form-horizontal m-t-20" action="<?php $_PHP_SELF ?>" method="POST">

						<div class="form-group ">
							<div class="col-xs-12">
								<input class="form-control" type="text" required="" placeholder="First Name" name="first_name">
							</div>
						</div>

						<div class="form-group ">
							<div class="col-xs-12">
								<input class="form-control" type="text" required="" placeholder="Last Name" name="last_name">
							</div>
						</div>

						<div class="form-group ">
							<div class="col-xs-12">
								<input class="form-control" type="text" required="" placeholder="Username" name="username">
							</div>
						</div>

						<div class="form-group ">
							<div class="col-xs-12">
								<input class="form-control" type="email" required="" placeholder="e-mail" name="email">
							</div>
						</div>

						<div class="form-group ">
							<div class="col-xs-12">
								<input class="form-control" type="password" required="" placeholder="Password" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-12">
								<input class="form-control" type="password" required="" placeholder="Confirm Password" name="c_password">
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
									sign up
								</button>
							</div>
						</div>

						<div class="form-group m-t-20 m-b-0">
							<div class="col-sm-12">
								<a href="login.php" class="text-dark"><i class="fa fa-lock m-r-5"></i> Already Have An Account?</a>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>

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