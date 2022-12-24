<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

class Program extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Program_model', 'program');
		$this->load->model('User_model', 'user');
	}

	public function index()
	{
		$data['user'] = $this->user->getUserLogin();
		$data['title'] = 'List Program';

		$data['program'] = $this->program->getProgram();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('program/index', $data);
		$this->load->view('templates/footer');
	}
}


/* End of file Program.php */
/* Location: ./application/controllers/Program.php */
