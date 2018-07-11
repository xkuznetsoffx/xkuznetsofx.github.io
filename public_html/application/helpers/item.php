 <script src="http://storage.googleapis.com/code.getmdl.io/1.0.5/material.min.js"></script>
 
<? echo $modals; ?>
  <div class="modal fade" id="paymodal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
        <table style="width: auto; margin: auto; height: auto;" class="paytable">
		  <tr>
			  <td style="width: 258px;border: 2px solid #000000;">Товар:</td>
			  <td style="border: 2px solid #000000;" class="payitem">...</td>
		  </tr>
		  <tr>
			  <td style="width: 258px;border: 2px solid #000000;">Кол-во:</td>
			  <td style="border: 2px solid #000000;" class="paycount">...</td>
		  </tr>
		  <tr>
			  <td style="width: 258px;border: 2px solid #000000;">К оплате:</td>
			  <td style="border: 2px solid #000000;" class="payprice">...</td>
		  </tr>
		  <tr>
			  <td style="width: 258px;border: 2px solid #000000;">Ваша скидка:</td>
			  <td style="border: 2px solid #000000;" class="paypercentage">...</td>
		  </tr>
		  <tr>
			  <td style="width: 258px;border: 2px solid #000000;">Кошелек для платежа:</td>
			  <td style="border: 2px solid #000000;" id="copyfund" class="payfund">...</td>
		  </tr>
		  <tr>
			  <td style="width: 258px;border: 2px solid #000000;">Примечание к платежу:</td>
			  <td style="border: 2px solid #000000;"id="copybill" class="paybill">...</td>
		  </tr>
		</table>
        </div>
		<div style="padding-left: 72px; padding-right: 72px;" class="alert alert-danger">
			<strong>Обязательно</strong> переводите деньги именно с таким примечанием!
		</div>
        <div class="payfoot modal-footer">
          <button type="button" onclick="" data-loading-text="Проверяем..." class="checkpaybtn btn btn-primary">Проверить</button>
        </div>
      </div>
    </div>
  </div>

<? if(count($items)): foreach($items as $item): ?>

  <link rel="stylesheet" href="http://www.cssscript.com/demo/basic-vanilla-javascript-modal-with-css3-animation-vanillamodal-js/css/vanillaModal.css">
  <script src="http://www.cssscript.com/demo/basic-vanilla-javascript-modal-with-css3-animation-vanillamodal-js/js/vanillaModal.js" type="text/javascript" charset="utf-8"></script>
  <style>
  #content
{
    display: none;
}
.demo-card-image.mdl-card {
    width: 100%;
    height: 282px;
  background: url('<? echo $item->iconurl; ?>') center / cover;
}
.demo-card-image > .mdl-card__actions {
  height: 52px;
  padding: 16px;
  background: rgba(0, 0, 0, 0.2);
}
.demo-card-image__filename {
  color: #fff;
  font-size: 14px;
  font-weight: 500;
}
</style>
<div class="mdl-cell mdl-cell--6-col">
<div class="demo-card-image mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand"></div>
  <div class="mdl-card__actions">
    <span class="demo-card-image__filename"><? echo $item->name; ?></span>
  </div>
</div>
</div>
<div class="mdl-cell mdl-cell--6-col">

<!-- Event card -->
<style>
.demo-card-event.mdl-card {
  height: 280px;
  background: #3E4EB8;
}
.demo-card-event > .mdl-card__actions {
  border-color: rgba(255, 255, 255, 0.2);
}
.demo-card-event > .mdl-card__title {
  align-items: flex-start;
}
.demo-card-event > .mdl-card__title > h4 {
  margin-top: 0;
}
.demo-card-event > .mdl-card__actions {
  display: flex;
  box-sizing:border-box;
  align-items: center;
}
.demo-card-event > .mdl-card__title,
.demo-card-event > .mdl-card__actions,
.demo-card-event > .mdl-card__actions > .mdl-button {
  color: #fff;
}

</style>

<div class="demo-card-event mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand" style=" background-color: rgb(38, 50, 56); ">
   <div style=" margin-top: -16px; "> <h4><? echo $item->name; ?></h4>
	В наличии : <? echo $item->count; ?><br>
	Мин продажа: <? echo $item->min_order ; ?><br>
	Категория : <? $b = mysql_query("SELECT * FROM categories where id =".$item->category.""); $c = mysql_fetch_array($b); echo $c["title"]; ?><br>
