<?php
$value = $_GET['url'];
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
?>