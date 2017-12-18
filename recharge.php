<?php
session_start();




$connection = mysql_connect("localhost","root","");
mysql_select_db("onlinerecharge");
 
$query="select  * from signup where signupid=".$_SESSION['signupid']."";
$records=mysql_query($query, $connection); 
$rec=mysql_fetch_array($records); 


$query="select  * from operators";
$records=mysql_query($query, $connection); 
$rec=mysql_fetch_array($records); 

?>

<script type="text/javascript">
      
function getplans(operatorid)
{
 
    var xmlhttp=new XMLHttpRequest();
 
    xmlhttp.onreadystatechange=function()
  
   {
  
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("planlist").innerHTML=xmlhttp.responseText;
        }
    }
 
    xmlhttp.open("GET","process.php?operatorid="+operatorid,true);
    xmlhttp.send();
}
 
 
</script>

<?php
 
$connection = mysql_connect("localhost", "root","");
mysql_select_db("onlinerecharge");
 
$query1="select * from operators";
 
$records1=mysql_query($query1,$connection);
 
 
 
?>

<script>

    function validate() {
       
        var mobilenumber = document.getElementById('mobilenumber').value;
        var count = 0;
        if (mobilenumber >10  || mobilenumber <10) {
                document.getElementById('error_phone').innerHTML = 'Enter Valid Phone Number';
              document.getElementById('mobilenumber').focus();
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
             <table style="float: right">
            <tr>
            <td><a href="account.php"><img src="1.png" alt="banner"></a></td>
                <td><h2 style="float: right; margin-right: 20px;font-family: Calibri;"><?php echo $rec['username']; ?></h2></td>

            </tr>
            </table>
          
          </div>
      
                 <div id="planlist1">
                      <h3 style="font-family: Calibri;text-align:center">FUEL YOUR PHONE BALANCE</h3>
                     
                                 <div id="recharge-sro-1">
                                 <form style="text-align: center" action="rechargeprocess.php" method="get" onsubmit="return validate();"> 
                                 <fieldset style="width: 90%; height: 700px;margin: 50px 0px 0px 50px;border-style: groove">
                     
                       <table border="0" style="border-spacing: 10px 0;width: 100%;height:700px">
                           <tr>
                           <td><label style="font-family: Calibri;text-align:center">SELECT OPERATOR</label></td>
                               <td><label><select id=" operatorid" name="operatorid" onchange="getplans(this.value);" style="height: 40px;width: 100%; background: none; border: 2.2px solid black">
                               <option>select</option>
                               <?php
                               while($row1=mysql_fetch_array($records1)) 
                               {                                  


                               ?>
                               <option value="<?php echo $row1['operatorid'];?>"><?php echo $row1['operatorname'];?></option>
                                   <?php
                               }
                               mysql_close($connection);
                                   ?>



                               </select></label></td>
                               
                               
                           </tr>

                           <tr id="planlist">
                               <td><label>SELECT PLAN</label></td>    
                               <td><label><select name="planid" id="planid" style="height: 40px;width: 100%;">
                               
                               <option>select</option>
                               </select></label></td>
                               </tr>

                           <tr>
                               
                           
                           <td><label style="font-family: Calibri;text-align:center">ENTER YOUR MOBILE NUMBER</label></td>
                               <td><input type="text" style="height: 40px;width: 100%" id="mobilenumber" maxlength="11"> </td>
                              <td> <div id="error_phone" style="color: red;"></div></td>
                           </tr>
                           <tr>
                            <td><label style="font-family: Calibri;text-align:center">MOBILE TYPE</label></td>
                               <td><input type="RADIO"  id="mobiletype">POSTPAID <input type="RADIO"  id="mobiletype">POSTPAID </td>
                               
                           </tr>
                           
                           
                           <tr>
                           <td><label style="font-family: Calibri;text-align:center">PAYMENT MODE</label></td>
                               <td><select style="height: 40px; width: 100%" id="paymentmode">
                               <option style="font-family: Calibri;text-align:center">ONLINE</option>
                               <option style="font-family: Calibri;text-align:center">NET BANKING</option>
                               <option style="font-family: Calibri;text-align:center">CREDIT/DEBIT</option>
                                <option style="font-family: Calibri;text-align:center">PAYPAL</option>
                               </select></td>
                           </tr>

                           
                           
                           

                           <tr>
                           <td></td>
                               <td><input type="submit" value="RECHARGE" style="height: 40px;width: 60%; background-color:#000; color:#fff;border:1px solid black "></td>
                           </tr>

                           
                           
                       
                       </table>
                     
            </fieldset>
             </form>

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
