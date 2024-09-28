<?php
$url = 'https://jsonplaceholder.typicode.com/posts'; // Replace with your API URL

// Initialize cURL
$ch = curl_init();

// Set options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute and fetch the response
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    header('Content-Type: application/json');
    echo $response;
}

// Close cURL session
curl_close($ch);
?>
