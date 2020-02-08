<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>

<?php
// Source: https://www.w3schools.com/php/php_file_open.asp
// Edited by: Paolo Espiritu for assignment purposes

// Line below opens the sample text file with permission to edit
$myfile = fopen("php_sample4.txt", "w") or die("Unable to open file!");
$txt = "Additional Text 1!\n";  // this is the parameter for text
fwrite($myfile, $txt);          // function to write text to file
$txt = "Additional Text 2!\n";  // another text parameter
fwrite($myfile, $txt);          // write text to file
fclose($myfile);                // close the file

// line below opens the sample text with read only permissions
$myfile = fopen("php_sample4.txt", "r") or die("Unable to open file!");
// line below displays contents of the text file
echo readFile("php_sample4.txt");
// line below closes the file
fclose($myfile);                                    
?>

</body>
</html>
