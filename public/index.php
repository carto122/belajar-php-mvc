<?php

$path = '/index';

if (isset($_SERVER['INFO_PATH'])) {
    $path = $_SERVER['PATH_INFO'];
}

require __DIR__ . '/../app/View/'. $path .'.php';