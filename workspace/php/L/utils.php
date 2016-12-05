<?php

	function get_db() {
		$db = new PDO('mysql:host=localhost;dbname=blog_l;charset=utf8mb4', 'root', '');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $db;
	}
	function get_post($id) {
		$sql = "select * from posts where id = '${id}'";
		$post = get_db()->query($sql)->fetch();
		return $post;
	}
	function get_limit() {
		return 5;
	}
	function get_posts($offset) {
		$limit = get_limit();
		if ($offset < 0) {
			$offset = 0;
		}
		$sql = "select * from posts where status != 'draft' limit ${limit} offset ${offset}";

		$stmt = get_db()->query($sql);
		return $stmt;
	}

	function get_drafts($offset) {
		$limit = get_limit();
		$sql = "select * from posts where status = 'draft' limit ${limit} offset ${offset}";
		return get_db()->query($sql);
	}

	function get_drafts_count() {
		$sql = "select count(*) as count from posts where status = 'draft'";
		$result = get_db()->query($sql)->fetch();
		return $result['count'];
	}

	function get_posts_count() {
		$sql = "select count(*) as count from posts where status != 'draft'";
		$result = get_db()->query($sql)->fetch();
		return $result['count'];
	}

	function link_tag($url, $label, $params) {
		$qs = "?";
		foreach($params as $key => $param) {
			$qs = "${qs}${key}=${param}&";
		}
		$url = "${url}${qs}";
		$tag = "<a href='${url}'>${label}</a>";
		echo $tag;
	}

?>