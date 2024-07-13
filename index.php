<?php
    require_once 'ip_api_geolocation.php';

    // get the client ip address
    $ip = $_SERVER['REMOTE_ADDR'];

    $ip = '41.90.186.218';

    echo 'Client IP Address: ' . $ip;

    $location_date = ip_api_geolocation($ip);