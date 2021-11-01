<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset='utf-8'>
    <link rel='stylesheet' type='text/css' href="<?php
        $time = date('H');
        if(($time >= 17) || ($time <= 11)) {
            echo "style/css/Style_FutureEvents.css";
        } 
        else {
            echo "style/css/StyleLight_FutureEvents.css";
        }
        ?>">
    <title>Future Events</title>
    <link rel="icon" href="style/Images/NHL Stenden.png">
</head>
<body>
    <header>
        <div class="container">
          <img src="style/images/logo.gif" alt="logo" class = "logo">
          <nav>
            <ul>
              <li><h3> <a href="Index.php"style="color: <?php if(($time >= 17) || ($time <= 11)) {
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
        <?php
        
        
            
       



       $directory = 'TextDocs\\text';
      

    $files = array();
    foreach (scandir($directory) as $file) {
        if (($file !== '.') && ($file !== '..')) {
            $files[] = $file;
            $testing = file_get_contents("TextDocs\\text\\$file");
            echo '<div class="column">
            <div class ="pic">
                <img src="style/images/pexels-rodnae-productions-8119493.png" alt="Disco Picture 1">
            </div>';
            echo "$testing";
            echo '<a class="button" href="FutureEvent1.php">View Event</a>	
        </div>';
        }
        
        
            
 
    }


        
            ?>
        
    </div>
    
</body>
</html>