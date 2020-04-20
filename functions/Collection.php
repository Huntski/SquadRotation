<?php

function getCollection() {
    return json_decode(file_get_contents("includes/collection.json"));
}