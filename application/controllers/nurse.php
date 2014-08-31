
<?php
class Nurse extends CI_Controller
{

    public function index()
    {

        $data['main_content'] = 'triage1';
        $this->load->view('includes/template', $data);
    }
}