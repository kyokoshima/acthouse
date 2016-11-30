<?php $page_title = "記事詳細"; ?>
<?php include "parts/header.php"; ?>
	<?php
		$id = $_GET['id'];
		$post = get_post($id);
	?>
	<article>
		<div>
			タイトル: <h2><?php echo $post['title']; ?></h2>
		</div>
		<div>
			<img src="image.php?id=<?php echo $id; ?>" alt="">
		</div>
		<div>
			内容: <p><?php echo $post['content']; ?></p>
		</div>
	</article>
	<a href="edit.php?id=<?php echo $id; ?>">編集する</a>
	<a href="delete.php?id=<?php echo $id; ?>">削除する</a>
	<a href="index.php">TOPへ戻る</a>
<?php include "parts/footer.php"; ?>
