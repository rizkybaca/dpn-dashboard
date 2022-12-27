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
		$this->load->model('Program_path_model', 'programpath');
		$this->load->model('Benefit_model', 'benefit');
		$this->load->model('Program_benefit_model', 'programbenefit');
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

		$data['jalur'] = $this->path->getPath();

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

				$slug = url_title($this->input->post('title', true), 'dash', true);

				$new_program = $this->program->getProgramBySlug($slug);

				$first_path_check = (@$_POST['path_id'][0]) ? true : false;

				if ($first_path_check == true) {
					$pop_path = $this->input->post('path_id');
					$pop_cta_link = $this->input->post('cta_link');
					$count_path = count($pop_path);

					for ($i = 0; $i < $count_path; $i++) {
						$path_id = $pop_path[$i];
						$cta_link = $pop_cta_link[$i];
						$this->programpath->store($new_program, $path_id, $cta_link);
					}
				}

				$first_benefit_check = (@$_POST['benefit_id'][0]) ? true : false;

				if ($first_benefit_check == true) {
					$pop_benefit = $this->input->post('benefit_id');
					$count_benefit = count($pop_benefit);

					for ($i = 0; $i < $count_benefit; $i++) {
						$benefit_id = $pop_benefit[$i];
						$this->programbenefit->store($new_program, $benefit_id);
					}
				}

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

		$data['jalur'] = $this->path->getPathByProgramTypeId($data['program']['program_type_id']);
		$data['manfaat'] = $this->benefit->getBenefitByProgramTypeId($data['program']['program_type_id']);

		// $data['jalur_program'] = $this->programpath->getProgramPathsByProgramIdAndPathId($data['program']['id_program'], $data['']);
		// echo var_dump($data['jalur']);
		// die();

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

				$slug = url_title($this->input->post('title', true), 'dash', true);

				$new_program = $this->program->getProgramBySlug($slug);
				$this->programpath->delete($new_program['id_program']);
				$this->programbenefit->delete($new_program['id_program']);

				$first_path_check = (@$_POST['path_id'][0]) ? true : false;
				$first_benefit_check = (@$_POST['benefit_id'][0]) ? true : false;

				if ($first_path_check == true) {
					$pop_path = $this->input->post('path_id');
					$pop_cta_link = $this->input->post('cta_link');
					$count_path = count($pop_path);

					for ($i = 0; $i < $count_path; $i++) {
						$path_id = $pop_path[$i];
						$cta_link = $pop_cta_link[$i];
						$this->programpath->store($new_program, $path_id, $cta_link);
					}
				}

				if ($first_benefit_check == true) {
					$pop_benefit = $this->input->post('benefit_id');
					$count_category = count($pop_benefit);

					for ($i = 0; $i < $count_category; $i++) {
						$benefit_id = $pop_benefit[$i];
						$this->programbenefit->store($new_program, $benefit_id);
					}
				}

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

			$this->programpath->delete($id_program);
			$this->programbenefit->delete($id_program);

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

	// public function program_path($program_id)
	// {

	// 	$data['user'] = $this->user->getUserLogin();
	// 	$data['title'] = 'Jalur Program';
	// 	$data['program'] = $this->program->getProgramById($program_id);

	// 	$data['jalur'] = $this->path->getPath();

	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('templates/sidebar', $data);
	// 	$this->load->view('templates/topbar', $data);
	// 	$this->load->view('program/program_path', $data);
	// 	$this->load->view('templates/footer');
	// }

	// public function cp()
	// {

	// 	$data['user'] = $this->user->getUserLogin();
	// 	$path_id = $this->input->post('pathId');
	// 	$program_id = $this->input->post('programId');
	// 	$cta_link = $this->input->post('cta_link');

	// 	$data = [
	// 		'program_id' => $program_id,
	// 		'path_id' => $path_id,
	// 		'cta_link' => $cta_link
	// 	];

	// 	$result = $this->db->get_where('program_paths', $data);

	// 	if ($result->num_rows() < 1) {
	// 		$this->db->insert('program_paths', $data);
	// 	} else {
	// 		$this->db->delete('program_paths', $data);
	// 	}

	// 	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access changed!</div>');
	// }

	// public function program_benefit($program_id)
	// {

	// 	$data['user'] = $this->user->getUserLogin();
	// 	$data['title'] = 'Manfaat Program';
	// 	$data['program'] = $this->program->getProgramById($program_id);

	// 	$data['manfaat'] = $this->benefit->getBenefit();

	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('templates/sidebar', $data);
	// 	$this->load->view('templates/topbar', $data);
	// 	$this->load->view('program/program_benefit', $data);
	// 	$this->load->view('templates/footer');
	// }
	// public function pb()
	// {

	// 	$data['user'] = $this->user->getUserLogin();
	// 	$benefit_id = $this->input->post('benefitId');
	// 	$program_id = $this->input->post('programId');

	// 	$data = [
	// 		'program_id' => $program_id,
	// 		'benefit_id' => $benefit_id
	// 	];

	// 	$result = $this->db->get_where('program_benefits', $data);

	// 	if ($result->num_rows() < 1) {
	// 		$this->db->insert('program_benefits', $data);
	// 	} else {
	// 		$this->db->delete('program_benefits', $data);
	// 	}

	// 	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access changed!</div>');
	// }

	public function pt()
	{
		$program_type_id = $_POST['programTypeId'];
		echo $this->path->getPathForCheckedByProgramTypeId($program_type_id);
	}

	public function benefit_program()
	{
		$program_type_id = $_POST['programTypeId'];
		echo $this->benefit->getBenefitForCheckedByProgramTypeId($program_type_id);
	}

	public function checkeditprogrampath()
	{
		$program_type_id = $_POST['programTypeId'];
		$program_id = $_POST['programId'];
		echo $this->path->getPathForCheckedEditByProgramTypeIdAndProgramId($program_type_id, $program_id);
	}

	public function checkeditprogrambenefit()
	{
		$program_type_id = $_POST['programTypeId'];
		$program_id = $_POST['programId'];
		echo $this->benefit->getBenefitForCheckedEditByProgramTypeIdAndProgramId($program_type_id, $program_id);
	}
}


/* End of file Program.php */
/* Location: ./application/controllers/Program.php */
