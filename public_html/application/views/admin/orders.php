	<head>
	   <nav class="top-nav" style="
    margin-top: -22px;
">
        <div class="container">
          <div class="nav-wrapper"><a class="page-title">Заказы</a></div>
        </div>
      </nav>
	  </head>
<div class="container">
  <div class="row">

    <div class="col s12 m9 l10">


<table class="table table-hover table-bordered">
	<thead>
		<th>ID</th>
		<th>Примечание</th>
		<th>Дата</th>
		<th>Товар</th>
		<th style="min-width:70px;">Кол-во</th>
		<th>Цена</th>
		<th>E-mail</th>
		<th>Оплачен</th>
	</thead>
	<tbody>
<? if(count($orders)): foreach($orders as $order): ?>
		<tr>
			<td><center><? echo $order->id; ?></center></td>
			<td><center><? echo $order->bill; ?></center></td>
			<td style="font-size:11px;"><center><? echo date('d-m-Y H:i:s',$order->date); ?></center></td>
			<td style="font-size:11px;"><center><? echo $order->name; ?></center></td>
			<td><center><? echo $order->count; ?></center></td>
			<td><center><? echo $order->price.' '.$order->fund; ?></center></td>
			<td><center><? echo $order->email; ?></center></td>
			<td><center><? echo $order->paid ? 'Да' : 'Нет' ?></center></td>
			<td><a title="Скачать купленный товар" href="/admin/orders/getorder/<? echo $order->bill2 ;?>" class="pull-right fa fa-arrow-circle-o-down"></span></td>
		</tr>
<? endforeach; ?>
<? else: ?>
	<tr>
		<td colspan="8">Заказов нет...</td>
	</tr>
<? endif; ?>
	</tbody>
</table> </div></div></div>