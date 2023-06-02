<?php
session_start();
include("../../connection/connection.php");
//echo '<h1>' . $_SESSION["first_name"] . '</h1>';

$id = $_SESSION["id"];
$emaill = $_SESSION["email"];
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
                    <li><a href="../profil-brand.php">Profile</a></li>
                    <li><a href="../partnerships/main.php">Partnerships</a></li>
                    <li><a href="../newPartner/new.php?page=1">Influencers</a></li>
                    <li><a href="edit/edit.php">Edit</a></li>
                    <li><a href="../message/message.php">Messages</a></li>
                    <li><a href="../logout/logout.php">LOGOUT</a></li>
                </ul>
            </div>

        </div>
        <div class="container">
            <div class="profile-box">
                <img src="../../image_profile/<?php echo $row["image_upload"] ?>" class="profile-pic">
                <p>Change your profile picture</p>
                <br>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    Select Image File to Upload:
                    <input type="file" name="file">
                    <button type="submit" name="submit"> Update </button>
                </form>
                <form action='traitement.php' method='post'>

                    <div class="user-data">
                        <div class="toflex">
                            <div class="input_box">
                                <div class="left"> <span class="details"><b> Brande Name</b></span>
                                    <input type="text" value="<?php echo $row['brand_name'] ?>"
                                        placeholder="Enter your first name" name="brand_name" required>
                                </div>
                            </div>
                            <div class="input_box">
                                <div class="right"> <span class="details"><b>
                                            Chiffre d'affaire annuel
                                        </b></span>
                                    <input type="text" placeholder="Enter your last name"
                                        value="<?php echo $row['CA_annuel'] ?>" name="CA_annuel" required>
                                </div>
                            </div>
                        </div>
                        <div class="toflex">
                            <div class="input_box">
                                <div class="left"> <span class="details"><b> URL site web</b> </span>
                                    <input type="text" placeholder="Aucun site web disponible..."
                                        value="<?php echo $row['site_web'] ?>" name="site_web" required></div>
                            </div>

                        </div>
                        <div class="toflex">
                            <div class="input_box">
                                <div class="right"> <span class="details"><b> Phone Number</b></span>
                                    <input type="text" placeholder="Enter your Phone Number"
                                        value="<?php echo $row['phone'] ?>" name="phone" required>
                                </div>
                            </div>
                            <div class="input_box">
                                <div class="right"> <span class="details"><b> profession/Job</b></span>
                                    <input type="text" placeholder="Enter your profession"
                                        value="<?php echo $row['profession'] ?>" name="profession" required>
                                </div>
                            </div>
                        </div>
                        <div class="input_box">
                            <div class="left"> <span class="details"><b>Description</b></span>
                                <textarea name="description" placeholder="Describe yourself here..." rows="3" cols="40">
                            <?php echo $row['description'] ?>
                                </textarea>
                            </div>
                        </div>

                    </div>

                    <button type="submit"> Update </button>
                </form>


            </div>
        </div>
    </div>
    </div>


</body>