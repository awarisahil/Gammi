<!DOCTYPE html>
<html data-theme="light">
<head>
    <title>GammY</title>
    <meta charset="UTF-8">
    <script type="text/javascript" src="./chess.js"></script>
    <script defer src="../mode.js"></script>
    <script defer src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
	  <link rel="stylesheet" href="../Styles/root.css">
	  <link rel="stylesheet" href="../Styles/chess.css">
	  <link rel="stylesheet" href="../Styles/gameNav.css">
</head>

<body>
    <!-- ############################### Vertical NavBar #####################################-->
    <div class="vertical_nav">
    <div class="logoName">
      <a href="" class="logo">
        <img src="../images/logo.png" />
        <span>GammY</span>
      </a>
    </div>
    <div class="gameName">
    <span>CHESS</span>
    </div>
    <div class="theme">
      <img src="../images/sun.png" />
      <img src="../images/moon.png" />
    </div>
  </div>
	  <main class="content">
		<h2 id="turn"></h2> 
	    <div class='black'>
		<h2>Player Black</h2>
		<h3 id="whiteCasualities"></h2>
	</div>
    <div class="board">
		<canvas id="chessCanvas" width="400" height="400" style="margin-left:40%;"></canvas>
    </div>
	<div class="white">
		<h3 id="blackCasualities"></h2>
		<h2>Player White</h2>
	</div>
	  </main>
</body>
</html>