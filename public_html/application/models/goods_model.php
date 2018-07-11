<?php
class goods_model extends MY_Model {
	protected $table_name = 'goods';
	protected $order_by = 'rank asc';
	protected $timestamps = FALSE;
	public $rules = array(
	'name' => array('field' => 'name', 'label' => '��������', 'rules' => 'trim|required|max_length[100]|xss_clean'),
	'category' => array('field' => 'category', 'label' => '���������', 'rules' => 'trim|integer'),
	'onmain' => array('field' => 'onmainy', 'label' => '�� �������', 'rules' => 'trim|integer'),
	'descr' => array('field' => 'descr', 'label' => '��������', 'rules' => 'trim|required'),
	'iconurl' => array('field' => 'iconurl', 'label' => '������ (URL)', 'rules' => 'trim|valid_url'),
	'price_rub' => array('field' => 'price_rub', 'label' => '���� (�����)', 'rules' => 'trim|required|greater_than[0]|xss_clean'),
	'type_Item' => array('field' => 'type_Item', 'label' => '��� ������', 'rules' => 'trim'),
	'skidka' => array('field' => 'skidka', 'label' => '������', 'rules' => 'trim|required|xss_clean'),
	'janr' => array('field' => 'janr', 'label' => '����', 'rules' => 'trim'),
	'min_order' => array('field' => 'min_order', 'label' => '���. ���-�� ��� ������', 'rules' => 'trim|required|greater_than[0]|xss_clean'),
	'sell_method' => array('field' => 'sell_method', 'label' => '����� �������', 'rules' => 'integer|trim|required|xss_clean'),
	'goods' => array('field' => 'goods', 'label' => '�����', 'rules' => 'trim'),
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