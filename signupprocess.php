<?php

$connection = mysql_connect("localhost","root","");
mysql_select_db("onlinerecharge");
 
$query="select * from user";
 
$records=mysql_query($query, $connection);

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
