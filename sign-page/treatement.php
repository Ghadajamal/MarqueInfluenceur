<?php
extract($_POST);
include("../connection/connection.php");
$sql = mysqli_query($conn, "SELECT * FROM utilisateur where email='$email'");
if (mysqli_num_rows($sql) > 0) {
    echo "Email Id Already Exists";
    exit;
} else {
    //echo "new Email to add"; 
    if (isset($_POST['influenceur'])) {
        $password = trim($_POST["password"]);
        $confirm_password = trim($_POST["confirm_password"]);
        if (($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
            echo $confirm_password_err;
        } else {
            $query = "INSERT INTO utilisateur(email, password, statut ) VALUES ('$email', '$password', 'influenceur')";
            $sql = mysqli_query($conn, $query) or die("Could Not Perform the Query");

            $query2 = "INSERT INTO influenceur( first_name, last_name,age,email,phone,password,gender,description,profession,image_upload ) VALUES ('$first_name', '$last_name', '$age', '$email', '$phone', '$password','$gender','','','userr.png')";
            if (!mysqli_query($conn, $query2)) {
                echo ("Error description: " . mysqli_error($conn));
                exit;
            }
            $query3 = "INSERT INTO socialLMedia( email, facebook,instagram,snapchat,tiktok,youtube ) VALUES ('$email', '', '', '', '', '')";
            if (!mysqli_query($conn, $query3)) {
                echo ("Error description: " . mysqli_error($conn));
                exit;
            }
            header("Location: ../login-page/index.php");
        }
    } elseif (isset($_POST['brand'])) {
        $password = trim($_POST["password2"]);
        $confirm_password = trim($_POST["confirm_password2"]);
        if (($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
            echo $confirm_password_err;
        } else {
            //echo "voilaa " . $selectThis;
            $query = "INSERT INTO utilisateur(email, password, statut ) VALUES ('$email2', '$password2', 'brand')";
            if (!mysqli_query($conn, $query)) {
                echo ("Error description: " . mysqli_error($conn));
                exit;
            }

            $query2 = "INSERT INTO Brand( brand_name, CA_annuel,email,phone,password,description,profession,site_web,image_upload,category,Partners ) VALUES ('$brand_name', '$CA_annuel', '$email2', '$phone2', '$password2','','','','userr.png','$selectThis',0)";
            if (!mysqli_query($conn, $query2)) {
                echo ("Error description: " . mysqli_error($conn));
                exit;
            }

            header("Location: ../login-page/index.php");
        }
    }
    /* $password = trim($_POST["password"]);
        $confirm_password = trim($_POST["confirm_password"]);
        if( ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
            echo $confirm_password_err;
        }else {
            $query="INSERT INTO utilisateur(email, password, statut ) VALUES ('$email', '$password', '$status')";
            $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
            

            header ("Location: ../login-page/index.php");    
            
        }*/
    $_POST = array();
}