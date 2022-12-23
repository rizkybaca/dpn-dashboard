<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

class Artikel extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
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
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

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
			$title = $this->input->post('title');
			$created_by = $this->input->post('created_by');
			$article_content = $this->input->post('article_content');
			// $image = $this->input->post('image');
			$post_date = $this->input->post('post_date');

			$upload_image = $_FILES['image']['name'];

			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets/img/artikel/';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$created_at = time();

			$this->db->set('post_date', $post_date);
			$this->db->set('title', $title);
			$this->db->set('article_content', $article_content);
			$this->db->set('created_by', $created_by);
			$this->db->set('created_at', $created_at);
			$this->db->insert('articles');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
			redirect('artikel');
		}
	}
}


/* End of file Artikel.php */
/* Location: ./application/controllers/Artikel.php */
