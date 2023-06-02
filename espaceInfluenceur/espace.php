<?php
session_start();
include("../connection/connection.php");
//echo '<h1>' . $_SESSION["first_name"] . '</h1>';
$first_name = $_SESSION["first_name"];
$last_name = $_SESSION["last_name"];
$id = $_SESSION["id"];
$age = $_SESSION["age"];
$emaill = $_SESSION["email"];
?>
<?php
//session_start();
include("../connection/connection.php");
//echo '<h1>' . $_SESSION["first_name"] . '</h1>';

$id = $_SESSION["id"];

$sql = mysqli_query($conn, "SELECT * FROM influenceur where id=$id");
if (!$sql) {
    echo ("Error description: " . mysqli_error($conn));
    exit;
}
$row  = mysqli_fetch_array($sql);


$sql1 = mysqli_query($conn, "SELECT * FROM socialLMedia where email='$emaill'");
if (!$sql1) {
    echo ("Error description: " . mysqli_error($conn));
    exit;
}
$row1  = mysqli_fetch_array($sql1);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=0.1">
    <title>My - space | PROMOTE</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">PROMOTE</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="espace.php">Profile</a></li>
                    <li><a href="partnerships/main.php">My Partnerships</a></li>
                    <li><a href="newPartner/new.php?page=1">New Brands</a></li>
                    <li><a href="edit/edit.php">EDIT </a></li>
                    <li><a href="message/message.php">Messages</a></li>
                    <li><a href="logout/logout.php">LOGOUT</a></li>
                </ul>
            </div>

        </div>
        <div class="container">
            <div class="profile-box">
                <img src="../image_profile/<?php echo $row["image_upload"] ?>" class="profile-pic">
                <h3><?php echo $row["first_name"] . "  " . $row["last_name"]  ?> </h3>
                <p>
                    <?php echo $row["profession"] ?></p>
                <br>
                <p>Mes reseaux sociaux : </p>
                <div class="social-media">
                    <?php
                    if ($row1['facebook'] != '') {
                        $facebook = $row1['facebook'];
                        echo  '<a  href="' . $facebook . '"><img src="../socialMedia/facebook.jpeg"></a>';
                    } ?>
                    <?php
                    if ($row1['instagram'] != '') {
                        echo  '<a  href="' . $row1['instagram'] . '"><img src="../socialMedia/insta.png"></a>';
                    } ?>
                    <?php
                    if ($row1['snapchat'] != '') {
                        echo  '<a  href="' . $row1['snapchat'] . '"><img src="../socialMedia/snap.png"></a>';
                    } ?>
                    <?php
                    if ($row1['tiktok'] != '') {
                        echo  '<a  href="' . $row1['tiktok'] . '"><img src="../socialMedia/tiktok.png"></a>';
                    } ?>
                    <?php
                    if ($row1['youtube'] != '') {
                        echo  '<a  href="' . $row1['youtube'] . '"><img src="../socialMedia/youtube.png"></a>';
                    } ?>

                </div>
                <button type="button"> About me </button>
                <div class="profile-buttom">
                    <p> <?php echo $row["description"] ?> </p>
                    <img src="arrow.png" alt="">
                </div>
            </div>
        </div>

        <section class="ghada">
            <div class="main-top">
                <h1 id="rollers1">New partners</h1>
                <i class="fas fa-user-cog"></i>
            </div>
            <div class="users">
                <div class="card">
                    <img src="img/zara.jpg">
                    <h4>ZARA</h4>
                    <p>Clothing Brand</p>
                    <div class="per">
                        <table class="tab">
                            <tr class="cen">
                                <td>
                                    <span>20.4M£</span>&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <span>&nbsp&nbsp&nbsp&nbsp60&nbsp&nbsp&nbsp&nbsp </span>
                                </td>
                            </tr>
                            <tr class="cen">
                                <td>CA&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp partners</td>
                            </tr>
                        </table>
                    </div>
                    <button>Profile</button>
                </div>
                <div class="card">
                    <img src="img/Dior.jpg">
                    <h4>DIOR</h4>
                    <p>Makeup-clothing Brand</p>
                    <div class="per">
                        <table class="tab">
                            <tr class="cen">
                                <td>
                                    <span>20.4M£</span>&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <span>&nbsp&nbsp&nbsp&nbsp60&nbsp&nbsp&nbsp&nbsp </span>
                                </td>
                            </tr>
                            <tr class="cen">
                                <td>CA&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp partners</td>
                            </tr>
                        </table>
                    </div>
                    <button>Profile</button>
                </div>
                <div class="card">
                    <img src="img/rarebeauty.png">
                    <h4>Rare Beauty</h4>
                    <p>Makeup Brand</p>
                    <div class="per">
                        <table class="tab">
                            <tr class="cen">
                                <td>
                                    <span>20.4M£</span>&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <span>&nbsp&nbsp&nbsp&nbsp60&nbsp&nbsp&nbsp&nbsp </span>
                                </td>
                            </tr>
                            <tr class="cen">
                                <td>CA&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp partners</td>
                            </tr>
                        </table>
                    </div>
                    <button>Profile</button>
                </div>
                <div class="card">
                    <img src="img/h_m.jpg">
                    <h4>H&M</h4>
                    <p>Clothing Brand</p>
                    <div class="per">
                        <table class="tab">
                            <tr class="cen">
                                <td>
                                    <span>20.4M£</span>&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <span>&nbsp&nbsp&nbsp&nbsp60&nbsp&nbsp&nbsp&nbsp </span>
                                </td>
                            </tr>
                            <tr class="cen">
                                <td>CA&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp partners</td>
                            </tr>
                        </table>
                    </div>
                    <button>Profile</button>
                </div>
                <div class="card">
                    <img src="img/chanel.jpg">
                    <h4>Chanel</h4>
                    <p>Clothing- jewleries- perfumes Brand</p>
                    <div class="per">
                        <table class="tab">
                            <tr class="cen">
                                <td>
                                    <span>20.4M£</span>&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <span>&nbsp&nbsp&nbsp&nbsp60&nbsp&nbsp&nbsp&nbsp </span>
                                </td>
                            </tr>
                            <tr class="cen">
                                <td>CA&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp partners</td>
                            </tr>
                        </table>
                    </div>
                    <button>Profile</button>
                </div>
                <div class="card">
                    <img src="img/rp.jpg">
                    <h4>LA ROCHE POSAY</h4>
                    <p>Skin Care Brand</p>
                    <div class="per">
                        <table class="tab">
                            <tr class="cen">
                                <td>
                                    <span>20.4M£</span>&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <span>&nbsp&nbsp&nbsp&nbsp60&nbsp&nbsp&nbsp&nbsp </span>
                                </td>
                            </tr>
                            <tr class="cen">
                                <td>CA&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp partners</td>
                            </tr>
                        </table>
                    </div>
                    <button>Profile</button>
                </div>

            </div>
        </section>
    </div>

</body>