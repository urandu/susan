<?php
function get_patient_name($patient_id)
{
$CI=& get_instance();
$CI->db->where("patient_id",$patient_id);
$query=$CI->db->get('patients');
return $query->result_array();

}

?>