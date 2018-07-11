<h1>Управление блоками</h1>
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
	<tr>
		<td>Мы принимаем:</td>
		<td><? echo form_dropdown('mpblok', array('0'=>'Не показывать','1'=>'Показывать'), $this->config->item('mpblok')); ?></td>
	</tr>
		<tr>
		<td>Последние покупки:</td>
		<td><? echo form_dropdown('ppblok', array('0'=>'Не показывать','1'=>'Показывать'), $this->config->item('ppblok')); ?></td>
	</tr>
		<tr>
		<td>Лимит на вывод:</td>
		<td><? echo form_input('pplimit', set_value('pplimit', $this->config->item('pplimit')),'class="form-control"'); ?></td>
	</tr>
		<tr>
		<td>Цвет даты:</td>
		<td><? echo form_input('ppcolor', set_value('ppcolor', $this->config->item('ppcolor')),'class="form-control"'); ?></td>
	</tr>
	<tr>
		<td>Группа ВК(ID):</td>
		<td><? echo form_input('vkblok', set_value('vkblok', $this->config->item('vkblok')),'class="form-control"'); ?></td>
	</tr>
		<tr>
		<td>Случайный товар:</td>
		<td><? echo form_dropdown('stblok', array('0'=>'Не показывать','1'=>'Показывать'), $this->config->item('stblok')); ?></td>
	</tr>
		<tr>
		<td>Контакты:</td>
		<td><? echo form_dropdown('kblok', array('0'=>'Не показывать','1'=>'Показывать'), $this->config->item('kblok')); ?></td>
	</tr>

		<tr>
		<td></td>
		<td><? echo form_submit('submit','Сохранить','value="upload" class="btn btn-primary"'); ?></td>
	</tr>
</table>
<? echo form_close(); ?>
