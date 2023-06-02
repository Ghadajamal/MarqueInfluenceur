<?php

session_start();
include("../connection/connection.php");
//echo '<h1>' . $_SESSION["first_name"] . '</h1>';

$id = $_SESSION["id"];
$sql = mysqli_query($conn, "SELECT * FROM Brand where id=$id");
if (!$sql) {
    echo ("Error description: " . mysqli_error($conn));
    exit;
}
$row  = mysqli_fetch_array($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Profil-Brand</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h3 class="logo">PRMOMOTE</h3>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">Profile</a></li>
                    <li><a href="partnerships/main.php">Partnerships</a></li>
                    <li><a href="newPartner/new.php?page=1">Influencers</a></li>
                    <li><a href="edit/edit.php">Edit</a></li>
                    <li><a href="message/message.php">Messages</a></li>
                    <li><a href="logout/logout.php">LOGOUT</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="profile-box">
                <img src="../image_profile/<?php echo $row["image_upload"] ?>" class="profile-pic">
                <h3><?php echo $row["brand_name"]   ?>
                </h3>
                <p><?php echo $row["profession"] ?></p>
                <p>Chiffre d'affaire : <?php echo $row["CA_annuel"] ?> $</p>
                <br>
                <a href="<?php echo $row["site_web"] ?>">click ici pour visiter le site</a> <br><br>
                <button type="button"> About us </button>
                <div class="profile-buttom">
                    <p> <?php echo $row["description"] ?> </p>
                </div>
            </div>
        </div>
    </div>


</body>

</html>