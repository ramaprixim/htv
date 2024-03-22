<?php
// Check if file was uploaded without errors
if (isset($_FILES["file1"]) && $_FILES["file1"]["error"] == 0) {
    $targetDir = "uploads/"; // Directory where uploaded files will be saved
    $targetFile = $targetDir . basename($_FILES["file1"]["name"]); // Path to save the uploaded file

    // Try to move the uploaded file to the destination directory
    if (move_uploaded_file($_FILES["file1"]["tmp_name"], $targetFile)) {
        echo "File has been uploaded successfully.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    echo "Error: " . $_FILES["file1"]["error"];
}
?>