<? error_reporting(0); ?>
<? if($_GET['type'] == 'search'): ?>
	<? $query = mysql_query("SELECT * FROM `orders` WHERE `bill` = '".$_GET['bill']."'");
		$order = mysql_fetch_assoc($query);
		if($order['paid'] == 1) {
			echo "<script>location.replace('/views/?bill=".$_GET['bill']."&email=".$order['email']."');</script>";
		}
		else {
			echo "<script>alert('Платеж не найден');</script>";
			echo "<script>location.replace('/pay/?bill=".$_GET['bill']."');</script>";
		}
	?>

<? else: ?>
<?
$query = mysql_query("SELECT * FROM `orders` WHERE `bill` = '".$_GET['bill']."' AND `email` = '".$_GET['email']."'");
$order = mysql_fetch_assoc($query);
?>
<? if($order['paid'] == 1):?>
<div style="margin-top:50px;">
Спасибо за покупку.
Скачать купивший товар: <a download="" href="/payorder/<?=$order['goods'];?>.txt">Скачать</a></div>
<?else:?>
<script>location.replace('/pay/?bill=<?=$_GET['bill'];?>');</script>
<?endif;?>
<?endif;?>