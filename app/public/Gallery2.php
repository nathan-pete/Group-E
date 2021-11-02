<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <link rel='stylesheet' type='text/css' href="<?php
        $time = date('H');
        if(($time >= 17) || ($time <= 11)) {
            echo "style/css/Style_Gallery.css";
        } 
        else {
            echo "style/css/Style_GalleryLight.css";
        }
        ?>">
    <title>Stenden Events | Gallery</title>
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
    <div>
      <?php  
                
                
                $directory = 'TextDocs/Images';
                $count = 0;    
                
                $files = array();
                foreach (scandir($directory) as $file) { 
                    if (($file !== '.') && ($file !== '..')) {
                        $files[] = $file;
                       echo ' <div class="column">
                              <div class ="pic">
                                  <img src="TextDocs/Images/';
                        echo $files[$count];
                        $count++;
                        echo '                " alt="Event picture">
                                    </div>	
                                </div>'; 
                    }
                        
                        
                            
                    
                }
               ?> 
    </div>
    
</body>
</html>