<?php
$c = $_POST['c'];
$n = $_POST['i'];

$f = scandir('./vids');
$w = [];
foreach($f as $v) {
	$v = trim($v);
	if (preg_match("#(\.webm|\.mp4)$#", $v))
		$w[] = $v;
};

if (empty($c))
	die ($w[0]);

$count = count($w);
for ($i = 0; $i < $count; $i++) {
	if ($c == $w[$i]) {
		$j = ($n == 'next') ? ($i + 1) % $count : ($i - 1 + $count) % $count;
		die($w[$j]);
	}
}
die ("not found");
?>