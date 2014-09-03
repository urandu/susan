<?php

class User extends CI_Controller {

    /**
    * Check if the user is logged in, if he's not, 
    * send him to the login page
    * @return void
    */	
	function index()
	{
		if($this->session->userdata('is_logged_in')){
            $role=$this->session->userdata('role');
            if($role==0)
            {
                redirect('consultation');
            }
            elseif($role==1)
            {
                redirect('nurse');
            }
            elseif($role==2)
            {
                redirect('lab');
            }
            elseif($role==3)
            {
                redirect('pharmacy');
            }
            elseif($role==4)
            {
                redirect('finance');
            }
            else
            {
                show_404();
            }

        }else{
        	$this->load->view('admin/login');	
        }
	}

    /**
    * encript the password 
    * @return mixed
    */	
    function __encrip_password($password) {
        return md5($password);
    }	

    /**
    * check the username and the password with the database
    * @return void
    */
	function validate_credentials()
	{	

		$this->load->model('staff_model');

		$user_name = $this->input->post('user_name');
		$password = $this->__encrip_password($this->input->post('password'));

		$is_valid = $this->staff_model->validate($user_name, $password);
		
		if($is_valid)
		{

            $role=$is_valid[0]['role'];
            $staff_id=$is_valid[0]['staff_id'];
            //print_r($is_valid);
			$data = array(
				'user_name' => $user_name,
                'staff_id' => $staff_id,
				'is_logged_in' => true,
                'role' => $role
			);

            $this->session->set_userdata($data);

            if($role==0)
            {
                redirect('consultation');
            }
            elseif($role==1)
            {
                redirect('nurse');
            }
            elseif($role==2)
            {
                redirect('lab');
            }
            elseif($role==3)
            {
                redirect('pharmacy');
            }
            elseif($role==4)
            {
                redirect('finance');
            }
            else
            {
                show_404();
            }

			//redirect('admin/products');
		}
		else // incorrect username or password
		{
			$data['message_error'] = TRUE;
			$this->load->view('admin/login', $data);	
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
    * The method just loads the signup view
    * @return void
    */
	function signup()
	{
		$this->load->view('admin/signup_form');	
	}
	

    /**
    * Create new user and store it in the database
    * @return void
    */	
	function create_member()
	{
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		$this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/signup_form');
		}
		
		else
		{			
			$this->load->model('Users_model');
			
			if($query = $this->Users_model->create_member())
			{
				$this->load->view('admin/signup_successful');			
			}
			else
			{
				$this->load->view('admin/signup_form');			
			}
		}
		
	}
	
	/**
    * Destroy the session, and logout the user.
    * @return void
    */		
	function logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}

}