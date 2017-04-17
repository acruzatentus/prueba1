<?php 
$message = $_GET['message'] ?? '';
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login | Blog Test</title>
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/sigin.css">
</head>
<body>
	<div class="container">

      <form class="form-signin" method="post" action="validar_login.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <?php 
        echo $message;
         ?>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" autofocus name="email">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
</body>
</html>