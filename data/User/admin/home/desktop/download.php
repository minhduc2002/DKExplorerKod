<?php
$link = $_GET['url'];
file_put_contents("1702.ts", file_get_contents($link));
?>