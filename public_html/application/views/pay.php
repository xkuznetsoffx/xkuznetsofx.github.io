 <? $query = mysql_query("SELECT * FROM `orders` WHERE `bill` = '".$_GET['bill']."'");
       $order = mysql_fetch_assoc($query);
       if($order['fund'] == 'WMR') {
       	$payment = $fund = $this->config->item('WMR');
       }
       elseif($order['fund'] == 'WMZ') {
       	$payment = $fund = $this->config->item('WMZ');
       }
       elseif($order['fund'] == 'QIWI') {
       	$payment = '+'.$fund = $this->config->item('qiwi_num').'';
       }
       elseif($order['fund'] == 'YAD') {
       	$payment = $fund = $this->config->item('yad_wallet');
       }
       else {
       	$payment = 'UnitPay';
       }       ?>
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<script src="http://clipboardjs.com/dist/clipboard.min.js"></script>
<script src="http://clipboardjs.com/assets/scripts/demos.js"></script>
<style>
.mdl-layout__content {}
.is-casting-shadow {display:none}
</style>
<div style=" z-index: 10000;  margin-left: -750px;  margin-top: -100px;  width: 1700px;  padding: 0px 0px 0px 0px;">
<div class="mdl-card__media mdl-color-text--grey-50" style=" height: 86px;">
              <h3 style=" padding: 24px; ">Оплата товара <?=$order['name'];?></h3>
            </div>
<div  style="padding: 33px;background: white; ">
<table class="table">
<tr><td>Выбранный метод оплаты:</td><td><input disabled value="<?=$order['fund'];?>" id="disabled" type="text" class="validate"></td></tr>
<tr><td>Кошелек оплаты:</td><td><input disabled value="<?=$payment;?>" id="kot" type="text" class="validate">
<button class="mdl-button" data-clipboard-demo="" data-clipboard-action="copy" data-clipboard-text="<?=$payment;?>">Скопировать</button>
</td></tr>
<tr><td>Сумма к оплате:</td><td><input disabled value="<?=$order['price'];?> Руб" id="disabled" type="text" class="validate"></td></tr>
<tr><td>Примечание к оплате:</td><td><input disabled value="<?=$order['bill'];?>" id="disabled" type="text" class="validate">
<button class="mdl-button" data-clipboard-demo="" data-clipboard-action="copy" data-clipboard-text="<?=$order['bill'];?>">Скопировать</button>
</td></tr>
<table>
<? if($order['fund'] == 'UnitPay') {
echo '<a href="https://unitpay.ru/pay/'.$this->config->item('unitpay_address').'?sum='.$order['price'].'&account='.$order['id'].'&desc=Оплата платежа '.$order['name'].'">
<button style="padding-top: 0px; padding-left: 30px; padding-right: 30px; margin-top: 10px; border-bottom-width: 2px; height: 40px; width: 140px;">Оплатить</button></a>';
}
else {
echo '<form style="background: #0DFF75;" method="POST" name="ipaid">
<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit" style="margin-left: 31%;width: 40%;" name="ipaid"><i class="mdi-file-cloud left"></i>Проверить оплату</button>
</form>';
}
?>
<? if(isset($_POST['ipaid'])) {
   echo '<script>location.replace("/search1/?bill='.$order['bill'].'");</script>';
}
?>
</div></div>