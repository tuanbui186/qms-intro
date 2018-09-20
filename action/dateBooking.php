<?php
    include 'access.php';     
    $fullUrl = $url.'booking/getAllowedDateList';
    $storeId = $_POST["storeId"];
    $fields_string = '{"storeId":'.$storeId.'}';                                
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
?>