<?php
$a = date('H:i:s');
file_put_contents("kod.zip", file_get_contents("https://raw.githubusercontent.com/minhduc2002/DHKVN2002/master/KodExplorer.zip"));
$b = date('H:i:s');

unlink("kod.zip");

function time_to_seconds ($time) {
$time = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $time);
sscanf($time, "%d:%d:%d", $hours, $minutes, $seconds);
return $hours * 3600 + $minutes * 60 + $seconds;
}

$c = time_to_seconds($b)-time_to_seconds($a);
$ss= 18.27/$c;
$d = number_format($ss, 3, ',','');
echo 
"<font size='6' color='red'>".base64_decode("VGjhu51pIGdpYW4gYuG6r3QgxJHhuqd1IGzDoA==")." $a.</font> <br>". "\n".
"<font size='6' color='red'>".base64_decode("VGjhu51pIGdpYW4ga+G6v3QgdGjDumMgbMOg")." $b.</font> <br>". "\n".
"<font size='6' color='red'>".base64_decode("VOG6o2kgeG9uZyBmaWxlIGtvZC56aXAgKDE4LDIgbWIpIHRyb25nIA==").$c.base64_decode("IGdpw6J5").".</font> <br>". "\n";
if ($ss >= 1) {echo "<font size='6' color='red'>".base64_decode("VOG7kWMgxJHhu5kgbeG6oW5nIHRydW5nIGLDrG5oIGzDoA==")." $d mb/s.</font> <br>". "\n";}
else {$d = number_format($ss*1024, 3, ',',''); echo "<font size='6' color='red'>".base64_decode("VOG7kWMgxJHhu5kgbeG6oW5nIHRydW5nIGLDrG5oIGzDoA==")." $d kb/s.</font> <br>". "\n";}
?>