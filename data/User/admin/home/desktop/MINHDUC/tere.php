<?php
file_put_contents('eawm.php', file_get_contents('data:text/html,%3C%3Fphp%20echo%20%22OCHO%22%3B%20%3F%3E'));
$a = file_get_contents('http://localhost/KodExplorer/data/User/admin/home/desktop/MINHDUC/eawm.php');
unlink('eawm.php');
echo $a;
?>