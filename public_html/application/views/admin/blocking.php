	<head>
	   <nav class="top-nav" style="
    margin-top: -22px;
">
        <div class="container">
          <div class="nav-wrapper"><a class="page-title">Заблокировать IP</a></div>
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
	<? echo form_hidden('id', set_value('id', $ip->id),'class="form-control"'); ?>
	<tr>
		<td>Ip адресс:</td>
		<td><? echo form_input('ip', set_value('ip',$ip->ip),'class="form-control"'); ?></td>
	</tr>
	
		<tr>
		<td></td>
		<td><? echo form_submit('submit','Сохранить','value="upload" class="btn btn-primary"'); ?></td>
	</tr>
</table>
<? echo form_close(); ?>
  </div>  </div>  </div>