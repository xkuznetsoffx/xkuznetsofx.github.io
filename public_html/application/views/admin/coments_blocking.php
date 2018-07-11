<h1>Редактировать коментарий</h1>
<? if(isset($error)) {
		echo $error;
	}
	elseif(isset($ok)) {
		echo '<div class="alert alert-success">Данные успешно сохранены!</div>';
	}
	?>

<? echo validation_errors(); ?>
<? echo form_open_multipart(); ?>
<table class="table">
	<?php echo form_hidden('parent_id','0'); ?>
	<tr>
		<td>Id товара:</td>
		<td><? echo form_input('item', set_value('item',$coment->item),'class="form-control"'); ?></td>
	</tr>
	<tr>
		<td>Имя:</td>
		<td><? echo form_input('user_name', set_value('user_name',$coment->user_name),'class="form-control"'); ?></td>
	</tr>
	<tr>
		<td>Тект:</td>
		<td><? echo form_textarea('body', set_value('body',$coment->body),'class="form-control"'); ?></td>
	</tr>
	
		<tr>
		<td></td>
		<td><? echo form_submit('submit','Сохранить','value="upload" class="btn btn-primary"'); ?></td>
	</tr>
</table>
<? echo form_close(); ?>
