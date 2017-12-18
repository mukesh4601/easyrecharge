<?php

$operatorid= $_POST['operatorid'];
$planid= $_POST['planid'];
$mobilenumber= $_POST['mobilenumber'];
$mobiletype= $_POST['mobiletype'];
$paymentmode= $_POST['paymentmode'];
$cureentdate=date('Y/M/D');


echo $mobilenumber;

$connection = mysql_connect("localhost","root","");
mysql_select_db("onlinerecharge");
 
$query="insert into rechargedetails(operatorid,planid,mobilenumber,mobiletype,paymentmode,date) values ('".$operatorid."','".$planid."','".$mobilenumber."','".$mobiletype."','".$paymentmode."','".$cureentdate."')";
echo $query;
echo "<br>";
 
mysql_query($query);
 
echo "Record inserted";
 
 




header('location:thanks.php');
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
