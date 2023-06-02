<?php
extract($_POST);
session_start();
$id = $_SESSION["id"];
$emaila = $_SESSION["email"];

if (isset($_POST['toModify'])) {
    include("../../connection/connection.php");

    $sql_l = "UPDATE socialLMedia SET facebook='$facebook', instagram='$instagram', `snapchat`='$snapchat', tiktok='$tiktok', youtube='$youtube' WHERE email='$emaila'";

    if ($conn->query($sql_l) === TRUE) {
        header("Location: ../espace.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else if (isset($_POST['toSubmit'])) {
    echo  $_SESSION["first_name"];
    echo $_SESSION["id"];
    include("../../connection/connection.php");
    $mydescription = htmlspecialchars($description, ENT_QUOTES);

    $sql = "UPDATE influenceur SET first_name='$first_name', age='$age', `description`='$mydescription',  profession='$profession', last_name='$last_name', age='$age', phone='$phone' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location: ../espace.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}