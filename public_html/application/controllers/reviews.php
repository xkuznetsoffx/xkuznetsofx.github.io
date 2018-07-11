<?php
class reviews extends FE_Controller {
	function __Construct() {
        parent::__construct();
		$this->load->model('goods_model');
		$this->load->model('categories_model');
		$this->load->model('coments_model');
		$this->data['categories'] =$this->categories_model->get();
    }
	public function index($id=NULL)
	{
		

		
        //Fetch coments
        $this->data['coments'] = $this->coments_model->get_coments('products','0');
        $this->data['coments_count']=$this->coments_model->count;
        $this->data['pagination']=$this->coments_model->listing;

		//var_dump($items);
		if (!empty($items)):

			$id ? $items=array($items): '' ;
		

				foreach($items as $item) 
				{
					if($item->sell_method == 0)
					{
						$filename = preg_replace('/[^\p{L}\p{N}\s]/u','', md5(config_item('encryption_key').$item->name));
						$uppath = './assets/uploads/'.preg_replace('/[^\p{L}\p{N}\s]/u','', md5(config_item('encryption_key').$filename.$item->name)).'/';
						$data = file($uppath.$filename);
						if(empty($data)) 
						{
							$item->count = '0';
						}
						else
						{
							$item->count = count($data);
							$item->goods = "";
						}
					}
					elseif($item->sell_method == 1)
					{
						$item->count = 'Файл';
						$item->goods = "";
					}			
					elseif($item->sell_method == 2)
					{
						$filename = preg_replace('/[^\p{L}\p{N}\s]/u','', md5(config_item('encryption_key').$item->name));
						$uppath = './assets/uploads/'.preg_replace('/[^\p{L}\p{N}\s]/u','', md5(config_item('encryption_key').$filename.$item->name)).'/';
						$data = file_get_contents($uppath.$filename);
						$data = explode("[sep]",$data);
						if(empty($data)) 
						{
							$item->count = '0';
						}
						else
						{
							$item->count = count($data);
							$item->goods = "";
						}
					}
				}

		endif;
		
		
		
		
		
		//$this->data['items'] = $items;
		
		$this->data['subview'] = 'reviews';
		$this->load->view('main_layout',$this->data);
		
	}
	
}
?>