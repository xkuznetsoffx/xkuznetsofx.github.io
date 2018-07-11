	<head>
	   <nav class="top-nav" style="
    margin-top: -22px;
">
        <div class="container">
          <div class="nav-wrapper"><a class="page-title">Товары</a></div>
        </div>
      </nav>
	  </head>
<div class="container">
  <div class="row">

    <div class="col s12 m9 l10">


	<table class="striped centered">
	<thead>
		<th>ID</th>
		<th>Название</th>
		<th>Кол-во</th>
		<th>Цена</th>
		<th>Изменить</th>
		<th>Удалить</th>
	</thead>
	<tbody>
	<a href="<? echo site_url('/admin/goods/edit'); ?>" class="pull-right btn btn-small btn-primary" style="margin-top: 23px;"><i class="fa fa-plus-circle"></i> Добавить товар</a>    
<? if(count($goods)): foreach($goods as $good): ?>
		<tr draggable="true" style="opacity: 1;" id="item-<? echo $good->id; ?>">
			<td><center><a style="color: #000;text-decoration: none;" href="/admin/goods/edit/<? echo $good->id; ?>"><span class="label label-default"><? echo $good->id; ?></span></a></center></td>
			<td><center><a style="color: #000;text-decoration: none;" href="/admin/goods/edit/<? echo $good->id; ?>"><span class="label label-primary"><? echo $good->name; ?></span></a></center></td>
			<td><center><a style="color: #000;text-decoration: none;" href="/admin/goods/edit/<? echo $good->id; ?>"><span class="label label-success"><? echo $good->count; ?></span></a></center></td>
			<td><center><? echo $good->price_rub * $good->min_order ?> Руб за <span class="label label-info"><? echo $good->min_order ?></span> шт</center></td>
			<td><center>
			<a href="/admin/goods/edit/<? echo $good->id; ?>" class="  light-blue lighten-2 waves-effect waves-light btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></center></td>
			
			<td><center><a href="/admin/goods/delete/<? echo $good->id; ?>" class=" red darken-1 waves-effect waves-light btn"><i class="fa fa-times" aria-hidden="true"></i></a></center></td></center></td>
		</tr>
<? endforeach; ?>
<? else: ?>
	<tr>
		<td colspan="3">Товары отсутствуют</td>
	</tr>
<? endif; ?>
	</tbody>
</table>  
	
    </div>

    

  </div>
</div>
	  
     
