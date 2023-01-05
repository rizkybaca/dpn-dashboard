<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Path_model extends CI_Model
{

	public function getPath()
	{
		$this->db->select('*');
		$this->db->from('paths');
		$this->db->join('program_types', 'program_types.id_program_type = paths.program_type_id');
		return $this->db->get()->result_array();
	}

	public function getPathById($id_path)
	{
		$this->db->select('*');
		$this->db->from('paths');
		$this->db->join('program_types', 'program_types.id_program_type = paths.program_type_id');
		$this->db->where('paths.id_path', $id_path);
		return $this->db->get()->row_array();
	}
	public function getPathByProgramTypeId($program_type_id)
	{
		$this->db->select('*');
		$this->db->from('paths');
		$this->db->join('program_types', 'program_types.id_program_type = paths.program_type_id');
		$this->db->where('paths.program_type_id', $program_type_id);
		return $this->db->get()->result_array();
	}

	public function getPathForCheckedByProgramTypeId($program_type_id)
	{
		$this->db->select('*');
		$this->db->from('paths');
		$this->db->join('program_types', 'program_types.id_program_type = paths.program_type_id');
		$this->db->where('paths.program_type_id', $program_type_id);

		$result = $this->db->get()->result_array();

		$count = count($result);

		if ($count <= 0) {
			return "<label class='fst-italic text-danger'>belum ada jalur pada tipe program ini!</label><br>";
		} else {
			$path = '';
			foreach ($result as $key) {
				$path .= "
			<div class='row align-items-center mb-2 text-dark fst-normal'>
				<div class='col col-sm-12 col-lg-6 col-md-12'>
					<input type='text' id='cta_link' name='cta_link[]' class='form-control' placeholder='link daftar jalur'>
					<div id='cta_link' class='form-text text-danger'>Wajib dikosongkan jika tidak dipilih!</div>
				</div>
				<div class='col'>
					<div class='form-check form-check-inline'>
						<label for='path_id$key[id_path]' class='form-check-label'>$key[path_name]</label>
						<input class='form-check-input' id='path_id$key[id_path]' name='path_id[]' type='checkbox' value='$key[id_path]'>
					</div>
				</div>
			</div>
			";
			}
			return $path;
		}
	}

	public function getPathForCheckedEditByProgramTypeIdAndProgramId($program_type_id, $program_id)
	{
		$this->db->select('*');
		$this->db->from('paths');
		$this->db->join('program_types', 'program_types.id_program_type = paths.program_type_id');
		$this->db->where('paths.program_type_id', $program_type_id);

		$result = $this->db->get()->result_array();

		$count = count($result);

		if ($count <= 0) {
			return "<label class='fst-italic text-danger'>belum ada jalur pada tipe program ini!</label><br>";
		} else {
			$path = '';
			foreach ($result as $key) {
				$path .= "
			<div class='row align-items-center mb-2 text-dark fst-normal'>
				<div class='col col-sm-12 col-lg-6 col-md-12'>
					<input " . check_cta_link_path($program_id, $key['id_path']) . "type='text' id='cta_link' name='cta_link[]' class='form-control' placeholder='link daftar jalur'>
					<div id='cta_link' class='form-text text-danger'>Wajib dikosongkan jika tidak dipilih!</div>
				</div>
				<div class='col'>
					<div class='form-check form-check-inline'>
						<label for='path_id$key[id_path]' class='form-check-label'>$key[path_name]</label>
						<input " . check_path($program_id, $key['id_path']) . "class='form-check-input' id='path_id$key[id_path]' name='path_id[]' type='checkbox' value='$key[id_path]'>
					</div>
				</div>
			</div>
			";
			}
			return $path;
		}
	}

	public function storePath()
	{

		$data = [
			"program_type_id" => $this->input->post('program_type_id', true),
			"path_name" => $this->input->post('path_name', true),
			"path_description" => $this->input->post('path_description', true)
			// "path_icon" => $this->input->post('path_icon', true)
		];

		$upload_path_icon = (@$_FILES['path_icon']['name']) ? true : false;

		if ($upload_path_icon == true) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
			$config['max_size']     = '2048';
			$config['upload_path'] = './assets/img/program/path_icon/';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('path_icon')) {
				$new_path_icon = $this->upload->data('file_name');
				// $this->db->set('path_icon', $new_path_icon);
				$data += [
					"path_icon" => $new_path_icon
				];
			} else {
				echo $this->upload->display_errors();
			}
		}

		return $this->db->insert('paths', $data);
	}

	public function updatePath()
	{

		$data = [
			"program_type_id" => $this->input->post('program_type_id', true),
			"path_name" => $this->input->post('path_name', true),
			"path_description" => $this->input->post('path_description', true)
			// "path_icon" => $this->input->post('path_icon', true)
		];

		$upload_path_icon = (@$_FILES['path_icon']['name']) ? true : false;

		if ($upload_path_icon == true) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
			$config['max_size'] = '2048';
			$config['upload_path'] = './assets/img/program/path_icon/';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('path_icon')) {
				$new_path_icon = $this->upload->data('file_name');
				// $this->db->set('path_icon', $new_path_icon);
				$data += [
					"path_icon" => $new_path_icon
				];
			} else {
				echo $this->upload->display_errors();
			}
		}

		$this->db->where('id_path', $this->input->post('id_path'));
		$result = $this->db->update('paths', $data);

		if ($result == true) {
			$ex_path_icon = (@$data['path_icon']) ? true : false;

			if ($ex_path_icon == true) {
				// delete old assets
				$old_path_icon = $this->input->post('old_path_icon', true);
				if ($old_path_icon != 'default.jpg') {
					unlink(FCPATH . 'assets/img/program/path_icon/' . $old_path_icon);
				}
			}
		}

		return $result;
	}

	public function deletePath($id_path)
	{
		return $this->db->delete('paths', ['id_path' => $id_path]);
	}
}

/* End of file Path_model.php */
/* Location: ./application/models/Path_model.php */
