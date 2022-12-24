<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Program_path_model extends CI_Model
{

	public function getProgramPaths()
	{
		return $this->db->get('program_paths')->result_array();
	}
}

/* End of file Program_paths_model.php */
/* Location: ./application/models/Program_paths_model.php */
