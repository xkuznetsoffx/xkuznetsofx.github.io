
	<head>
	   <nav class="top-nav" style="
    margin-top: -22px;
">
        <div class="container">
          <div class="nav-wrapper"><a class="page-title"><? echo empty($goods->id) ? 'Добавить товар' : 'Изменить товар: ' . $goods->name; ?></a></div>
        </div>
      </nav>
	  </head><div class="container">
  <div class="row">

    <div class="col s12 m9 l10">
<? echo !empty($errors) ? $errors : "" ; ?>
<? echo validation_errors(); ?>
<? echo form_open_multipart();?>

<?php 
$list = array('0'=>'...');
foreach ($categories as $key => $value) 
{
	$list[$value->id] = $value->title;
}
 ?>

	

<table class="table">
	<tr>
		<td>Категория:</td>
		<td><?php echo form_dropdown('category', $list, $goods->category); ?></td>
	</tr>
	<tr>
		<td>На главной:</td>
		<td><?php echo form_dropdown('onmain',array('0'=>'Не показывать','1'=>'Показывать'), $goods->onmain); ?></td>
	</tr>
	<tr>
		<td>Название:</td>
		<td><? echo form_input('name', set_value('name', $goods->name),'class="form-control"'); ?></td>
	</tr>
	<tr>
		<td>Описание:</td>
		<td><? echo form_textarea('descr', set_value('descr', $goods->descr),'class="tinymce"'); ?></td>
	</tr>
	<tr>
		<td>Иконка (URL):</td>
		<td><? echo form_input('iconurl', set_value('iconurl', $goods->iconurl),'class="form-control"'); ?></td>
	</tr>
	<tr>
		<td>Цена (Рубли):</td>
		<td><? echo form_input('price_rub', set_value('price_rub', $goods->price_rub),'class="form-control"'); ?></td>
	</tr>
		<tr>
		<td>Тип товара:</td>
		<td><? echo form_dropdown('type_Item', array('0'=>'Обычный','2'=>'Распродажа'), $goods->type_Item); ?></td>
	</tr>
	<tr>
		<td>Скидка(Распродажа):</td>
		<td><? echo form_input('skidka', set_value('skidka', $goods->skidka),'class="form-control"'); ?></td>
	</tr>
		<tr>
		<td>Мин. кол-во для заказа:</td>
		<td><? echo form_input('min_order', set_value('min_order', $goods->min_order),'class="form-control"'); ?></td>
	</tr>
	<tr style="display: none;">
		<td>Метод продажи:</td>
		<td>
			<div class="btn-group" data-toggle="buttons" data-toggle-name="sell_method">
			  <label data-id="0" class="btn btn-primary <? echo $goods->sell_method == 0 ? 'active' : ''?>">
				<input type="radio">Строки
			  </label>
			  <label data-id="1" class="btn btn-primary <? echo $goods->sell_method == 1 ? 'active' : ''?>">
				<input type="radio">Файл
			  </label>
			</div>
			 <? echo form_hidden('sell_method', set_value('sell_method', $goods->sell_method)); ?>
		</td>
	</tr>
	<tr class="goodtype">
	<? if($goods->sell_method == 0) : ?>
		<td>Товар (строки):</td>
		<td><? echo form_textarea('goods', set_value('goods', $goods->goods),'class="materialize-textarea"'); ?><label for="textarea1">Товары</label></td>
		
		
	<? elseif($goods->sell_method == 1): ?>
		<td>Товар (файл):</br>
		<span class="label label-success"><? echo $goods->goods;?></span></td>
		<td><input type="file" name="userfile" size="20" class="form-control"/></td>
	<? endif; ?>
	</tr>
	<tr>
		<td></td>
		<td><? echo form_submit('submit','Сохранить','class="btn btn-primary"'); ?></td>
	</tr>
</table>
<? echo form_close(); ?>
    </div>

    

  </div>
</div>