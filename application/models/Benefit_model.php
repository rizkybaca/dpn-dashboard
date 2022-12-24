<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Benefit_model extends CI_Model
{

	public function getBenefit()
	{
		return $this->db->get('benefits')->result_array();
	}
}

/* End of file Benefit_model.php */
/* Location: ./application/models/Benefit_model.php */
