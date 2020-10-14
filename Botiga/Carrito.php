<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
session_start();
?>

<?php
if (isset($_POST['submit']))
{

  if($_SESSION['item']==$_POST['h1'])
{
  $_SESSION['qty'] = $_SESSION['qty'] + 1;
}
else
{
  $_SESSION['item'] = $_POST['h1'];
  $_SESSION['price']= $_POST['h2'];
}

 $_SESSION['itemname'][$_SESSION['item']] = $_SESSION['item'];
 $_SESSION['itemqty'][$_SESSION['item']] = $_SESSION['qty'];
 $_SESSION['itemprice'][$_SESSION['item']] = $_SESSION['price'];

}

?>


<form action="elwood.php" method="post"><input type="hidden"
name="h1" value="Elwood Benchmark tee"/><input type="hidden" name="h2" value="59.99"/><input
type="submit" name="submit" value="Add to cart"/></form>

</body>
</html>