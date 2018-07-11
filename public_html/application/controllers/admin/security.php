<?php
class security extends Admin_Controller {
	function __Construct() {
        parent::__construct();
		$this->load->model('sitesecurity');
		$this->load->model('security_model');
    }
	public function index()
	{
	
		if ($this->input->post('submit'))
		{

			
				$rules = $this->sitesecurity->rules;
				$this->form_validation->set_rules($rules);

				$this->form_validation->set_rules('old_password', 'Текущий пароль', 'required|callback__check_pass');
				$this->form_validation->set_rules('password', 'Пароль', 'required|matches[password1]');
				$this->form_validation->set_rules('password1', 'Повтор пароля', 'required');
		

					if($this->form_validation->run() == TRUE)
					 {
				 	$data = $this->sitesecurity->array_from_post(array('old_password','password','password1'));
					if ($this->user_model->save_pass($data['password'])) $this->data['ok']=TRUE;
					}
		
		}

		$this->data['ips'] = $this->security_model->get();
		
		$this->data['subview'] = 'admin/security';
		$this->load->view('admin/layout_main',$this->data);
	}

	public function edit($id=NULL)
	{


		if($id) {
			$this->data['ip'] = $this->security_model->get($id);
			count($this->data['ip']) || $this->data['errors'][] = 'Страница не найдена';
		}
		else {
			$this->data['ip'] = $this->security_model->get_new();
		}
		$rules = $this->security_model->rules;
		$this->form_validation->set_rules($rules);
		
		if($this->form_validation->run() == TRUE) {
			$data = $this->security_model->array_from_post(array('ip'));
			$this->security_model->save($data,$id);
			redirect('admin/security');
		}
		
		
		$this->data['subview'] = 'admin/blocking';
		$this->load->view('admin/layout_main',$this->data);
	}

	public function delete($id) {
		$this->security_model->delete($id);
		redirect('admin/security');
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