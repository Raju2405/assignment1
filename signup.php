<?php require_once 'controllers/authController.php';?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>register</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col_main">
				<form action="signup.php" method="post">
					<h3 class="text-center">register</h3>


					<?php if(count($errors)>0): ?>
					<div class="alert alert-danger">
						<?php foreach($errors as $error): ?>
							<li><?php echo $error; ?></li>
						<?php endforeach;?>
					</div>
					<?php endif; ?>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="username" value="<?php echo $username;?>" class="form-control form-control-lg" >
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" value="<?php echo $email;?>" class="form-control form-control-lg"  >
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password"  class="form-control form-control-lg" >
					</div>
					<div class="form-group"> 
						<button type="submit" type="button" name="signup-btn" class="btn btn-primary btn-lg btn-block">Signup</button>
					</div>
					<p class="text-center">Already member ? <a href="login.php">sign In</a></p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>