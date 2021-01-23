<?php

$data = file_get_contents('json/coba.json');
$orang = json_decode($data, true);  // !true = array

var_dump($orang);
echo $orang[0]["pembimbing"]["pembimbing1"];
