<?
//BY PAGO 
$query = mysql_query("SELECT * FROM `orders` WHERE `id` = '".$_GET['account']."'");
$order = mysql_fetch_assoc($query);
	echo "<script>location.replace('/search1/?goods=".$_GET['paymentId']."&order_id=".$_GET['account']."');</script>";
?>