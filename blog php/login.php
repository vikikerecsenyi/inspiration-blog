<?php include('path.php') ?>
<!DOCTYPE html>
<html lang="hu">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/b48a5a9eb4.js" crossorigin="anonymous"></script>
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<!-- Custom Styling -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<title>Login</title>
</head>
<body>
	<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
	
	<div class="auth-content">
		<form action="login.html" method="post">
			<h2 class="form-title">Login</h2>
			<div>
				<label>Username</label>
				<input type="text" name="username" class="text-input">
			</div>
			<div>
				<label>Password</label>
				<input type="password" name="password" class="text-input">
			</div>
			<div>
				<button type="submit" name="login-btn" class="btn btn-big">Login</button>
			</div>
			<p>Or <a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></p>
		</form>
	</div>
	
	<!-- JQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- Custom Script -->
	<script type="text/javascript" src="assets/js/scripts.js"></script>
</body>
</html>