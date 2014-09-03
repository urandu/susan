<?php

class Patient_model extends CI_Model
{




    function get_patient($patient_id)
    {
        $this->db->where('patient_id', $patient_id);
        $query = $this->db->get('patients');

        if ($query->num_rows == 1) {
            return $query->result_array();
        }
    }
    function get_latest_patient()
    {
        $this->db->limit(1);
        $this->db->order_by('patient_id',"DESC");
        $query = $this->db->get('patients');

        if ($query->num_rows == 1) {
            return $query->result_array();
        }
    }



    function new_patient($names,$dob,$place_of_residence,$phone,$gender,$marital_status,$staff,$password,$user_name)
    {
        $new_staff_insert_data = array(
            'names' => $names,
            'phone' => $phone,
            'dob' => $dob,
            'gender' => $gender,
            'residence' => $place_of_residence,
            'marital_status' => $marital_status,

            'password' => md5($password),
            'user_name' => $user_name,
            'registered_by' => $staff
        );
        $insert = $this->db->insert('patients', $new_staff_insert_data);
        return $insert;
    }

    function validate($user_name, $password)
    {
        $this->db->where('user_name', $user_name);
        $this->db->where('password', $password);
        $query = $this->db->get('patients');

        if ($query->num_rows == 1) {
            return $query->result_array();
        }
    }

    function all_patients()
    {
        $query = $this->db->get('patients');

        if ($query->num_rows > 0) {
            return $query->result_array();
        }
    }

    function list_all_patient_visits($patient_id)
    {

        $this->db->where('patient_id', $patient_id);
        $query = $this->db->get('visit');

        if ($query->num_rows > 0) {
            return $query->result_array();
        }
    }

}

