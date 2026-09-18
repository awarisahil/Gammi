<!DOCTYPE html>
<html data-theme="light">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>2048</title>
        <link rel="stylesheet" href="../Styles/2048.css">
        <script defer src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
        <script src="./2048.js"></script>
        <script defer src="../mode.js"></script>
         <link rel="stylesheet" href="../Styles/theme.css">
         <link rel="stylesheet" href="../Styles/root.css">
         <link rel="stylesheet" href="../Styles/gameNav.css">
    </head>

    <body>
  <div class="vertical_nav">
    <div class="logoName">
      <a href="" class="logo">
        <img src="../images/logo.png" />
        <span>GammY</span>
      </a>
    </div>
    <div class="gameName">
    <span>2048</span>
    </div>
    <div class="theme">
      <img src="../images/sun.png" />
      <img src="../images/moon.png" />
    </div>
  </div>
      <div class="content">
        <h2>Score: <span id="score">0</span></h2>
        <div id="board">
        </div>
    </body>
</html>