<?php

session_start();

// Generate a CSRF token and store it in the session
$csrf_token = bin2hex(random_bytes(32));
$_SESSION['csrf_token'] = $csrf_token;

// Verify the CSRF token in the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        // CSRF token is invalid, abort the request
        http_response_code(403);
        echo 'CSRF token is invalid.';
        exit;
    }

    // Decrypt the form data
    $encrypted_data = $_POST['encrypted-data'];
    $decrypted_data = decryptAES($encrypted_data);

    // Process the decrypted data
    $stock_id = $decrypted_data['stock-id'];
    $quantity = $decrypted_data['quantity'];


}

function decryptAES($encrypted_data) {

    list($key, $iv, $data) = explode(':', $encrypted_data);
    $data = json_decode($data, true);

    return $data;
}
?>

