<?php
session_start();
if (isset($_POST['toLogin'])) {
    extract($_POST);
    include("../connection/connection.php");
    $myquery = "SELECT * FROM utilisateur where email='$email' and password='$pass'";
    $sql = mysqli_query($conn, $myquery);
    $row  = mysqli_fetch_array($sql);
    if (is_array($row)) {
        if ($row['statut'] == "influenceur") {
            $myquer2 = "SELECT * FROM influenceur where email='$email' ";
            $sqli = mysqli_query($conn, $myquer2);
            $row  = mysqli_fetch_array($sqli);
            $_SESSION["id"] = $row['id'];
            $_SESSION["first_name"] = $row['first_name'];
            $_SESSION["last_name"] = $row['last_name'];
            $_SESSION["age"] = $row['age'];
            $_SESSION["email"] = $row['email'];
            $_SESSION["phone"] = $row['phone'];
            $_SESSION["gender"] = $row['gender'];
            $_SESSION["description"] = $row['description'];
            header("Location: ../espaceInfluenceur/espace.php");
        } else if ($row['statut'] == "brand") {
            $myquer3 = "SELECT * FROM Brand where email='$email' ";
            $sqli3 = mysqli_query($conn, $myquer3);
            $row2  = mysqli_fetch_array($sqli3);
            $_SESSION["id"] = $row2['id'];
            $_SESSION["brand_name"] = $row2['brand_name'];
            $_SESSION["CA_annuel"] = $row2['CA_annuel'];
            $_SESSION["email"] = $row2['email'];
            $_SESSION["phone"] = $row2['phone'];
            $_SESSION["description"] = $row2['description'];
            header("Location: ../espaceBrande/profil-brand.php");
        }
        /*$_SESSION["ID"] = $row['ID'];
        $_SESSION["Email"] = $row['Email'];
        $_SESSION["First_Name"] = $row['First_Name'];
        $_SESSION["Last_Name"] = $row['Last_Name'];*/
        //header("Location: home.php");
    } else {
        echo "Invalid Email ID/Password";
    }
}