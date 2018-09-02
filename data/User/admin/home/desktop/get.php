<?php
$link = $_GET['url'];
$data = file_get_contents($link);
$a = substr($link, 0, strpos($link,'index.m3u8'));
$value = str_replace(','."\n", ','."\n".$a, $data);
echo $value;
?>