<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
         <link rel="stylesheet" href="stylesheet.css" type="text/css">
        <script>
           
             function validate() {
                //alert('test');
                var firstname = document.getElementById('firstname').value;
                var lastname = document.getElementById('lastname').value;
                var emailid = document.getElementById('emailid').value;
                var atpos = emailid.indexOf('@');
                var dotpos = emailid.lastIndexOf('.');
                var mobilenumber = document.getElementById('mobilenumber').value;
                var username = document.getElementById('username').value;
                  
                  var password = document.getElementById('password').value;
                 var cpassword = document.getElementById('cpassword').value;
 
                var count = 0;


                if (firstname == '' || firstname == null) {
                    document.getElementById('error_firstname').innerHTML = 'Enter first Name';
                    document.getElementById('firstname').focus();
                    count++;
                }
                else {
                    document.getElementById('error_firstname').innerHTML = '';
                   }
                     if (lastname == '' || lastname == null) {
                    document.getElementById('error_lastname').innerHTML = 'Enter last Name';
                    document.getElementById('lastname').focus();
                    count++;
                }
                else {
                     document.getElementById('error_lastname').innerHTML = '';
                }

                if (emailid == '' || emailid == null) {
                    document.getElementById('error_emailid').innerHTML = 'Enter Email adress';
                    document.getElementById('emailid').focus();
                    count++;
                }
                             
                 else if  (atpos < 1 || ( dotpos - atpos < 2 )) {
                    document.getElementById('error_emailid').innerHTML = 'Enter valid email address';
                    document.getElementById('emailid').focus();
                    count++;
                }
               else {
                     document.getElementById('error_emailid').innerHTML = '';
                       }

                if (mobilenumber == '' || mobilenumber == null) {
                    document.getElementById('error_mobilenumber').innerHTML = 'Enter Phone number';
                    document.getElementById('mobilenumber').focus();
                    count++;
                }
 
               else if (mobilenumber.length < 10 || mobilenumber.length > 10) {
                    document.getElementById('error_mobilenumber').innerHTML = 'Phone Number should be of 10 Digits';
                    document.getElementById('mobilenumber').focus();
                    count++;
 
                }
 
                else {
                     document.getElementById('error_mobilenumber').innerHTML = '';
                       }
 
                if (password == '' || password == null) {
                    document.getElementById('error_password').innerHTML = 'Enter Phone number';
                    document.getElementById('password').focus();
                    count++;
                }
 
                 if (password !=  cpassword) {
                    document.getElementById('error_cpassword').innerHTML = 'Passwords do not match';
                    document.getElementById('cpassword').focus();
                    count++;
                }
 
               if (username == '' || username == null) {
                    document.getElementById('error_username').innerHTML = 'Enter username';
                    document.getElementById('username').focus();
                    count++;
                }
 
                if (count > 0) {
                    return false;
                }
                else {
                    return true;
                }
            }
 
           

                
        </script>


    </head>
    <body>
         <div id="recharge-divh-1"> 
       
             
             <div id="divh-2">
                 <div id="logo-1"><img src="cell.png" alt="banner"></div>
                 <div id="logo-2"><a href="index.html"><h1 style="color: #fff">M RECHARGE</h1></a></div>
                 <div id="menu-2">
                  <table border="0" style="width: 100%; height: 50px;color: #fff;text-align:center;font-size:18px;font-family: 'Varela Round', sans-serif;" >
                  <tr>
                      <td><a href="login.php">MOBILE</a></td>
                     <td style="color:#000;">|</td>
                      <td><a href="login.php">DATACARD</a></td>
                       <td style="color:#000;">|</td>
                      <td><a href="contactus.html">CONTACT US</a></td>
                      <td style="color:#000;">|</td>
                      <td><a href="login.php">LOG IN</a></td>
                      <td style="color:#000;">|</td>
                      <td><a href="#"><img src="search.png" alt="banner"></form></a></td>
                      
                  </tr>
                  </table>
                 </div>
           
                 
                 
                   </div>

             </div>
          <div id="signup-sro-1">
           <h1 style="text-align:center;color:#000;margin-top:20px;font-family: 'Varela Round', sans-serif;text-shadow: 3px;background-color: #48cfc1">SIGN UP</h1>
                         <form style="text-align:center" action="login.php" method="post" onsubmit="return validate();">
                         <br>
                         
                             <input style="height:40px;text-align:center;border:1px solid grey;" type="text" id="firstname" name="firstname" placeholder="Enter Your First Name"  size="50" maxlength="50"  >
                            <div id="error_firstname" style="color: red;"></div>
                              <br>
                             <br>
                             <input style="height:40px;text-align:center;border:1px solid grey;" type="text" id="lastname" name="lastname" placeholder="Enter Your Last Name"  size="50" maxlength="50"  >
                             <div id="error_lastname" style="color: red;"></div>
                             <br>
                             <br>

                             <input style="height:40px;text-align:center;border:1px solid grey;" type="text" id="mobilenumber" name="mobilenumber" placeholder="Enter Your Mobile Number"  size="50" maxlength="50" >
                             <div id="error_mobilenumber" style="color: red;"></div>
                             <br>

                             <br>
                             <input style="height:40px;text-align:center;border:1px solid grey;" type="email" id="emailid" name="emailid" placeholder="Enter Your Email-id"  size="50" maxlength="50" >
                             <div id="error_emailid" style="color: red;"></div> 
                             <br>
                              <br>
                             <input style="height:40px;text-align:center;border:1px solid grey;" type="password" id="password" name="password" placeholder="Enter Your Password"  size="50"  maxlength="11" >
                             <div id="error_password" style="color: red;"></div>
                             <br>
                             <br>
                             <input style="height:40px;text-align:center;border:1px solid grey;" type="password" id="cpassword" name="cpassword" placeholder="Renter Your Password"  size="50" maxlength="11" >
                             <div id="error_cpassword" style="color: red;"></div>
                             <br>
                             <br>
                             
                             <input style="height:40px;text-align:center;border:1px solid grey;" type="text" id="username" name="username" placeholder="Enter Your username"  size="50" maxlength="50" >
                             <div id="error_username" style="color: red;"></div>
                             
                             <br>
                             <br>
                             <input style="color:#fff;background-color:#48cfc1;border:1px solid #48cfc1;height:30px;width:20%" type="submit" value="SIGN UP">
                         
                         
                         
                         </form>
                       
          
          
          
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
          <div id="footer-1">
            <div id="footer-2"><h3 style="text-align:center; color:#fff;font-family: inherit;font-weight: 500;">EASY RECHARGE</h3></div>
            <div id="footer-3"><p style="text-align:center">© 2016 Easy Recharge. All Rights Reserved | Design by     <span style="color: #0564a9;">  ( MUKESH BHARDWAJ)</span></p></div>
            <div id="footer-4"><a href="www.facebook.com"><img src="social.png" alt="banner"></a></div>
        </div>
    </body>
</html>
