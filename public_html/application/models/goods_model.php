<?php
class goods_model extends MY_Model {
	protected $table_name = 'goods';
	protected $order_by = 'rank asc';
	protected $timestamps = FALSE;
	public $rules = array(
	'name' => array('field' => 'name', 'label' => 'Название', 'rules' => 'trim|required|max_length[100]|xss_clean'),
	'category' => array('field' => 'category', 'label' => 'Категория', 'rules' => 'trim|integer'),
	'onmain' => array('field' => 'onmainy', 'label' => 'На главной', 'rules' => 'trim|integer'),
	'descr' => array('field' => 'descr', 'label' => 'Описание', 'rules' => 'trim|required'),
	'iconurl' => array('field' => 'iconurl', 'label' => 'Иконка (URL)', 'rules' => 'trim|valid_url'),
	'price_rub' => array('field' => 'price_rub', 'label' => 'Цена (Рубли)', 'rules' => 'trim|required|greater_than[0]|xss_clean'),
	'type_Item' => array('field' => 'type_Item', 'label' => 'Тип товара', 'rules' => 'trim'),
	'skidka' => array('field' => 'skidka', 'label' => 'Скидка', 'rules' => 'trim|required|xss_clean'),
	'janr' => array('field' => 'janr', 'label' => 'Жанр', 'rules' => 'trim'),
	'min_order' => array('field' => 'min_order', 'label' => 'Мин. кол-во для заказа', 'rules' => 'trim|required|greater_than[0]|xss_clean'),
	'sell_method' => array('field' => 'sell_method', 'label' => 'Метод продажи', 'rules' => 'integer|trim|required|xss_clean'),
	'goods' => array('field' => 'goods', 'label' => 'Товар', 'rules' => 'trim'),
	);
	
	public function get_new() {
		$goods = new stdClass();
		$goods->category = '0';
		$goods->name = '';
		$goods->onmain = '0';
                $goods->type_Item = '0';
		$goods->skidka = '0';
                $goods->janr = '0';
                $goods->yazuk = '0';
                $goods->platforma = '0';
                $goods->mylytplayeer = '0';
                $goods->relyz = 'KYKY';
                $goods->izdatel = 'KYKY';
                $goods->atkiv = '0';
		$goods->descr = '';
		$goods->iconurl = '';
		$goods->price_rub = '';
		$goods->min_order = '';
		$goods->sell_method = '0';
		$goods->goods = '';
		return $goods;
	}

}
?>