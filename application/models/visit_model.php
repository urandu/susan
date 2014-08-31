<?php

class Visit_model extends CI_Model
{



    function start_visit($patient_id)
    {

        $this->db->where('patient_id', $patient_id);
        $this->db->where('visit_status', '1');
        $query = $this->db->get('visit');

        if ($query->num_rows >0) {
            return null;
        }
        else
        {
            $this->load->library('session');
            $new_visit_insert_data = array(
                'patient_id' => $patient_id,
                'current_stage' => '1',
                'triage_staff' => $this->session->userdata('staff_id')

            );
            $insert = $this->db->insert('visit', $new_visit_insert_data);
            //print_r($this->session->all_userdata());
            return $insert;
        }

    }
    function get_last_visit($patient_id)
    {
        $this->db->where('patient_id', $patient_id);
        $this->db->order_by('time_started', "DESC");
        $this->db->limit(1);
        $query = $this->db->get('visit');

        if ($query->num_rows ==1) {
            return $query->result_array();
        }

    }


    function triage_save($visit_id,$weight,$height,$blood_pressure,$temperature)
    {
        $data = array(
            'weight' => $weight,
            'height' => $height,
            'blood_pressure' => $blood_pressure,
            'temperature' => $temperature
        );

        $this->db->where('visit_id', $visit_id);
        if($this->db->update('visit', $data))
        {
            return TRUE;
        }
    }

    function get_patient($patient_id)
    {
        $this->db->where('patient_id', $patient_id);
        $query = $this->db->get('patients');

        if ($query->num_rows == 1) {
            return $query->result_array();
        }
    }



    /**
     * Validate the login's data with the database
     * @param string $user_name
     * @param string $password
     * @return void
     */
    function validate($user_name, $password)
    {
        $this->db->where('user_name', $user_name);
        $this->db->where('password', $password);
        $query = $this->db->get('staff');

        if ($query->num_rows == 1) {
            return $query->result();
        }
    }

    /**
     * Serialize the session data stored in the database,
     * store it in a new array and return it to the controller
     * @return array
     */
    function get_db_session_data()
    {
        $query = $this->db->select('user_data')->get('ci_sessions');
        $user = array(); /* array to store the user data we fetch */
        foreach ($query->result() as $row) {
            $udata = unserialize($row->user_data);
            /* put data in array using username as key */
            $user['user_name'] = $udata['user_name'];
            $user['is_logged_in'] = $udata['is_logged_in'];
        }
        return $user;
    }

    /**
     * Store the new user's data into the database
     * @return boolean - check the insert
     */
    function create_member()
    {

        $this->db->where('user_name', $this->input->post('username'));
        $query = $this->db->get('membership');

        if ($query->num_rows > 0) {
            echo '<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>';
            echo "Username already taken";
            echo '</strong></div>';
        } else {

            $new_member_insert_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email_addres' => $this->input->post('email_address'),
                'user_name' => $this->input->post('username'),
                'pass_word' => md5($this->input->post('password'))
            );
            $insert = $this->db->insert('membership', $new_member_insert_data);
            return $insert;
        }

    }

    //create_member

    function new_staff($name, $phone, $dob, $gender, $id_number, $role, $password, $email, $user_name)
    {
        $this->db->where('user_name', $user_name);
        $query = $this->db->get('staff');

        if ($query->num_rows > 0) {
            echo '<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>';
            echo "Username already taken";
            echo '</strong></div>';
        } else {

            $new_staff_insert_data = array(
                'name' => $name,
                'phone' => $phone,
                'dob' => $dob,
                'gender' => $gender,
                'id_number' => $id_number,
                'role' => $role,
                'password' => md5($password),
                'email' => $email,
                'user_name' => $user_name
            );
            $insert = $this->db->insert('staff', $new_staff_insert_data);
            return $insert;
        }
    }


}

