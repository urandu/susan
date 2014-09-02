<?php
class Consultation extends CI_Controller {

    public function index()
    {

        if($this->session->userdata('role')!=0){
            redirect('admin/login');
        }

        $this->load->model('visit_model');
        $visit=$this->visit_model->list_patients(2);

        if($visit)
        {
            $data['visit']=$visit;
            //load the view
            $data['main_content'] = 'doctor_home';
            $this->load->view('includes/template', $data);
            // $this->load->view('consultation');
        }
        else
        {
            $data['main_content'] = 'doctor_home';
            $this->load->view('includes/template', $data);
        }

    }


    public function list_patients_treated()
    {
        if($this->session->userdata('role')!=0){
            redirect('admin/login');
        }

        $this->load->model('visit_model');
        $visit=$this->visit_model->list_patients(2);

        if($visit)
        {
            $data['visit']=$visit;
            //load the view
            $data['main_content'] = 'doctor_home';
            $this->load->view('includes/template', $data);
            // $this->load->view('consultation');
        }
    }

    public function consult($visit_id)
    {
        if($this->session->userdata('role')!=0){
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
                $data['main_content'] = 'consultation';
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
        if($this->session->userdata('role')!=0){
            redirect('admin/login');
        }
        $doctors_notes=$this->input->post('doctors_notes');
        $diagnosis=$this->input->post('diagnosis');
        $prescription=$this->input->post('prescription');
        $lab_test=$this->input->post('lab_test');
        $next=$this->input->post('next');
        $next_visit=$this->input->post('next_visit');
        if($next=="send to laboratory")
        {
            $next_stage=3;
        }
        elseif($next=="send to pharmacy")
        {
            $next_stage=4;
        }


        $this->load->model('visit_model');

        if($this->visit_model->consult_save($visit_id,$doctors_notes,$diagnosis,$prescription,$lab_test,$next_stage,$next_visit))
        {

            $data['flash_message'] = TRUE;
            $data['main_content'] = 'doctor_home';
            $this->load->view('includes/template', $data);

        }


    }




}
?>
