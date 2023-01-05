<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Detail_program extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Program_model', 'program');
		$this->load->model('Program_type_model', 'program_type');
		$this->load->model('User_model', 'user');
		$this->load->model('Path_model', 'path');
		$this->load->model('Program_path_model', 'programpath');
		$this->load->model('Benefit_model', 'benefit');
		$this->load->model('Program_benefit_model', 'programbenefit');
	}
	public function index_lama()
	{
		$data['title'] = " Detail Program Page";
		$this->load->view('template_user/header1', $data);
		$this->load->view('user_home/detail_program_lama', $data);
		$this->load->view('template_user/footer');
	}
	public function index($slug)
	{
		$data['title'] = " Detail Program Page";

		$data['program'] = $this->program->getProgramBySlug($slug);
		$data['jalur'] = $this->programpath->getProgramPathByProgramId($data['program']['id_program']);
		$data['manfaat'] = $this->programbenefit->getProgramBenefitByProgramId($data['program']['id_program']);

		$this->load->view('template_user/header1', $data);
		$this->load->view('user_home/detail_program', $data);
		$this->load->view('template_user/footer', $data);
	}
}
