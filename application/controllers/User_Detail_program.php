<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Detail_program extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['title'] = " Detail Program Page";
		$this->load->view('template_user/header1', $data);
		$this->load->view('user_home/detail_program', $data);
		$this->load->view('template_user/footer');
	}
}
