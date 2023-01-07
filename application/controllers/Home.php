<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Article_model', 'artikel');
		$this->load->model('Program_model', 'program');
	}
	public function index()
	{

		$data['title'] = "Home - Dedikasi Pemuda Negeri";

		$data['article'] = $this->artikel->getArticleForHome();
		$data['count_program_pengabdian'] = $this->program->countProgramPengabdianForHome();
		$data['count_program_csr'] = $this->program->countProgramCSRForHome();

		$data['count_alumni_pengabdian'] = 8;
		$data['count_alumni_webinar'] = 50;
		$data['count_alumni_penerima_giveaway'] = 3;

		$this->load->view('template_user/header1', $data);
		$this->load->view('user_home/home', $data);
		$this->load->view('template_user/footer');
	}
}
