<?php

if(isset($_POST['submit'])){
  $itemdesc=$_POST['itemdesc'];

  $itemcost=$_POST['itemcost'];
  $itemdeschist=$_POST['itemdeschist'];
  $itemcosthist=$_POST['itemcosthist'];
  $itemq=$_POST['itemq'];
  $itemq1=$_POST['itemq1'];
  $name=$_POST['Name'];

  $email=$_POST['Email'];
  $address=$_POST['Address'];
  $city=$_POST['City'];
  $state=$_POST['State'];
  $zip=$_POST['Zip'];
  $creditcard=$_POST['CreditCard'];
  $expmonth=$_POST['ExpMonth'];
  $expyear=$_POST['ExpYear'];
  $orderdesc=$itemdesc.$itemq.$itemcost.$itemdeschist.$itemq1.$itemcosthist;
  $total=$_POST['total'];

$servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "pacific";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//query for reservation
$sql = "INSERT INTO orders(name,email,address,city,state,zip,creditcard,expmonth,expyear,orderdesc,total)
VALUES ('$name','$email','$address','$city','$state','$zip','$creditcard','$expmonth','$expyear','$orderdesc','$total')";

//execute reservation query
if ($conn->query($sql) === TRUE) {
  // echo "<script type='text/javascript'>alert('Entry recorded successfully');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//close connection
$conn->close();

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
<title>Demo Order Form Handler</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body {color:#330000;
      background-color:#FFFFFF;
      font-family:Verdana,Arial,Helvetica;
      }
</style>      
</head>
<body>
<div align="center">
<h1>Thank you for your order!</h1>
<br />
<table border='0' cellspacing='0' width='400'><tr bgcolor='#CCCCCC'><th>Description</th><th>Quantity</th><th>Price</th></tr>
<tr bgcolor='#FFFFFF'>
	<td><?php echo $itemdesc; ?></td><td align='center'><?php echo $itemq; ?></td><td><?php echo $itemcost; ?></td>
</tr>
<tr bgcolor='#FFFFFF'>
	<td><?php echo $itemdeschist; ?></td><td align='center'><?php echo $itemq1; ?></td><td><?php echo $itemcosthist; ?></td>
</tr>
<tr><td>&nbsp;</td><td bgcolor='#CCCCCC'><strong>Total</strong></td><td bgcolor='#CCCCCC'>$<?php echo $total; ?></td></tr></table>
<br /><strong>Name:&nbsp;</strong><?php echo $name; ?><br /><br />
<strong>Address:</strong> <br />
<?php echo $address; ?><br /><br />
<br /><strong>Credit Card:</strong><br /><?php echo $creditcard; ?><br /><strong>Expiration Date:&nbsp;</strong><?php echo $expmonth; ?>/<?php echo $expyear; ?><br />
<br /><br /><strong>Email:&nbsp;</strong><?php echo $email; ?><br />

<br />
<div style="width:400px">
<small><em>Note: This page is for demonstration purposes only and nothing is done with the order information. If this were an actual E-Commerce site, the order information could be stored in a text file, stored in a database, or sent in an e-mail message.The protocol in the address bar would show "https" instead of "http".</em></small></div>
<form action="#">
<input type="button" value = "Back" onclick="javascript:history.go(-3)" />
</form>
</div>
</body>
</html>
