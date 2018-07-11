<?php
class advertisement extends FE_Controller {
	function __Construct() {
        parent::__construct();
		$this->load->model('siteadv');
    }
	public function index()
	{
	

		}

                $this->data['subview'] = 'advertisement';
		$this->load->view('main_layout',$this->data);
	
		
	}


		
	}              
	
?>