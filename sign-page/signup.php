<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">PRMOMOTE</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICE</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><a href="index.html">LOGIN</a></li>
                </ul>
            </div>
            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type to search">
                <a href=""> <button class="btn" type="submit"> Search </button></a>
            </div>
        </div>

        <div class="content">

            <div class="forme">
                <div class="titre">
                    <h1>SIGN UP</h1>
                </div>
                <div>

                    <!--category details-->
                    <div class="status-details">
                        <input type="radio" value="brand" name="status" id="dot-3" checked onClick="hideB()">
                        <input type="radio" value="Influencer" name="status" id="dot-4" onClick="hideA()">
                        <span class="status-titre"><b> Category</b></span>
                        <div class="status">
                            <label for="dot-3">
                                <span class="dot one"></span>
                                <span class="statu1">Influencer</span>
                            </label>
                            <label for="dot-4">
                                <span class="dot two"></span>
                                <span class="statut1">Brand</span>
                            </label>
                        </div>
                    </div>
                    <!--end of category-->
                    <div>

                        <!--form influence-->
                        <form action="treatement.php" method="post" enctype="multipart/form-data">

                            <div class="user-data" id="A">

                                <div class="input_box">
                                    <div class="left"> <span class="details"><b> First Name</b></span>
                                        <input type="text" placeholder="Enter your first name" name="first_name"
                                            required>
                                    </div>
                                </div>
                                <div class="input_box">
                                    <div class="right"> <span class="details"><b> Last Name</b></span>
                                        <input type="text" placeholder="Enter your last name" name="last_name" required>
                                    </div>
                                </div>
                                <div class="input_box">
                                    <div class="left"> <span class="details"><b> age</b> </span>
                                        <input type="number" placeholder="Enter your age" name="age" required></div>
                                </div>
                                <div class="input_box">
                                    <div class="left"> <span class="details"><b> Email</b> </span>
                                        <input type="email" placeholder="Enter your Email" name="email" required></div>
                                </div>
                                <div class="input_box">
                                    <div class="right"> <span class="details"><b> Phone Number</b></span>
                                        <input type="text" placeholder="Enter your Phone Number" name="phone" required>
                                    </div>
                                </div>
                                <div class="input_box">
                                    <div class="left"> <span class="details"><b> Password</b></span>
                                        <input type="password" placeholder="solid password please" name="password"
                                            required>
                                    </div>
                                </div>
                                <div class="input_box">
                                    <span class="details"><b>Confirm Password</b> </span>
                                    <input type="password" placeholder="Confirm your password" name="confirm_password"
                                        required>
                                </div>
                                <!--gender details-->
                                <div class="gender-details">

                                    <input type="radio" name="gender" value="Male" id="dot-1">
                                    <input type="radio" name="gender" value="Female" id="dot-2">
                                    <span class="gender-titre"><b> Gender</b></span>
                                    <div class="category">
                                        <label for="dot-1">
                                            <span class="dot one"></span>
                                            <span class="gender">Male</span>
                                        </label>
                                        <label for="dot-2">
                                            <span class="dot two"></span>
                                            <span class="gender">Female</span>
                                        </label>
                                    </div>
                                </div>
                                <!--fin gender--->
                                <!--register botton-->
                                <div class="button">
                                    <input type="submit" name="influenceur" value="Register Now">
                                </div>
                                <!--end of regester botton-->

                            </div>
                        </form>
                        <!--end form influence-->
                        <!---fom brand-->
                        <form action="treatement.php" method="post" enctype="multipart/form-data">

                            <div class="user-data" id="B" style="display:none">
                                <div class="input_box">
                                    <div class="left"> <span class="details"><b>Brand name</b></span>
                                        <input type="text" placeholder="Enter your first name" name="brand_name"
                                            required></div>
                                </div>
                                <div class="input_box">
                                    <div class="right"> <span class="details"><b> CA Annuel en ($)</b></span>
                                        <input type="number" placeholder="Enter your last name" name="CA_annuel"
                                            required></div>
                                </div>
                                <div class="input_box">
                                    <div class="left"> <span class="details"><b> Email</b> </span>
                                        <input type="email" placeholder="Enter your Email" name="email2" required></div>
                                </div>
                                <div class="input_box">
                                    <div class="right"> <span class="details"><b>Phone Number</b></span>
                                        <input type="text" placeholder="Enter your Phone Number" name="phone2" required>
                                    </div>
                                </div>
                                <div class="input_box">
                                    <div class="right"> <span class="details"><b>Brand Category</b></span>
                                        <select class="filter" name="selectThis" id="selectThis" required>
                                            <option value="">Choose Category</option>
                                            <option value="Clothing brand">Clothing brand</option>
                                            <option value="Foot Wear">Foot Wear</option>
                                            <option value="Parfum Brand">Parfum Brand</option>
                                            <option value="Make UP Beauty">Beauty</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input_box">
                                    <div class="left"> <span class="details"><b> Password</b></span>
                                        <input type="password" placeholder="solid password please" name="password2"
                                            required></div>
                                </div>
                                <div class="input_box">
                                    <span class="details"><b>Confirm Password</b> </span>
                                    <input type="password" placeholder="Confirm your password" name="confirm_password2"
                                        required>
                                </div>
                                <!--register botton-->
                                <div class="button">
                                    <input type="submit" name="brand" value="Register Now">
                                </div>
                                <!--end of regester botton-->
                            </div>
                        </form>
                        <!--- end form brand-->
                    </div>


                </div>
            </div>
        </div>
        <div>

            <!--
<div style="position: absolute; left: 10px; top: 100px;" id="A"><br/>As text</div>
    <div style="position: absolute; left: 10px; top: 100px; visibility:hidden" id="B"><br/>Bs text</div>
    -->
        </div>
</body>
<script language="Javascript">
function hideA() {

    document.getElementById("A").style.display = "none";
    document.getElementById("B").style.display = "flex";

}

function hideB() {
    document.getElementById("B").style.display = "none";
    document.getElementById("A").style.display = "flex";

}
</script>

</html>