<?php
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://traodoisub.com/api/?fields=profile&access_token=TDSQfiUjclZXZzJiOiIXZ2V2ciwiI1kzN0AzNiojIyV2c1Jye',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);
curl_close($curl);

// Đảm bảo rằng kết quả trả về là JSON
header('Content-Type: application/json');
echo $response;
