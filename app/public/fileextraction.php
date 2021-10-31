<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Test</title>
    </head>
    <body>
        <?php
       



       $directory = 'TextDocs\\text';
      

    $files = array();
    foreach (scandir($directory) as $file) {
        if ($file !== '.' && $file !== '..') {
            $files[] = $file;
        }
        $testing = file_get_contents("TextDocs\\text\\$file");
        
            
            echo "$testing";
            echo "<br>";
 
    }


        ?>
    </body>
</html>