<?php
// script name: login_to_facebook.php
// coder: Sony AK Knowledge Center - www.sony-ak.com


// your facebook credentials
$username = "minhtien.vu.7169709";
$password = "minhtien";

// access to facebook home page (to get the cookies)
$curl = curl_init ();
curl_setopt ( $curl, CURLOPT_URL, "http://www.facebook.com" );
curl_setopt ( $curl, CURLOPT_FOLLOWLOCATION, 1 );
curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt ( $curl, CURLOPT_ENCODING, "" );
curl_setopt ( $curl, CURLOPT_COOKIEJAR, getcwd () . '/cookies_facebook.cookie' );
curl_setopt ( $curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2) Gecko/20100115 Firefox/3.6 (.NET CLR 3.5.30729)" );
$curlData = curl_exec ( $curl );
curl_close ( $curl );

// do get some parameters for login to facebook
$charsetTest = substr ( $curlData, strpos ( $curlData, "name=\"charset_test\"" ) );
$charsetTest = substr ( $charsetTest, strpos ( $charsetTest, "value=" ) + 7 );
$charsetTest = substr ( $charsetTest, 0, strpos ( $charsetTest, "\"" ) );

$locale = substr ( $curlData, strpos ( $curlData, "name=\"locale\"" ) );
$locale = substr ( $locale, strpos ( $locale, "value=" ) + 7 );
$locale = substr ( $locale, 0, strpos ( $locale, "\"" ) );

$lsd = substr ( $curlData, strpos ( $curlData, "name=\"locale\"" ) );
$lsd = substr ( $lsd, strpos ( $lsd, "value=" ) + 7 );
$lsd = substr ( $lsd, 0, strpos ( $lsd, "\"" ) );

// do login to facebook
$curl = curl_init ();
curl_setopt ( $curl, CURLOPT_URL, "https://login.facebook.com/login.php?login_attempt=1" );
curl_setopt ( $curl, CURLOPT_FOLLOWLOCATION, 1 );
curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt ( $curl, CURLOPT_POST, 1 );
curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, false );
curl_setopt ( $curl, CURLOPT_POSTFIELDS, "charset_test=" . $charsetTest . "&locale=" . $locale . "&non_com_login=&email=" . $username . "&pass=" . $password . "&charset_test=" . $charsetTest . "&lsd=" . $lsd );
curl_setopt ( $curl, CURLOPT_ENCODING, "" );
curl_setopt ( $curl, CURLOPT_COOKIEFILE, getcwd () . '/cookies_facebook.cookie' );
curl_setopt ( $curl, CURLOPT_COOKIEJAR, getcwd () . '/cookies_facebook.cookie' );
curl_setopt ( $curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2) Gecko/20100115 Firefox/3.6 (.NET CLR 3.5.30729)" );
//$curlData is the html of your facebook page
$curlData = curl_exec ( $curl );

echo $curlData;
?>
