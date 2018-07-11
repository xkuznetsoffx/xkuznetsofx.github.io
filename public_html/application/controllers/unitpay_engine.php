<?php
class unitpay_engine extends FE_Controller {
	function __Construct() {
        parent::__construct();
    }
	public function index($id=NULL)
	{
		
       //BY PAGO 
$params = $_GET['params'];
//забрали данные, теперь проверяем стоимость товара
$query = mysql_query("SELECT * FROM `orders` WHERE `id` = '".$params['account']."'");
$order = mysql_fetch_assoc($query);
if(!empty($params['sum'])) {
if($params['sum'] == $order['price']){
		echo '{"result": {"message":"Запрос успешно обработан"}}';
		$query = mysql_query("UPDATE `orders` SET `goods` = '".$params['unitpayId']."' WHERE `id` = '".$order['id']."'");
	}
	else {
		echo '{"error": {"code": -32000, "message": "Разная сумма"}}';
	}
}
	else {
		echo '{"result": {"message":"Запрос успешно обработан"}}';
	}
		
	}
	
}
?>