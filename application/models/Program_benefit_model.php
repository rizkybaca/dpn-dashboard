<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Program_benefit_model extends CI_Model
{

	public function getProgramBenefit()
	{
		return $this->db->get('program_benefits')->result_array();
	}

	public function store($new_program, $benefit_id)
	{
		$data = [
			"program_id" => $new_program['id_program'],
			"benefit_id" => $benefit_id
		];

		return $this->db->insert('program_benefits', $data);
	}
	public function delete($new_program)
	{
		return $this->db->delete('program_benefits', ['program_id' => $new_program]);
	}
}

/* End of file Program_benefit_model.php */
/* Location: ./application/models/Program_benefit_model.php */
