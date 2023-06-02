<?php
extract($_POST);
session_start();
$id = $_SESSION["id"];
$emaila = $_SESSION["email"];

echo  $_SESSION["first_name"];
echo $_SESSION["id"];
include("../../connection/connection.php");
$mydescription = htmlspecialchars($description, ENT_QUOTES);

$sql = "UPDATE Brand SET brand_name='$brand_name', CA_annuel='$CA_annuel', `description`='$mydescription', phone='$phone', profession='$profession',  `site_web`='$site_web' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header("Location: ../profil-brand.php");
} else {
    echo "Error updating record: " . $conn->error;
}