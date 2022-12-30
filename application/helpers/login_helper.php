<?php

function is_logged_in()
{
	$ci = get_instance();
	if (!$ci->session->userdata('email')) {
		redirect('auth');
	} else {
		$role_id = $ci->session->userdata('role_id');
	}
}

function check_access($role_id, $menu_id)
{
	$ci = get_instance();

	$result = $ci->db->get_where('user_access_menu', [
		'role_id' => $role_id,
		'menu_id' => $menu_id
	]);

	if ($result->num_rows() > 0) {
		return "checked='checked'";
	}
}

function check_category($article_id, $category_id)
{
	$ci = get_instance();

	$result = $ci->db->get_where('article_categories', [
		'article_id' => $article_id,
		'category_id' => $category_id
	]);

	if ($result->num_rows() > 0) {
		return "checked='checked'";
	}
}
function check_path($program_id, $path_id)
{
	$ci = get_instance();

	$result = $ci->db->get_where('program_paths', [
		'program_id' => $program_id,
		'path_id' => $path_id
	]);

	if ($result->num_rows() > 0) {

		return "checked='checked'";
	}
}

function check_cta_link_path($program_id, $path_id)
{
	$ci = get_instance();

	$result = $ci->db->get_where('program_paths', [
		'program_id' => $program_id,
		'path_id' => $path_id
	]);

	if ($result->num_rows() > 0) {
		$result->result_array();
		return "value='" . $result->result_array[0]['cta_link'] . "'";
	}
}

function check_benefit($program_id, $benefit_id)
{
	$ci = get_instance();

	$result = $ci->db->get_where('program_benefits', [
		'program_id' => $program_id,
		'benefit_id' => $benefit_id
	]);

	if ($result->num_rows() > 0) {

		return "checked='checked'";
	}
}
