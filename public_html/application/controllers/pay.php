<?php
class pay extends FE_Controller {
	function __Construct() {
        parent::__construct();
    }
	public function index($id=NULL)
	{
		
       $this->data['subview'] = 'pay';
		$this->load->view('main_layout',$this->data);
		
	}
	
}
?>