<?php
class Register_patient extends CI_Controller {

    public function index()
    {


        if($this->session->userdata('role')!=1){
            redirect('admin/login');
        }
        $data['main_content'] = 'register_patient';
        $this->load->view('includes/template', $data);
    }
    public function new_patient()
    {
        if($this->session->userdata('role')!=1){
            redirect('admin/login');
        }
        $names=$this->input->post('names');
        $dob=$this->input->post('dob');;
        $place_of_residence=$this->input->post('place_of_residence');
        $phone=$this->input->post('phone');
        $gender=$this->input->post('gender');
        $marital_status=$this->input->post('marital_status');
        $this->load->model('patient_model');
        $staff= $this->session->userdata('staff_id');
        $password=$this->input->post('password');

        $user_name=$this->input->post('user_name');

        $this->patient_model->new_patient($names,$dob,$place_of_residence,$phone,$gender,$marital_status,$staff,$password,$user_name);


        $data['patient']=$this->patient_model->get_latest_patient();
        $data['main_content'] = 'triage1';
        $this->load->view('includes/template', $data);
    }
}
?>
