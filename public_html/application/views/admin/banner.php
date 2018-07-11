<h1>Настройки Баннера</h1>
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
		<td>Skype(Логин):</td>
		<td><? echo form_input('skype', set_value('skype', $this->config->item('skype')),'class="form-control"'); ?></td>
	</tr>
	<tr>
		<td>WMID:</td>
		<td><? echo form_input('wmidb', set_value('wmidb', $this->config->item('wmidb')),'class="form-control"'); ?></td>
	</tr>
	<tr>
		<td>VK(ID):</td>
		<td><? echo form_input('vkid', set_value('vkid', $this->config->item('vkid')),'class="form-control"'); ?></td>
	</tr>

		<td></td>
		<td><? echo form_submit('submit','Сохранить','value="upload" class="btn btn-primary"'); ?></td>
	</tr>
	</table>
<? echo form_close(); ?>
