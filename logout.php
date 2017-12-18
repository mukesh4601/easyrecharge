<?php
session_start();
 
if(isset($_SESSION['emailid']))
{
    
 
    session_unset($_SESSION['emailid']);
    session_destroy();
 
 
     header('location:index.html');
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
                <link rel="stylesheet" href="stylesheet.css" type="text/css">
    </head>
    <body>
         <div id="divh-1">
             <div id="divh-2">
                 <div id="logo-1"><img src="cell.png" alt="banner"></div>
                 <div id="logo-2"><a href="#"><h1 style="color: #fff">M RECHARGE</h1></a></div>
                 <div id="menu-2">
                  <table border="0" style="width: 100%; height: 50px;color: #fff;text-align:center;font-size:18px;font-family: 'Varela Round', sans-serif;" >
                  <tr>
                      <td><a href="login.php">MOBILE</a></td>
                      <td style="color:#000;">|</td>
                      <td><a href="login.php">DATACARD</a></td>
                      <td style="color:#000;">|</td>
                       
                      <td><a href="login.php">LOG IN</a></td>
                        <td style="color:#000;">|</td>
                      <td><a href="#"><img src="search.png" alt="banner"></a></td>
                      
                  </tr>
                  </table>
                 </div>
             </div>
      
                   <div id="pic-1"><h3 style="color: #fff; font-size: 30px"><pre>GET FREE COUPONS AND DISCOUNTS ON 
TOP BRANDS WITH EVERY RECHARGE</pre></h3></div>
                   <div id="pic-2">
                      <form>
                          <table style="width:100%; height:70px">
                              <tr>
                             <td><input style="width:90%; height:50px;border:2px solid grey;font-family: Calibri;text-align:center" type="text" placeholder="Enter Your Mobile Number"  size="50" maxlength="50" required></td>
                            <td><select style="width:90%; height:50px;border:2px solid grey;font-family: Calibri;text-align:center"  >
                                <option></option>
                                <option>AIRTEL</option>
                                <option>AIRCEL</option>
                                <option>IDEA</option>
                                <option>VODAPHONE</option>
                                <option>RELIANCE</option>
          
          </select>
</td>
                                   <td><input style="width:250%; height:50px;color:#fff;background-color:#000;border:1px solid black" type="submit" value="RECHARGE"></td>
                              </tr>
                          </table>

                      </form>

                   </div>
          
          
          </div>
      
                 <div id="sro-1">
                     <div id="sro-2"><img src="bbbb modified modified.png" alt="banner" style="margin-left: 100px;margin-top:20px;" ></div>
                     <div id="sro-3">
                         <div id="sro-5"><h3 style="color:#48cfc1; text-align:center;margin-top:50px;"> SPECIAL RECHARGE OFFER</h3></div>
                         <div id="sro-6"><p style="color:#A9A8A8;text-align:center">Nemo enim ipsam voluptatem 
				quia voluptas sit aspernatur 
				aut odit aut fugit, sed quia conse
				magni dolores eos qui ratione. Nemo enim ipsam voluptatem 
				quia voluptas sit aspernatur 
				aut odit aut fugit, sed quia conse
				magni dolores eos qui ratione.				quia voluptas sit aspernatur 
				aut odit aut fugit, sed quia conse
				magni dolores eos qui ratione. Nemo enim ipsam voluptatem 
				quia voluptas sit aspernatur 
				aut odit aut fugit, sed quia conse
				magni dolores eos qui ratione.</</p></div>
                     </div>
                     <div id="sro-4">
                     <h2 style="text-align:centre;color:#000;margin-left:150px;margin-top:30px;">SIGN UP</h2>
                         <form style="text-align:center" action="signup.php" method="post">
                         
                         
                             <input style="height:20px;text-align:center;border:1px solid grey;" type="text" id="firstname" name="firstname" placeholder="Enter Your First Name"  size="50" maxlength="50" required>
                             <br>
                             <br>
                             <input style="height:20px;text-align:center;border:1px solid grey;" type="text" id="lastname" name="lastname" placeholder="Enter Your Last Name"  size="50" maxlength="50" required>
                             <br>
                             <br>

                             <input style="height:20px;text-align:center;border:1px solid grey;" type="text" id="mobilenumber" name="mobilenumber" placeholder="Enter Your Mobile Number"  size="50" maxlength="50" required>
                             <br>
                             <br>
                             <input style="height:20px;text-align:center;border:1px solid grey;" type="email" id="emailid" name="emailid" placeholder="Enter Your Email-id"  size="50" maxlength="50" required>
                           <br>
                             <br>
                             <input style="height:20px;text-align:center;border:1px solid grey;" type="password" id="password" name="password" placeholder="Enter Your Password"  size="50" maxlength="50" required>
                             <br>
                             <br>
                             <input style="height:20px;text-align:center;border:1px solid grey;" type="password" id="reenterpassword" name="reenterpassword" placeholder="Renter Your Password"  size="50" maxlength="50" required>
                             <br>
                             <br>
                             <br>
                             <input style="color:#fff;background-color:#000;border:1px solid black;height:30px;width:30%" type="submit" value="SIGN UP">
                         
                         
                         
                         </form>

                     </div>
                 </div>
        <div id="ri-1">
            <div id="ri-2"><h2 style="color:#48cfc1;MARGIN-TOP:60PX"><pre>     RECHARGE IN
   3 SIMPLE STEPS</pre></h2></div>
            <div id="ri-3"><div id="ri-3-1"><img src="web.png" alt="banner" style="margin-left: 30px; margin-top:10px"></div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            <p style="color:#A9A8A8; text-align:center">LOG IN TO YOUR ACCOUNT</p>
            </div>
            <div id="ri-4"><div id="ri-4-1"><img src="credit.png" alt="banner" style="margin-left: 30px; margin-top:10px"></div>
              <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            <p style="color:#A9A8A8; text-align:center">ENTER RECHARGE DETAILS</p>
            </div>
            <div id="ri-5"><div id="ri-5-1"><img src="security.png" alt="banner" style="margin-left: 30px; margin-top:10px"></div>
              <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            <p style="color:#A9A8A8; text-align:center">MAKE PAYMENTS</p>
            </div>
        
        </div>
        <div id="so-1">
            <div id="so-2"><a href="#"><h2 style="color:#000;text-align:center;margin-top:300px;">EXCLUSIVE OFFERS</h2></a></div>
            <div id="so-3">
                <div id="so-4"><a href="login.php"><img src="BB20160503.png" alt="banner"></a></div>
                <div id="so-5"><a href="login.php"><img src="BMS20160511.png" alt="banner"></a></div>
                <div id="so-9"><a href="login.php"><img src="dominos20160511.png" alt="banner"></a></div>
                <div id="so-6"><a href="login.php"><img src="IRCTC20160511.png" alt="banner"></a></div>
                <div id="so-7"><a href="login.php"><img src="MMT20160503.png" alt="banner"></a></div>
                <div id="so-8"><a href="login.php"><img src="WebBBK1805.png" alt="banner"></a></div>
            </div>
        </div>
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
             <h3 style="COLOR:#48cfc1;margin-left:20px;">DTH RECHARGES</h3>
            <ul>
            <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
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
