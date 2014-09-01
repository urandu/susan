<?php

class Finance extends CI_Controller {

    public function index()
    {

        if($this->session->userdata('role')!=4){
            redirect('admin/login');
        }
        $data['main_content'] = 'finance';
        $this->load->view('includes/template', $data);
    }
}
?>
