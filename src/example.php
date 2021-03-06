<?php
require_once __DIR__.'/../vendor/autoload.php';

use RapidWeb\SimpleGoogleMaps\Factories\SimpleGoogleMapsFactory;

$addressline = "10 Downing St, Westminster, London SW1A UK";
$addressline2 = "holyrood palace, Canongate, Edinburgh EH8 8DX UK";

$simpleGoogleMaps = SimpleGoogleMapsFactory::getByClientNameAndCryptKey("[CLIENTNAME]","[CRYPTKEY]");
$simpleGoogleMaps = SimpleGoogleMapsFactory::getByKey("[APIKEY]");

$homeCoords = $simpleGoogleMaps->getByAddress($addressline);
$toCoords = $simpleGoogleMaps->getByAddress($addressline2);

$milesBetween = $homeCoords->distanceTo($toCoords);

var_dump($milesBetween);


