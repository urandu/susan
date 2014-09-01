<?php

class Pharmacy extends CI_Controller {

    public function index()
    {
        if($this->session->userdata('role')!==3){
            redirect('admin/login');
        }
        $this->load->model('visit_model');
        $visit=$this->visit_model->list_patients(4);

        if($visit)
        {
            $data['visit']=$visit;
            //load the view
            $data['main_content'] = 'pharmacy_home';
            $this->load->view('includes/template', $data);
            // $this->load->view('consultation');
        }
        else
        {
            $data['main_content'] = 'pharmacy_home';
            $this->load->view('includes/template', $data);
        }
    }

    public function consult($visit_id)
    {

        if($this->session->userdata('role')!==3){
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
                $data['main_content'] = 'pharmacy';
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
        if($this->session->userdata('role')!==3){
            redirect('admin/login');
        }
        $total_amount=$this->input->post('total_amount');


        $this->load->model('visit_model');

        if($this->visit_model->pharmacy_save($visit_id,$total_amount))
        {

            $data['flash_message'] = TRUE;
            $data['main_content'] = 'pharmacy_home';
            $this->load->view('includes/template', $data);

        }


    }


}
?>
