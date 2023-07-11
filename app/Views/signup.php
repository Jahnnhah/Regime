<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/style.css") ?>">
</head>
<body>
     <form action="<?php echo base_url("UserController/info")?>" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>" required><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>" required><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"required><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"required><br>
          
                 <label>Genre</label><br>
                 <select name="genre" id="genre">
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                 </select><br>


     	<button type="submit">Suivant</button>
          <a href="<?php echo base_url("Home/index")?>"class="ca">Already have an account?</a>
     </form>
</body>
</html>