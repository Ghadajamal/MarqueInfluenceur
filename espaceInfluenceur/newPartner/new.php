<?php
session_start();
include("../../connection/connection.php");
//echo '<h1>' . $_SESSION["first_name"] . '</h1>';

$id = $_SESSION["id"];
$sql = mysqli_query($conn, "SELECT * FROM Brand");
if (!$sql) {
    echo ("Error description: " . mysqli_error($conn));
    exit;
}

?>
<?php
$sqlé = mysqli_query($conn, "SELECT * FROM Brand");
$num_rows = mysqli_num_rows($sqlé);

// pagination
@$page = $_GET["page"];
$number_element_per_pages = 4;
$number_de_page = ceil($num_rows / $number_element_per_pages);
$debut = ($page - 1) * $number_element_per_pages;

//echo "voilaa " . $number_de_page;
//echo $number_de_page;
$sql = mysqli_query($conn, "SELECT * FROM Brand limit $debut,$number_element_per_pages");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=0.1">
    <title>My - space | PROMOTE</title>
    <link rel="stylesheet" href="style1.css">
    <!-- CSS only -->

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
                    <li><a href="new.php?page=1">New Brands</a></li>
                    <li><a href="../edit/edit.php">Edit </a></li>
                    <li><a href="../message/message.php">Messages</a></li>
                    <li><a href="../logout/logout.php">LOGOUT</a></li>
                </ul>
            </div>

        </div>
        <div class="container">
            <div class="profile-box">

                <div class="cddd">
                    <form>
                        <div class="cd-filter-block">
                            <h4>Search</h4>

                            <div class="cd-filter-content">
                                <input type="search" placeholder="Try color-1...">
                            </div> <!-- cd-filter-content -->
                        </div> <!-- cd-filter-block -->

                        <div class="cd-filter-block">
                            <h4>Check boxes</h4>

                            <ul class="cd-filter-content cd-filters list">
                                <li>
                                    <input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
                                    <label class="checkbox-label" for="checkbox1">Option 1</label>
                                </li>

                                <li>
                                    <input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
                                    <label class="checkbox-label" for="checkbox2">Option 2</label>
                                </li>
                            </ul> <!-- cd-filter-content -->
                        </div> <!-- cd-filter-block -->
                        <br><br>
                        <div class="cd-filter-block">
                            <h4>Catégory Brand</h4>
                            <div class="cd-filter-content">
                                <div class="cd-select cd-filters">
                                    <select class="filter" name="selectThis" id="selectThis">
                                        <option value="">Choose Category</option>
                                        <option value=".option1">Option 1</option>
                                        <option value=".option2">Option 2</option>
                                        <option value=".option3">Option 3</option>
                                        <option value=".option4">Option 4</option>
                                    </select>
                                </div> <!-- cd-select -->
                            </div> <!-- cd-filter-content -->
                        </div> <!-- cd-filter-block -->

                        <div class="cd-filter-block">
                            <h4>Radio buttons</h4>

                            <ul class="cd-filter-content cd-filters list">
                                <li>
                                    <input class="filter" data-filter="" type="radio" name="radioButton" id="radio1"
                                        checked>
                                    <label class="radio-label" for="radio1">All</label>
                                </li>

                                <li>
                                    <input class="filter" data-filter=".radio2" type="radio" name="radioButton"
                                        id="radio2">
                                    <label class="radio-label" for="radio2">Choice 2</label>
                                </li>

                            </ul> <!-- cd-filter-content -->
                        </div> <!-- cd-filter-block -->
                    </form>

                </div> <!-- cd-filter -->
                <div class="mycontent ">
                    <section class="ghada ">
                        <div class="main-top">
                            <h1 id="rollers1">New partners</h1>
                            <i class="fas fa-user-cog"></i>
                        </div>

                        <div class="users row">

                            <?php
                            //$row  = mysqli_fetch_array($sql);
                            while ($row = mysqli_fetch_array($sql)) {

                                echo '
                                <div class="card">
                                <img src="../../image_profile/' . $row["image_upload"] . '">
                                <h4>' . $row["brand_name"] . '</h4>
                                <p>' . $row["category"] . '</p>
                                <div class="per">
                                    <table class="tab">
                                        <tr class="cen">
                                            <td>
                                                <span>' . $row["CA_annuel"] . '$</span>&nbsp&nbsp&nbsp&nbsp&nbsp
                                                <span>&nbsp&nbsp&nbsp&nbsp' . $row["Partners"] . '&nbsp&nbsp&nbsp&nbsp </span>
                                            </td>
                                        </tr>
                                        <br>
                                        <tr class="cen">
                                            <td>CA&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                            <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Partners</td>
                                        </tr>
                                    </table>
                                </div>
                                <button><a href="../contactUs/contact.php?' . $row["id"] . '">Contacter</a></button>
                            </div>';
                            }
                            ?>
                        </div>
                    </section>
                    <div class="pagination">
                        <a href="#">&laquo;</a>

                        <?php
                        for ($i = 1; $i <= $number_de_page; $i++) {
                            echo '<a href="?page=' . $i . '">' . $i . '</a>';
                        }
                        ?>
                        <a href="#">&raquo;</a>

                    </div>
                </div>
            </div>
        </div>


    </div>

</body>