<?php
session_start();

if (!isset($_SESSION['logged'])) {
    header('Location:login.php');
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
        <link rel="stylesheet" href="../styles/theme.css" />
        <link rel="stylesheet" href="../styles/multi.css" />
        <link rel="stylesheet" href="../styles/root.css" />
    </head>

    <body>
        <!-- ############################### Vertical NavBar #####################################-->
        <nav class="vertical_nav">
            <div class="logoName">
                <a href="" class="logo">
                    <img src="../images/logo.png" />

                    <span>GAAMY</span>
                </a>
            </div>
            <div class="nav">
                <a href="../Home.php" class="nav_link">
                    <img src="../images/home.png" />
                    <span class="nav_text">Home</span>
                </a>
                <a href="../SOLO/solo.php" class="nav_link">
                    <img src="../images/aptitude.png" />
                    <span class="nav_text">SOLO</span>
                </a>
                <a href="multi.php" class="nav_link">
                    <img src="../images/multi.png" />
                    <span class="nav_text">Multi Player</span>
                </a>
                <div class="theme">
                    <img src="../images/sun.png" />
                    <img src="../images/moon.png" />
                </div>
                <div class="logOut">
                    <a href="logout.php">
                        <img src="../images/logout.png" alt="" class="src">
                        <span class="nav_text">Log Out</span>
                    </a>
                </div>
            </div>
        </nav>

        <!-- ############################ Wordle Content ##################################-->

        <main class="content">
            <div class="bg">
            </div>
            <div class="cards">
                <div class="game">
                    <img src="../images/chess.png" />
                    <div class="wave">
                        <svg viewBox="0 70 500 60" preserveAspectRatio="none">
                            <rect x="0" y="0" width="500" height="500" style="stroke: none;" />
                            <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none;"></path>
                        </svg>
                    </div>
                    <a href="chess.php"><button class="button" role="button">Play</button></a>
                </div>
                <div class="game">
                    <img src="../images/tic.png" />
                    <div class="wave">
                        <svg viewBox="0 70 500 60" preserveAspectRatio="none">
                            <rect x="0" y="0" width="500" height="500" style="stroke: none;" />
                            <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none;"></path>
                        </svg>
                    </div>
                    <a href="tic.php"><button class="button" role="button">Play</button></a>
                </div>
            </div>
        </main>
        <footer>
            <span>© Gammy</span>
            <div class="social">
                <a><img src="../images/linkedin.png"/></a>
                <a><img src="../images/face.png"/></a>
                <a src=""><img src="../images/insta.png" alt="" srcset=""></a>
            </div>
        </footer>

        <script src="mode.js"></script>
    </body>

    </html>
<?php
} else {
    header("Location: SignIn.php");
    exit();
}
?>