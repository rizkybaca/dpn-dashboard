<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Program_model extends CI_Model
{

	public function getProgram()
	{
		return $this->db->get('programs')->result_array();
	}
	public function getProgramById($id_program)
	{
		return $this->db->get_where('programs', ['id_program' => $id_program])->row_array();
	}
	public function storeProgram()
	{

		$data = [
			"title" => $this->input->post('title', true),
			"location" => $this->input->post('location', true),
			"work_method" => $this->input->post('work_method', true),
			"program_description" => $this->input->post('program_description', true),
			"delegation_requirement" => $this->input->post('delegation_requirement', true),
			"program_type_id" => $this->input->post('program_type_id', true),
			"program_activity" => $this->input->post('program_activity', true)
		];


		$data += [
			"slug" => url_title($data['title'], 'dash', true),
			"created_at" => time(),
			"is_active" => 'y'
		];


		$upload_image = (@$_FILES['image']['name']) ? true : false;

		if ($upload_image == true) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
			$config['max_size']     = '2048';
			$config['upload_path'] = './assets/img/program/image/';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('image')) {
				$new_image = $this->upload->data('file_name');
				// $this->db->set('image', $new_image);
				$data += [
					"image" => $new_image
				];
			} else {
				echo $this->upload->display_errors();
			}
		}

		$upload_banner = (@$_FILES['banner']['name']) ? true : false;

		if ($upload_banner == true) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
			$config['max_size']     = '2048';
			$config['upload_path'] = './assets/img/program/banner/';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('banner')) {
				$new_banner = $this->upload->data('file_name');
				// $this->db->set('banner', $new_banner);
				$data += [
					"banner" => $new_banner
				];
			} else {
				echo $this->upload->display_errors();
			}
		}

		$upload_video = (@$_FILES['video']['name']) ? true : false;

		if ($upload_video == true) {
			$config['allowed_types'] = 'webm|mpg|mp2|mpeg|mpe|mpv|ogg|mp4|m4p|m4v|avi|wmv|mov|qt|flv|swf|WEBM|MPG|MP2|MPEG|MPE|MPV|OGG|MP4|M4P|M4V|AVI|WMV|MOV|QT|FLV|SWF';
			$config['max_size']     = '51200'; //50MB
			$config['upload_path'] = './assets/video/program/video_preview/';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('video')) {
				$new_video = $this->upload->data('file_name');
				// $this->db->set('video', $new_video);
				$data += [
					"video" => $new_video
				];
			} else {
				echo $this->upload->display_errors();
			}
		}

		return $this->db->insert('programs', $data);
	}

	public function updateProgram()
	{

		$data = [
			"title" => $this->input->post('title', true),
			"location" => $this->input->post('location', true),
			"work_method" => $this->input->post('work_method', true),
			"program_description" => $this->input->post('program_description', true),
			"delegation_requirement" => $this->input->post('delegation_requirement', true),
			"program_type_id" => $this->input->post('program_type_id', true),
			"program_activity" => $this->input->post('program_activity', true)
		];


		$data += [
			"slug" => url_title($data['title'], 'dash', true),
			"updated_at" => time(),
			"is_active" => 'y'
		];


		$upload_image = (@$_FILES['image']['name']) ? true : false;

		if ($upload_image == true) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
			$config['max_size']     = '2048';
			$config['upload_path'] = './assets/img/program/image/';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('image')) {

				$new_image = $this->upload->data('file_name');
				$data += [
					"image" => $new_image
				];
			} else {
				echo $this->upload->display_errors();
			}
		}

		$upload_banner = (@$_FILES['banner']['name']) ? true : false;

		if ($upload_banner == true) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
			$config['max_size']     = '2048';
			$config['upload_path'] = './assets/img/program/banner/';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('banner')) {
				$new_banner = $this->upload->data('file_name');
				$data += [
					"banner" => $new_banner
				];
			} else {
				echo $this->upload->display_errors();
			}
		}

		$upload_video = (@$_FILES['video']['name']) ? true : false;

		if ($upload_video == true) {
			$config['allowed_types'] = 'webm|mpg|mp2|mpeg|mpe|mpv|ogg|mp4|m4p|m4v|avi|wmv|mov|qt|flv|swf|WEBM|MPG|MP2|MPEG|MPE|MPV|OGG|MP4|M4P|M4V|AVI|WMV|MOV|QT|FLV|SWF';
			$config['max_size']     = '51200'; //50MB
			$config['upload_path'] = './assets/video/program/video_preview/';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('video')) {
				$new_video = $this->upload->data('file_name');
				$data += [
					"video" => $new_video
				];
			} else {
				echo $this->upload->display_errors();
			}
		}

		$this->db->where('id_program', $this->input->post('id_program'));

		$result = $this->db->update('programs', $data);

		if ($result == true) {
			$exImage = (@$data['image']) ? true : false;
			$exBanner = (@$data['banner']) ? true : false;
			$exVideo = (@$data['video']) ? true : false;

			if ($exImage == true) {
				// delete old asset
				$old_image = $this->input->post('old_image', true);
				if ($old_image != 'default.jpg') {
					unlink(FCPATH . 'assets/img/program/image/' . $old_image);
				}
			}
			if ($exBanner == true) {
				$old_banner = $this->input->post('old_banner', true);
				if ($old_banner != 'default.jpg') {
					unlink(FCPATH . 'assets/img/program/banner/' . $old_banner);
				}
			}
			if ($exVideo == true) {
				$old_video = $this->input->post('old_video', true);
				if ($old_video != 'default.jpg') {
					unlink(FCPATH . 'assets/video/program/video_preview/' . $old_video);
				}
			}
		}

		return $result;
	}

	public function deleteProgram($id_program)
	{
		return $this->db->delete('programs', ['id_program' => $id_program]);
	}
}

/* End of file Program_model.php */
/* Location: ./application/models/Program_model.php */
