<?php

function createRotation($maps = [], $layers = [], $gamemodes = []) {

    $collection = getCollection()->maps;
    $rotation = [];

    // Disinclude maps given
    foreach ($collection as $key => $a) { // $a = Map from collection
        $map = (object) [
            "name" => $a->name,
            "layers" => []
        ];

        if (in_array($a->name, $maps)) // Skips map if it is in $maps array
            continue;

        $map->name = $a->name;

        foreach ($a->layers as $item)
            if (!in_array($item, $layers))
                array_push($map->layers, $item);

        array_push($rotation, $map);
    }

    $rotation = array_values($rotation); // Rearange keys in object

    echo "<pre>";
    var_dump($rotation);

    return true;
}