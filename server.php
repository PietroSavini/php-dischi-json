<?php 
$string = file_get_contents("dischi.json");

$dischi_array = json_decode($string, true);

$response =[
    "results" => $dischi_array,
    "success" => true
];

header('content-type: application/json');
echo json_encode($response);
?>