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
        if (($file !== '.') && ($file !== '..')) {
            $files[] = $file;
            
            echo "$file";
            
        }
       
        
            
 
    }


        ?>
    </body>
</html>