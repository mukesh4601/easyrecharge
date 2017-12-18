<?php

include(db.php);
$check=$_SESSION['login_emailid'];
$session=msql_query("SELECT emailid FROM 'user' WHERE emailid='$check' ");
$row=mysql_fetch_array($session);
$login_session=$row['emailid'];
if(!isset($login_session))
{
    header("location:myaccount.phpcredits");
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
