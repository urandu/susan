
<?php
class Admin extends CI_Controller
{

    public function index()
    {

    }

    public function all_staff()
    {
        $this->load->model('staff_model');
        $visit=$this->staff_model->all_staff();
        if($visit)
        {
            $data['visit']=$visit;
            $data['main_content'] = 'list_staff';
            $this->load->view('includes/template', $data);
        }
        else
        {
            $data['main_content'] = 'list_staff';
            $this->load->view('includes/template', $data);
        }

    }

    public function all_patients()
    {

        $this->load->model('patient_model');


        $visit=$this->patient_model->all_patients();
        if($visit)
        {

            $data['visit']=$visit;

            $data['main_content'] = 'list_patients';
            $this->load->view('includes/template', $data);

        }
        else
        {

            $data['main_content'] = 'list_patients';
            $this->load->view('includes/template', $data);
        }


    }


    public function all_visits()
    {
        $this->load->model('visit_model');


        $visit=$this->visit_model->all_visits();
        if($visit)
        {

            $data['visit']=$visit;

            $data['main_content'] = 'list_visits';
            $this->load->view('includes/template', $data);

        }
        else
        {

            $data['main_content'] = 'list_visits';
            $this->load->view('includes/template', $data);
        }


    }



}
