<?php
session_start();
if ((!isset($_SESSION['admin']))&&
    (!isset($_SESSION['login']))){
    header("location:myaccount.php");
}

// The below code receive photo from the admin
// and change the portraits of the member who the admin want to change.
if(isset($_POST["uploadSubmitOn"])){
    if($_FILES["profile"]["error"] == UPLOAD_ERR_OK){
        $newPath = "New_products/profilePic".$_POST["memberName"].".jpg";
        move_uploaded_file($_FILES["profile"]["tmp_name"], $newPath);
        header("location:aboutus.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/headerandfooter.css'>
    <link rel="stylesheet" type="text/css" href="css/cookies.css" />
    <link rel="stylesheet" type="text/css" href="css/dashboard.css" />
    <script src="https://kit.fontawesome.com/13954ad90d.js" crossorigin="anonymous"></script>
    <title>Upload photo</title>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="bar-content">
            <div class="bar-content center">
                <i class="fas fa-store-alt"></i>
                <label class="bar__nav-toggle" for="inpNavToggle">
                    <i class="fas fa-bars"></i>
                </label>
                <input type="checkbox" id="inpNavToggle" />
                <nav class="nav">
                    <a class="link" href="index.html">Home</a>
                    <a class="link" href="aboutus.php">About us</a>
                    <a class="link" href="fees.html">Fees</a>
                    <a class="link" id="account" href="myaccount.php">My account</a>
                    <a class="link" href="browseproducts.html">Browse</a>
                    <a class="link" href="faq.html">FAQs</a>
                    <a class="link" href="contact.html">Contact</a>
                </nav>
            </div>
        </div>
    </header>
    <!--Main-->
    <main id="uploadMain">
        <h1>Upload photo</h1>
        <form method="post" action="uploadphoto.php" enctype="multipart/form-data">
            <h2>Select Member:</h2>
            <select name="memberName" required>
                <option value="">Please Select</option>
                <option value="Liz">Lee Gain</option>
                <option value="Suk">Jang Moon Suk</option>
                <option value="Daniel">Nguyen Ha Minh Duy</option>
                <option value="Khang">Tran Vinh Khang</option>
            </select>

            <label for="=profile">
                <h2>Uploading photo:</h2>
            </label>
            <input type="file" id="profile" name="profile" accept="image/png, image/jpeg" required>
            <p>Our website only accepts png and jpeg file. Thank you.</p>
            <input type="submit" name="uploadSubmitOn" value="Upload">
        </form>
    </main>
    <!--Cookies-->
    <div class="popup_cookies">
        <img src="New_products/cookie.gif" alt="A cookie">
        <div class="cookies_content">
            <h1>We use Cookies!</h1>
            <p>This website use cookies to help us maintain the functioning. By continuing browsing, you consent to use
                our use of cookies and other technologies.</p>
            <div class="cookies_buttons">
                <button class="learn_more">I agree</button>
                <a href="https://gdpr-info.eu/" class="learn_more">GDPR</a>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer>
        <a class="footer-link" href="copyright.php">
            <i class="far fa-copy"></i>
            <span class="des">Copy Right</span>
        </a>
        <a class="footer-link" href="tos.php">
            <i class="fas fa-concierge-bell"></i>
            <span class="des">ToS</span>
        </a>
        <a class="footer-link" href="privacypolicy.php">
            <i class="fas fa-user-secret"></i>
            <span class="des">Privacy Policy</span>
        </a>
    </footer>
    <script type="text/javascript" src="js/cookies.js"></script>
    <script type="text/javascript" src="js/formvalidation.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
    <script type="text/javascript" src="js/checkstatus.js"></script>
    <noscript>It seems like your browser does not support JavaScript. Please check again.</noscript>
</body>

</html>