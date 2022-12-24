<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Program_type_model extends CI_Model
{

	public function getProgramType()
	{
		return $this->db->get('program_types')->result_array();
	}
	public function getProgramTypeById($id_program_type)
	{
		return $this->db->get_where('program_types', ['id_program_type' => $id_program_type])->row_array();
	}
	public function storeProgramType()
	{

		$data = [
			"program_type_name" => $this->input->post('program_type_name', true)
		];

		return $this->db->insert('program_types', $data);
	}

	public function updateProgramType()
	{

		$data = [
			"program_type_name" => $this->input->post('program_type_name', true)
		];

		$this->db->where('id_program_type', $this->input->post('id_program_type'));
		return $this->db->update('program_types', $data);
	}

	public function deleteProgramType($id_program_type)
	{
		return $this->db->delete('program_types', ['id_program_type' => $id_program_type]);
	}
}

/* End of file Program_types_model.php */
/* Location: ./application/models/Program_types_model.php */
