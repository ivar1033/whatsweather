<?php

$weather="";
$error="";
$api= ///enter your api key here

if(isset($_GET['city'])){

	$file_headers = @get_headers("http://api.openweathermap.org/data/2.5/weather?q=".urlencode($_GET['city'])."&appid=".$api."");
	if($file_headers[0] == 'HTTP/1.1 404 Not Found') {

		$error = "Could not find city";
	}
	else{

		$urlContents=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".urlencode($_GET['city'])."&appid=".$api."");

		$weatherArray = json_decode($urlContents, true);

		$tempInCelcius = intval($weatherArray['main']['temp'] - 273);

		$windSpeedInkm=intval($weatherArray['wind']['speed'] * 3.6);

		$weather ="The weather in ".strtoupper($_GET['city'])." is currently ".$weatherArray['weather'][0]['description'].". The temperature is ".$tempInCelcius."&deg;C and the wind speed is ".$windSpeedInkm." km/hr" ;
	}
}

?>