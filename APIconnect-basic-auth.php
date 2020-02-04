<?php

/**
 * Sample code for i-Reserve API connect with basic authentication with PHP
 * 
 * @author Toon van Doorn, i-Reserve <support@i-reserve.nl>
 * @version 0.1
 * @this script is free for everyone.
 * 
 * Requierements: i-Reserve environment with active license (i-reserve.nl) and a user with API rights.
 * 
 * https://support.i-reserve.net/nl/ontwikkelaar/webservice-api/hoe-werkt-de-beveiliging-van-de-api/
 * 
 * Example request
 * https://support.i-reserve.net/nl/ontwikkelaar/webservice-api/hoe-kan-ik-jullie-apis-gebruiken/
 * https://support.i-reserve.net/nl/functionele-informatie/beschikbare-apis/api-booking/
 * 
 * Other requests
 * https://support.i-reserve.net/nl/functionele-informatie/beschikbare-apis/
 */
 
$url="DOMAIN.i-reserve.net";
$login = 'USERNAME';
$password = 'PASSWORD';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url ."/api/rest/booking/854");
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$login:$password");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
curl_setopt($ch, CURLOPT_HTTPGET, true);

$response["data"] = json_decode(curl_exec($ch), true);
$response["status"] = curl_getinfo($ch, CURLINFO_HTTP_CODE);

print_r($response);

?>