<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Program_path_model extends CI_Model
{

	public function getProgramPaths()
	{
		return $this->db->get('program_paths')->result_array();
	}

	public function getProgramPathsByProgramIdAndPathId($program_id, $path_id)
	{
		return $this->db->get_where('program_paths', ['program_id' => $program_id, 'path_id' => $path_id])->result_array();
	}

	public function store($new_program, $path_id, $cta_link)
	{
		$data = [
			"program_id" => $new_program['id_program'],
			"path_id" => $path_id,
			"cta_link" => $cta_link

		];

		return $this->db->insert('program_paths', $data);
	}

	public function delete($new_program)
	{
		return $this->db->delete('program_paths', ['program_id' => $new_program]);
	}
}

/* End of file Program_paths_model.php */
/* Location: ./application/models/Program_paths_model.php */
