<?php
class order_end extends FE_Controller {
	function __Construct() {
        parent::__construct();
    }
	public function index($id=NULL)
	{
		
       $this->data['subview'] = 'order_end';
		$this->load->view('main_layout',$this->data);
		
	}
	
}
?>
