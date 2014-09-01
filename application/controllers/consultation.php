<?php
/**
 * Created by IntelliJ IDEA.
 * User: bildad
 * Date: 20/08/14
 * Time: 11:34
 */ ?>

<?php
class Consultation extends CI_Controller {

    public function index()
    {

        if($this->session->userdata('role')!==0){
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
    public function consult($visit_id)
    {
        if($this->session->userdata('role')!==0){
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
        if($this->session->userdata('role')!==0){
            redirect('admin/login');
        }
        $doctors_notes=$this->input->post('doctors_notes');
        $diagnosis=$this->input->post('diagnosis');
        $prescription=$this->input->post('prescription');
        $lab_test=$this->input->post('lab_test');
        $lab=$this->input->post('lab');
        $pharmacy=$this->input->post('pharmacy');
        if(isset($lab))
        {
            $next_stage=3;
        }
        elseif(isset($pharmacy))
        {
            $next_stage=4;
        }


        $this->load->model('visit_model');

        if($this->visit_model->consult_save($visit_id,$doctors_notes,$diagnosis,$prescription,$lab_test,$next_stage))
        {

            $data['flash_message'] = TRUE;
            $data['main_content'] = 'doctor_home';
            $this->load->view('includes/template', $data);

        }


    }




}
?>
