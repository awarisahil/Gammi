<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<!-- <link rel="stylesheet" type="text/css" href="./Styles/style.css"> -->
	<link rel="stylesheet" type="text/css" href="./Styles/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.birds.min.js"></script>
</head>
<body id="vanta-background" class="login">
       <form action="SignIn.php" method="post">
     	  <div class="head">
              <img src="./images/login.gif"/>
              <h2>WELCOME! TO LOGIN</h2>
        </div>  
      <div class="data">
      <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
      <label>User Name</label>
     	<input type="text" name="uname"><br>

     	<label>Password</label>
     	<input type="password" name="password"><br>

      <a href="signUp.php" class="UpIn">Create an account ?</a>
      <button type="submit" class="login-Btn"><h4>Login</h4></button>
      </div>
     </form>   
	 <script>
   VANTA.BIRDS({
  el: "#vanta-background",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00
  })
</script>
</body>
</html>