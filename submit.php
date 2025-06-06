<?php
// Load Twilio SDK
require_once 'vendor/autoload.php';
use Twilio\Rest\Client;

// Get form data
$response = $_POST['response'];

// Twilio credentials
$sid = '[Twilio SID]';
$token = '[Twilio Token]';
$from = '[Phone number for message from]';
$to = '[Your Phone number]';

$client = new Client($sid, $token);

// Message to be sent via SMS
$messageBody = "Love Letter Response: $response from $user.";

try {
    $client->messages->create($to, [
        'from' => $from,
        'body' => $messageBody
    ]);

    // Redirect based on response
    if ($response === "Yes") {
        // Redirect to thank_you.php if response is "Yes"
        header("Location: thank_you.php");
        exit();
    } else {
        // Redirect to message_sent.php if response is "No"
        header("Location: message_sent.php");
        exit();
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
