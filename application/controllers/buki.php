<?php
class Buki extends CI_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('products_model');
        $this->load->model('manufacturers_model');

        if(!$this->session->userdata('is_logged_in')){
            redirect('admin/login');
        }
    }
 
    public function index()

	{	
		echo("hjdsgkjfhahgjhdfkjghadfhgh;kjfghjdfh");
	}

}
