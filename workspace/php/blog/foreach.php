<pre>
<?php
	$arr = [['a' => 'b'],['c' => 'd'], ['e' => 'f'] ];
	echo (count($arr));
	echo "\n";
	foreach($arr as $i=>$row){
		print_r($i);
		echo "\n";
		print_r($row);
	}
?>
</pre>
