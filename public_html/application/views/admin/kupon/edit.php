	<head>
	   <nav class="top-nav" style="
    margin-top: -22px;
">
        <div class="container">
          <div class="nav-wrapper"><a class="page-title"><? echo empty($kupon->id) ? 'Создание купона' : 'Редактировать купон: ' . $kupon->kupon_name; ?></a></div>
        </div>
      </nav>
	  </head>
<div class="container">
  <div class="row">

    <div class="col s12 m9 l10">
<? echo validation_errors(); ?>
<? echo form_open(); ?>
<table class="table">
	<tr>
		<td>Купон:</td>
		<td><? echo form_input('kupon_name', set_value('kupon_name', $kupon->kupon_name),'class="form-control"'); ?></td>
	</tr>
	<tr>
		<td>Процент:</td>
		<td><? echo form_input('percentage', set_value('percentage', $kupon->percentage), 'class="form-control"'); ?></td>
	</tr>
	<tr>
		<td></td>
		<td><? echo form_submit('submit','Сохранить','class="btn btn-primary"'); ?></td>
	</tr>
</table>
<? echo form_close(); ?></div></div></div>