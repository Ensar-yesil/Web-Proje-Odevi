<?php
$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://v3.football.api-sports.io/standings?league=39&season=2021",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        "x-apisports-key: 6f473cbae4e18a36171f1d0389e9fad5"
    ],
]);

$response = curl_exec($curl);
curl_close($curl);

header('Content-Type: application/json');
echo $response;
?>