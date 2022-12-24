<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Program_model extends CI_Model
{

	public function getProgram()
	{
		return $this->db->get('programs')->result_array();
	}
}

/* End of file Program_model.php */
/* Location: ./application/models/Program_model.php */
