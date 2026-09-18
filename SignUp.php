<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./Styles/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.birds.min.js"></script>
    <title>Document</title>
</head>
<body id="vanta-background" class="signup">
<form action="signUp-check.php" method="post" class="signUp">
         <div class="SignUp head">
             <img src="./images/signupp.png"/>
              <h2>SIGN UP</h2>
        </div>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text"  name="uname"  value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text"  name="uname"><br>
          <?php }?>

          <label>Email</label>
          <?php if (isset($_GET['Email'])) { ?>
               <input type="email" name="Email"  value="<?php echo $_GET['Email']; ?>"><br>
          <?php }else{ ?>
               <input type="email" name="Email" ><br>
          <?php }?>
     	<label>Password</label>
     	<input type="password" name="password"><br>
          <label>Confirm Password</label>
          <input type="password" name="re_password"><br>
          <a href="login.php" class="UpIn">Already have an account?</a>
     	<button type="submit" class="login-Btn">Sign Up</button>
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
