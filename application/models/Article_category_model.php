<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article_category_model extends CI_Model
{

	public function getArticleCategory()
	{
		return $this->db->get('article_categories')->result_array();
	}

	public function store($new_artikel, $category_id)
	{
		$data = [
			"article_id" => $new_artikel['id_article'],
			"category_id" => $category_id
		];

		return $this->db->insert('article_categories', $data);
	}

	public function delete($new_artikel)
	{
		return $this->db->delete('article_categories', ['article_id' => $new_artikel]);
	}
}

/* End of file Article_category_model.php */
/* Location: ./application/models/Article_category_model.php */
