<?php
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');  // Optional: Sets the response content type to JSON

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the raw POST data (image)
    $image = file_get_contents('php://input');
    
    // Save the image to a file
    $result = file_put_contents('uploaded_image.jpg', $image);
    
    if ($result === false) {
        // If the file saving failed, return an error
        http_response_code(500);  // Internal Server Error
        echo json_encode(["message" => "Failed to upload image"]);
    } else {
        // If the file was successfully saved
        http_response_code(200);  // OK
        echo json_encode(["message" => "Image uploaded successfully"]);
    }
} else {
    // If method is not POST, return 405 Method Not Allowed
    http_response_code(405);
    echo json_encode(["message" => "Method Not Allowed"]);
}
?>
