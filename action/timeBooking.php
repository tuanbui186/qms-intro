<?php
    include 'access.php';     
    $fullUrl = $url.'booking/getAllowedTimeList';
    $storeId = $_POST["storeId"];
    $date = $_POST["date"];
    $fields_string = '{"storeId":'.$storeId.', "date" : "'.$date.'"}';                                
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt($ch, CURLOPT_POST,           1 );
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
    curl_setopt($ch, CURLOPT_URL,
        $fullUrl
    );
    $headers = array(
            'Content-type: application/json',
            'charset=UTF-8',
            'API_KEY:'.$apiKey,
        );
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $obj = curl_exec($ch);
    
    echo $obj;