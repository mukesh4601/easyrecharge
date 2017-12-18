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
                      <td><a href="#"><img src="search.png" alt="banner"></form></a></td>
                      
                  </tr>
                  </table>
                 </div>
             </div>
            <table style="float: right">
            <tr>
            <td><img src="1.png" alt="banner"></td>
                <td><h2 style="float: right; margin-right: 20px;font-family: Calibri;color: #fff"><?php echo $rec['username']; ?></h2></td>

            </tr>
            </table>
                       
                 
                   </div>
          
          
          </div>
         <div id="sro-1" style="text-align: center;margin-top: 50px;"> <h2 style="font-family: Calibri">MY ACCOUNT DETAILS</h2>
                         <form style="height: 50PX">
                         <br>
                             <br>
                             
                             <input style="height:50px;text-align: center" type="text" id="username" name="username" value="<?php echo $rec['username'];?>"   placeholder="ENTER USER NAME" size="50" maxlength="50" required >
                             <br>
                             <br>
                             <br>
                             <input style="height:50px;text-align: center" type="text" id="emailid" name="emailid" value="<?php echo $rec['emailid'];?>"  placeholder="ENTER EMAIL ID" size="50" maxlength="50" required>
                  
                             <br>
                             <br>
                             <br>
                           <input style="height:50px;text-align: center" type="text" id="mobilenumber" name="mobilenumber" value="<?php echo $rec['mobilenumber'];?>"  placeholder="ENTER MOBILE NUMBER" size="50" maxlength="50" required>
                  
                             
                         </form>
             
             
             
             
                            </div>
         <div id="ri-1">   
             <form style="text-align: center" action="changepassword.php" method="post">
              <h2 style="text-align: center;font-family: Calibri">CHANGE PASSWORD</h2>
                            
                             <input style="height:50px;text-align: center" type="password" id="oldpassword" name="oldpassword"   placeholder="ENTER OLD PASSWORD" size="50" maxlength="50" required>
                             <br>
                             <br>
                             <br>
                             <input style="height:50px;text-align: center" type="password" id="newpassword" name="newpassword"   placeholder="ENTER NEW PASSWORD" size="50" maxlength="50" required>
                             <br>
                             <br>
                             
                             <input type="submit" value="CHANGE PASSWORD" style="background-color: #000; border: 1px solid black; color: #fff;height:20px;width: 20%;">








             
             </form>
             
             
             
                           </div>
   
         <div id="footer-1">
            <div id="footer-2"><h3 style="text-align:center; color:#fff;font-family: inherit;font-weight: 500;">EASY RECHARGE</h3></div>
            <div id="footer-3"><p style="text-align:center">© 2016 Easy Recharge. All Rights Reserved | Design by     <span style="color: #0564a9;">  ( MUKESH BHARDWAJ)</span></p></div>
            <div id="footer-4"><a><img src="social.png" alt="banner"></a></div>
        </div>
    </body>
</html>
