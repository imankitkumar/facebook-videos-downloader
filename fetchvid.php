<?php
$url =  $_REQUEST['url'];
if(isset($url)){
$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$jk = curl_exec($ch);
$rs = explode('<meta property="og:video" content="', $jk)[1];
$rs = explode('"', $rs)[0];
if($rs){
echo '<center><video style="border: 10px solid black" width="250" controls><source src="'.$rs.'" type="video/mp4">Your browser does not support HTML video.</video></center><br><br><center><a style="width:45%;" class="btn" href="'.$rs.'&dl=1"><i class="fa fa-download"></i>&nbsp;&nbspDownload Now</a></center>';
}}

?>
