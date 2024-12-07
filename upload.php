<?php
// Allow CORS (optional for cross-origin requests)
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Check if a file has been uploaded
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $image = $_FILES['image'];

    // Check for upload errors
    if ($image['error'] === UPLOAD_ERR_OK) {
        // Set the upload directory
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($image['name']);

        // Move the uploaded file to the server
        if (move_uploaded_file($image['tmp_name'], $uploadFile)) {
            echo "Image uploaded successfully.";
        } else {
            echo "Failed to upload image.";
        }
    } else {
        echo "Error uploading image.";
    }
} else {
    echo "No file uploaded.";
}
?>
