<?php

class Finance extends CI_Controller {

    public function index()
    {

        if($this->session->userdata('role')!=4){
            redirect('admin/login');
        }
        $this->load->model('visit_model');
        $visit=$this->visit_model->list_patients(5);

        if($visit)
        {
            $data['visit']=$visit;
            //load the view
            $data['main_content'] = 'finance_home';
            $this->load->view('includes/template', $data);
            // $this->load->view('consultation');
        }
        else
        {
            $data['main_content'] = 'finance_home';
            $this->load->view('includes/template', $data);
        }
    }


    public function consult($visit_id)
    {

        if($this->session->userdata('role')!=4){
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
                $data['main_content'] = 'finance';
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
        if($this->session->userdata('role')!=4){
            redirect('admin/login');
        }
        $results=$this->input->post('total_amount');


        $this->load->model('visit_model');

        if($this->visit_model->finance_save($visit_id,$results))
        {

            $data['flash_message'] = TRUE;
            $data['main_content'] = 'finance_home';
            $this->load->view('includes/template', $data);

        }


    }



    public function list_patients_treated()
    {

        if($this->session->userdata('role')!=4){
            redirect('admin/login');
        }

        $this->load->model('visit_model');

        $staff_id=$this->session->userdata('staff_id');
        $visit=$this->visit_model->list_patients_treated($staff_id,5);
        if($visit)
        {

            $data['visit']=$visit;

            $data['main_content'] = 'patients_finance';
            $this->load->view('includes/template', $data);

        }
        else
        {
            $data['main_content'] = 'patients_finance';
            $this->load->view('includes/template', $data);
        }
    }
}
?>
