<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $image = file_get_contents('php://input');
    file_put_contents('uploaded_image.jpg', $image);
    echo "Image uploaded successfully";
} else {
    echo "Method Not Allowed";
}
?>
