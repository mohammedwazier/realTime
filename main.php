<?php

namespace Firebase;

require_once __DIR__ . "/src/firebaseLib.php";

use Exception;

const DEFAULT_URL = 'https://kevin-pa.firebaseio.com/';
const DEFAULT_TOKEN = 'JKVmVewXbGTpdjOXb5eSWs0LVDeOdzvJ8nhJFPnD';
const DEFAULT_PATH = '';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);

// --- storing an array ---
$arrValue = array(
    "intensitasCahaya" => 0,
    "sensorSuhu" => 0,
    "solenoidSensor" => 0
);

// --- reading the stored string ---
$arrValue['intensitasCahaya'] = $firebase->get(DEFAULT_PATH . '/intensitasCahaya');
$arrValue['sensorSuhu'] = $firebase->get(DEFAULT_PATH . '/sensorSuhu');
$arrValue['solenoidSensor'] = $firebase->get(DEFAULT_PATH . '/solenoidSensor');

// --- encoding to Json ---
// $arrValue=json_encode($arrValue);

// --- Output ---
print_r($arrValue);
?>