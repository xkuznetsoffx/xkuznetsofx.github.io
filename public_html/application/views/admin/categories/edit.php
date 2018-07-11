	<head>
	   <nav class="top-nav" style="
    margin-top: -22px;
">
        <div class="container">
          <div class="nav-wrapper"><a class="page-title"><? echo empty($categories->id) ? 'Добавить категорию' : 'Изменить категорию: ' . $categories->title; ?></a></div>
        </div>
      </nav>
	  </head>
<div class="container">
  <div class="row">

    <div class="col s12 m9 l10">

<? echo !empty($errors) ? $errors : "" ; ?>
<? echo validation_errors(); ?>
<? echo form_open_multipart();?>
<table class="table">
	<tr>
		<td>Название:</td>
		<td><? echo form_input('title', set_value('title', $categories->title),'class="form-control"'); ?></td>
	</tr>
	<input type='hidden' name='slug' value='test'>
	<tr>
		<td>Порядок:</td>
		<td><? echo form_input('sort', set_value('sort', $categories->sort),'class="form-control" style="width:100px; text-align:center;"'); ?></td>
	</tr>
	<? 
	$list	=	array(
			'1' => 'Показывать',
			'0' => 'Не показывать',
			
			);
	?>
	<tr>
		<td></td>
		<td><?php echo form_dropdown('show', $list, $categories->show); ?></td>
	</tr>
	<tr>
		<td></td>
		<td><? echo form_submit('submit','Сохранить','class="btn btn-primary"'); ?></td>
	</tr>
</table>
<? echo form_close(); ?>  </div>  </div>  </div>