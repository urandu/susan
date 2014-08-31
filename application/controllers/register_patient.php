<?php
class Register_patient extends CI_Controller {

    public function index()
    {

        $data['main_content'] = 'register_patient';
        $this->load->view('includes/template', $data);
    }
    public function new_patient()
    {
        $names=$this->input->post('names');
        $dob=$this->input->post('dob');;
        $place_of_residence=$this->input->post('place_of_residence');
        $phone=$this->input->post('phone');
        $gender=$this->input->post('gender');
        $marital_status=$this->input->post('marital_status');
        $this->load->model('patient_model')->new_patient($names,$dob,$place_of_residence,$phone,$gender,$marital_status);
    }
}
?>
