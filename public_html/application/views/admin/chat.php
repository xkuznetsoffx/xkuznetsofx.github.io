<h1>���������� �������</h1>
<? if(isset($error)) {
		echo $error;
	}
	elseif(isset($ok)) {
		echo '<div class="alert alert-success">������ ������� ���������!</div>';
	}
	?>
<? echo validation_errors(); ?>
<? echo form_open_multipart(); ?>
	<table class="table">
	<tr>
		<td>�� ���������:</td>
		<td><? echo form_dropdown('mpblok', array('0'=>'�� ����������','1'=>'����������'), $this->config->item('mpblok')); ?></td>
	</tr>
		<tr>
		<td>��������� �������:</td>
		<td><? echo form_dropdown('ppblok', array('0'=>'�� ����������','1'=>'����������'), $this->config->item('ppblok')); ?></td>
	</tr>
		<tr>
		<td>����� �� �����:</td>
		<td><? echo form_input('pplimit', set_value('pplimit', $this->config->item('pplimit')),'class="form-control"'); ?></td>
	</tr>
		<tr>
		<td>���� ����:</td>
		<td><? echo form_input('ppcolor', set_value('ppcolor', $this->config->item('ppcolor')),'class="form-control"'); ?></td>
	</tr>
		<tr>
		<td>��������� �����:</td>
		<td><? echo form_dropdown('stblok', array('0'=>'�� ����������','1'=>'����������'), $this->config->item('stblok')); ?></td>
	</tr>
		<tr>
		<td>��������:</td>
		<td><? echo form_dropdown('kblok', array('0'=>'�� ����������','1'=>'����������'), $this->config->item('kblok')); ?></td>
	</tr>

		<tr>
		<td></td>
		<td><? echo form_submit('submit','���������','value="upload" class="btn btn-primary"'); ?></td>
	</tr>
</table>
<? echo form_close(); ?>
