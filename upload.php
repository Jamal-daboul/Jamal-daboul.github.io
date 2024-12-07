<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $image = $_FILES['image']['tmp_name'];
    $destination = 'uploads/' . basename($_FILES['image']['name']);
    if (move_uploaded_file($image, $destination)) {
        echo 'File uploaded successfully';
    } else {
        echo 'File upload failed';
    }
} else {
    echo 'Invalid request';
}
?>