</div>
  </div>
  <div class="mdl-card__actions mdl-card--border" style=" background-color: #37474F; ">
    <button type="button" id="trigger"  class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect trigger-button" style=" background: #00BCD4; color: white; ">
      Купить
    </button>
    <div id="content">
       <div class="modal-content">
      <h4>Выберите способ оплаты</h4>
      <p>
	  
	         <div class="input-field col s6">
          <input  name="count"  id="end-number" type="text" class="validate">
          <label>Кол-во</label>
        </div>
		       <div class="input-field col s6">
          <input type="email" onInput="checkEmail();" id="alert-box-email" type="text" class="validate">
          <label>email</label>
        </div>
		       <div class="input-field col s6">
          <input id="cupon" name="cupon" type="text" class="validate">
          <label>купон</label>
        </div>
		

	 
				<center><?php
if(1 == config_item('site_pwebmoney')){
echo '
<button onclick="setWayForMoney(1);setEmail();" id="setEmailButton" data-dismiss="modal" aria-hidden="true" data-toggle="modal" type="button" class="waves-effect waves-light btn-large"><img src="/img/wmr.png" style="height:45px;"></button>';
}
else{
}
?>

<?php
if(1 == config_item('site_pqiwi')){
echo '<button onclick="setWayForMoney(4);setEmail();" id="setEmailButton" data-dismiss="modal" aria-hidden="true" data-toggle="modal" type="button" class="waves-effect waves-light btn-large"><img src="/img/qw.png" style="height:45px;"></button>';
}
else{
}
?>

<?php
if(1 == config_item('site_pyandex')){
echo '<button onclick="setWayForMoney(3);setEmail();" id="setEmailButton" data-dismiss="modal" aria-hidden="true" data-toggle="modal" type="button" class="waves-effect waves-light btn-large"><img src="/img/ya.png" style="height:45px;"></button>';

}
?>


</center>
</div>
    </div>

    <script type="text/javascript">
        var myContent = document.getElementById('content');

        var myModal = new Modal({
          content: myContent,
        });

        var triggerButton = document.getElementById('trigger');

        triggerButton.addEventListener('click', function() {
          myModal.open();
        });
    </script>
    <div class="mdl-layout-spacer"></div>
   <? echo round($item->price_final*100)/100;?>   <i class="fa fa-rub" style=" margin-left: 5px; "></i> 
  </div>
</div>


</div>
<div class="mdl-cell mdl-cell--12-col">
<?php echo $item->descr;  ?>
</div>

<? endforeach; ?>
<? else: ?>
	Товар не найден...Приходите позже!
<? endif; ?>
</div>
</table>
<? if(count($items)) : ?>
<div class="panel" style="display:none;">
	<div class="row">
	  <div class="col-lg-3">
		<label class="control-label" for="item">Товар:</label>
		<select class="form-controler input-small" name="item" id="item-selected">
		<? foreach($items as $item): ?>
			<option value="<? echo $item->id; ?>" data-id="<? echo $item->id; ?>" data-min_order="<? echo $item->min_order; ?>"><? echo $item->name; ?></option>
		<? endforeach; ?>
		</select>
	  </div>
	  <div class="col-lg-2">
		<label class="control-label" for="funds">Валюта:</label>
		<select class="form-controler input-small"  name="funds" id="fundsSelect">
			<? foreach($funds as $fund): ?>
			<option value="<? echo $fund['fundid']; ?>" data-fund="<? echo $fund['fundname']; ?>"><? echo $fund['fundname']; ?></option>
			<? endforeach; ?>
		</select>
	  </div>
	  <div class="col-lg-3">
		<label class="control-label" for="email">E-mail:</label>
		<input type="email" value="tester@mail.ru"  id="row-box-email" class="form-controler input-small" name="email">
	  </div>
	  <div class="col-lg-2">
		<button onclick="sendData();" type="button" class="btn btnbuy btn-primary btn-lg btn-block">Оплатить</button>
	  </div>
	</div>
</div>
<? endif; ?>
<div id="modal<? echo $item->id;?>" class="modal">
   
				</div>
	  </p>
    </div>
 
  </div>
	 