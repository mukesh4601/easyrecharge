<?php
$name=$_POST['name'];
$from=$_POST['email'];
$message=$_POST['message'];

$to="bhardwaj.mukesh91@gmail.com";
$header="from : ".$from;

mail($to,$name,$message,$header);
echo "mail sent";

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
