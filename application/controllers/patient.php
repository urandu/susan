
<?php
class Patient extends CI_Controller
{

    public function index()
    {

        if(!$this->session->userdata('patient_id')){

            $this->load->view('admin/patient_login');
        }

        else{
        $this->load->model('patient_model');

        $patient_id=$this->session->userdata('patient_id');
        $visit=$this->patient_model->list_all_patient_visits($patient_id);
        if($visit)
        {

            $data['visit']=$visit;

            $data['main_content'] = 'patient';
            $this->load->view('includes/template', $data);

        }
        else
        {

            $data['main_content'] = 'patient';
            $this->load->view('includes/template', $data);
        }
        }
    }



    function patient_validate_credentials()
    {

        $this->load->model('patient_model');

        $user_name = $this->input->post('user_name');
        $password = $this->__encrip_password($this->input->post('password'));

        $is_valid = $this->patient_model->validate($user_name, $password);

        if($is_valid)
        {


            $patient_id=$is_valid[0]['patient_id'];
            //print_r($is_valid);
            $data = array(
                'user_name' => $user_name,
                'patient_id' => $patient_id,
                'is_logged_in' => true

            );

            $this->session->set_userdata($data);

            redirect('patient');


            //redirect('admin/products');
        }
        else // incorrect username or password
        {
            $data['message_error'] = TRUE;
            $this->load->view('admin/patient_login', $data);
        }
    }

    /**
     * encript the password
     * @return mixed
     */
    function __encrip_password($password) {
        return md5($password);
    }
}