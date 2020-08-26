<?php require_once 'controllers/authController.php';?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col_main">
				<form action="login.php" method="post">
					<h3 class="text-center">Login</h3>
					<?php if(count($errors)>0): ?>
					<div class="alert alert-danger">
						<?php foreach($errors as $error): ?>
							<li><?php echo $error; ?></li>
						<?php endforeach;?>
					</div>
					<?php endif; ?>
					<div class="form-group">
						<label for="username">Userame or Email</label>
						<input type="text" name="username"  value="<?php echo $username;?>" class="form-control form-control-lg" autocomplete="off">
					</div>
					
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password"  value="<?php echo $password;?>" class="form-control form-control-lg" autocomplete="off">
					</div>
					<div class="form-group"> 
						<button type="submit" type="button" name="login-btn" class="btn btn-primary btn-lg btn-block">Log In</button>
					</div>
					<p class="text-center">Not yet member ? <a href="signup.php">sign up</a></p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>