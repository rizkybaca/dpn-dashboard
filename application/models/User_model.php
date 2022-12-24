<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

	public function getUserLogin()
	{
		return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	}
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */
