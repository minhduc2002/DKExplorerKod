<?php
$value = $_GET['url'];
echo "<style>body, html{margin: 0; padding: 0; height: 100%; overflow: hidden;}#content{position:absolute; left: 0; right: 0; bottom: 0; top: 0px;}</style><script src='http://jwpsrv.com/library/v71rLsS8EeOxRSIACi0I_Q.js'></script><div id='JWplayer'></div><script type='text/javascript'> jwplayer('JWplayer').setup({file: 'bd.php?url=$value', width: '100%', height: '100%',});</script>";
?>