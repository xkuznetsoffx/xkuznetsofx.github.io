	<head>
	   <nav class="top-nav" style="
    margin-top: -22px;
">
        <div class="container">
          <div class="nav-wrapper"><a class="page-title">Страницы</a></div>
        </div>
      </nav>
	  </head>
<div class="container">
  <div class="row">

    <div class="col s12 m9 l10">
<div class="clearfix"></div>
<table class="striped centered">
	<thead>
		<th>Заголовок</th>
		<th>Изменить</th>
		<th>Удалить</th>
	</thead>
	<tbody>
		<a href="<? echo site_url('/admin/page/edit'); ?>" class="pull-right btn btn-small btn-primary" style="margin-top: 23px;"><i class="fa fa-plus-circle"></i> Добавить страницу</a>    

<? if(count($pages)): foreach($pages as $page): ?>
		<tr>
			<td><center><? echo anchor('admin/page/edit/'.$page->id, $page->title); ?></center></td>
			<td><center>
			<a href="/admin/page/edit/<? echo $page->id; ?>" class="  light-blue lighten-2 waves-effect waves-light btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></center></td>
			
			<td><center><a href="/admin/page/delete/<? echo $page->id; ?>" class=" red darken-1 waves-effect waves-light btn"><i class="fa fa-times" aria-hidden="true"></i></a></center></td></center></td>
		
		</tr>
<? endforeach; ?>
<? else: ?>
	<tr>
		<td colspan="3">Записи отсутствуют</td>
	</tr>
<? endif; ?>
	</tbody>
</table> </div> </div> </div>