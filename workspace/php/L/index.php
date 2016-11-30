<?php $page_title = "ブログ"; ?>
<?php include "parts/header.php"; ?>
	<div class="top">
		
	</div>
	<?php
		$sql = "select * from posts";
		$stmt = get_db()->query($sql);
	?>
	<div class="container">
		<a href="new.php">新規投稿</a>
		<?php foreach($stmt as $row) : ?>
			<article>
				<a href="show.php?id=<?php echo $row['id']; ?>">
					<div>投稿日時:<?php echo $row['created_at']; ?></div>
					<div>
						<img src="image.php?id=<?php echo $row['id']; ?>" alt="<?php echo $row['title']; ?>">
					</div>
					<div><?php echo $row['title']; ?></div>
					<div><?php echo $row['content']; ?></div>
				</a>
			</article>
			<hr>
		<?php endforeach; ?>
	</div>
<?php include "parts/footer.php"; ?>