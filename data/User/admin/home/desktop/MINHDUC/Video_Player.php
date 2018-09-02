<title>Video Player TCL</title>
<link rel="icon" type="image/png" href="https://cdn0.iconfinder.com/data/icons/flat-green-icon-set/512/Play_Icon_FlatGreen.png" />
<?php
if ($_COOKIE["pass_value"] != "") {
$link = $_COOKIE["pass_value"];setcookie("pass_value", "", time() - 3600);
function Expand_URL($url) {
$input = strrev(file_get_contents('http://expandurl.com/'.$url));
$kt = strpos($input,'o/<>il/<');
 if ($kt != "") {
 $a = substr($input, $kt+8);
 return strrev(substr($a, 0, strpos($a,'ptth')+4));
 }
 else {return $url;}
}
$value = Expand_URL($link);
 if (strpos($value,'facebook.com') != '') {
 echo "<iframe src='https://www.facebook.com/plugins/video.php?href=$value&height=270' style='position:fixed; top:0px; bottom:0px; right:0px; width: 100%; border: none; margin:0; padding:0; overflow: hidden; z-index:999999; height: 100%;'>";
 }
 else {
 echo "<link rel='stylesheet' href='video-mediaelement/build/mediaelementplayer.css'/>". "\n".
        "<script src='video-mediaelement/build/jquery.js'></script>". "\n".
        "<script src='video-mediaelement/build/mediaelement-and-player.min.js'></script>". "\n".
        '<script>$(document).ready(function(){$("video, audio").mediaelementplayer();});</script>'. "\n". 
        "<script src='video-mediaelement/src/js/renderers/dailymotion.js'></script>". "\n".
        "<script src='video-mediaelement/src/js/renderers/dash.js'></script>". "\n".
        "<script src='video-mediaelement/src/js/renderers/flash.js'></script>". "\n".
        "<script src='video-mediaelement/src/js/renderers/flv.js'></script>". "\n".
        "<script src='video-mediaelement/src/js/renderers/hls.js'></script>". "\n".
        "<script src='video-mediaelement/src/js/renderers/html5.js'></script>". "\n".
        "<script src='video-mediaelement/src/js/renderers/soundcloud.js'></script>". "\n".
        "<script src='video-mediaelement/src/js/renderers/twitch.js'></script>". "\n".
        "<script src='video-mediaelement/src/js/renderers/vimeo.js'></script>". "\n".
        "<script src='video-mediaelement/src/js/renderers/youtube.js'></script>". "\n".
        "<style>body, html{margin: 0; padding: 0; height: 100%; overflow: hidden;}#content{position:absolute; left: 0; right: 0; bottom: 0; top: 0px;}</style>". "\n".
        "<video height='100%'><source src='$value'></video>";
 }
}
else {
echo '<head><script src="https://unpkg.com/sweetalert@2.1.0/dist/sweetalert.min.js"></script></head><body style="background: url(http://khohinhnen.com/wp-content/uploads/2014/08/hinh-nen-khong-gian-vu-tru-3d-14.jpg);"><script>function t(){swal("NHẬP URL",{content:{element: "input", text: "Nhập URL", attributes:{placeholder: "Nhập vào đây",},},}) .then((value)=>{var x=value; if (x==null){t();}else{if (x==""){x="https://bit.ly/duc2002";}else{if (x.indexOf("http")==-1){if (x.indexOf(".") !=-1){x="https://"+x;}else{if ((x.match(/\d/g))==null){x="https://s.id/"+x;}else{if (x.length==String((x.match(/\d/g)).join("")).length){x="https://s.id/tcl"+x;}else{x="https://s.id/"+x;}}}}}document.cookie="pass_value="+x; document.body.innerHTML="<style>.loading{position: absolute; top: 50%; left: 50%; transform: translateX(-50%) translateY(-50%);}</style>"+"<img src=\'https://i.pinimg.com/originals/16/6d/c4/166dc400bd4d0578151f0e7a73e57c9b.gif\' class=\'loading\'>"+"<iframe src=\'Video_Player.php\' style=\'position:fixed; top:0px; bottom:0px; right:0px; width: 100%; border: none; margin:0; padding:0; overflow: hidden; z-index:999999; height: 100%;\'>";}});}t();</script></body>';
}
?>