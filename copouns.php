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
        <div id="copoun-divh-1"> 
             
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
     
                 
                   </div>
          
          
          
        <div id="so-1">
            <div id="so-2"><a href="#"><h2 style="color:#000;text-align:center;margin-top:300px;">EXCLUSIVE OFFERS</h2></a></div>
            <div id="so-3">
                <div id="so-4"><img src="swiggy.jpg" alt="banner"></div>
                <div id="so-5"><img src="b.jpg" alt="banner"></div>
                <div id="so-9"><img src="c.jpg" alt="banner"></div>                
                <div id="so-6"><img src="travelkhanawo-NWKMEOGH4C.jpg" alt="banner"></div>
                <div id="so-7"><img src="oneplusthreeimage.jpg" alt="banner"></div>
                <div id="so-8"><img src="f.jpg" alt="banner"></div>
            </div>
        </div>
         <div id="so-1">
            <div id="so-2"><a href="#"><h2 style="color:#000;text-align:center;margin-top:300px;">COMBO OF 3 OFFERS</h2></a></div>
            <div id="so-3">
                <div id="so-4"><img src="g.jpg" alt="banner"></div>
                <div id="so-5"><img src="ha.jpg" alt="banner"></div>
                <div id="so-9"><img src="i.jpg" alt="banner"></div>
                <div id="so-6"><img src="j.jpg" alt="banner"></div>
                <div id="so-7"><img src="k.jpg" alt="banner"></div>
                <div id="so-8"><img src="l.jpg" alt="banner"></div>
            </div>
        </div>
         <div id="so-1">
            <div id="so-2"><a href="#"><h2 style="color:#000;text-align:center;margin-top:300px;">NEAR BY OFFERS</h2></a></div>
            <div id="so-3">
                <div id="so-4"><img src="m.jpg" alt="banner"></div>
                <div id="so-5"><img src="n.jpg" alt="banner"></div>
                <div id="so-9"><img src="o.jpg" alt="banner"></div>
                <div id="so-6"><img src="p.jpg" alt="banner"></div>
                <div id="so-7"><img src="q.jpg" alt="banner"></div>
                <div id="so-8"><img src="r.jpg" alt="banner"></div>
            </div>
        </div>
         <div id="so-1">
            <div id="so-2"><a href="#"><h2 style="color:#000;text-align:center;margin-top:300px;">TOP UP OFFERS</h2></a></div>
            <div id="so-3">
                <div id="so-4"><img src="s.jpg" alt="banner"></div>
                <div id="so-5"><img src="loyaltynewimage.jpg" alt="banner"></div>
                <div id="so-9"><img src="himalaya20wo-SNYSTLEJ6B.jpg" alt="banner"></div>
                <div id="so-6"><img src="v.jpg" alt="banner"></div>
                <div id="so-7"><img src="w.jpg" alt="banner"></div>
                <div id="so-8"><img src="etravelsmartwo-RKY3HW86K7.jpg" alt="banner"></div>
            </div>
        </div>
        <div id="div-2"> <form style="text-align: center" action="plans.php" method="get">
        <input type="submit" value=" SKIP PROCESSED TO PAYMENT" style="background-color: #000;float: right; color: #fff; margin-top: 20px;border: 2px solid black; text-align: center; margin-right: 20px;width:30%;height:50px; ">
        
        </form></div>
         <div id="a-1">
            <div id="a-2">
            <h3 style="COLOR:#48cfc1;margin-left:20px;">MOBILE RECHARGES</h3>
            <ul>
            <li><a href="login.php">AIRTEL</a></li>
                <li><a href="login.php">AIRCEL</a></li>
                <li><a href="login.php">VODAPHONE</a></li>
                <li><a href="login.php">IDEA</a></li>
                <li><a href="login.php">RELIANCE</a></li>
            </ul>
            </div>
            <div id="a-3">
             <h3 style="COLOR:#48cfc1;margin-left:20px;">OFFER RECHARGES</h3>
            <ul>
            <li><A href="login.php">NIGHT PACKS</a></li>
                <li><A href="login.php">SMS PACKS</a></li>
                <li><A href="login.php">ROAMING PACKS</a></li>
                <li><A href="login.php">LOCAL CALL PACKS</a></li>
                <li><A href="login.php">SPECIAL PACKS</a></li>
            </ul>
            </div>
            <div id="a-4">
            <h3 style="COLOR:#48cfc1;margin-left:20px;">DATACARD RECHARGES</h3>
            <ul>
            <li><a href="login.php">AIRTEL 2G/3G SERVICES</a></li>
                <li><a href="login.php">AIRCEL 2G/3G SERVICES</a></li>
                <li><a href="login.php">VODAPHONE 2G/3G SERVICES</a></li>
                <li><a href="login.php">IDEA 2G/3G SERVICES</a></li>
                <li><a href="login.php">RELIANCE 2G/3G SERVICES</a></li>
            </ul>
            </div>
            <div id="a-5">
            <h3 style="COLOR:#48cfc1;margin-left:20px;">MAKE PAYMENTS</h3>
            <ul>
            <li><a href="login.php">CREDIT CARDS</a></li>
                <li><a href="login.php">DEBIT CARDS</a></li>
                <li><a href="login.php">ANY VISA DEBIT CARDS(VBV)</a></li>
                <li><a href="login.php">INTERNET BANKING</a></li>
                <li><a href="login.php">DIRECT BANK BANKING</a></li>
            </ul>
            </div>

        </div>
         <div id="footer-1">
            <div id="footer-2"><h3 style="text-align:center; color:#fff;font-family: inherit;font-weight: 500;">EASY RECHARGE</h3></div>
            <div id="footer-3"><p style="text-align:center">© 2016 Easy Recharge. All Rights Reserved | Design by     <span style="color: #0564a9;">  ( MUKESH BHARDWAJ)</span></p></div>
            <div id="footer-4"><a><img src="social.png" alt="banner"></a></div>
        </div>
    </body>
</html>
