<?php
class coments extends Admin_Controller {
	function __Construct() {
        parent::__construct();
		$this->load->model('sitesecurity');
		$this->load->model('coments_model');
    }
	public function index()
	{
	
		$this->data['coments'] = $this->coments_model->get_coments('products');
		$this->data['coments_count']=$this->coments_model->count;
        $this->data['pagination']=$this->coments_model->listing;

		$this->data['subview'] = 'admin/coments';
		$this->load->view('admin/layout_main',$this->data);
	}

	public function edit($id=NULL)
	{


		if($id) {
			$this->data['coment'] = $this->coments_model->get($id);
			count($this->data['coment']) || $this->data['errors'][] = 'Страница не найдена';
		}
		else {
			$this->data['coment'] = $this->security_model->get_new();
		}
		$rules = $this->coments_model->rules;
		$this->form_validation->set_rules($rules);
		
		if($this->form_validation->run() == TRUE) {
			$data = $this->coments_model->array_from_post(array('body','user_name','item'));
			$this->coments_model->save($data,$id);
			redirect('admin/coments');
		}
		
		
		$this->data['subview'] = 'admin/coments_blocking';
		$this->load->view('admin/layout_main',$this->data);
	}

	public function delete($id) {
		$this->coments_model->delete($id);
		redirect('admin/coments');
	}



	function _check_pass($password)
	{
		if (!$this->user_model->get_by(array('id'=>$this->session->userdata('id'),'password'=>$this->user_model->hash($password))))
		{
			$this->form_validation->set_message('_check_pass', '<div class="alert alert-error">Ошибка ввода текущего пароля</div>');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}


		
	}              
	
?>