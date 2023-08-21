<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 8%;
   background-color: black;
   color: white;
   text-align: center;
}
</style>

  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>

<div class="footer">
<p><h4>Communication<h4></p>
<p>+2651064732|Arts@gmail.com</p>
<p><h6>Copyright © www.Arts.com 20020-2021<h6></p>
</div>

</body>
</html>