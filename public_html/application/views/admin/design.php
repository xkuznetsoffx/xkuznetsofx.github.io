	<head>
	   <nav class="top-nav" style="
    margin-top: -22px;
">
        <div class="container">
          <div class="nav-wrapper"><a class="page-title">Настройки дизайна</a></div>
        </div>
      </nav>
	  </head>
<div class="container">
  <div class="row">

    <div class="col s12 m9 l10">

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
		<td>Название сайта:</td>
		<td><? echo form_input('site_name', set_value('site_name', $this->config->item('site_name')),'class="form-control"'); ?></td>
	</tr>
	<tr>
		<td>Мета-описание сайта:</td>
		<td><? echo form_textarea('metadescr', set_value('metadescr', $this->config->item('metadescr')),'class="materialize-textarea"'); ?></td>
	</tr>
	<tr>
		<td>Фон:</td>
		<td><? echo form_input('sitefon', set_value('sitefon', $this->config->item('sitefon')),'class="form-control"'); ?></td>
	</tr>
	<tr>
		<td>Логотип:</td>
		<td><? echo form_input('site_logo', set_value('site_logo', $this->config->item('site_logo')),'class="form-control"'); ?></td>
	</tr>
	<tr>
		<td>Нижний Логотип:</td>
		<td><? echo form_input('slide2', set_value('slide2', $this->config->item('slide2')),'class="validate"'); ?></td>
	</tr>
		<tr>
		<td>Банер:</td>
		<td><? echo form_input('slide1', set_value('slide1', $this->config->item('slide1')),'class="validate"'); ?></td>
	</tr>
	<!---tr>
		<td>IMG(3):</td>
		<td><? echo form_input('slide3', set_value('slide3', $this->config->item('slide3')),'class="validate"'); ?></td>
	</tr--->

	<tr>
		<td></td>
		<td><? echo form_submit('submit','Сохранить','value="upload" class="btn btn-primary"'); ?></td>
	</tr>
	</table>
<? echo form_close(); ?> </div> </div>
