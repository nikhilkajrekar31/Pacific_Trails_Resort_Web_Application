<?php
if(isset($_POST['placeorder'])){
  $total=$_POST['total'];
  $itemdesc=$_POST['descfromcart'];
  $itemcost=$_POST['costfromcart'];
  $itemdeschist=$_POST['descfromcart1'];
  $itemcosthist=$_POST['costfromcart1'];
  $itemq=$_POST['qfromcart'];
  $itemq1=$_POST['qfromcart1'];}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Place Your Order</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body {color:#330000;
      background-color:#FFFFFF;
      font-family:Verdana,Arial,Helvetica;
      }
td,th {  font-family:Verdana,Arial,Helvetica;
    }
</style> 
<script language="JavaScript" type="text/javascript">
<!--
function validateForm() {
if (!myform.Name.value) {
    alert("Please enter your name")
    myform.Name.focus()
    return false
   } 
if (!myform.Email.value) {
    alert("Please enter your Email Address")
    myform.Email.focus()
    return false
   } 
if (!myform.Address.value) {
    alert("Please enter your Street Address")
    myform.Address.focus()
    return false
   } 
if (!myform.City.value) {
    alert("Please enter your City")
    myform.City.focus()
    return false
   } 
if (!myform.State.value) {
    alert("Please enter your State Abbreviation")
    myform.State.focus()
    return false
   } 
if (!myform.Zip.value) {
     alert("Please enter a numeric Zip Code")
     myform.Zip.focus()
     return false
   } 
   else {
        if (isNaN(myform.Zip.value)) {
            alert("Please enter a numeric Zip Code")
            myform.Zip.focus()
            return false
         }     
}      
if (!myform.CreditCard.value) {
    alert("Please enter a Credit Card Number")
    myform.CreditCard.focus()
    return false
   } 
   
if (myform.CreditCard.value != "4111 1111 1111 1111") {
    alert("Please enter the test Credit Card Number")
    myform.CreditCard.focus()
    return false
   } 
if (!myform.ExpMonth.value) {
     alert("Please enter the Expiration Month")
     myform.ExpMonth.focus()
     return false
  } 
else {
      if (isNaN(myform.ExpMonth.value)) {
         alert("Please enter a numeric month")
         myform.ExpMonth.focus()
         return false
      }     
}      
if (!myform.ExpYear.value) {
     alert("Please enter the Expiration Year")
     myform.ExpYear.focus()
     return false
     }
else {
      if (isNaN(myform.ExpYear.value)) {
         alert("Please enter a numeric year")
         myform.ExpYear.focus()
         return false
      }     
}
}
// -->
</script>   
</head>
<body>
<div align="center">
<h2>Place Your Order</h2>
<table border='0' cellspacing='0' width='400'>
  <tr bgcolor='#CCCCCC'>
    <th>Description</th>
    <th>Quantity</th>
    <th>Price</th>
  </tr>
  <tr bgcolor='#FFFFFF'>
    <td><?php echo $itemdesc; ?></td>
    <td align='center'><?php echo $itemq; ?></td>
    <td>  <?php echo $itemcost; ?></td>
  </tr>
  <tr bgcolor='#FFFFFF'>
    <td><?php echo $itemdeschist; ?></td>
    <td align='center'><?php echo $itemq1; ?></td>
    <td>  <?php echo $itemcosthist; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td bgcolor='#CCCCCC'><strong>Total</strong></td>
    <td bgcolor='#CCCCCC'>$<?php echo $total; ?></td>
  </tr>
</table>

<form method='post' name='myform' action='<?php echo base_url(); ?>orderdemo'  onsubmit="return validateForm()">
<br />
    <table border="0" cellspacing="0" cellpadding="5" width="400" bgcolor="#CCCCCC">
      <tr>
        <td width="14%" height="27" align="right">Name:</td>
        <td width="86%" height="27"><input type="text" name="Name" size="20" /></td>
      </tr>
      <tr>
        <td width="14%" height="19" align="right">Email:</td>
        <td width="86%" height="19"><input type="text" name="Email" size="20" /></td>
      </tr>
      <tr>
        <td width="14%" height="19" align="right">Address:</td>
        <td width="86%" height="19"><input type="text" name="Address" size="20" /></td>
      </tr>
      <tr>
        <td width="14%" height="19" align="right">City:</td>
        <td width="86%" height="19"><input type="text" name="City" size="15" />
        </td>
      </tr>
      <tr>
        <td width="14%" height="19" align="right">
          State:</td>
        <td width="86%" height="19">
          <input type="text" name="State" size="3" maxlength="2" />&nbsp;&nbsp;&nbsp;
          &nbsp;
          Zip: <input type="text" name="Zip" size="7" maxlength="5" /></td>
      </tr>
      <tr> 
        <td width="14%" height="19" align="right">Credit<br />Card:</td>
        <td> <input type="text" name="CreditCard" size="20" /><br /><small><small><em> Use "4111 1111 1111 1111"</em></small></small></td>
      </tr>
      <tr>
        <td width="14%" height="19" align="right">&nbsp;</td>
        <td width="86%" height="19">
          Expires Month <input type="text" name="ExpMonth" size="3" maxlength="2" />
          Year: <input type="text" name="ExpYear" size="5" maxlength="4" /></td>
      </tr>
    </table>
<br />
<input type="submit" name="submit" value="Place Order"/>&nbsp;
                      <?php
                          
                            echo '<input type="hidden" name="itemdesc" value="'.$itemdesc.'">';
                            echo '<input type="hidden" name="itemcost" value="'.$itemcost.'">';
                            echo '<input type="hidden" name="itemq" value="'.$itemq.'">';
                            echo '<input type="hidden" name="itemdeschist" value="'.$itemdeschist.'">';
                            echo '<input type="hidden" name="itemcosthist" value="'.$itemcosthist.'">';
                            echo '<input type="hidden" name="itemq1" value="'.$itemq1.'">';
                            echo '<input type="hidden" name="total" value="'.$total.'">';
                          

                        ?>
<input type="button" value="Continue Shopping" onclick="javascript:history.go(-2)" />
</form>
<table border="0" width="400" bgcolor="#CCCCCC"><tr><td>
<small><em>Note: If this were an actual E-Commerce site, this page would be processed using SSL. The protocol in the address bar would show "https" instead of "http".</em></small></td></tr></table>
</div>
</body>
</html>

