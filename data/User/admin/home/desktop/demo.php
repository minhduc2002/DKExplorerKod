<?php
function Expand_URL($expand) {
 function ger_origenal_url($url)
 {
 $ch = curl_init($url);
     curl_setopt($ch,CURLOPT_HEADER,true); // Get header information
     curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
     curl_setopt($ch, CURLOPT_FOLLOWLOCATION,false);
     $header = curl_exec($ch);
     
     $fields = explode("\r\n", preg_replace('/\x0D\x0A[\x09\x20]+/', ' ', $header)); // Parse information
         
     for($i=0;$i<count($fields);$i++)
     {
         if(strpos($fields[$i],'Location') !== false)
         {
             $url = str_replace("Location: ","",$fields[$i]);
         }
     }
     return $url;
 }
 $a = ger_origenal_url($expand);
 $b = ger_origenal_url($a);
 while ($b != $a) {$a = $b; $b = ger_origenal_url($a);}
 return $b;
}
echo Expand_URL('http://s.id/mp1');
?>