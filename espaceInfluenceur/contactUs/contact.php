<?php
session_start();
include("../../connection/connection.php");

$id = $_SESSION["id"];
$_brandID = $_SERVER['QUERY_STRING'];
$sql = mysqli_query($conn, "SELECT * FROM Brand WHERE id=$_brandID");
$row  = mysqli_fetch_array($sql);

$sqli = mysqli_query($conn, "SELECT * FROM influenceur WHERE id=$id");
$rowa  = mysqli_fetch_array($sqli);
$text_to_promote = "Hey " . $row['brand_name'] . ", My name is " . $rowa['first_name'] . " " . $rowa['last_name'] . " and I'm " . $rowa['profession'] . ". I have been following your brand on all social media and love your style. I would like to be your brand ambassador for your company!"
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
            <form action="<?php echo "traitement.php?" . $_brandID . "&" . $id ?>" method="post"
                enctype="multipart/form-data">
                <ul>

                    <li>
                        <p class="left">
                            <label for="first_name">Name of the brand</label>
                            <input type="text" name="first_name" value="<?php echo $row['brand_name'] ?>"
                                placeholder="Brand name..." />
                        </p>
                        <p class="pull-right">
                            <label for="last_name">Email of the brand</label>
                            <input type="email" name="emailBrand" value="<?php echo $row['email'] ?>"
                                placeholder="write the email of brand..." />
                        </p>
                    </li>

                    <li>
                        <p>
                            <label for="email">Your email <span class="req">*</span></label>
                            <input type="email" name="email_influencer" value="<?php echo $rowa['email'] ?>"
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