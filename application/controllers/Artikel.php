<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

class Artikel extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Article_model', 'artikel');
		$this->load->model('Article_category_model', 'kategori_artikel');
		$this->load->model('Category_model', 'kategori');
		$this->load->model('User_model', 'user');
	}

	public function index()
	{

		$data['user'] = $this->user->getUserLogin();
		$data['title'] = 'List Artikel';
		$data['artikel'] = $this->db->get('articles')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('artikel/index', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$data['title'] = 'Tambah Artikel';
		$data['user'] = $this->user->getUserLogin();
		$data['kategori'] = $this->kategori->getCategory();

		$this->form_validation->set_rules('title', 'Judul Artikel', 'required|trim');
		$this->form_validation->set_rules('created_by', 'Penulis', 'required|trim');
		$this->form_validation->set_rules('article_content', 'Isi Artikel', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('artikel/create', $data);
			$this->load->view('templates/footer');
		} else {

			if ($this->artikel->storeArticle()) {

				$slug = url_title($this->input->post('title', true), 'dash', true);

				$new_artikel = $this->artikel->getArticleBySlug($slug);

				$first_check = (@$_POST['category_id'][0]) ? true : false;

				if ($first_check == true) {
					$pop_category = $this->input->post('category_id');
					$count_category = count($pop_category);

					for ($i = 0; $i < $count_category; $i++) {
						$category_id = $pop_category[$i];
						$this->kategori_artikel->store($new_artikel, $category_id);
					}
				}

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Program Berhasil Ditambahkan!</div>');
				redirect('artikel');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Program gagal ditambahkan!</div>');
				redirect('artikel');
			}



			// $title = $this->input->post('title');
			// $slug = url_title($title, 'dash', true);
			// $created_by = $this->input->post('created_by');
			// $article_content = $this->input->post('article_content');
			// $post_date = $this->input->post('post_date');

			// $upload_image = $_FILES['image']['name'];

			// if ($upload_image) {
			// 	$config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
			// 	$config['max_size']     = '2048';
			// 	$config['upload_path'] = './assets/img/artikel/';
			// 	$config['encrypt_name'] = TRUE;
			// 	$this->load->library('upload', $config);

			// 	if ($this->upload->do_upload('image')) {
			// 		$new_image = $this->upload->data('file_name');
			// 		$this->db->set('image', $new_image);
			// 	} else {
			// 		echo $this->upload->display_errors();
			// 	}
			// }

			// $created_at = time();

			// $this->db->set('post_date', $post_date);
			// $this->db->set('title', $title);
			// $this->db->set('slug', $slug);
			// $this->db->set('article_content', $article_content);
			// $this->db->set('created_by', $created_by);
			// $this->db->set('created_at', $created_at);
			// $this->db->insert('articles');

			// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
			// redirect('artikel');
		}
	}

	public function edit($id_article)
	{
		$data['title'] = 'Form Ubah Data Artikel';
		$data['user'] = $this->user->getUserLogin();

		$data['artikel'] = $this->artikel->getArticleById($id_article);
		$data['kategori'] = $this->kategori->getCategory();

		$this->form_validation->set_rules('title', 'Judul Artikel', 'required|trim');
		$this->form_validation->set_rules('created_by', 'Penulis', 'required|trim');
		$this->form_validation->set_rules('article_content', 'Isi Artikel', 'required|trim');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('artikel/edit', $data);
			$this->load->view('templates/footer');
		} else {

			if ($this->artikel->updateArticle()) {

				$slug = url_title($this->input->post('title', true), 'dash', true);

				$new_artikel = $this->artikel->getArticleBySlug($slug);
				$this->kategori_artikel->delete($new_artikel['id_article']);

				$first_check = (@$_POST['category_id'][0]) ? true : false;

				if ($first_check == true) {
					$pop_category = $this->input->post('category_id');
					$count_category = count($pop_category);
					
					for ($i = 0; $i < $count_category; $i++) {
						$category_id = $pop_category[$i];
						$this->kategori_artikel->store($new_artikel, $category_id);
					}
				}

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"Artikel gagal diubah!</div>');
			}
			redirect('artikel');
		}
	}

	public function delete($id_article)
	{

		if ($this->artikel->deleteArticle($id_article)) {
			$old_image = $this->input->post('old_image', true);

			if ($old_image != 'default.jpg') {
				unlink(FCPATH . 'assets/img/artikel/' . $old_image);
			}

			$this->kategori_artikel->delete($id_article);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"Artikel gagal dihapus!</div>');
		}

		redirect('artikel');
	}



	public function category()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'List Artikel';

		$data['kategori'] = $this->kategori->getCategory();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('artikel/index_category', $data);
		$this->load->view('templates/footer');
	}
	public function create_category()
	{
		$data['title'] = 'Tambah Kategori';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('category_name', 'Nama Kategori', 'required|trim');
		$this->form_validation->set_rules('category_icon', 'Icon Kategori', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('artikel/create_category', $data);
			$this->load->view('templates/footer');
		} else {
			$category_name = $this->input->post('category_name');
			$category_icon = $this->input->post('category_icon');

			$this->db->set('category_name', $category_name);
			$this->db->set('category_icon', $category_icon);
			$this->db->insert('categories');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil menyimpan kategori!</div>');
			redirect('artikel/category');
		}
	}

	public function edit_category()
	{
		$data['title'] = 'Edit Kategori';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$id_category = $this->input->post('id_category');

		$data['kategori'] = $this->kategori->getCategoryById($id_category);

		$this->form_validation->set_rules('category_name', 'Nama Kategori', 'required|trim');
		$this->form_validation->set_rules('category_icon', 'Icon Kategori', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('artikel/edit_category', $data);
			$this->load->view('templates/footer');
		} else {
			$category_name = $this->input->post('category_name');
			$category_icon = $this->input->post('category_icon');

			$this->db->set('category_name', $category_name);
			$this->db->set('category_icon', $category_icon);
			$this->db->where('id_category', $id_category);
			$this->db->update('categories');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengubah kategori!</div>');
			redirect('artikel/category');
		}
	}

	public function delete_category($id_category)
	{
		$this->db->delete('categories', array('id_category' => $id_category));
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil menghapus kategori!</div>');
		redirect('artikel/category');
	}

	public function articleCategory($article_id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Kategori Artikel';
		$data['artikel'] = $this->artikel->getArticleById($article_id);

		$data['kategori'] = $this->kategori->getCategory();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('artikel/article_category', $data);
		$this->load->view('templates/footer');
	}

	public function changearticlecategory()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$category_id = $this->input->post('categoryId');
		$article_id = $this->input->post('articleId');

		$data = [
			'article_id' => $article_id,
			'category_id' => $category_id
		];

		$result = $this->db->get_where('article_categories', $data);

		if ($result->num_rows() < 1) {
			$this->db->insert('article_categories', $data);
		} else {
			$this->db->delete('article_categories', $data);
		}

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access changed!</div>');
	}
}


/* End of file Artikel.php */
/* Location: ./application/controllers/Artikel.php */
