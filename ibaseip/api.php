<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://apim.eksheba.gov.bd/public/api/v2/emis',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
 "name" : "getinstituteinfo",
 "parameters" : {
 "eiin" : ["116875"]
 }
}
',
  CURLOPT_HTTPHEADER => array(
    'api-key: f364bb5731825f58ad9b9febc6a42944',
    'Content-Type: application/json',
    'Cookie: laravel_session=eyJpdiI6Im5tb0FxUnBiN0NDOHhPWTRQc1RMNEE9PSIsInZhbHVlIjoiZFB4dHJyeG1KczkwWUNVUmJxZStTUkxYejc2OHJza1BqNnhjeGNqQ2tXdUN0Y3V3NVZ5ZXBFbkl2YkpaZkdsVitUbkh4WEV0M0w3Z2JlZXdOblB2Z2Q5YzY2c2VTUjlmZTZBYUQra0kzdXd1a3BzY1I3aUdRV2ZTLzBkOFQwQWMiLCJtYWMiOiIyNmI2OTQ1OWE4OWE0ZGI1MzY4N2UwYzZhYjE3NDMyZTRiNWQ5Njk5NmRmODc5Y2EyOTYwMjgxMTNhYmUxN2E5In0%3D'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>