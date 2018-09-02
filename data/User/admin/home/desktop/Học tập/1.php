<?php
function cong ($stnc, $sthc) {
 $kc = 0;
 $tong = '';
 $stnc = strval($stnc); $lc1 = strlen($stnc); $cdn1 = strrev($stnc);
 $sthc = strval($sthc); $lc2 = strlen($sthc); $cdn2 = strrev($sthc);
  if ($lc1 > $lc2) {$n = $lc1;} else {$n = $lc2;}
  for ($xc = 0; $xc < $n; $xc++) {
      if (isset($cdn1[$xc])) {$a = $cdn1[$xc];} else {$a = 0;}
      if (isset($cdn2[$xc])) {$b = $cdn2[$xc];} else {$b = 0;}
      $c = $a+$b+$kc;
      if ($c >= 10 & $xc != ($n-1)) {
          $tong = ($c-10).$tong;
          $kc = 1;
      }
      else {
          $tong = $c.$tong;
          $kc = 0;
      }
  }
 return $tong; 
}
function nhan ($stnn, $sthn) {
    $tich = 0;
    $stnn = strval($stnn); $ln1 = strlen($stnn); $ndn = strrev($stnn);
    $sthn = strval($sthn); $ln2 = strlen($sthn);
    for ($xn1 = 0; $xn1 < $ln1; $xn1++) {
        $kn = 0;
        $a = $ndn[$xn1];
        $s = '';
        if ($a != '0') {
            for ($xn2 = $ln2-1; $xn2 >= 0; $xn2--) {
                $b = $a*$sthn[$xn2]+$kn;
                if ($b >= 10 & $xn2 != 0) {
                    $s = strval($b)[1].$s; 
                    $kn = strval($b)[0];
                }
                else {
                    $s = strval($b).$s;
                    $kn = 0;
                }
            }
            for ($n10 = 1; $n10 <= $xn1; $n10++) {
                $s = $s.'0';
            }    
            $tich = cong($s, $tich);
        }
    }
    return $tich;
}
function luy_thua ($cs, $sm) {
 $lt = 1;
 for ($xlt = 0; $xlt < $sm; $xlt++) {
     $lt = nhan($cs, $lt);
 }
 return $lt;
}
echo luy_thua(2, 10000);
?>