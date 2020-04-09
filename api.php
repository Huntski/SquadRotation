<?php
$layersFile = "layers.json";
$data = json_decode(file_get_contents($layersFile));

header('Content-Type: application/json');
echo json_encode($data);