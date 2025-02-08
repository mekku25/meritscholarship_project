<?php
require_once __DIR__ . '/vendor/autoload.php';

// Retrieve and sanitize form inputs
$messageText = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);

if (!$messageText || !$phone) {
    echo "<script>
            alert('Error: Message and phone number are required.');
            window.location.href = 'message.php';
          </script>";
    exit; // Stop further execution
}

// Create a new HTTP_Request2 object
$request = new HTTP_Request2();
$request->setUrl('https://jjzvkk.api.infobip.com/sms/2/text/advanced');
$request->setMethod(HTTP_Request2::METHOD_POST);
$request->setConfig(array(
    'follow_redirects' => true
));
$request->setHeader(array(
    'Authorization' => 'App 65f9ed4944ac160a62a07dd78fca8b6e-bdab38e5-ec2d-4f39-8ced-9c2391dd3610',
    'Content-Type'  => 'application/json',
    'Accept'        => 'application/json'
));

// Build the JSON payload using form inputs
$data = array(
    "messages" => array(
        array(
            "destinations" => array(
                array(
                    "to" => $phone
                )
            ),
            "from" => "447491163443",
            "text" => $messageText
        )
    )
);

// Set the request body
$request->setBody(json_encode($data));

try {
    $response = $request->send();
    if ($response->getStatus() == 200) {
        echo "<script>
                if (confirm('SMS sent successfully! Do you want to go to the messages page?')) {
                    window.location.href = 'message.php';
                }
              </script>";
    } else {
        echo "<script>
                alert('Unexpected HTTP status: " . $response->getStatus() . " " . $response->getReasonPhrase() . "');
              </script>";
    }
} catch (HTTP_Request2_Exception $e) {
    echo "<script>alert('Error: " . addslashes($e->getMessage()) . "');</script>";
}
?>
