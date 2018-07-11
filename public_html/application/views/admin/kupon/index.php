	<head>
	   <nav class="top-nav" style="
    margin-top: -22px;
">
        <div class="container">
          <div class="nav-wrapper"><a class="page-title">Купоны</a></div>
        </div>
      </nav>
	  </head>
<div class="container">
  <div class="row">

    <div class="col s12 m9 l10">

<div class="clearfix"></div>
<table class="striped centered">
	<thead>
		<th>Купон</th>
                <th>Скидка</th>
		<th>Изменить</th>
		<th>Удалить</th>
	</thead>
	<tbody>
		<a href="<? echo site_url('/admin/kupon/edit'); ?>" class="pull-right btn btn-small btn-primary" style="margin-top: 23px;"><i class="fa fa-plus-circle"></i> Создать купон</a>    

<? if(count($kupons)): foreach($kupons as $kupon): ?>
		<tr>
			<td><? echo anchor('admin/kupon/edit/'.$kupon->id, $kupon->kupon_name); ?></td>
                        <td><? echo anchor('admin/kupon/edit/'.$kupon->id, $kupon->percentage); ?></td>
		<td>
<a href="/admin/kupon/edit/<? echo $kupon->id; ?>" class="  light-blue lighten-2 waves-effect waves-light btn">
<i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></center></td>
			
<td><center><a href="/admin/kupon/delete/<? echo $kupon->id; ?>" class=" red darken-1 waves-effect waves-light btn"><i class="fa fa-times" aria-hidden="true"></i></a></center></td></center></td>
	
		</tr>
<? endforeach; ?>
<? else: ?>
	<tr>
		<td colspan="3">Вы ещё не создавали купонов!</td>
	</tr>
<? endif; ?>
	</tbody>
</table> </div> </div> </div>