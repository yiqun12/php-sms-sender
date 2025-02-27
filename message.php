<?php
// Data to be sent in JSON format
$data = json_encode([
    "phoneNumber" => "+19294614214",
    "message" => "bbbb"
]);

// cURL initialization
$curl = curl_init();

// cURL options setup
curl_setopt_array($curl, [
    CURLOPT_URL => "http://outsourcesf:3000/send-sms",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "Content-Length: " . strlen($data)
    ],
]);

// Execute cURL session and capture the response
$response = curl_exec($curl);
$error = curl_error($curl);

// Close cURL session
curl_close($curl);

// Check for errors and output the response
if ($error) {
    echo "cURL Error #:" . $error;
} else {
    echo $response;
}
?>
