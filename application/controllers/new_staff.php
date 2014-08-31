<?php
class New_staff extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {

        $data['main_content'] = 'new_staff';
        $this->load->view('includes/template', $data);
    }
    public function new_s()
    {

        $name=$this->input->post('name');
        $phone=$this->input->post('phone');
        $dob=$this->input->post('dob');
        $gender=$this->input->post('gender');
        $id_number=$this->input->post('id_number');
        $role=$this->input->post('role');
        $password=$this->input->post('password');
        $email=$this->input->post('email');
        $user_name=$this->input->post('user_name');

        $this->load->model('staff_model');

        if($this->staff_model->new_staff($name,$phone,$dob,$gender,$id_number,$role,$password,$email,$user_name))
        {
            $data['main_content'] = 'lab';
            $this->load->view('includes/template', $data);
        }
    }
}
?>
