<?php

class Lab extends CI_Controller {

    public function index()
    {

        $data['main_content'] = 'nurse';
        $this->load->view('includes/template', $data);
    }
}
?>
