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

        //load the view
        $data['main_content'] = 'consultation';
        $this->load->view('includes/template', $data);
       // $this->load->view('consultation');
    }
}
?>
