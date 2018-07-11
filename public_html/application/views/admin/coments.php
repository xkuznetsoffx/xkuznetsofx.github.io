
<h1>Коментарии (<b><?php echo $coments_count; ?></b>)</h1>
<? if(isset($error)) {
		echo $error;
	}
	elseif(isset($ok)) {
		echo '<div class="alert alert-success">Данные успешно сохранены!</div>';
	}
	?>
							<div class="listing" style='float:right;'>
			                    <?php if($pagination): ?>
			                        <?php echo $pagination; ?>
			                    <?php endif; ?>
			                </div>
	<table class="table table-bordered">
	<thead>
		<th>ID</th>
		<th>Имя</th>
		<th>Текст</th>
		<th style='width:120px;' align='center'>Дата</th>
		<th style='width:40px;'> Управление</th>
	</thead>
	<tbody>
<? if(count($coments)): foreach($coments as $coment): ?>
		<tr>
			<td><center><a style="color: #000;text-decoration: none;" href="/admin/categories/edit/<? echo $coment->id; ?>"><? echo  $coment->item; ?></a></center></td>
			<td><center><a style="color: #000;text-decoration: none;" href="/admin/categories/edit/<? echo $coment->id; ?>"><? echo  $coment->user_name; ?></a></center></td>
			<td><center><? echo $coment->body; ?></center></td>
			<td align='center'><center><small><? echo $coment->created; ?></small></center></td>
			<td align='center'>
				<center><? echo btn_edit('admin/coments/edit/'.$coment->id); ?>
				<? echo btn_delete('admin/coments/delete/'.$coment->id); ?></center>
			</td>
		</tr>
<? endforeach; ?>
<? else: ?>
	<tr>
		<td colspan="3">Записи отсутствуют</td>
	</tr>
<? endif; ?>
 							
	</tbody>
</table>
<? echo form_close(); ?>
