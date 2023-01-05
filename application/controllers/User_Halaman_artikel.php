<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Halaman_artikel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Article_model', 'artikel');
		$this->load->model('Category_model', 'kategori');
		$this->load->model('Article_category_model', 'kategori_artikel');
	}
	public function index_lama()
	{
		$data['title'] = " Halaman Artikel Page";
		$this->load->view('template_user/header1', $data);
		$this->load->view('user_home/halaman_artikel', $data);
		$this->load->view('template_user/footer');
	}
	public function index($slug)
	{

		$data['title'] = "Halaman Artikel Page";

		$data['artikel'] = $this->artikel->getArticleBySlug($slug);
		$data['kategori'] = $this->kategori_artikel->getArticleCategoryByArticleId($data['artikel']['id_article']);

		$this->load->view('template_user/header1', $data);
		$this->load->view('user_home/halaman_artikel', $data);
		$this->load->view('template_user/footer');
	}
}
