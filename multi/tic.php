<!DOCTYPE html>
<html lang="en" data-theme="light">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GammY - Tic Tac Toe</title>
    <script defer src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="../Styles/tic.css"/>
    <link rel="stylesheet" href="../Styles/root.css"/>
    <link rel="stylesheet" href="../Styles/gameNav.css"/>
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
    <span>Tic Tac Toe</span>
    </div>
    <div class="theme">
      <img src="../images/sun.png" />
      <img src="../images/moon.png" />
    </div>
  </div>
   <div class="wrapper">
       <div class="container">
           <button class="button-option"></button>
           <button class="button-option"></button>
           <button class="button-option"></button>
           <button class="button-option"></button>
           <button class="button-option"></button>
           <button class="button-option"></button>
           <button class="button-option"></button>
           <button class="button-option"></button>
           <button class="button-option"></button>
       </div>
       <button id="restart">Restart</button>
   </div>
    <script src="../mode.js"></script>
    <script src="./tic.js"></script>
</body>
</html>