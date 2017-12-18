<?php
 
    $operatorid= $_GET['operatorid'];
    $query= "SELECT * from plans WHERE operatorid=".$operatorid;
 
    $connection = mysql_connect("localhost", "root","");
    mysql_select_db("onlinerecharge");
 
    $result=mysql_query($query,$connection);
 
 
   
    ?>
 
 <table>
     <tr style="height: 40px;width: 100%;">
         <td><label>SELECT PLANS</label></td>
         <td><select style="height: 40px;width: 100%;">
             <option style="height: 40px;width: 100%;">SELECT PLAN </option>
<?php
    
while($row=mysql_fetch_array($result))
{
 
 
 
?>
   
     <option value="<?php echo $row['planid']?>"><?php echo $row['planname'];?></option>
 
<?php
    
}
 
?>
 </select></td>
 </tr>
</table>
 
 
<?php
    
    mysql_close($connection);
 
?>
 
 
 
 



