<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Artikel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Article_model', 'artikel');
		$this->load->model('Category_model', 'kategori');
		$this->load->model('Article_category_model', 'kategori_artikel');
	}

	public function index()
	{
		$data['title'] = " Artikel Page";

		$data['kategori'] = $this->kategori->getCategory();

		$this->load->view('template_user/header1', $data);
		$this->load->view('user_home/artikel', $data);
		$this->load->view('template_user/footer');
	}
}
