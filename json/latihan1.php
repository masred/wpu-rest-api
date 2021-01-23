<?php
// $mahasiswa = [
//     [
//         "nama" => "Masred",
//         "nrp" => 413241324,
//         "email" => "email@email.com"
//     ],
//     [
//         "nama" => "jangkrik",
//         "nrp" => 413241324,
//         "email" => "email@email.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=ci4', 'root', '');
$db = $dbh->prepare('SELECT * FROM orang');
$db->execute();
$orang = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($orang);
echo $data;
