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
