<?php

class Finance extends CI_Controller {

    public function index()
    {

        $data['main_content'] = 'finance';
        $this->load->view('includes/template', $data);
    }
}
?>
