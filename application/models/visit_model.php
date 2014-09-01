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


    function pharmacy_save($visit_id,$total_amount)
    {
        $data = array(
            'total_amount_to_be_paid' => $total_amount,

            'current_stage' => 5
        );

        $this->db->where('visit_id', $visit_id);
        if($this->db->update('visit', $data))
        {
            return TRUE;
        }
    }

    function lab_save($visit_id,$result)
    {
        $data = array(
            'lab_test_results' => $result,

            'current_stage' => 2
        );

        $this->db->where('visit_id', $visit_id);
        if($this->db->update('visit', $data))
        {
            return TRUE;
        }
    }


    function consult_save($visit_id,$doctors_notes,$diagnosis,$prescription,$lab_test,$next_stage)
    {
        $data = array(
            'doctors_notes' => $doctors_notes,
            'doctor_diagnosis' => $diagnosis,
            'doctor_prescription' => $prescription,
            'lab_test_to_be_conducted' => $lab_test,
            'current_stage' => $next_stage
        );

        $this->db->where('visit_id', $visit_id);
        if($this->db->update('visit', $data))
        {
            return TRUE;
        }
    }



    function triage_save($visit_id,$weight,$height,$blood_pressure,$temperature)
    {
        $data = array(
            'weight' => $weight,
            'height' => $height,
            'blood_pressure' => $blood_pressure,
            'temperature' => $temperature,
            'current_stage' => '2'
        );

        $this->db->where('visit_id', $visit_id);
        if($this->db->update('visit', $data))
        {
            return TRUE;
        }
    }

    function list_patients($current_stage)
    {
        $this->db->where('current_stage',$current_stage);
        $this->db->where('visit_status',1);
        $query=$this->db->get('visit');
        if($query->num_rows>0)
        {
            return $query->result_array();
        }

    }

    function get_visit($visit_id)
    {
        $this->db->where('visit_id', $visit_id);
        $this->db->limit(1);
        $query = $this->db->get('visit');

        if ($query->num_rows ==1) {
            return $query->result_array();
        }

    }







}

