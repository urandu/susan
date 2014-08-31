

<?php
class Triage extends CI_Controller {

    public function index()
    {

        $data['main_content'] = 'triage';
        $this->load->view('includes/template', $data);
    }

    public function get_patient()
    {
        $patient_id=$this->input->post("patient_id");
        $this->load->model('patient_model');
        $patient=$this->patient_model->get_patient($patient_id);
        if($patient)
        {
            $data['patient']=$patient;
            $data['main_content'] = 'triage2';
            $this->load->view('includes/template', $data);
        }
        else
        {
            $data['message_error'] = TRUE;
            $data['main_content'] = 'triage1';
            $this->load->view('includes/template', $data);
        }
    }
    public function start_visit($patient_id)
    {
        $this->load->model('visit_model');
        $this->visit_model->start_visit($patient_id);

            $visit=$this->visit_model->get_last_visit($patient_id);
            if($visit)
            {
                $this->load->model('patient_model');
                $patient=$this->patient_model->get_patient($patient_id);
                if($patient)
                {
                    $data['visit']=$visit;
                    $data['patient']=$patient;
                    $data['main_content'] = 'triage';
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
        $weight=$this->input->post('weight');
        $height=$this->input->post('height');
        $blood_pressure=$this->input->post('blood_pressure');
        $temperature=$this->input->post('temperature');
        $this->load->model('visit_model');
        if($this->visit_model->triage_save($visit_id,$weight,$height,$blood_pressure,$temperature))
        {

        }


    }




}
?>
