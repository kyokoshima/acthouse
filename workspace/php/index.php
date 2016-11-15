<?php
	$message = <<<EOT
	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
EOT;
	echo $message;
?>
<hr>
<pre>
<?php
	print_r($_SERVER);
?>
</pre>
<h2>GET情報</h2>
<?php
	print_r($_GET);
?>
<h2>POST情報</h2>
<?php print_r($_POST); ?>
<h2>FILES情報</h2>
<?php print_r($_FILES); ?>
<h2>REQUEST情報</h2>
<?php print_r($_REQUEST); ?>






