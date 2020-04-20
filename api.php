<?php
$layersFile = "layers.json";
$data = json_decode(file_get_contents($layersFile));

$rotation = [];

$maps = $data->maps;

foreach ($maps as $items) {
    $newItem = $items->name . ' ' . $items->layers[rand(0, count($items->layers)-1)];
    array_push($rotation, $newItem);
}

shuffle($rotation);

echo "<pre>";
var_dump($rotation);

// header('Content-Type: application/json');
// echo json_encode($data);