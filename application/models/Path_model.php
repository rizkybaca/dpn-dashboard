<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Path_model extends CI_Model
{

	public function getPath()
	{
		return $this->db->get('paths')->result_array();
	}
}

/* End of file Path_model.php */
/* Location: ./application/models/Path_model.php */
