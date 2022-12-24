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
		$this->load->model('Path_model', 'path');
		$this->load->model('Benefit_model', 'benefit');
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
			if ($this->program->updateProgram()) {
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Program Berhasil Diubah!</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Program Gagal Diubah!</div>');
			}

			redirect('program');
		}
	}

	public function delete($id_program)
	{

		if ($this->program->deleteProgram($id_program)) {

			$old_image = $this->input->post('old_image', true);
			if ($old_image != 'default.jpg') {
				unlink(FCPATH . './assets/img/program/image/' . $old_image);
			}

			$old_banner = $this->input->post('old_banner', true);
			if ($old_banner != 'default.jpg') {
				unlink(FCPATH . './assets/img/program/banner/' . $old_banner);
			}

			$old_video = $this->input->post('old_video', true);
			if ($old_video != 'default.mp4') {
				unlink(FCPATH . './assets/video/program/video_preview/' . $old_video);
			}

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Program berhasil dihapus!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Program gagal dihapus!</div>');
		}

		redirect('program');
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

	public function path()
	{
		$data['user'] = $this->user->getUserLogin();
		$data['title'] = 'List Jalur';

		$data['jalur'] = $this->path->getPath();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('program/index_path', $data);
		$this->load->view('templates/footer');
	}

	public function create_path()
	{
		$data['user'] = $this->user->getUserLogin();
		$data['title'] = 'Tambah Jalur';
		$data['tipe_program'] = $this->program_type->getProgramType();

		$this->form_validation->set_rules('path_name', 'nama Jalur', 'required|trim');
		$this->form_validation->set_rules('path_description', 'Deskripsi Jalur', 'required|trim');
		$this->form_validation->set_rules('path_icon', 'Icon Jalur', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('program/create_path', $data);
			$this->load->view('templates/footer');
		} else {
			if ($this->path->storePath()) {
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Jalur Berhasil Ditambahkan!</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Jalur Gagal Ditambahkan!</div>');
			}

			redirect('program/path');
		}
	}

	public function edit_path($id_path)
	{
		$data['user'] = $this->user->getUserLogin();
		$data['title'] = 'Tambah Jalur';
		$data['jalur'] = $this->path->getPathById($id_path);
		$data['tipe_program'] = $this->program_type->getProgramType();

		$this->form_validation->set_rules('path_name', 'nama Jalur', 'required|trim');
		$this->form_validation->set_rules('path_description', 'Deskripsi Jalur', 'required|trim');
		$this->form_validation->set_rules('path_icon', 'Icon Jalur', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('program/edit_path', $data);
			$this->load->view('templates/footer');
		} else {
			if ($this->path->updatePath()) {
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Jalur Berhasil Ditambahkan!</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Jalur Gagal Ditambahkan!</div>');
			}

			redirect('program/path');
		}
	}

	public function delete_path($id_path)
	{
		if ($this->path->deletePath($id_path)) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Jalur berhasil dihapus!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Jalur gagal dihapus!</div>');
		}
		redirect('program/path');
	}

	// benefit
	public function benefit()
	{
		$data['user'] = $this->user->getUserLogin();
		$data['title'] = 'List Manfaat';

		$data['manfaat'] = $this->benefit->getBenefit();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('program/index_benefit', $data);
		$this->load->view('templates/footer');
	}

	public function create_benefit()
	{
		$data['user'] = $this->user->getUserLogin();
		$data['title'] = 'Tambah Manfaat';
		$data['tipe_program'] = $this->program_type->getProgramType();

		$this->form_validation->set_rules('benefit_name', 'nama Manfaat', 'required|trim');
		$this->form_validation->set_rules('benefit_description', 'Deskripsi Manfaat', 'required|trim');
		$this->form_validation->set_rules('benefit_icon', 'Icon Manfaat', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('program/create_benefit', $data);
			$this->load->view('templates/footer');
		} else {
			if ($this->benefit->storeBenefit()) {
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Manfaat Berhasil Ditambahkan!</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Manfaat Gagal Ditambahkan!</div>');
			}

			redirect('program/benefit');
		}
	}

	public function edit_benefit($id_benefit)
	{
		$data['user'] = $this->user->getUserLogin();
		$data['title'] = 'Tambah Manfaat';
		$data['manfaat'] = $this->benefit->getBenefitById($id_benefit);
		$data['tipe_program'] = $this->program_type->getProgramType();

		$this->form_validation->set_rules('benefit_name', 'nama Manfaat', 'required|trim');
		$this->form_validation->set_rules('benefit_description', 'Deskripsi Manfaat', 'required|trim');
		$this->form_validation->set_rules('benefit_icon', 'Icon Manfaat', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('program/edit_benefit', $data);
			$this->load->view('templates/footer');
		} else {
			if ($this->benefit->updateBenefit()) {
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Manfaat Berhasil Diubah!</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Manfaat Gagal Diubah!</div>');
			}

			redirect('program/benefit');
		}
	}

	public function delete_benefit($id_benefit)
	{
		if ($this->benefit->deleteBenefit($id_benefit)) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Manfaat berhasil dihapus!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Manfaat gagal dihapus!</div>');
		}
		redirect('program/benefit');
	}
}


/* End of file Program.php */
/* Location: ./application/controllers/Program.php */
