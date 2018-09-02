<style>
.loading {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
}
</style>
<img src="https://i.pinimg.com/originals/16/6d/c4/166dc400bd4d0578151f0e7a73e57c9b.gif" class="loading">
<?php
$link = $_COOKIE["pass_value"];setcookie("pass_value", "", time() - 3600);
function ExpandingURL($url) {
$input = file_get_contents('http://www.expandurl.net/expand?url='.rawurlencode($url));
$a = substr($input, strpos($input,'Long URL')+32);
return substr($a, 0, strpos($a,'">'));
}
$value = ExpandingURL($link);
 if (strpos($value,'facebook.com') != '') {
 echo "<iframe src='https://www.facebook.com/plugins/video.php?href=$value&height=270' style='position:fixed; top:0px; bottom:0px; right:0px; width: 100%; border: none; margin:0; padding:0; overflow: hidden; z-index:999999; height: 100%;'>";
 }
 else {
  if (strpos($value,'vatvo.tv') != '') {
  echo "<iframe src='$value' style='position:fixed; top:0px; bottom:0px; right:0px; width: 100%; border: none; margin:0; padding:0; overflow: hidden; z-index:999999; height: 100%;'>";
  }
  else {
   if (strpos($value,'m3u8') != '') {
   echo "<style>body, html{margin: 0; padding: 0; height: 100%; overflow: hidden;}#content{position:absolute; left: 0; right: 0; bottom: 0; top: 0px;}</style><script src='http://jwpsrv.com/library/v71rLsS8EeOxRSIACi0I_Q.js'></script><div id='JWplayer'></div><script type='text/javascript'> jwplayer('JWplayer').setup({file: '$value', width: '100%', height: '100%',});</script>";
   }
   else {
   echo "<link rel='stylesheet' href='video-mediaelement/build/mediaelementplayer.css'/>". "\n".
       "<script src='video-mediaelement/build/jquery.js'></script>". "\n".
       "<script src='video-mediaelement/build/mediaelement-and-player.min.js'></script>". "\n".
       '<script>$(document).ready(function(){$("video, audio").mediaelementplayer();});</script>'. "\n". 
       "<style>body, html{margin: 0; padding: 0; height: 100%; overflow: hidden;}#content{position:absolute; left: 0; right: 0; bottom: 0; top: 0px;}</style>". "\n".
       "<video width='100%' height='100%'><source src='$value'></video>";
   }
  }
 }
?>