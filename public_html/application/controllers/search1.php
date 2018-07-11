<?php
error_reporting(0);
class search1 extends FE_Controller {
	function __Construct() {
        parent::__construct();
		$this->load->model('order_model');
		$this->load->model('goods_model');
    }
	public function index()
	{
		$rules = $this->order_model->rules;
		$this->form_validation->set_rules($rules);
		$querybla = mysql_query("SELECT * FROM `orders` WHERE `bill` = '".$_GET['bill']."'");
		$orderbla = mysql_fetch_assoc($querybla);
		$_GET['fund'] = $orderbla['fund'];
		$_GET['id'] = $orderbla['id'];
		$_GET['note'] = $orderbla['bill'];
		$_GET['item_id'] = $orderbla['item_id'];
		$_GET['price_end'] = $orderbla['price'];
		$_GET['email'] = $orderbla['email'];
		$_GET['sell_method'] = $orderbla['sell_method'];
		if ($orderbla['paid'] != 1) {
			error_reporting(0);
			
			
			if('WMR' == $_GET['fund']) {
			$data['fund'] = 1;
			}
			if('WMZ' == $_GET['fund']) {
			$data['fund'] = 2;
			}
			if('WMU' == $_GET['fund']) {
			$data['fund'] = 5;
			}
			if('WME' == $_GET['fund']) {
			$data['fund'] = 6;
			}
			if('QIWI' == $_GET['fund']) {
			$data['fund'] = 4;
			}
			if('YAD' == $_GET['fund']) {
			$data['fund'] = 3;
			}
			if('UnitPay' == $_GET['fund']) {
			$data['fund'] = 7;
			}
			
			$item->goods = "";
			
			
		//Проверка метода оплаты
		
		
				if($data['fund'] == 1)
			{
				$pay = 'WMR';
				$fund = $this->config->item('WMR');
				if($_GET['sell_method'] == 0 or $_GET['sell_method'] == 1)
$price = ($_GET['count']) * $_GET['price_end'];
			}
			elseif($data['fund'] == 2)
			{
				$pay = 'WMZ';
				$fund = $this->config->item('WMZ');
				if($_GET['sell_method'] == 0 or $_GET['sell_method'] == 1)
$price = ($_GET['count']) * $_GET['price_end'];
			}
			elseif($data['fund'] == 3)
			{
				$pay = 'YAD';
				$fund = $this->config->item('yad_wallet');
				if($_GET['sell_method'] == 0 or $_GET['sell_method'] == 1)
$price = ($_GET['count']) * $_GET['price_end'];
			}
			elseif($data['fund'] == 4)
			{
				$pay = 'QIWI';
				$fund = $this->config->item('qiwi_num');
				if($_GET['sell_method'] == 0 or $_GET['sell_method'] == 1)
$price = ($_GET['count']) * $_GET['price_end'];
			}
			elseif($data['fund'] == 5)
			{
				$pay = 'WMU';
				$fund = $this->config->item('WMU');
				if($_GET['sell_method'] == 0 or $_GET['sell_method'] == 1)
$price = ($_GET['count']) * $_GET['price_end'];
			}
			elseif($data['fund'] == 6)
			{
				$pay = 'WME';
				$fund = $this->config->item('WME');
				if($_GET['sell_method'] == 0 or $_GET['sell_method'] == 1)
$price = ($_GET['count']) * $_GET['price_end'];
			}
			elseif($data['fund'] == 7)
			{
				$pay = 'UnitPay';
				if($_GET['sell_method'] == 0 or $_GET['sell_method'] == 1)
$price = ($_GET['count']) * $_GET['price_end'];
			}
				
			$rand = $_GET['note'];
			if($data['fund'] == 1 or $data['fund'] == 2  or $data['fund'] == 5 or $data['fund'] == 6 )
			{
				$this->load->helper('wm_helper');
				$wmid = $this->config->item('wmid');
				$wm_pass = $this->encrypt->decode($this->config->item('wm_pass'));
				$wmk_file = unserialize($this->encrypt->decode($this->config->item('wmk_file')));
				$wmk_file = $wmk_file['name'];
				$wmk_path = './assets/uploads/'.preg_replace('/[^\p{L}\p{N}\s]/u','', md5(config_item('encryption_key').site_url())).'/'.$wmk_file;
				checkwm($wmid,$wm_pass,$wmk_path,$fund);
			}
			elseif($data['fund'] == 3)
			{
				$this->load->helper('yad_helper');
				$clid = config_item('yad_client_id');
				$token = config_item('yad_token');
				check_yad($clid,$token);
			}
			elseif($data['fund'] == 4)
			{
				$this->load->helper('qiwi_helper');
				$qiwi_num = config_item('qiwi_num');
				$qiwi_pass = $this->encrypt->decode(config_item('qiwi_pass'));
				check_qiwi($qiwi_num,$qiwi_pass);
			}
			$query = mysql_query("SELECT * FROM `orders` WHERE `bill` = '".$_GET['note']."'");
					while ($arr = mysql_fetch_array($query)) {
					$item->name = $arr['name'];
					$price_end = $arr['price'];
					$order_b = $arr['status'];
					}
					$query = mysql_query("SELECT * FROM `goods` WHERE `id` = '".$_GET['order_id']."'");
					while ($arrr = mysql_fetch_array($query)) {
					$item_goods = $item->goods;
					}
					
			$order['email'] = $_GET['email'];
			$order['bill'] = 'Oplata['.$rand.']';
			$order['name'] = $item->name;
			$order['email'] = $data['email'];
			$order['date'] = microtime(true);
			$order['item_id'] = $item->id; 
			$order['count'] = $_GET['count'];
			$order['price'] = $_GET['price_end'];
			$order['session_key'] = $this->session->userdata('session_id');
			$order['ip_address'] = $this->session->userdata('ip_address');
			$order['fund'] = $pay;
			$order['redeemed'] = FALSE;
			$order['paid'] = FALSE;
			
			if(1 == 1)
		{	
		
		$order->paid = FALSE;
			$resp['status'] = 'false';
			$ref_pr = config_item('referal_procent');
			$ref = ($price_end/100)*$ref_pr;
			$ref = round($ref,2);
			$retname = ''.$rand.'.txt';
			$savebill = $rand;
			$bill = $_GET['note'];
			$order = $this->order_model->get_by(array('bill' => $bill),TRUE);
			if(1 == 1) {
				$item = $this->goods_model->get($_GET['item_id']);
				if($_GET['status'] == 0) {
				
					$this->load->helper('wm_helper');
					$this->load->helper('yad_helper');
					$this->load->helper('qiwi_helper');
					$this->load->helper('download');
					if($_GET['status'] == 0 AND $order_b == 0) {
					
					  if($_GET['fund'] == "WMR" or $_GET['fund'] == "WMZ" or $_GET['fund'] == "WMU" or $_GET['fund'] == "WME")
						{
					
						$wmid = $this->config->item('wmid');
						$wm_pass = $this->encrypt->decode($this->config->item('wm_pass'));
						$wmk_file = unserialize($this->encrypt->decode($this->config->item('wmk_file')));
						$wmk_file = $wmk_file['name'];
						$wmk_path = './assets/uploads/'.preg_replace('/[^\p{L}\p{N}\s]/u','', md5(config_item('encryption_key').site_url())).'/'.$wmk_file;
						$price = $_GET['price_end'];
						if($_GET['fund'] == "WMR")
						{
							$fund = $this->config->item('WMR');
						}
						elseif($_GET['fund'] == "WMU")
						{
							$fund = $this->config->item('WMU');
						}
						elseif($_GET['fund'] == "WME")
						{
							$fund = $this->config->item('WME');
						}
						elseif($_GET['fund'] == "WMZ")
						{
							$fund = $this->config->item('WMZ');
						}
						else
						{
							return false;
						}					
						$chkpay = check_payment($wmid,$wm_pass,$fund,$wmk_path,$bill,$price);
						}
						elseif($order->fund == "YAD")
						{
							$clid = config_item('yad_client_id');
							$token = config_item('yad_token');
							$price = $_GET['price_end'];
							$chkpay = check_pay_yad($clid,$token,$bill,$price);
						}
						elseif($order->fund == "QIWI")
						{
							$qiwi_num = config_item('qiwi_num');
							$qiwi_pass = $this->encrypt->decode(config_item('qiwi_pass'));
							$price = $price_end;
							$chkpay = qiwi_pay($qiwi_num,$qiwi_pass,$bill,$price);
						}
						
						if($chkpay == TRUE OR $orderbla == $_GET['goods']) 
						{	
						
						
							if($_GET['sell_method'] == 0)
							{
							    
								$count = $order->count;
								$filename = preg_replace('/[^\p{L}\p{N}\s]/u','', md5(config_item('encryption_key').$item->name));
								$uppath = './assets/uploads/'.preg_replace('/[^\p{L}\p{N}\s]/u','', md5(config_item('encryption_key').$filename.$item->name)).'/';
								$goods = file($uppath.$filename);
								$paidgoods = implode(array_splice($goods, 0, $count));
								$goods = implode($goods);
								$smbill = md5(config_item('encryption_key').$savebill).'.txt';
								file_put_contents($uppath.$filename,$goods);
								file_put_contents('./assets/uploads/orders/'.$smbill,$paidgoods);
								$saveord['goods'] = $smbill;
								// записываем и создаем файл
                                $text = $paidgoods;
                                $fp = fopen("payorder/".$rand.".txt", "w");
                                fwrite($fp, $text);
                                fclose($fp);
                                echo "<script>location.replace('/views/?bill=".$_GET['bill']."&email=".$_GET['email']."');</script>";
								
							}
							elseif($_GET['sell_method'] == 1)
							{
								$uppath = './assets/uploads/'.preg_replace('/[^\p{L}\p{N}\s]/u','', md5(config_item('encryption_key').$item->goods.$item->name)).'/'.$item->goods;
								$retname = $item->goods;
								$paidgoods = file_get_contents($uppath);
                                 echo "<script>location.replace('/views/?bill=".$_GET['bill']."&email=".$_GET['email']."');</script>";
							}
							// next
							$okchk = 25;
							$saveord['paid'] = TRUE;
							$this->order_model->save($saveord,$_GET['order_id']);
							$resp['status'] = 'ok';
							$resp['chkurl'] = site_url('order/'.$savebill);
							$query = mysql_query("UPDATE `orders` SET `paid` = '1', `goods` = '".$rand."' WHERE `bill` = '".$_GET['note']."'"); 
							 
							$from = parse_url(site_url());
							$from = $from['host'];
							if(0 == $_GET['count']) {
							$count_goods = 'Файл';
							}
							else {
							$count_goods = $_GET['count'];
							}
							
							
								
								

								
						}
						else {
							$resp['status'] = 'false';
							echo "<script>location.replace('/pay/?bill=".$_GET['bill']."');</script>";
						}
					}
					elseif(25 == 25)
					{
					
						if($_GET['sell_method'] == 0)
						{
						
						}
						elseif($_GET['sell_method'] == 1) 
						{
							$uppath = './assets/uploads/'.preg_replace('/[^\p{L}\p{N}\s]/u','', md5(config_item('encryption_key').$item->goods.$item->name)).'/'.$item->goods;
							if (1 == 1) {
								force_download($item->goods, file_get_contents($uppath));
								
							}
						}						
						$resp['status'] = 'ok';
						$resp['chkurl'] = site_url('order/'.$savebill);
					}
					else
					{
						$resp['status'] = 'false';
					}
					
				}
			
			}
		}
		}
				
	}
	public function checkpay() {
		
	}
		
}
	
?>