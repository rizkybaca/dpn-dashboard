<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Program_benefit_model extends CI_Model
{

	public function getProgramBenefit()
	{
		return $this->db->get('program_benefits')->result_array();
	}
}

/* End of file Program_benefit_model.php */
/* Location: ./application/models/Program_benefit_model.php */
