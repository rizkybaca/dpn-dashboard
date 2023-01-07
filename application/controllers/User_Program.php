<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Program extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Program_path_model', 'programpath');
		$this->load->model('Program_type_model', 'program_type');
		$this->load->model('Program_model', 'program');
	}
	public function index()
	{

		$data['title'] = "Program Page";

		// $data['program'] = $this->program->getProgramWithJoin();
		$data['tipe_program'] = $this->program_type->getProgramType();

		$this->load->view('template_user/header1', $data);
		$this->load->view('user_home/program', $data);
		$this->load->view('template_user/footer');
	}
}
