<?php

$layersFile = "layers.json";

function getLayers() {
    $data = json_decode(file_get_contents($layersFile));
}