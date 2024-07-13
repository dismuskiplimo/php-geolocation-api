<?php
    function ip_api_geolocation($ip){
        $ch = curl_init();
        $url = 'http://ip-api.com/json/' . $ip;
        
        // Set cURL options
        curl_setopt($ch, CURLOPT_URL, $url); // Set the URL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the transfer as a string
        curl_setopt($ch, CURLOPT_HTTPGET, true); // Set HTTP method to GET

        // Execute cURL session and get the JSON response
        $response = curl_exec($ch);

        // Check for cURL errors
        if(curl_errno($ch)) {
            throw new Exception(curl_error($ch));
        }

        // Close cURL session
        curl_close($ch);

        // Decode JSON response as object
        $data = json_decode($response);

        // check if query failed
        if($data->status == 'fail'){
            throw new Exception($data->message);
        }

        // return location data
        return $data;
    }