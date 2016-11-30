<?php require 'utils.php'; ?>
<?php
	$page_title = get_title("HOME");
?>
<?php include 'header.php'; ?>
	<div id="top">
		<div class="container">
			<h1><?php echo get_blogname(); ?></h1>
		</div>
	</div>
	<div class="container">
		<ul class="breadcrumbs">
			<li><a href="index.php">HOME</a></li>
		</ul>
		<div>
			<ul>
				<?php foreach(get_categories() as $row) : ?>
					<li>
						<?php
							$category = $row['category'];
							link_tag("index.php?cat=${category}", $category);
							echo $row['count']; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<a href="new.php">新規記事作成</a>
		<a href="index.php?st=draft">下書き一覧</a>
		<form action="index.php">
			<input type="text" name="q">
			<button>検索</button>
		</form>
		<?php
			// 月別アーカイブ一覧
			foreach(get_posts_month() as $row) :
				$year = $row['year'];
				$month = $row['month'];
				$show_month = to_english_month($month);
				$qs = "y=${year}&m=${month}";
				link_tag("index.php?${qs}", "${year}/${show_month}");
			endforeach; ?>
		<?php
			if (is_category()) {
				$cat = $_GET['cat'];
				$result = get_posts_by_category($cat);
			} else if (is_search()) {
				$q = $_GET['q'];
				$result = get_posts_by_search($q);
			} else if (is_draft()){
				$result = get_posts_by_status();
			} else if (is_archive_by_month()){
				$year = $_GET['y'];
				$month = $_GET['m'];
				$result = get_posts_by_month($year, $month);
			} else {
				$result = get_posts();
			}
			// $stmt = get_db()->query($sql);
			// $count_sql = str_replace('*', 'count(*)', $sql);
			// $count_stmt = get_db()->query($count_sql);
			// $count = $count_stmt->fetch();
			if (is_category()) : ?>
				<p>カテゴリ<?php echo $_GET['cat']; ?>の投稿一覧</p>
			<?php endif;
			if (count($result) == 0) { ?>
				<p>検索結果がありませんでした</p>

		<?php	} else {
			// 記事表示開始
			foreach($result as $row) { 
		?>
			<a href="show.php?id=<?php echo $row['id']; ?>">
				<article>
					<span class="time">
					<i class="fa fa-calendar" aria-hidden="true"></i><?php echo $row['created_at']; ?>
					</span>
					<span class="time">
						<i class="fa fa-calendar" aria-hidden="true"></i>
						<?php echo $row['updated_at']; ?>
					</span>
					<span>カテゴリ: <?php echo $row['category']; ?></span>
					<h2><?php echo $row['title']; ?></h2>
					
					<p><?php echo $row['content']; ?></p>
					<?php if (empty($row['image_path'])) : ?>
						<img src="img/noimage.png" alt="">
					<?php else : ?>
						<img src="image.php?id=<?php echo $row['id']; ?>" alt="<?php echo $row['title']; ?>">
					<?php endif; ?>
				</article>
			</a>
		<?php }} ?>
	</div>
	<div id="profile">
		<aside>
			<a href="edit_profile.php">
				<h2>プロフィール</h2>
				<?php $profile = get_profile(); ?>
				<img src="image.php?p" alt="<?php echo $profile['name']; ?>">
				<h3 class="name"><?php echo $profile['name']; ?></h3>
				<p class="bio"><?php echo $profile['bio']; ?></p>
			</a>
		</aside>
	</div>
<?php include 'footer.php'; ?>