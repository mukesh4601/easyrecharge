<?php
session_start();




$connection = mysql_connect("localhost","root","");
mysql_select_db("onlinerecharge");
 
$query="select  * from signup where signupid=".$_SESSION['signupid']."";
$records=mysql_query($query, $connection); 
$rec=mysql_fetch_array($records); 

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <link rel="stylesheet" href="stylesheet.css" type="text/css">
    </head>
    <body>
        <div id="recharge-divh-1"> 
              
             <div id="divh-2">
                 <div id="logo-1"><img src="cell.png" alt="banner"></div>
                 <div id="logo-2"><a href="index.html"><h1 style="color: #fff">M RECHARGE</h1></a></div>
                 <div id="menu-2">
                  <table border="0" style="width: 100%; height: 50px;color: #fff;text-align:center;font-size:18px;font-family: 'Varela Round', sans-serif;" >
                  <tr>
                      <td><a href="recharge.php">MOBILE</a></td>
                     <td style="color:#000;">|</td>
                      <td><a href="recharge.php">DATACARD</a></td>
                       <td style="color:#000;">|</td>
                      
                      <td><a href="account.php">MY ACCOUNT</a></td>
                      <td style="color:#000;">|</td>
                      <td><a href="contactus.html">CONTACT US</a></td>
                      <td style="color:#000;">|</td>
                      <td><td><?php
                     
if(isset($_SESSION['emailid']))
{
    echo '<a href="logout.php">LOGOUT</a>';

}
else
{
echo '<a href="">LOGIN</a>';
}

?>
                          <a href=""></a></td>
                      <td style="color:#000;">|</td>
                      <td><a href="#"><img src="search.png" alt="banner"></a></td>
                      
                  </tr>
                  </table>
                 </div>
                 </div>
            </div>
    </body>
</html>
