<?php
$data = file_get_contents("http://live.xoilac.tv/");
$link = array();
for ($i = 1; $i > 0; $i++ ) {
$s = substr($data, strpos($data, '<li class="swiper-slide">')+68, 29);
 if ($s != "") {$link[] = "http://live.xoilac.tv/".$s;}
 else break;
$data = substr($data, strpos($data, '<li class="swiper-slide">')+28);
}
foreach ($link as $value) {
$data =  file_get_contents($value);
$z = strpos($data, 'm3u8');
 if ($z != '') {
 $a = substr($data, strpos($data, '<title>')+7);
 $name = substr($a, 0, strpos($a, '</title>'));
 $b = substr($data, strpos($data, 'file')+7);
 $m3u8 = substr($b, 0, $z+4);
 $c = $a."\n";
 }
}
echo $c;
?>