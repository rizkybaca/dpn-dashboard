<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article_model extends CI_Model
{

	public function getArticle()
	{
		$q = "SELECT * FROM `articles` ORDER BY `post_date` DESC ";
		return $this->db->query($q)->result_array();
	}

	public function getArticleForHome()
	{
		$q = "SELECT * FROM `articles` ORDER BY `post_date` DESC LIMIT 3";
		return $this->db->query($q)->result_array();
	}


	public function getArticleById($article_id)
	{
		return $this->db->get_where('articles', ['id_article' => $article_id])->row_array();
	}

	public function getArticleBySlug($slug)
	{
		return $this->db->get_where('articles', ['slug' => $slug])->row_array();
	}

	public function countArticle()
	{
		return $this->db->get('articles')->num_rows();
	}

	public function storeArticle()
	{
		$data = [
			"title" => $this->input->post('title', true),
			"created_by" => $this->input->post('created_by', true),
			"article_content" => $this->input->post('article_content', true),
			"post_date" => $this->input->post('post_date', true)
		];

		$data += [
			"slug" => url_title($data['title'], 'dash', true),
			"created_at" => time()

		];

		$upload_image = (@$_FILES['image']['name']) ? true : false;

		if ($upload_image == true) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
			$config['max_size']     = '2048';
			$config['upload_path'] = './assets/img/artikel/';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('image')) {
				$new_image = $this->upload->data('file_name');
				// $this->db->set('image', $new_image);
				$data += [
					"image" => $new_image
				];
			} else {
				echo $this->upload->display_errors();
			}
		}

		return $this->db->insert('articles', $data);
	}

	public function updateArticle()
	{

		$slug = url_title($this->input->post('title', true), 'dash', true);
		$updated_at = time();

		$data = [
			"post_date" => $this->input->post('post_date', true),
			"title" => $this->input->post('title', true),
			"slug" => $slug,
			"article_content" => $this->input->post('article_content', true),
			"created_by" => $this->input->post('created_by', true),
			"updated_at" => $updated_at
		];

		if (isset($_FILES['image']['name'])) {
			$upload_image = $_FILES['image']['name'];
		}

		if ($upload_image) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
			$config['max_size']     = '2048';
			$config['upload_path'] = './assets/img/artikel/';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('image')) {
				$old_image = $this->input->post('old_image', true);

				if ($old_image != 'default.jpg') {
					unlink(FCPATH . 'assets/img/artikel/' . $old_image);
				}

				$new_image = $this->upload->data('file_name');
				$this->db->set('image', $new_image);
			} else {
				echo $this->upload->display_errors();
			}
		}

		$this->db->where('id_article', $this->input->post('id_article'));
		return $this->db->update('articles', $data);
	}

	public function deleteArticle($id_article)
	{
		// $this->db->where('id', $id);

		return $this->db->delete('articles', ['id_article' => $id_article]);
	}
}

/* End of file Article_model.php */
/* Location: ./application/models/Article_model.php */
