<?php
$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$mobilenumber= $_POST['mobilenumber'];
$emailid= $_POST['emailid'];
$password= $_POST['password'];
$reenterpassword= $_POST['reenterpassword'];
$username= $_POST['username'];

echo $firstname;

$connection = mysql_connect("localhost","root","");
mysql_select_db("onlinerecharge");
 
$query="insert into signup(firstname,lastname,mobilenumber,emailid,password,reenterpassword,username) values ('".$firstname."','".$lastname."','".$mobilenumber."','".$emailid."','".$password."','".$reenterpassword."','".$username."')";
echo $query;
echo "<br>";
 
mysql_query($query);
 
echo "Record inserted";
 
 




header('location:login.php');


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
