<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php
        $time = date('H');
        if(($time >= 17) || ($time <= 11)) {
            echo "style/css/style.css";
        } 
        else {
            echo "style/css/stylelight.css";
        }
        ?>">
    <link rel="icon" href="style/Images/NHL Stenden.png">
    <title>Stenden Events | Home</title>
</head>
<body>
    <header>
        <div class="container">
          <img src="style/images/logo.gif" alt="logo" class = "logo">
          <nav>
            <ul>
              <li><h3> <a style="color: <?php if(($time >= 17) || ($time <= 11)) {
            echo "white";
        } 
        else {
            echo "black";
        } ?>;">Home</a></h3></li>
              <li><h3> <a href="Gallery2.php"style="color: <?php if(($time >= 17) || ($time <= 11)) {
            echo "white";
        } 
        else {
            echo "black";
        } ?>;">Gallery</a></h3></li>
              <li><h3> <a href="Past_Events.php"style="color: <?php if(($time >= 17) || ($time <= 11)) {
            echo "white";
        } 
        else {
            echo "black";
        } ?>;">Past Events</a></h3></li>
              <li><h3> <a href="Future_Events.php" style="color: <?php if(($time >= 17) || ($time <= 11)) {
            echo "white";
        } 
        else {
            echo "black";
        } ?>;">Future Events</a></h3></li>
            </ul>
          </nav>
        </div>
      </header>
      <div class = 'back'>
        <div class="container main_c">
          <div id="text1">
            <h1 style="color: yellow;"> Stenden Events</h1>
          </div>
          <div id="text2">
            <h2 style="color: yellow;"> Sign up for the next event</h2>
          </div>
          <div id="button">
            <a href="Inputforms.php" style="color: white;">
              <h3 style="text-align: center;">Sign up now!</h3>
            </a>
          </div>
        </div>
      </div>
      <footer>
        <div class="container">
          <div class="col-1-3"></div>
          <div class="col-1-3"></div>
          <div class="col-1-3"></div>
        </div>
      </footer>
    </div>
</body>
</html>