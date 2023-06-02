<?php
extract($_POST);
session_start();


$_brandID = $_SERVER['QUERY_STRING'];
$roww = explode('&', $_brandID);



include("../../connection/connection.php");

if (isset($_POST['approuve'])) {
    $sql = "UPDATE Partnership SET statut='Signed' WHERE id_influencer=$roww[0] and id_brand=$roww[1] and sender='influencer'";

    if ($conn->query($sql) === TRUE) {
        echo '<script>
        alert("request is accepted");
        window.location.href="../profil-brand.php";
        </script>';
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else if (isset($_POST['refuse'])) {
    $sql = "UPDATE Partnership SET statut='refused' WHERE id_influencer=$roww[0] and id_brand=$roww[1]";

    if ($conn->query($sql) === TRUE) {
        echo '<script>
        alert("request is denied");
        window.location.href="../profil-brand.php";
        </script>';
    } else {
        echo "Error updatingdd record: " . $conn->error;
    }
}