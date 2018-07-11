<?php
class page extends FE_Controller {
	function __Construct() {
        parent::__construct();
		$this->load->model('page_model');
    }
	public function index()
	{
		$this->data['subview'] = 'page';
		$this->data['page'] = $this->page_model->get_by(array('slug' => (string) $this->uri->segment(2)),TRUE);
		count($this->data['page']) || show_404(current_url());
		$this->load->view('main_layout',$this->data);
	}
}
?>