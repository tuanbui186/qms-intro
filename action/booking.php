<?php
    include 'access.php';     
    $fullUrl = $url.'booking/saveForWeb';
    
    $phone = $_POST["phone"];
    $storeId = $_POST["storeId"];
    $serviceId = $_POST["serviceId"];
    $date = $_POST["date"];
    $timeFrom = $_POST["timeFrom"];
    $timeTo = $_POST["timeTo"];


    $fields_string = '{"phone": "'.$phone.'", "storeId":'.$storeId.', "date": "'.$date.'", "serviceIdList": ["'.$serviceId.'"], "timeFrom" : "'.$timeFrom.'", "timeTo" : "'.$timeTo.'"}';                                
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