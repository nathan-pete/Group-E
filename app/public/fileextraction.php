<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Test</title>
    </head>
    <body>
        <?php
       
       //$title = file_get_contents("TextDocs\\Titles\\Title1.txt");
       //echo "$title <br>";

      // $date = file_get_contents("TextDocs\\Dates\\Date1.txt");
      // echo "$date <br>";

      // $shortdesc = file_get_contents("TextDocs\\ShortDesc\\ShortDesc1.txt");
       //echo "$shortdesc <br>";

      // $desc = file_get_contents("TextDocs\\Desc\\Desc1.txt");
       //echo "$desc <br>";


//       $directory = 'TextDocs';

//    if (!is_dir($directory)) {
 //       exit('Invalid diretory path');
 //   }

 //   $files = array();
 //   foreach (scandir($directory) as $file) {
 //       if ($file !== '.' && $file !== '..') {
  //          $files[] = $file;
  //      }
  //      $testing = file_get_contents("TextDocs\\$file");
  //      echo "$testing <br>";
  //  }
  $fileSystemIterator = new FilesystemIterator('TextDocs');

  $entries = array();
  foreach ($fileSystemIterator as $fileInfo){
      $entries[] = $fileInfo->getFilename();
      echo "$entries";
  }
  var_dump($entries);
        ?>
    </body>
</html>