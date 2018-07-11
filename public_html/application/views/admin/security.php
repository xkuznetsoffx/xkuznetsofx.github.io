	<head>
	   <nav class="top-nav" style="
    margin-top: -22px;
">
        <div class="container">
          <div class="nav-wrapper"><a class="page-title">Пользователь</a></div>
        </div>
      </nav>
	  </head>
<div class="container">
  <div class="row">

    <div class="col s12 m9 l10">
	<h2 class="header">Смена пароля</h2>

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
		<td>Введите текущий пароль:</td>
		<td><? echo form_input('old_password', set_value('old_password'),'class="form-control"'); ?></td>
	</tr>
		<tr>
		<td>Введите новый пароль:</td>
		<td><? echo form_input('password', set_value('password'),'class="form-control"'); ?></td>
	</tr>
		<tr>
		<td>Повторите новый пароль:</td>
		<td><? echo form_input('password1', set_value('password1'),'class="form-control"'); ?></td>
	</tr>
		<tr>
		<td></td>
		<td><? echo form_submit('submit','Сохранить','value="upload" class="btn btn-primary"'); ?></td>
	</tr>
</table>
<h2 class="header">Блокировка по IP</h2>

<? echo anchor('admin/security/edit','<i class="glyphicon glyphicon-plus"></i> Заблокировать IP Адрес',array('class'=>'pull-right btn btn-small btn-primary')); ?>
<table class="striped centered">
	<thead>
		<th>IP адрес</th>
		<th>Дата добавления</th>
		<th>Удалить</th>
	</thead>
	<tbody>
<? if(count($ips)): foreach($ips as $page): ?>
		<tr>
			<td><? echo anchor($page->id, $page->ip); ?></td>
			<td><center>
			<a href="/admin/security/edit/<? echo $page->id; ?>" class="  light-blue lighten-2 waves-effect waves-light btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></center></td>
			
			<td><center><a href="/admin/security/delete/<? echo $page->id; ?>" class=" red darken-1 waves-effect waves-light btn"><i class="fa fa-times" aria-hidden="true"></i></a></center></td></center></td>
		</tr>
<? endforeach; ?>
<? else: ?>
	<tr>
		<td colspan="3">Записи отсутствуют</td>
	</tr>
<? endif; ?>
	</tbody>
</table>
<? echo form_close(); ?></div></div></div>
