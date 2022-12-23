<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article_model extends CI_Model
{

	public function getArticle()
	{
		$q = "SELECT * FROM `articles` ORDER BY `post_date` DESC ";
		return $this->db->query($q)->result_array();
	}
}

/* End of file Article_model.php */
/* Location: ./application/models/Article_model.php */
