<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe</title>
    <link rel="stylesheet" href="style/css/formstyle.css">
    <link rel="icon" href="style/Images/NHL Stenden.png">
</head>
<body>
    <div class="wrapper">
        <div class="icon"></div>
        <div class="content">
            <header>Become a Subscriber!</header>
            <br>
            <h3>Signup to the latest event updates</h3>
        </div>
        <form action="Inputforms.php" method="POST">
            <?php 
                $userEmail = " ";
                if(isset($_POST['subscribe'])){
                    $userEmail = $_POST['email'];
                    if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){
                        $subject = "Stenden Events - Subscription";
                        $message = "Thank you for subscribing. You will be notified of future events with us.";
                        $sender = "From: noreply.stendenevents@gmail.com"; 
                        if(mail($userEmail, $subject, $message, $sender)){
                            ?>
                            <div class="alert success-alert">
                                <?php echo "Thanks for Subscribing us." ?>
                            </div>
                            <?php            
                        }
                        else{
                        ?>
                            <div class="alert error-alert">
                                <?php echo "Unknown Error - Please try again later." ?>
                            </div>
                            <?php
                            }
                    }
                    else{
                    }
                }
                else{  
                }
            ?>
        <div class="field">
            <input type="email" class="email" name="email" placeholder="Enter your email address..." required style='font-family: "verdana";'>
        </div>
        <div class="field btn">
            <div class="layer"></div>
            <button type="submit" name="subscribe">Subscribe</button>
        </div>
        </form>
        <div class="text">
            <p style='font-family: "verdana";'>Your information is kept private.</p>
        </div>
    </div>
</body>
</html>
