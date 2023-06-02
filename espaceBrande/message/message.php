<?php
session_start();
include("../../connection/connection.php");
//generate
$id = $_SESSION["id"];
$sql = mysqli_query($conn, "SELECT * FROM Partnership where id_brand=$id and statut='pas encore signé' and sender='influencer'");
if (!$sql) {
    echo ("Error description: " . mysqli_error($conn));
    exit;
}

$num_rows = mysqli_num_rows($sql);

/*$sqla = mysqli_query($conn, "SELECT * FROM influenceur where id=$id_influencer");
if (!$sqla) {
    echo ("Error description: " . mysqli_error($conn));
    exit;
}
$rowa  = mysqli_fetch_array($sqla);
$first_name = $rowa['first_name'];
$last_name = $rowa['last_name'];
$last_name = $rowa['last_name'];*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                    <li><a href="../profil-brand.php">Profile</a></li>
                    <li><a href="../partnerships/main.php">Partnerships</a></li>
                    <li><a href="../newPartner/new.php?page=1">Influencers </a> </li>
                    <li><a href="../edit/edit.php">Edit</a></li>
                    <li><a href="message.php">Messages</a></li>
                    <li><a href="../logout/logout.php">LOGOUT</a></li>
                </ul>
            </div>
        </div>
        <?php
        if ($num_rows > 0) {
            echo '<h2>All my requests</h2>';
        } else {
            echo '<br> <br> <br> <br><h2>No request for partnerships received yet</h2>';
        }
        ?>
        <!--content here-->
        <?php
        while ($row = mysqli_fetch_array($sql)) {
            $id_inflence = $row['id_influencer'];
            $sqla = mysqli_query($conn, "SELECT * FROM influenceur where id=$id_inflence");
            if (!$sqla) {
                echo ("Error descriptionddd: " . mysqli_error($conn));
                exit;
            }
            $rowa  = mysqli_fetch_array($sqla);

            //$id_influencer = $row['id_influencer'];
            echo '<form action="traitement.php?' . $row['id_influencer'] . '&' . $row['id_brand'] . '" method="post" enctype="multipart/form-data" >
            <div class="blog-container">

            <div class="blog-header">
                <div class="blog-author--no-cover" style="--radius: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/17779/russ.jpeg");" >
                    <h3>' . $rowa['first_name'] . ' ' . $rowa['last_name'] . '</h3>
                </div>
            </div>

            <div class="blog-body">
                <div class="blog-title">
                    <h1><a href="#">' . $rowa['profession'] . '</a></h1>
                </div>
                <div class="blog-summary">
                    <p>
                        ' . $row['content'] . '
                    </p>
                </div>
            </div>
            <div class="blog-footer">
                <br>
                <ul>
                    <li class="published-date"> <button type="submit" name="approuve">Approve Request </button></li>
                    <li class="published-date"><button type="submit" name="refuse" >Refuse colaboration </button></li>
                </ul>
            </div>
        </div>
        </form>';
        }
        ?>


    </div>
</body>

</html>