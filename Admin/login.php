<?php
	session_start();
	if(isset($_GET['page']) && $_GET['page']=="logOut"){
		session_destroy();
	}
	if(isset($_SESSION['adminId']) && isset($_SESSION['time'])){
		header("Location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TRIPBUZZ | Login</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="shortcut icon" href="img-icon/icon-3.png">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="style.css">
</head>
<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<img src="img-icon/admin-logo.png" width="80px" height="80px" alt="admin login picture">
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg">Sign in to start your session</p>
			<?php
			
				if(isset($_SESSION['lerrms'])){
					echo $_SESSION['lerrms'];
					unset($_SESSION['lerrms']);
				}
			?>
			<form action="loginAction.php" method="post">
				<div class="form-group" id="loginForm">
					<input type="text" name="userName" id="userName" placeholder="User name" class="form-control" required autofocus>
				</div>
				<div class="form-group" id="loginForm">
					<input type="password" name="userPass" id="userPass" placeholder="Password" class="form-control" required>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-xs-4 checkbox">
							<input type="checkbox">Remember Me
						</div>
						<div class="col-xs-6 signBtn">
							<button type="submit" class="form-control btn btn-sm btn-primary pull-right">Sing in</button>
						</div>
					</div>
				</div>
			</form>
			<div class="row">
				<div class="col-xs-12">
					<a href="#">Forgotten your password ?</a><br>
				</div>
			</div>
		</div>
		<!--/login-box-body -->
	</div>
	<!--/login-box -->
	<!-- jQuery 3 -->
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script>
		window.setTimeout(function() {
			$(".alert").fadeTo(500, 0).slideUp(500, function(){
				$(this).remove(); 
			});
		}, 1000);
	</script>
</body>
</html>
