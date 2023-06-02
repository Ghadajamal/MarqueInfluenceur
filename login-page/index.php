<!DOCTYPE html>
<html lang="en">

<head>
    <title>PROMOTE</title>
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
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICE</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><a href="#">LOGIN</a></li>
                </ul>
            </div>
            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type to search">
                <a href=""> <button class="btn" type="submit"> Search </button></a>
            </div>

        </div>
        <div class="content">
            <h1>PROMOTE-INFLUENCER<br>TOGETHER WE MAKE<br><span>A BRAND</span></h1>
            <p class="paragraph">with PROMOTE you can find your favourite brands, contact them and work with them. <br>
                influencer-marque relationship has never been easier you can find all of your most known <br>
                trendy influencers on our platform. <br>
                branding is right between your hands</p>
            <button class="cn"><a href="../sign-page/signup.html">JOIN US</a></button>

            <div class="form">
                <form action="treatement.php" method="post" enctype="multipart/form-data">

                    <h2>Login Here</h2>
                    <input type="email" name="email" placeholder="Enter email Here">
                    <input type="password" name="pass" placeholder="Enter Password Here">
                    <input type="submit" name="toLogin" class="btnn" value="Login">
                    <p class="link">Don't have an account?<br>
                        <a href="../sign-page/signup.php" target="_blank">Sign up </a>here</p>
                    <p class="liw">Log in with</p>
                    <div class="icons">
                        <a href="#">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-google"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-skype"></ion-icon>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
<footer>
    <p align="center">© 2022 projet web</p>
</footer>

</html>