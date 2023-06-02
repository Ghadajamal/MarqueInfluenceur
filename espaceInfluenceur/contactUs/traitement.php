<?php
extract($_POST);
include("../../connection/connection.php");
/*$sql = mysqli_query($conn, "SELECT * FROM influenceur where email=$id");
$sqla = mysqli_query($conn, "SELECT * FROM brand where email=$id");*/
$_brandID = $_SERVER['QUERY_STRING'];
$roww = explode('&', $_brandID);
$mydescription = htmlspecialchars($content, ENT_QUOTES);

if (isset($_POST['tosubmit'])) {
    //echo $_brandID;

    $sqll = mysqli_query($conn, "SELECT * from Partnership where id_brand = $roww[0] and id_influencer = $roww[1] and sender='influencer'");

    $num_rows = mysqli_num_rows($sqll);
    if ($num_rows > 0) {
        echo '<script>alert("partnership already requested, try another brand.");
         window.location.href="../newPartner/new.php?page=1";
         </script>';
    } else {
        $sql_l = "INSERT INTO Partnership(id_brand,id_influencer, email_influencer,email_brand,content, statut, sender ) VALUES ('$roww[0]', $roww[1], '$email_influencer','$emailBrand','$mydescription','pas encore signé','influencer')";
        if ($conn->query($sql_l) === TRUE) {
            echo '<script>alert("request sent succesffuly !");
         window.location.href="../newPartner/new.php?page=1";
         </script>';
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
}