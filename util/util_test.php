<?php
include_once 'util.php';

function buildPropertiesTest() {
    $props = [];
    $props['href'] = "https.example.com";
    $props['test'] = 'test value';
    var_dump($props);

    echo buildProperties($props);
}

function aTagTest() {
    a("Back", "http://localhost/wa4e/util/");
}

buildPropertiesTest();
l("");
aTagTest();
