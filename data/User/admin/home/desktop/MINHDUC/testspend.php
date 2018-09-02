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
"<font size='6' color='red'>Thời gian bắt đầu là $a.</font> <br>". "\n".
"<font size='6' color='red'>Thời gian kết thúc là $b.</font> <br>". "\n".
"<font size='6' color='red'>Tải xong file kod.zip (18,2 mb) trong $c giây.</font> <br>". "\n";
if ($ss >= 1) {echo "<font size='6' color='red'>Tốc độ mạng trung bình là $d mb/s.</font> <br>". "\n";}
else {$d = number_format($ss*1024, 3, ',',''); echo "<font size='6' color='red'>Tốc độ mạng trung bình là $d kb/s.</font> <br>". "\n";}
?>