<?php
class design extends Admin_Controller {
	function __Construct() {
        parent::__construct();
		$this->load->model('sitedesign');
    }
	public function index()
	{
	
		if ($this->input->post('submit'))
		{

		
				$rules = $this->sitedesign->rules;
				$this->form_validation->set_rules($rules);

				if($this->form_validation->run() == TRUE)
				 {

				 	$data = $this->sitedesign->array_from_post(array('sitefon','site_name','sitedescription','metadescr','sitendfon','site_tptovar','site_logo','site_flogo','site_kvbloga','site_pinfo','site_counters','site_blogsp','vptsite','site_infokontakt','slide1','slide2','photoverbloka','photomenu','photokatalog','wmidb','skype','vkid','skod','jivoid','slide3','wmid_n','vkidc','templates'));
						
					$this->sitedesign->update_config($data);
					$this->data['ok'] = TRUE;
					redirect('admin/design');

					}
		
		}

		$this->data['subview'] = 'admin/design';
		$this->load->view('admin/layout_main',$this->data);
	
		
	}


		
	}              
	
?>