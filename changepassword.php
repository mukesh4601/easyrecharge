<?php
    session_start();

$newpassword= $_POST['newpassword'];



 echo $newpassword;
 
 
$connection = mysql_connect("localhost","root","");
mysql_select_db("onlinerecharge");
 
$query="update signup set password='".$newpassword."' where signupid=".$_SESSION['signupid'].""; 
echo $query;
echo "<br>";
 
mysql_query($query);
echo "password change succesfully";
header("location: recharge.php");

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
