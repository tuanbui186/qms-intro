<?php
    include 'access.php';     
    $storeId  = $_GET["storeId"];      
    $fullUrl = $url.'store/getServiceList/'.$storeId;    
    header("Content-Type: application/json;charset=UTF-8");              
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL,
        $fullUrl
    );
    $header = ['API_KEY:'.$apiKey];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    $result = curl_exec($ch);
    curl_close($ch);
    
    echo $result;
?>