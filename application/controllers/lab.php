<?php

class Lab extends CI_Controller {

    public function index()
    {

        if($this->session->userdata('role')!=2){
            redirect('admin/login');
        }
        $this->load->model('visit_model');
        $visit=$this->visit_model->list_patients(3);

        if($visit)
        {
            $data['visit']=$visit;
            //load the view
            $data['main_content'] = 'lab_home';
            $this->load->view('includes/template', $data);
            // $this->load->view('consultation');
        }
        else
        {
            $data['main_content'] = 'lab_home';
            $this->load->view('includes/template', $data);
        }
    }


    public function consult($visit_id)
    {

        if($this->session->userdata('role')!=2){
            redirect('admin/login');
        }
        $this->load->model('visit_model');

        $visit=$this->visit_model->get_visit($visit_id);
        if($visit)
        {
            $this->load->model('patient_model');
            $patient=$this->patient_model->get_patient($visit[0]['patient_id']);
            if($patient)
            {
                $data['visit']=$visit;
                $data['patient']=$patient;
                $data['main_content'] = 'lab';
                $this->load->view('includes/template', $data);
            }
        }
        else
        {
            /////?/////
        }
    }


    public function save($visit_id)
    {
        if($this->session->userdata('role')!=2){
            redirect('admin/login');
        }
        $results=$this->input->post('lab_results');


        $this->load->model('visit_model');

        if($this->visit_model->lab_save($visit_id,$results))
        {

            $data['flash_message'] = TRUE;
            $data['main_content'] = 'lab_home';
            $this->load->view('includes/template', $data);

        }


    }

    public function list_patients_treated()
    {

        if($this->session->userdata('role')!=2){
            redirect('admin/login');
        }

        $this->load->model('visit_model');

        $staff_id=$this->session->userdata('staff_id');
        $visit=$this->visit_model->list_patients_treated($staff_id,3);
        if($visit)
        {

            $data['visit']=$visit;

            $data['main_content'] = 'patients_lab';
            $this->load->view('includes/template', $data);

        }
        else
        {
            $data['main_content'] = 'patients_lab';
            $this->load->view('includes/template', $data);
        }
    }


}
?>
