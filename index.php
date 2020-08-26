<?php
 require_once 'controllers/authController.php';
 if (!isset($_SESSION['id'])) {
   	header('location:login.php');
   	exit();
   }  ?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col_main index_col">
				<?php if(isset($_SESSION['message'])): ?>
				<div class="alert <?php echo $_SESSION['alert-class']; ?>">
					
						<?php
							echo $_SESSION['message'];
							unset($_SESSION['message']);
							unset($_SESSION['alert-class']);
						?>
				</div>
				<?php endif;?>
				<div class="container-fluid">
					<div class="hello_world_div">
						<span>h</span>
						<span>e</span>
						<span>l</span>
						<span>l</span>
						<span>o</span>
						<span>&nbsp; </span>
						<span>w</span>
						<span>o</span>
						<span>r</span>
						<span>l</span>
						<span>d</span>
					</div>
				</div>
				<h3 class="welcome_txt">Welcome, <?php echo ucfirst($_SESSION['username']); ?></h3>
				<a href="index.php?logout" class="logout">Logout</a>
				<?php //if(!$_SESSION['verified']): ?>
					<!-- <div class="alert alert-warning">
						you need to be verify your account sign in to your email account and click on the verification link we just emailed you at
						<strong><?php //echo $_SESSION['email']; ?></strong>
					</div> -->
				<?php //endif; ?>
				<?php //if($_SESSION['verified']): ?>
					<!-- <button class="btn btn-block btn-lg btn-primary">I am verified</button> -->
				<?php //endif; ?>
			</div>
		</div>
	</div>
</body>
</html>