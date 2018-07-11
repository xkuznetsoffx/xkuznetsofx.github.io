	<head>
	   <nav class="top-nav" style="
    margin-top: -22px;
">
        <div class="container">
          <div class="nav-wrapper"><a class="page-title">Категории</a></div>
        </div>
      </nav>
	  </head>
<div class="container">
  <div class="row">

    <div class="col s12 m9 l10">


<div class="clearfix"></div>
<table style="width:100%;" class="striped centered">
		<thead>
			<th>ID</th>
			<th>Порядок</th>
			<th>Название</th>
			<th>Редактировать</th>
			<th>Удалить</th>
		</thead>
	<tbody>
	<a href="<? echo site_url('/admin/categories/edit'); ?>" class="pull-right btn btn-small btn-primary" style="margin-top: 23px;"><i class="fa fa-plus-circle"></i> Добавить категорию</a>    

<? if(count($categories)): 
	foreach($categories as $category): ?>
		<tr id="item-<? echo $category->id; ?>">
			<td><center><a style="color: #000;text-decoration: none;" href="/admin/categories/edit/<? echo $category->id; ?>"><? echo $category->id; ?></a></center></td>
			<td><center><a style="color: #000;text-decoration: none;" href="/admin/categories/edit/<? echo $category->id; ?>"><? echo $category->sort; ?></a></center></td>
			<td><center><a style="color: #000;text-decoration: none;" href="/admin/categories/edit/<? echo $category->id; ?>"><? echo $category->title; ?></a></center></td>
			<td><center>
			<a href="/admin/categories/edit/<? echo $category->id; ?>" class="  light-blue lighten-2 waves-effect waves-light btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></center></td>
			
			<td><center><a href="/admin/categories/delete/<? echo $category->id; ?>" class=" red darken-1 waves-effect waves-light btn"><i class="fa fa-times" aria-hidden="true"></i></a></center></td></center></td>
	
			
		</tr>
	<? endforeach; ?>
<? else: ?>
	<tr>
		<td colspan="4" align='center'>Категории отсутствуют</td>
	</tr>
<? endif; ?>
	</tbody>
</table></div></div></div>