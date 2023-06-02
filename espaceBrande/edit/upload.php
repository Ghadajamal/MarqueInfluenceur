<?php
// Include the database configuration file
include("../../connection/connection.php");
$statusMsg = '';
session_start();

$id = $_SESSION["id"];

// File upload path
$targetDir = "../../image_profile/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

echo "voilaaa " . $fileName;
if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
    // Allow certain file formats
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
            // Insert image file name into database

            //$insert = $conn->query("UPDATE influenceur SET image_upload=$fileName  WHERE id=$id");
            $sql_l = "UPDATE Brand SET image_upload='$fileName'  WHERE id=$id";
            if ($conn->query($sql_l) === TRUE) {
                header("Location: edit.php");
            } else {
                $statusMsg = "Error updating record: " . $conn->error;
            }
            /*if ($insert) {
                    $statusMsg = "The file " . $fileName . " has been uploaded successfully.";
                } else {
                    $statusMsg = "File upload failed, please try again.";
                }*/
        } else {
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    } else {
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
} else {
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;