 <script src="http://storage.googleapis.com/code.getmdl.io/1.0.5/material.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<? echo $modals; ?>
  <div class="modal fade" id="paymodal" style="display:none">
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
<style>
.demo-card-image.mdl-card {
    width: 100%;
    height: 282px;
  background: url('<? echo $item->iconurl; ?>') center / cover;
}
.demo-card-image > .mdl-card__actions {
  height: 52px;
  padding: 16px;
  background: rgba(0, 0, 0, 0.59);
}
.demo-card-image__filename {
  color: #fff;
  font-size: 14px;
  font-weight: 500;
}
.bb {
    background: white;
    border: 0px;
}
.bb:hover {
    background: rgba(0, 188, 212, 0.32);
    border: 0px;
}
</style>

<aside id="example" class="modal">
  <div  >   
  <div class="mdl-card__media mdl-color-text--grey-50" style="background: url(http://eugenelapitsky.com/wp-content/uploads/2016/05/FONEL2.png) #FCAC0A; height: 86px;">
              <center><h3 style=" padding: 24px; ">Покупка товара</h3></center>
            </div>
  <center>
  <div  style="background: white;padding: 28px;" >          
     <h5 style=" margin-top: -3px; ">1.Введите свои данные</h5>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name="count"  id="end-number">
    <label class="mdl-textfield__label" for="sample3">Кол-во</label>
  </div>
     <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="email" onInput="checkEmail();" id="alert-box-email">
    <label class="mdl-textfield__label" for="sample3">Email</label>
  </div>
       <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" id="cupon" name="cupon" type="text">
    <label class="mdl-textfield__label" for="sample3">Купон</label>
  </div>
<h5 style=" margin-top: -3px; ">2. Выберете способ оплаты </h5>
<center><?php
if(1 == config_item('site_pwebmoney')){
echo '
<button onclick="setWayForMoney(1);setEmail();" id="setEmailButton" type="button" class="bb"><img src="/img/wmr.png" style="cursor: pointer; height:45px;"></button>';
}
?>
<?php
if(1 == config_item('site_pqiwi')){
echo '<button onclick="setWayForMoney(4);setEmail();" id="setEmailButton" type="button"  class="bb"><img src="http://i.imgur.com/RkZSEtW.png" style="cursor: pointer; height:45px;"></button>';
}
?>
<?php
if(1 == config_item('site_pyandex')){
echo '<button onclick="setWayForMoney(3);setEmail();" id="setEmailButton" type="button" class="bb"><img src="https://travel.ubrr.ru/content/images/brands/yandex-money.png" style="cursor: pointer; height:45px;"></button>';
}
?>


</center>
</div>  
 </center>     </div>
</aside>





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
  width: 100%;
  height: 280px;
  background: rgba(255, 172, 0, 0.81);
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
  <div class="mdl-card__title mdl-card--expand" style=" background: url(http://eugenelapitsky.com/wp-content/uploads/2016/05/FONEL2.png); ">
   <div style=" margin-top: -16px; "> <h4><? echo $item->name; ?></h4>
	В наличии : <? echo $item->count; ?><br>
	Мин продажа: <? echo $item->min_order ; ?><br>
	Категория : <? $b = mysql_query("SELECT * FROM categories where id =".$item->category.""); $c = mysql_fetch_array($b); echo $c["title"]; ?><br>
</div>
  </div>
  <div class="mdl-card__actions mdl-card--border" style=" background-color: #37474F; ">
    <a  href="#example"   class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect trigger-button" style=" background: #00BCD4; color: white; ">
      Купить
    </a>
    <div class="mdl-layout-spacer"></div>
	<p style="font-size: 17px; margin-top: 13px;" >Цена: </p> <? echo round($item->price_final*100)/100;?>   <i class="fa fa-rub" style=" margin-left: 5px; "></i> 
  </div>
</div>
</div>
<div style="  padding: 10px;
  background: rgba(67, 71, 73, 1);
  border-radius: 3px;
  color: #fff;" class="mdl-cell mdl-cell--12-col">
<?php echo $item->descr;  ?>
</div>

<br>
<center>

</center>



  
<? endforeach; ?>
<? else: ?>
	Товар не найден...Приходите позже!
<? endif; ?>
<? if(count($items)) : ?>
<div class="panel" style="display:none" >
	<div class="row">
	<div class="col-lg-2">
			<label class="control-label" for="count">Кол-во:
			</label>
			<input type="text" class="form-control input-small" name="count" id="end-number" value="1" />
		</div>
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
			<label class="control-label" for="email">E-mail:
			</label>
			<input onchange="var time = Math.round(new Date().getTime() / 1000); setCookie('lastEmail',this.value,{expires: time + 262800, path: '/'});" type="email" class="form-control input-small" name="email" id="row-box-email" />
		</div>
	  <div class="col-lg-2">
		<button onclick="sendData();" type="button" class="btn btnbuy btn-primary btn-lg btn-block">Оплатить</button>
	  </div>
	</div>
</div>
<? endif; ?>