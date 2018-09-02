<?php
$link = $_GET['url'];
$data = file_get_contents($link);
$a = substr($link, 0, strrpos($link, "/")+1);
$b = substr($data, strpos($data,',')+2);
$link1 = substr($b, 0, strpos($b,'.ts')+3);
$link2 = substr($b, strpos($b,',')+2, strpos($b,"\n"));
file_put_contents("ts/$link1", file_get_contents($a.$link1));
file_put_contents("ts/$link2", file_get_contents($a.$link2));
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