<?php
class bloks extends Admin_Controller {
	function __Construct() {
        parent::__construct();
		$this->load->model('sitebloks');
    }
	public function index()
	{
	
		if ($this->input->post('submit'))
		{

		
				$rules = $this->sitebloks->rules;
				$this->form_validation->set_rules($rules);

				if($this->form_validation->run() == TRUE)
				 {

				 	$data = $this->sitebloks->array_from_post(array('stblok','mpblok','ppblok','kblok','pplimit','ppcolor','vkblok','rhid','rhlogin','htmlkod'));
						
					$this->sitebloks->update_config($data);
					$this->data['ok'] = TRUE;
					redirect('admin/bloks');

					}
		
		}

		$this->data['subview'] = 'admin/bloks';
		$this->load->view('admin/layout_main',$this->data);
	
		
	}


		
	}              
	
?>