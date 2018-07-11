<?php
class FE_Controller extends MY_Controller {
	function __Construct() {
        parent::__construct();
		$this->load->model('page_model');
		$this->load->model('categories_model');
		$this->load->model('security_model');

		$ips=$this->security_model->get_nested();

		$excp_uris = array('blocked');
		if(in_array(uri_string(), $excp_uris) == FALSE) { 
			if(in_array($this->input->ip_address(), $ips)) {
				redirect('blocked');
			}
		}
		
		$this->data['categories']=$this->categories_model->get();
		$this->data['menu'] = $this->page_model->get_nested();
    }
}
?>