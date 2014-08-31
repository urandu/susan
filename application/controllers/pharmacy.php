<?php

class Pharmacy extends CI_Controller {

    public function index()
    {

        $data['main_content'] = 'pharmacy';
        $this->load->view('includes/template', $data);
    }
}
?>
