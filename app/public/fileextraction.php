<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Test</title>
    </head>
    <body>
        <?php
       
//       $file = file_get_contents("TextDocs\\1.txt");
//       echo "$file <br>";


       $directory = 'TextDocs';
      

    $files = array();
    foreach (scandir($directory) as $file) {
        if ($file !== '.' && $file !== '..') {
            $files[] = $file;
        }
        $testing = file_get_contents("TextDocs\\$files");
        
    echo "$testing";
    echo "<br>";
    
        
    }
//  $fileSystemIterator = new FilesystemIterator('TextDocs');
//
//  $entries = array();
//  foreach ($fileSystemIterator as $fileInfo){
//      $entries[] = $fileInfo->getFilename();
//        echo "$entries";
//  }
//  var_dump($entries);
$files = array_slice(scandir('TextDocs'), 2);
echo "$files";
        ?>
    </body>
</html>