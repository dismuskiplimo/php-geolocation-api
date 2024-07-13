<?php
    require_once 'ip_api_geolocation.php';

    // get the client ip address
    $ip = $_SERVER['REMOTE_ADDR'];

    $location_data = ip_api_geolocation($ip);

    echo 'Client IP Address: ' . $ip . '<br>';

    // display location data
    echo 'Country: ' . $location_data->country . '<br>';
    echo 'Country Code: ' . $location_data->countryCode . '<br>';
    echo 'Region: ' . $location_data->region . '<br>';
    echo 'Region Name: ' . $location_data->regionName . '<br>';
    echo 'City: ' . $location_data->city . '<br>';
    echo 'Zip: ' . $location_data->zip . '<br>';
    echo 'Latitude: ' . $location_data->lat . '<br>';
    echo 'Longitude: ' . $location_data->lon . '<br>';
    echo 'Timezone: ' . $location_data->timezone . '<br>';
    echo 'ISP: ' . $location_data->isp . '<br>';
    echo 'Organization: ' . $location_data->org . '<br>';
    echo 'As: ' . $location_data->as . '<br>';