<?php

class Lab extends CI_Controller {

    public function index()
    {

        if($this->session->userdata('role')!=2){
            redirect('admin/login');
        }
        $data['main_content'] = 'nurse';
        $this->load->view('includes/template', $data);
    }
}
?>
