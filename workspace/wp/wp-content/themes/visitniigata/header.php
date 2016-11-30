<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<?php wp_head(); ?>
</head>
<body>
	<div class="top">
		<div class="inner">
			<h2><?php bloginfo('name'); ?></h2>
			<p><?php bloginfo('description'); ?></p>
		</div>
	</div>