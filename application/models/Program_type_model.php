<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Program_type_model extends CI_Model
{

	public function getProgramTypes()
	{
		return $this->db->get('program_types')->result_array();
	}
}

/* End of file Program_types_model.php */
/* Location: ./application/models/Program_types_model.php */
