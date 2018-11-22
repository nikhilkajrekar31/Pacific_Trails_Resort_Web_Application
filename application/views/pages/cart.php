<?php
//set variables
$status=false;
$itemdeschist="";
$itemcosthist="";
$itemcost=0;
$itemq="";
$itemq1="";
if(isset($_POST['submitbutton1'])){
  $status=$_POST['status'];
  if($status=='false'){
    $itemdesc=$_POST['desc1'];
    $itemcost=$_POST['cost1'];
    // echo " itemdesc: ".$itemdesc." itemcost: ".$itemcost;
    // echo $status;
    $itemq="1";
  }
  else{
    $itemdesc=$_POST['desc1'];
    $itemcost=$_POST['cost1'];
    $itemdeschist=$_POST['itemdeschist'];
    $itemcosthist=$_POST['itemcosthist'];
    // echo " itemdesc: ".$itemdesc." itemcost: ".$itemcost.$itemdeschist.$itemcosthist;
    // echo $status;
    $itemq="1";
    $itemq1="1";
  }
}
if(isset($_POST['submitbutton2'])){
  $status=$_POST['status'];
  if($status=='false'){
    $itemdesc=$_POST['desc2'];
    $itemcost=$_POST['cost2'];
    // echo " itemdesc: ".$itemdesc." itemcost: ".$itemcost;
    $itemq="1";
  }
  else{
    $itemdesc=$_POST['desc2'];
    $itemcost=$_POST['cost2'];
    $itemdeschist=$_POST['itemdeschist'];
    $itemcosthist=$_POST['itemcosthist'];
    // echo " itemdesc: ".$itemdesc." itemcost: ".$itemcost.$itemdeschist.$itemcosthist;
    $itemq1="1";
    $itemq="1";
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
<title>Shopping Cart</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body {color:#330000;
      background-color:#FFFFFF;
      font-family:Verdana,Arial,Helvetica;
      }
td,th {  font-family:Verdana,Arial,Helvetica;
    }
</style>      
</head>
<body>
<div align="center">
<h2>Shopping Cart</h2>
<table border='0' cellspacing='0'>
  <tr bgcolor='#CCCCCC'>
    <th>Description</th>
    <th>Quantity</th>
    <th>Price</th>
  </tr>
  <tr bgcolor='#FFFFFF'>
    <td><?php echo $itemdesc; ?></td>
    <td align='center'><?php echo $itemq; ?></td>
    <td><?php echo $itemcost; ?></td>
  </tr>
  <tr bgcolor='#FFFFFF'>
    <td><?php echo $itemdeschist; ?></td>
    <td align='center'><?php echo $itemq1; ?></td>
    <td><?php echo $itemcosthist; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td bgcolor='#CCCCCC'><strong>Total</strong></td>
    <td bgcolor='#CCCCCC'>$<?php 
        $one=(float)$itemcost;
        $two=(float)$itemcosthist;
        $total=bcadd($one, $two, 2);
        echo bcadd($one, $two, 2);
      ?>
      </td>
  </tr>
</table>

<form method="post" action="<?php echo base_url(); ?>placeyourorder" name="cartform" class="cartform" style="display:inline-block; width: 100px;">
  <input type="hidden" name="descfromcart" value="<?php echo $itemdesc; ?> "/>&nbsp;
  <input type="hidden" name="costfromcart" value="<?php echo $itemcost; ?> "/>&nbsp;
  <input type="hidden" name="descfromcart1" value="<?php echo $itemdeschist; ?> "/>&nbsp;
  <input type="hidden" name="costfromcart1" value="<?php echo $itemcosthist; ?> "/>&nbsp;
  <input type="hidden" name="qfromcart" value="<?php echo $itemq; ?> "/>&nbsp;
  <input type="hidden" name="qfromcart1" value="<?php echo $itemq1; ?> "/>&nbsp;
  <input type="hidden" name="total" value="<?php echo $total; ?>"/>&nbsp;
  <input type="submit" name="placeorder" value="Place Order"/>&nbsp;
</form>

<form method="post" action="<?php echo base_url(); ?>shop" name="cartform" class="cartform" style="display:inline-block;">
  <input type="hidden" name="descfromcart" value="<?php echo $itemdesc; ?> "/>&nbsp;
  <input type="hidden" name="costfromcart" value="<?php echo $itemcost; ?> "/>&nbsp;
  <input type="submit" name="cartsubmit" value="Continue Shopping"/>

</form>
</div>
</body>
</html>
