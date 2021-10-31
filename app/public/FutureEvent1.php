<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset='utf-8'>
    <link rel='stylesheet' type='text/css' href='style/css/Style_PastEvents.css'>
    <title>Past Events</title>
    <style>
        body{
          background-image:url(style/Images/bg.png);
          color: white;
        }
        p{
          padding-left: 125px;
          font-size: 20px;
        }
        h2{
          padding-left: 125px;
          font-size: 40px;
        }
    </style>
</head>
<body>
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
    <h2>Event 1</h2>
    <p>Lorem ipsum dolor sit amet, ligula suspendisse nulla pretium,<br> 
      tempor fermentum, enim integer ad vestibulum volutpat.<br>
      Nisl rhoncus turpis est, vel elit, congue wisi enim nunc ultricies<br>
      sit, magna tincidunt. Maecenas aliquam maecenas ligula nostra, <br>
      accumsan taciti. Sociis mauris in integer, a dolor netus non dui <br> 
      aliquet, sagittis felis sodales, dolor sociis mauris, vel eu libero cras. <br>
      Faucibus at. Arcu habitasse elementum est, ipsum purus pede <br>
      porttitor class, ut adipiscing, aliquet sed auctor, imperdiet arcu<br>
      per diam dapibus libero duis. Enim eros in vel, volutpat nec <br>
      pellentesque leo, temporibus scelerisque nec. Ac dolor ac adipiscing <br>
      amet bibendum nullam, lacus molestie ut libero nec, diam et, <br>
      pharetra sodales, feugiat ullamcorper id tempor id vitae. <br>
      Mauris pretium aliquet, lectus tincidunt. Porttitor mollis <br>
      imperdiet libero senectus pulvinar. Etiam molestie mauris <br>
      ligula laoreet, vehicula eleifend. Repellat orci erat et, <br>
      sem cum, ultricies sollicitudin amet eleifend dolor nullam erat, <br>
      malesuada est leo ac. Varius natoque turpis elementum est. Duis montes, <br>
      tellus lobortis lacus amet arcu et. In vitae vel, wisi at, id <br>
      praesent bibendum libero faucibus porta egestas, quisque praesent <br>
      ipsum fermentum tempor.
      </p>
</body>
</html>