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


?>