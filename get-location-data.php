<?php
//#################################################################
//GET LOCATION DATA
//#################################################################
function getLocationData($url) {
	$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}

$location_content	= json_decode($this->getLocationData('http://ipinfo.io/'.$ipOfUser), true);

echo $location_content;
?>
