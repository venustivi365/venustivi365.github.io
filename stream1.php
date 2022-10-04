<?php
$channel = $_GET["channel"];

switch($channel) {
case "vtvcab1.m3u8":


$url = 'http://tv.tvhayhay.com/mobile/ok/vtv/vtvcab/giaitritvshow.php ';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS, 

   "channel=vimeomb");

curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);

curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);

$link = curl_exec($ch);

curl_close($ch);

preg_match('/(http.*rd)/', $link, $match);

$get = $match[1];


header("Location: " .$get, 404);
break;
default:
print "VenusTiVi365";
}
?>
