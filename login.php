        <?php


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <link rel="stylesheet" href="stylesheet.css" type="text/css">
         <script>

            function abc() {


                document.getElementById("myname").style.borderColor = "blue";

            }
            </script>
    </head>
    <body>
        <div id="login-divh-1">
             <div id="divh-2">
                 <div id="logo-1"><img src="cell.png" alt="banner"></div>
                 <div id="logo-2"><a href="index.html"><h1 style="color: #fff">M RECHARGE</h1></a></div>
                 <div id="menu-2">
                  <table border="0" style="width: 100%; height: 50px;color: #fff;text-align:center;font-size:18px;font-family: 'Varela Round', sans-serif;" >
                  <tr>
                      <td><a href="#">MOBILE</a></td>
                      <td style="color:#000;">|</td>
                      <td><a href="#">DATACARD</a></td>
                      <td style="color:#000;">|</td>
                      <td><a href="#">LOGIN</a></td>
                      <td style="color:#000;">|</td>
                      <td><a href="#"><img src="search.png" alt="banner"></a></td>
                      
                  </tr>
                  </table>
                 </div>
             </div>
      
          <div id="login-1">
           <h1 style="text-align:center;color:#fff;margin-left:25px;margin-top:30px;font-family: 'Varela Round', sans-serif">LOGIN </h1>
               <form style="text-align:center;margin-top: 50px;" action="loginprocess.php" method="post">
               <input style="height:40px;text-align:center;border:1px solid grey;" type="text" id="emailid" name="emailid" placeholder="Enter Your Email-Id"  size="50" maxlength="50" onclick="abc()" required>
              <br> 
              <br>
              <br>
              <input style="height:40px;text-align:center;border:1px solid grey;" type="password" id="password" name="password" placeholder="Enter Your Password"  size="50" maxlength="50" onclick="abc()" required>
              <br>
              <br>
              <br>
                   <input style="color:#fff;background-color:#000;border:1px solid black;height:30px;width:30%" type="submit" value="LOGIN">
                   <br>
                   <br>
                    <a href="usersignup.php"><input style="color:#fff;background-color:#000;border:1px solid black;height:30px;width:30%" type="button" value="SIGNUP"></a>
               
               </form>              
          </div>
          
          </div>
         <div id="login-footer-1">
            <div id="footer-2"><h3 style="text-align:center; color:#fff;font-family: inherit;font-weight: 500;">EASY RECHARGE</h3></div>
            <div id="footer-3"><p style="text-align:center">© 2016 Easy Recharge. All Rights Reserved | Design by     <span style="color:#fff">  ( MUKESH BHARDWAJ)</span></p></div>
            <div id="footer-4"><a><img src="social.png" alt="banner"></a></div>
        </div>
    </body>
</html>
