<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header("location:myaccount.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/headerandfooter.css'>
    <link rel='stylesheet' href='css/mypageStyle.css'>
    <link rel="stylesheet" type="text/css" href="css/cookies.css" />
    <script src="https://kit.fontawesome.com/13954ad90d.js" crossorigin="anonymous"></script>
    <title>My Page</title>
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
                    <a class="link" href="aboutus.html">About us</a>
                    <a class="link" href="fees.html">Fees</a>
                    <a class="link" id="account" href="myaccount.html">My account</a>
                    <a class="link" href="browseproducts.html">Browse</a>
                    <a class="link" href="faq.html">FAQs</a>
                    <a class="link" href="contact.html">Contact</a>
                </nav>
            </div>
        </div>
    </header>
    <main id="mypageMain">
        <section>
            <div class="titleCont">
                <h2>Basic info</h2>
                <img src="New_products/icon/basic.png"
                    alt="This is an icon of basic info. The icon displays the identity card."></img>
            </div>
            <div class="info">
                <h3>photo</h3>
                <img id="profilePic" src="New_products/profileExample.jpg"
                    alt="This is a profile portrait of a user. For now, Steve Jobs'portrait was shown as an example.">
            </div>
            <div class="info">
                <h3>First Name</h3>
                <p>Steve</p>
            </div>
            <div class="info">
                <h3>Last Name</h3>
                <p>Jobs</p>
            </div>
        </section>

        <section>
            <div class="titleCont">
                <h2>Security</h2>
                <img src="New_products/icon/security.png"
                    alt="This is an icon of security. The icon displays the lock."></img>
            </div>
            <div class="info">
                <h3>Email</h3>
                <p id="mypageEmail">abc123@gmail.com</p>
            </div>
            <div class="info">
                <h3>Phone number</h3>
                <p>123456789</p>
            </div>
            <div class="info">
                <h3>Password</h3>
                <p></p>
            </div>
            <div class="info">
                <h3>Account Type</h3>
                <p>Store owner</p>
            </div>
        </section>

        <section>
            <div class="titleCont">
                <h2>Address Book</h2>
                <img src="New_products/icon/address.png"
                    alt="This is an icon of address Book. The icon displays a house in an upside-down waterdrop shape."></img>
            </div>
            <div class="info">
                <h3>Address</h3>
                <p>Tysons Corner Center mall in Tysons</p>
            </div>
            <div class="info">
                <h3>City</h3>
                <p>Virginia</p>
            </div>
            <div class="info">
                <h3>Zipcode</h3>
                <p>112233</p>
            </div>
            <div class="info">
                <h3>Country</h3>
                <p>United States</p>
            </div>
        </section>

        <section>
            <div class="titleCont">
                <h2>Business profile</h2>
                <img src="New_products/icon/business.png"
                    alt="This is an icon of business profile. The icon displays the lock.The icon displays two hands shaking hands."></img>
            </div>
            <div class="info">
                <h3>Store Name</h3>
                <p>Apple</p>
            </div>
            <div class="info">
                <h3>Store Category</h3>
                <p>Technology stores</p>
            </div>
        </section>
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
        <a class="footer-link" href="copyright.html">
            <i class="far fa-copy"></i>
            <span class="des">Copy Right</span>
        </a>
        <a class="footer-link" href="tos.html">
            <i class="fas fa-concierge-bell"></i>
            <span class="des">ToS</span>
        </a>
        <a class="footer-link" href="privacypolicy.html">
            <i class="fas fa-user-secret"></i>
            <span class="des">Privacy Policy</span>
        </a>
    </footer>
    <script type="text/javascript" src="js/cookies.js"></script>
    <script type="text/javascript" src="js/mypage.js"></script>
    <script type="text/javascript" src="js/checkstatus.js"></script>
    <noscript>It seems like your browser does not support JavaScript. Please check again.</noscript>
</body>

</html>