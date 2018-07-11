<?php
$db_query_wmr = mysql_query("SELECT SUM(price) as sum FROM `orders` WHERE paid = '1' AND fund = 'WMR'");
$db_query_wmz = mysql_query("SELECT SUM(price) as sum FROM `orders` WHERE paid = '1' AND fund = 'WMZ'");
$db_query_yad = mysql_query("SELECT SUM(price) as sum FROM `orders` WHERE paid = '1' AND fund = 'YAD'");
$db_query_qiwi = mysql_query("SELECT SUM(price) as sum FROM `orders` WHERE paid = '1' AND fund = 'QIWI'");
$db_query_all = mysql_query("SELECT SUM(price) as sum FROM `orders` WHERE paid = '1'");
$db_wmr = mysql_fetch_array($db_query_wmr);
$db_wmz = mysql_fetch_array($db_query_wmz);
$db_yad = mysql_fetch_array($db_query_yad);
$db_qiwi = mysql_fetch_array($db_query_qiwi);
$db_all = mysql_fetch_array($db_query_all);
?>
<?php
$db_query_srall = mysql_query("SELECT SUM(price_rub) as sum FROM `goods`");
$db_srall = mysql_fetch_array($db_query_srall);
?>
<?php
$db_query_views = mysql_query("SELECT * FROM views LIMIT 1");
$db_views = mysql_fetch_assoc($db_query_views);
$vasip = $_SERVER['REMOTE_ADDR'];
?>
<h1>Статистика</h1>
<br>
<h1>Пользователи</h1>
<table class="table"><tbody>
        <tr>
		<td>Сайт посетило:</td>
		<td><?php echo $db_views['sviews'] + 0; ?></td>
	</tr>
        <tr>
		<td>Ваш IP:</td>
		<td><?php echo $vasip; ?></td>
	</tr>
</tbody></table>
<br>
<h1>Сумма купленного товара</h1>
<table class="table">
	<tbody>
        <tr>
		<td>WMR:</td>
		<td><?php echo $db_wmr['sum'] + 0; ?></td>
	</tr>
        <tr>
		<td>WMZ:</td>
		<td><?php echo $db_wmz['sum'] + 0; ?></td>
	</tr>
        <tr>
		<td>QIWI:</td>
		<td><?php echo $db_qiwi['sum'] + 0; ?></td>
	</tr>
        <tr>
		<td>Yandex:</td>
		<td><?php echo $db_yad['sum'] + 0; ?></td>
	</tr>
        <tr>
		<td>Сумма всех покупок:</td>
		<td><?php echo $db_all['sum'] + 0; ?></td>
	</tr>
</tbody></table>
<h1>Сумма всех товаров</h1>
<table class="table">
	<tbody>
        <tr>
		<td>Рубли:</td>
		<td><?php echo $db_srall['sum'] + 0; ?></td>
	</tr>
</tbody></table>