<?php
$type = $_GET["type"];

switch($type) {
case "liveapp":

$id = $_GET['id']; 

$url = 'http://tv.xemtiviviet.com/ok/blog/code/postBack.php';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS, 

   "type=vtvgob&id=$id");

curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);

curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);

$link = curl_exec($ch);

curl_close($ch);

preg_match('/(http.*rd)/', $link, $match);

$get = $match[1];


header("Location: " .$get, 302);
break;
default:
print "VenusTV";
}
?>
