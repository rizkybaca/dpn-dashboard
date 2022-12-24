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

	public function storePath()
	{

		$data = [
			"program_type_id" => $this->input->post('program_type_id', true),
			"path_name" => $this->input->post('path_name', true),
			"path_description" => $this->input->post('path_description', true),
			"path_icon" => $this->input->post('path_icon', true)
		];

		return $this->db->insert('paths', $data);
	}

	public function updatePath()
	{

		$data = [
			"program_type_id" => $this->input->post('program_type_id', true),
			"path_name" => $this->input->post('path_name', true),
			"path_description" => $this->input->post('path_description', true),
			"path_icon" => $this->input->post('path_icon', true)
		];

		$this->db->where('id_path', $this->input->post('id_path'));
		return $this->db->update('paths', $data);
	}

	public function deletePath($id_path)
	{
		return $this->db->delete('paths', ['id_path' => $id_path]);
	}
}

/* End of file Path_model.php */
/* Location: ./application/models/Path_model.php */
