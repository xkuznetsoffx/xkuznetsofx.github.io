<?php
class order_model extends MY_Model {
	protected $table_name = 'orders';
	protected $order_by = 'id desc';
	protected $timestamps = FALSE;
	public $rules = array(
               array(
                     'field'   => 'email', 
                     'label'   => 'Email', 
                     'rules'   => 'trim|required|valid_email|xss_clean'
                  ),
               array(
                     'field'   => 'count', 
                     'label'   => '���-��', 
                     'rules'   => 'trim|required|integer|xss_clean'
                  ),
               array(
                     'field'   => 'type', 
                     'label'   => '�����', 
                     'rules'   => 'trim|required|integer|xss_clean'
                  ),   
               array(
                     'field'   => 'fund', 
                     'label'   => '����� ������', 
                     'rules'   => 'trim|required|integer|xss_clean'
                  )
            );
			
}
?>