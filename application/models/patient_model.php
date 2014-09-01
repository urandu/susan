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



    function new_patient($names,$dob,$place_of_residence,$phone,$gender,$marital_status,$staff)
    {
        $new_staff_insert_data = array(
            'names' => $names,
            'phone' => $phone,
            'dob' => $dob,
            'gender' => $gender,
            'residence' => $place_of_residence,
            'marital_status' => $marital_status,

            'registered_by' => $staff
        );
        $insert = $this->db->insert('patients', $new_staff_insert_data);
        return $insert;
    }





}

