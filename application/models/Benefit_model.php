<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Benefit_model extends CI_Model
{

	public function getBenefit()
	{
		$this->db->select('*');
		$this->db->from('benefits');
		$this->db->join('program_types', 'program_types.id_program_type = benefits.program_type_id');
		return $this->db->get()->result_array();
	}

	public function getBenefitById($id_benefit)
	{
		$this->db->select('*');
		$this->db->from('benefits');
		$this->db->join('program_types', 'program_types.id_program_type = benefits.program_type_id');
		$this->db->where('benefits.id_benefit', $id_benefit);
		return $this->db->get()->row_array();
	}

	public function getBenefitByProgramTypeId($program_type_id)
	{
		$this->db->select('*');
		$this->db->from('benefits');
		$this->db->join('program_types', 'program_types.id_program_type = benefits.program_type_id');
		$this->db->where('benefits.program_type_id', $program_type_id);
		return $this->db->get()->result_array();
	}

	public function getBenefitForCheckedByProgramTypeId($program_type_id)
	{
		$this->db->select('*');
		$this->db->from('benefits');
		$this->db->join('program_types', 'program_types.id_program_type = benefits.program_type_id');
		$this->db->where('benefits.program_type_id', $program_type_id);

		$result = $this->db->get()->result_array();

		$count = count($result);

		if ($count <= 0) {
			return "<label class='fst-italic text-danger'>belum ada manfaat pada tipe program ini!</label><br>";
		} else {
			$benefit = '';
			foreach ($result as $key) {
				$benefit .= "
				<div class='form-check form-check-inline text-dark fst-normal'>
					<label for='benefit_id$key[id_benefit]' class='form-check-label'>$key[benefit_name]</label>
					<input class='form-check-input' id='benefit_id$key[id_benefit]' name='benefit_id[]' type='checkbox' value='$key[id_benefit]'>
				</div>
			";
			}
			return $benefit;
		}
	}

	public function getBenefitForCheckedEditByProgramTypeIdAndProgramId($program_type_id, $program_id)
	{
		$this->db->select('*');
		$this->db->from('benefits');
		$this->db->join('program_types', 'program_types.id_program_type = benefits.program_type_id');
		$this->db->where('benefits.program_type_id', $program_type_id);

		$result = $this->db->get()->result_array();

		$count = count($result);

		if ($count <= 0) {
			return "<label class='fst-italic text-danger'>belum ada manfaat pada tipe program ini!</label><br>";
		} else {
			$benefit = '';
			foreach ($result as $key) {
				$benefit .= "
				<div class='form-check form-check-inline text-dark fst-normal'>
					<label for='benefit_id$key[id_benefit]' class='form-check-label'>$key[benefit_name]</label>
					<input " . check_benefit($program_id, $key['id_benefit']) . " class='form-check-input' id='benefit_id$key[id_benefit]' name='benefit_id[]' type='checkbox' value='$key[id_benefit]'>
				</div>
			";
			}
			return $benefit;
		}
	}

	public function storeBenefit()
	{

		$data = [
			"program_type_id" => $this->input->post('program_type_id', true),
			"benefit_name" => $this->input->post('benefit_name', true),
			"benefit_description" => $this->input->post('benefit_description', true),
			"benefit_icon" => $this->input->post('benefit_icon', true)
		];

		return $this->db->insert('benefits', $data);
	}

	public function updateBenefit()
	{

		$data = [
			"program_type_id" => $this->input->post('program_type_id', true),
			"benefit_name" => $this->input->post('benefit_name', true),
			"benefit_description" => $this->input->post('benefit_description', true),
			"benefit_icon" => $this->input->post('benefit_icon', true)
		];

		$this->db->where('id_benefit', $this->input->post('id_benefit'));
		return $this->db->update('benefits', $data);
	}

	public function deleteBenefit($id_benefit)
	{
		return $this->db->delete('benefits', ['id_benefit' => $id_benefit]);
	}
}

/* End of file Benefit_model.php */
/* Location: ./application/models/Benefit_model.php */
