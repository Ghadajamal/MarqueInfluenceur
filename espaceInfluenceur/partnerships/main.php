<?php
session_start();
include("../../connection/connection.php");
//generate
$id = $_SESSION["id"];
$sql = mysqli_query($conn, "SELECT * FROM Partnership where id_influencer=$id and statut='signed'");
if (!$sql) {
    echo ("Error description: " . mysqli_error($conn));
    exit;
}

$num_rows = mysqli_num_rows($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <title>Document</title>
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h3 class="logo">PRMOMOTE</h3>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="../espace.php">Profile</a></li>
                    <li><a href="../partnerships/main.php">Partnerships</a></li>
                    <li><a href="../newPartner/new.php?page=1">new Brands</a></li>
                    <li><a href="../edit/edit.php">Edit</a></li>
                    <li><a href="../message/message.php">Messages</a></li>
                    <li><a href="../logout/logout.php">LOGOUT</a></li>
                </ul>
            </div>
        </div>
        <?php
        if ($num_rows > 0) {
            echo '<h2>My partnerships accepted</h2>';
        } else {
            echo '<br> <br> <br> <br><h2>No partnerships made yet</h2>';
        }
        ?>


        <div class="wrapper">
            <div class="carousel owl-carousel">
                <?php
                while ($row = mysqli_fetch_array($sql)) {
                    $id_brand = $row['id_brand'];

                    $sqla = mysqli_query($conn, "SELECT * FROM Brand where id=$id_brand");
                    if (!$sqla) {
                        echo ("Error description: " . mysqli_error($conn));
                    }
                    $rowa  = mysqli_fetch_array($sqla);

                    echo '<div class="card card-1">
                    <div class="wrappera">
                        <div class="blog_post">
                            <div class="img_pod">
                                <img src="../../image_profile/' . $rowa['image_upload'] . '"
                                    alt="random image">
                            </div>
                            <div class="container_copy">
                                <h1>' . $rowa['brand_name'] .  '</h1>
                                <h3> Professional at ' . $rowa['category'] . '</h3>
                                
                                <p>' . $rowa['description'] . '</p>
                            </div>
                            <a class="btn_primary" href=\'#\'> <button>Check Profile</button> </a>
                        </div>
                    </div>
                </div>';
                }
                ?>


            </div>
        </div>


        <script>
        $(".carousel").owlCarousel({
            margin: 20,
            loop: false,
            autoplay: false,
            autoplayTimeout: 2000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: true
                },
                1000: {
                    items: 3,
                    nav: true
                }
            }
        });
        </script>

    </div>
</body>

</html>