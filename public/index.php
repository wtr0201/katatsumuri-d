<?php

function loadJson($filename) {
    return json_decode(file_get_contents($filename),true);
}

$news          = loadJson('../storage/news.json');
$approvals     = loadJson('../storage/approvals.json');
$distributions = loadJson('../storage/distributions.json');

include '../view/index.php';
