<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category_model extends CI_Model
{

	public function getCategory()
	{
		return $this->db->get('categories')->result_array();
	}
	public function getCategoryById($id_category)
	{
		return $this->db->get_where('categories', ['id_category' => $id_category])->row_array();
	}
}

/* End of file Category_model.php */
/* Location: ./application/models/Category_model.php */
