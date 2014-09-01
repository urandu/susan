
<?php
class Nurse extends CI_Controller
{

    public function index()
    {

        if($this->session->userdata('role')!==1){
            redirect('admin/login');
        }
        $data['main_content'] = 'triage1';
        $this->load->view('includes/template', $data);
    }
}