	<head>
	   <nav class="top-nav" style="
    margin-top: -22px;
">
        <div class="container">
          <div class="nav-wrapper"><a class="page-title"><? echo empty($page->id) ? 'Добавить новую страницу' : 'Редактировать страницу: ' . $page->title; ?></a></div>
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
		<td>Заголовок:</td>
		<td><? echo form_input('title', set_value('title', $page->title),'class="form-control"'); ?></td>
	</tr>
	<tr>
		<td>Сайт/page/названия:</td>
		<td><? echo form_input('slug', set_value('slug', $page->slug),'class="form-control"'); ?></td>
	</tr>
	<tr>
		<td>Текст:</td>
		<td><? echo form_textarea('body', set_value('body', $page->body), 'class="tinymce"'); ?></td>
	</tr>
	<tr>
		<td></td>
		<td><? echo form_submit('submit','Сохранить','class="btn btn-primary"'); ?></td>
	</tr>
</table>
<? echo form_close(); ?> </div> </div> </div>