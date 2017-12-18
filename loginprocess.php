<?php
$emailid= $_POST['emailid'];
$password= $_POST['password'];
echo $emailid;
echo $password;

$connection = mysql_connect("localhost","root","");
mysql_select_db("onlinerecharge");
 

$query= "select * from signup where emailid='$emailid' && password='$password'";
 echo $query;
 
$records=mysql_query($query, $connection);
$rec=mysql_fetch_array($records);
if(!empty($rec))
{
    
   
        session_start();
        $_SESSION['emailid']=$rec['emailid'];
        $_SESSION['password']=$rec['password'];
        $_SESSION['signupid']=$rec['signupid'];
        $_SESSION['emailid']=$rec['username'];
      header('Location: recharge.php');  
   }
     


else { 
    
    echo 'Not';   

    
     header('Location: login.php');  
}
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
