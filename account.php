<?php 
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - Shirtastic</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="shortcut icon" href="https://static.vecteezy.com/system/resources/thumbnails/002/399/795/small/tiger-head-illustration-tiger-design-for-t-shirt-mascot-logo-team-sport-vector.jpg" type="x-icon">
    <link href="https://fonts.googleapis.com/css2?
    family=Poppins:wght@300;400;500;600;700&display=swap" 
    rel="stylesheet">
</head>


<body>

 <div class="vhon">
 <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"><img src="https://static.vecteezy.com/system/resources/thumbnails/002/399/795/small/tiger-head-illustration-tiger-design-for-t-shirt-mascot-logo-team-sport-vector.jpg" alt=""></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="menu.php">Product</a></li>
                    <li><a href="About.php">About</a></li>
                    <li><a href="account.php">Account</a></li>
                </ul>
            </nav>
            <a href="menu.php"><img src="https://cdn-icons-png.freepik.com/512/7835/7835563.png" width="30px" height="30px"></a>
            <img src="C:/images/Menu.png" class="menu-icon" onclick="menutoggle()">
        </div>     
    </div>
 </div>
    
<!-----account-page----->

<div id="form">
    <h1>Login Form</h1>
    <form name="form" method="POST">
        <label>Username: </label>
        <input type="text" id="user" name="user"><br><br>
        <label>Password</label>
        <input type="password" id="pass" name="pass"><br><br>
        <input type="submit" id="btn" value="Login" name="submit"/>

    </form>
</div>


<!-----footer----->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android and ios mobile phone</p>
                <div class="app-logo">
                    <img src="C:/images/Turkish Coffee.jpg">
                    <img src="C:/images/Mocha.jpeg">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="C:/images/logo1.jpg" alt="">
                <p>Our Purpose is to sustainably make the pleasure and Benefits of 
                    Sports Accessible to the many</p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>YouTube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2020 - Easy Tutorials</p>
    </div>
</div> 
<!----- js for toggle menu----->
<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight = "200px"
        } 
    else
        {
            MenuItems.style.maxHeight = "0px"
        }
    }
</script>


<!-----js for toggle Form----->
 <script>

    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

    function register(){

        RegForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
    }

    function Login(){

RegForm.style.transform = "translateX(300px)";
LoginForm.style.transform = "translateX(300px)";
Indicator.style.transform = "translateX(0px)";
}

 </script>



</body>
</html>