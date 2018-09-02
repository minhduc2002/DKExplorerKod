<?php
function Expand_URL($url) {
$input = strrev(file_get_contents('http://expandurl.com/'.$url));
$kt = strpos($input,'o/<>il/<');
 if ($kt != "") {
 $a = substr($input, $kt+8);
 return strrev(substr($a, 0, strpos($a,'ptth')+4));
 }
 else {return $url;}
}
echo Expand_URL("s.id/mp1");
?>