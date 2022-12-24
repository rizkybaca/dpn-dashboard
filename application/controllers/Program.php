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
		$this->load->model('Program_type_model', 'program_type');
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

	public function create()
	{
		$data['user'] = $this->user->getUserLogin();
		$data['title'] = 'Tambah Program';
		$data['tipe_program'] = $this->program_type->getProgramType();

		$this->form_validation->set_rules('title', 'Judul', 'required|trim');
		$this->form_validation->set_rules('location', 'Lokasi', 'required|trim');
		$this->form_validation->set_rules('work_method', 'Metode Pelaksanaan', 'required|trim');
		$this->form_validation->set_rules('program_description', 'Detail Kegiatan', 'required|trim');
		$this->form_validation->set_rules('delegation_requirement', 'Persyaratan Delegasi', 'required|trim');
		$this->form_validation->set_rules('program_activity', 'Program Pengabdian', 'required|trim');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('program/create', $data);
			$this->load->view('templates/footer');
		} else {
			if ($this->program->storeProgram()) {
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Program Berhasil Ditambahkan!</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Program Gagal Ditambahkan!</div>');
			}

			redirect('program');
		}
	}
	public function edit($id_program)
	{
		$data['user'] = $this->user->getUserLogin();
		$data['title'] = 'Edit Program';
		$data['program'] = $this->program->getProgramById($id_program);
		$data['tipe_program'] = $this->program_type->getProgramType();

		$this->form_validation->set_rules('title', 'Judul', 'required|trim');
		$this->form_validation->set_rules('location', 'Lokasi', 'required|trim');
		$this->form_validation->set_rules('work_method', 'Metode Pelaksanaan', 'required|trim');
		$this->form_validation->set_rules('program_description', 'Detail Kegiatan', 'required|trim');
		$this->form_validation->set_rules('delegation_requirement', 'Persyaratan Delegasi', 'required|trim');
		$this->form_validation->set_rules('program_activity', 'Program Pengabdian', 'required|trim');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('program/edit', $data);
			$this->load->view('templates/footer');
		} else {
			if ($this->program->storeProgram()) {
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Program Berhasil Ditambahkan!</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Program Gagal Ditambahkan!</div>');
			}

			redirect('program');
		}
	}

	public function program_type()
	{
		$data['user'] = $this->user->getUserLogin();
		$data['title'] = 'List Tipe Program';

		$data['program_type'] = $this->program_type->getProgramType();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('program/index_program_type', $data);
		$this->load->view('templates/footer');
	}

	public function create_program_type()
	{
		$data['user'] = $this->user->getUserLogin();
		$data['title'] = 'Tambah Tipe Program';

		$this->form_validation->set_rules('program_type_name', 'nama Tipe Program', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('program/create_program_type', $data);
			$this->load->view('templates/footer');
		} else {
			if ($this->program_type->storeProgramType()) {

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tipe Program Berhasil Ditambahkan!</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tipe Program Gagal Ditambahkan!</div>');
			}

			redirect('program/program_type');
		}
	}

	public function edit_program_type($id_program_type)
	{
		$data['user'] = $this->user->getUserLogin();
		$data['title'] = 'Edit Tipe Program';

		$data['program_type'] = $this->program_type->getProgramTypeById($id_program_type);

		$this->form_validation->set_rules('program_type_name', 'nama Tipe Program', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('program/edit_program_type', $data);
			$this->load->view('templates/footer');
		} else {
			if ($this->program_type->updateProgramType()) {
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tipe Program Berhasil Diubah!</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tipe Program Gagal Diubah!</div>');
			}

			redirect('program/program_type');
		}
	}

	public function delete_program_type($id_program_type)
	{
		if ($this->program_type->deleteProgramType($id_program_type)) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tipe Program Berhasil Dihapus!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tipe Program Gagal Dihapus!</div>');
		}
		redirect('program/program_type');
	}
}


/* End of file Program.php */
/* Location: ./application/controllers/Program.php */
