<?php
$url = $_GET['url'];
$data = file_get_contents($url);
$a = substr($url, 0, strrpos($url, "/")+1);
$b = substr($data, strpos($data,',')+2);
$link = strrev(substr($b, 0, strpos($b,'.ts')));
$output = "";
for ($i=0;$i<strlen($link);$i++) {
 if (preg_match('/^[0-9]$/', $link[$i])) {$output .= $link[$i];}
 else break;
}
$nubzero = strrev($output);
$name = substr($b, 0, strpos($b, $nubzero));
for ($i=0; $i<substr_count($data, ",\n"); $i++) {
$nub = $nubzero+$i;
file_put_contents("ts/$name$nub.ts", file_get_contents($a."$name$nub.ts"));
}
echo str_replace(",\n", ",\nts/", $data);

//delete file

$time = 10;  
$path = './ts/';  
if ($handle = opendir($path))  
{  
    while (false !== ($file = readdir($handle)))  
    {  
        if (is_file($path.$file))  
        {  
            if (filemtime($path.$file) < ( time() - ( $time ) ) )  
            {  
                unlink($path.$file);  
            }  
        }  
    }  
}
?>