<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/style.css") ?>">
</head>
<body>
     <form action="<?php echo base_url("");?>" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="<?php echo base_url("Home/register") ?>" class="ca">Create an account</a>
     </form>
</body>
</html>