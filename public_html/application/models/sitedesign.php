<?php
class sitedesign extends MY_Model {
	public $rules = array(
		'sitefon' => array('field' => 'sitefon', 'label' => 'Картинка на фон', 'rules' => 'trim'),
                'sitendfon' => array('field' => 'sitendfon', 'label' => 'Картинка над фоном', 'rules' => 'trim'),
		'slide1' => array('field' => 'sitefon', 'label' => 'Картинка на фон', 'rules' => 'trim'),
		'slide2' => array('field' => 'sitefon', 'label' => 'Картинка на фон', 'rules' => 'trim'),
		'slide3' => array('field' => 'sitefon', 'label' => 'Картинка на фон', 'rules' => 'trim'),
                'site_tptovar' => array('field' => 'site_tptovar', 'label' => 'Тип вид товара', 'rules' => 'trim'),
		'site_logo' => array('field' => 'site_logo', 'label' => 'Логотип', 'rules' => 'trim'),
		'site_kvbloga' => array('field' => 'site_kvbloga', 'label' => 'Код верхнего блока', 'rules' => 'trim'),
		'site_pinfo' => array('field' => 'site_pinfo', 'label' => 'Информация под товарами', 'rules' => 'trim'),
		'site_counters' => array('field' => 'site_counters', 'label' => 'Счётчики сайта', 'rules' => 'trim'),
		'site_blogsp' => array('field' => 'site_blogsp', 'label' => 'Блок с права', 'rules' => 'trim'),
                'vptsite' => array('field' => 'vptsite', 'label' => 'Выбор показа товара', 'rules' => 'trim'),
                'site_infokontakt' => array('field' => 'site_infokontakt', 'label' => 'Контакты', 'rules' => 'trim'),
	);
 public function __construct()
 {
  parent::__construct();
 }
 public function get_all()
 {
  return $this->db->get();
 }
 public function update_config($data)
 {
  $success = '0';
  foreach($data as $key=>$value)
  {
   if(!$this->save($key,$value))
   {
    $success='1';
    break;  
   }
  }
  return $success;
 }
 public function save($key,$value)
 {
  $config_data=array(
    'key'=>$key,
    'value'=>$value
    );
  $this->db->where('key', $key);
  return $this->db->update('config_data',$config_data); 
 }
}
?>