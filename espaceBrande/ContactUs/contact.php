<?php
session_start();
include("../../connection/connection.php");

$id = $_SESSION["id"];
$id_influencer = $_SERVER['QUERY_STRING'];
$sql = mysqli_query($conn, "SELECT * FROM Brand WHERE id=$id");
$row  = mysqli_fetch_array($sql);

$sqli = mysqli_query($conn, "SELECT * FROM influenceur WHERE id=$id_influencer");
$rowa  = mysqli_fetch_array($sqli);
$text_to_promote = "Hi " . $rowa["first_name"] . " The team " . $row['brand_name'] . " loved your post about your favorite clothes and fashion. At " . $row['brand_name'] . ", we make " . $row['category'] . " for women and men. We’d love to send some your way so you can give it a try and share with your audience!
Let me know if you’d be interested - thanks! -Kristen "
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row header">
            <h1>CONTACT THE BRAND&nbsp;</h1>
            <h3>Fill out the form below to have a chance to promote!</h3>
        </div>
        <div class="rowa body">
            <form action="<?php echo "traitement.php?" . $id_influencer . "&" . $id ?>" method="post"
                enctype="multipart/form-data">
                <ul>

                    <li>
                        <p class="left">
                            <label for="first_name">Name of the influencer</label>
                            <input type="text" name="first_name"
                                value="Mr <?php echo $rowa['first_name'] . ' ' . $rowa['last_name'] ?>"
                                placeholder="Brand name..." />
                        </p>
                        <p class="pull-right">
                            <label for="last_name">Email of the influencer</label>
                            <input type="email" name="emailInfluencer" value="<?php echo $rowa['email'] ?>"
                                placeholder="write the email of brand..." />
                        </p>
                    </li>

                    <li>
                        <p>
                            <label for="email">Your Brand email <span class="req">*</span></label>
                            <input type="email" name="email_brand" value="<?php echo $row['email'] ?>"
                                placeholder="write your email..." />
                        </p>
                    </li>
                    <li>
                        <div class="divider"></div>
                    </li>
                    <li>
                        <label for="comments">Apply for promote</label>
                        <textarea cols="46" rows="6" name="content"><?php echo $text_to_promote ?></textarea>
                    </li>

                    <li>
                        <button type="submit" name="tosubmit"> Submit </button>
                        <small>or <strong>Cancel</strong></small>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>

</html>