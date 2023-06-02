<?php
session_start();
include("../../connection/connection.php");
//echo '<h1>' . $_SESSION["first_name"] . '</h1>';

$id = $_SESSION["id"];
$emaill = $_SESSION["email"];
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
    <link rel="stylesheet" href="style1.css">
</head>

<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">PROMOTE</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="../espace.php">Profile</a></li>
                    <li><a href="../partnerships/main.php">My Partnerships</a></li>
                    <li><a href="../newPartner/new.php?page=1">New Brands</a></li>
                    <li><a href="edit.php">Edit </a></li>
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

                    <br>
                    <div class="user-data">
                        <div class="toflex">
                            <div class="input_box">
                                <div class="left"> <span class="details"><b> First Name</b></span>
                                    <input type="text" value="<?php echo $row['first_name'] ?>"
                                        placeholder="Enter your first name" name="first_name" required>
                                </div>
                            </div>
                            <div class="input_box">
                                <div class="right"> <span class="details"><b> Last Name</b></span>
                                    <input type="text" placeholder="Enter your last name"
                                        value="<?php echo $row['last_name'] ?>" name="last_name" required>
                                </div>
                            </div>
                        </div>
                        <div class="toflex">
                            <div class="input_box">
                                <div class="left"> <span class="details"><b> age</b> </span>
                                    <input type="number" placeholder="Enter your age" value="<?php echo $row['age'] ?>"
                                        name="age" required></div>
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

                    <button type="submit" name="toSubmit"> Update </button>
                </form>

                <div class="profile-buttom">
                    <div class="user-data">
                        <form action='traitement.php' method='post'>
                            <div class="input_box">
                                <div class="right"> <span class="details"><b>Social Media URL (Optional)</b></span>
                                    <img src="../../socialMedia/facebook.jpeg" alt="">
                                    <input type="text" placeholder="Facebook URL..." style="color:black"
                                        value="<?php echo $row1['facebook'] ?>" name="facebook">
                                </div>
                                <div class="right"> <span class="details"><b> </b></span>
                                    <img src="../../socialMedia/insta.png" alt="">

                                    <input type="text" placeholder="Instagram URL.." style="color:black"
                                        value="<?php echo $row1['instagram'] ?>" name="instagram">
                                </div>
                                <div class="right"> <span class="details"><b> </b></span>
                                    <img src="../../socialMedia/tiktok.png" alt="">

                                    <input type="text" placeholder="Tiktok URL..." style="color:black"
                                        value="<?php echo $row1['tiktok'] ?>" name="tiktok">
                                </div>
                                <div class="right"> <span class="details"><b> </b></span>
                                    <img src="../../socialMedia/youtube.png" alt="">

                                    <input type="text" placeholder="Youtube URL..." style="color:black"
                                        value="<?php echo $row1['youtube'] ?>" name="youtube">
                                </div>
                                <div class="right"> <span class="details"><b> </b></span>
                                    <img src="../../socialMedia/snap.png" alt="">

                                    <input type="text" placeholder="Snapchat URL..." style="color:black"
                                        value="<?php echo $row1['snapchat'] ?>" name="snapchat">
                                </div>
                                <br> <br>
                                <button type="submit" name="toModify"> Add/Modify </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>