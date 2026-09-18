<?php 
session_start();

 if(!isset($_SESSION['logged'])){
    header('Location:welcome.php');
 }
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./styles/theme.css" />
    <link rel="stylesheet" href="./Styles/root.css">
    <link rel="stylesheet" href="./styles/Home.css" />
    <link rel="stylesheet" href="./styles/footer.css" />
</head>

<body>
    <!-- ############################### Vertical NavBar #####################################-->
    <nav class="vertical_nav">
        <div class="logoName">
          <a href="Home.php" class="logo">
            <img src="./images/logo.png" />
            
            <span>GammY</span>
          </a>
        </div>
        <div class="nav">
                    <a href="Home.html" class="nav_link">
                        <img src="./images/home.png" />
                        <span class="nav_text">Home</span>
                    </a>
                    <a href="./SOLO/solo.php" class="nav_link">
                        <img src="./images/aptitude.png" />
                        <span class="nav_text">SOLO</span>
                    </a>
                    <a href="./multi/multi.php" class="nav_link">
                        <img src="./images/multi.png" />
                        <span class="nav_text">Multi Player</span>
                    </a>
                    <div class="theme">
                         <img src="./images/sun.png" />
                        <img src="./images/moon.png" />
                     </div>
                     <div class="logOut">
                        <a href="logout.php">
                         <span data-hover="Log Out"><img src="./images/logout.png" alt="" class="src"></span>
                       
                       </a>
                     </div>
            </div>  
      </nav>
   
    <!-- ############################ Main Content ##################################-->
    <div class="welcome">
            <img src="./images/logo4.gif" alt="" srcset="">
          <div class="text">
          <h4><?php echo $_SESSION['username']; ?></h4>
            <p>WELCOME TO GAMMY<p>
          </div> 
        </div>
        <main class="content">
            <div class="type_Game single">
                <h2></h2>
                <div class="cards">
                    <div class="game">
                        <img src="./images/wordle.png" />
                        <div class="wave">
                            <svg viewBox="0 70 500 60" preserveAspectRatio="none">
                              <rect x="0" y="0" width="500" height="500" style="stroke: none;" />
                              <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none;"></path>
                            </svg>
                          </div>
                          <a href="./SOLO/wordle.php"><button class="button">Play</button></a>
                    </div>
                    <div class="quote">
                    <span>❝</span>
                      <p>Failure doesn't mean the game is over. it means try again with experience .</p>
                      <div class="line">—―</div>
                    </div>
                    <div class="game">
                        <img src="./images/2048.gif" />
                        <div class="wave">
                            <svg viewBox="0 70 500 60" preserveAspectRatio="none">
                              <rect x="0" y="0" width="500" height="500" style="stroke: none;" />
                              <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none;"></path>
                            </svg>
                          </div>
                        <a href="./SOLO/2048.php"><button class="button">Play</button></a>
                    </div>
                </div>
            </div>
    </main>
    <main class="content">
            <div class="type_Game single">
                <h2></h2>
                <div class="cards">
                    <div class="game">
                        <img src="./images/chess.png" />
                        <div class="wave">
                            <svg viewBox="0 70 500 60" preserveAspectRatio="none">
                              <rect x="0" y="0" width="500" height="500" style="stroke: none;" />
                              <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none;"></path>
                            </svg>
                          </div>
                          <a href="./multi/chess.php"><button class="button">Play</button></a>
                    </div>
                    <div class="quote">
                    <span>❝</span>
                      <p>Uncertainty is the only certainty there is .</p>
                      <div class="line">—―</div>
                    </div>
                    <div class="game">
                        <img src="./images/tic.png" />
                        <div class="wave">
                            <svg viewBox="0 70 500 60" preserveAspectRatio="none">
                              <rect x="0" y="0" width="500" height="500" style="stroke: none;" />
                              <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none;"></path>
                            </svg>
                          </div>
                       <a href="./multi/tic.php"><button class="button">Play</button></a> 
                    </div>
                </div>
            </div>
    </main>
     <footer>
     <div class="footer">
           <div class="symbol">
            <a href="Home.php" class="logo">
            <img src="./images/logo.png" />
            <span>GammY</span>
           </a>
             <div class="describe">
               This web Application is a acadmic project.That we built on PHP,JavaScript.
             </div>
           </div>
           <div class="team">
              <h3 class="footer-titel">Members</h3>
               <ul class="flist">
                <li>Shyam Latake</li>
                <li>Atharv Bhor</li>
                <li>Varun Bhorhade</li>
                <li>Sahil Awari</li>
               </ul>
           </div>
           <div class="footer-games">
              <h3 class="footer-titel">Games</h3>
               <ul class="flist">
                <li>Wordle</li>
                <li>2048</li>
                <li>Chess</li>
                <li>Tic Toc Toe</li>
               </ul>
           </div>
           <div class="social">
           <h3 class="footer-titel">Social</h3>
             <ul class="flist social">
              <li><a><img src="../images/linkedin.png"/>Linkedln</a></li>
              <li><a><img src="../images/insta.png"/>Instagram</a></li>
              <li><a><img src="../images/face.png"/>facebook</a></li>
             </ul>
           </div>
           
            <!-- <input type="text" id="firstName" placeholder="First Name" required>
            <input type="text" id="lastName" placeholder="Last Name" required>
            <input type="email" id="email" placeholder="Email" required>
            <input type="text" id="mobile" placeholder="Mobile" required>
            <textarea placeholder="Type your query!" required></textarea>
            <input type="submit" value="Send" id="button">
          -->
    </div>
     </footer>
    <script src="mode.js"></script>
</body>

</html>
<?php 
}else{
     header("Location: SignIn.php");
     exit();
}
 ?>