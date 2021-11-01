<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset='utf-8'>
    <link rel='stylesheet' type='text/css' href="<?php
        $time = date('H');
        if(($time >= 17) || ($time <= 11)) {
            echo "style/css/Style_PastEvents.css";
        } 
        else {
            echo "style/css/StyleLight_PastEvents.css";
        }
        ?>">
    <title>Stenden Events | Past Events</title>
    <link rel="icon" href="style/Images/NHL Stenden.png">
    <link href="http://fonts.cdnfonts.com/css/mexcellent" rel="stylesheet">
</head>
<body style="font-family:'mexcellent';">
    <header>
        <div class="container">
          <img src="style/images/logo.gif" alt="logo" class = "logo">
          <nav>
            <ul>
              <li><h3> <a href="Index.php" style="color: <?php if(($time >= 17) || ($time <= 11)) {
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
    <div class="main_c">
        <div class="column">
          <div class ="pic">
            <img src="style/images/pexels-rodnae-productions-8119493.png" alt="Disco Picture 1">
          </div>
          <h2>Name of event</h2>
          <h4>22.04.2019</h4>
          <a class="button" href="PastEvent1.php">View Event</a>	
        </div>
        <div class="column">
          <div class ="pic">
            <img src="style/images/pexels-cottonbro-5781092.png" alt="Disco Picture 1">
          </div>
          <h2>Name of event</h2>
          <h4>05.05.2019</h4>
          <a class="button" href="PastEvent2.php">View Event</a>	
        </div>
        <div class="column">
          <div class ="pic">
            <img src="style/images/pexels-darlene-alderson-4389972.png" alt="Disco Picture 1">
          </div>
          <h2>Name of event</h2>
          <h4>16.05.2020</h4>
          <a class="button" href="PastEvent3.php">View Event</a>	
        </div>
    </div>
    <div class="foot">
        
    </div>

</body>
</html>