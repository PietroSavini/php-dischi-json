<?php 
$string = file_get_contents("dischi.json");
$dischi_array = json_decode($string, true);

if(isset($_GET['disk_index'])){
    $index = $_GET["disk_index"];
    $result = $dischi_array[$index];
}else{
    $result = $dischi_array;
};

$response =[
    "results" => $dischi_array,
    "success" => true
];

header('content-type: application/json');
echo json_encode($response);
?>