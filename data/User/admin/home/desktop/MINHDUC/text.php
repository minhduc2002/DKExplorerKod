<?php
$data = file_get_contents("http://php-bdtcl.7e14.starter-us-west-2.openshiftapps.com/data/User/admin/home/desktop/MINHDUC/jquery.js");
echo base64_encode($data);
?>