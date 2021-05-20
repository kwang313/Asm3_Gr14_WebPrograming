<?php
require "datafunction.php";
session_start();
$mypagePath = "\"".changeMyPagePath()."\"";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>G14 web Programming</title>
    <link rel="stylesheet" href="css/fees.css" />
    <link rel="stylesheet" href="css/headerandfooter.css" />
    <link rel="stylesheet" type="text/css" href="css/cookies.css" />
    <script src="https://kit.fontawesome.com/13954ad90d.js" crossorigin="anonymous"></script>
    <title>Fees</title>
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
                    <a class="link" href="index.php">Home</a>
                    <a class="link" href="aboutus.php">About us</a>
                    <a class="link" href="fees.php">Fees</a>
                    <a class="link" id="account" href=<?=$mypagePath?>>My account</a>
                    <a class="link" href="browseproducts.php">Browse</a>
                    <a class="link" href="faq.php">FAQs</a>
                    <a class="link" href="contact.php">Contact</a>
                </nav>
            </div>
        </div>
    </header>
    <div class="fees_table">
        <h2> We have 3 option for our customer to choose!</h2>
        <h2>You can become our member!</h2>
        <section class="selection">
            <div class="content">
                <div class="pricing-table table1">
                    <div class="pricing-header">
                        <div class="price"><span>$</span>0</div>
                        <div class="title">Guest</div>
                    </div>
                    <ul class="pricing-list">
                        <li><b>1%</b> Discount</li>
                        <div class="border"></div>
                        <li><b>Unlimited</b> Year</li>
                        <div class="border"></div>
                        <li><b>None</b> Support</li>
                    </ul>
                    <a href="accountContents/register.html">Choose this option!</a>
                </div>



                <div class="pricing-table table2">
                    <div class="pricing-header">
                        <div class="price"><span>$</span>20</div>
                        <div class="title">Standard User</div>
                    </div>
                    <ul class="pricing-list">
                        <li><b>10%</b> Discount</li>
                        <div class="border"></div>
                        <li><b>1</b> Year</li>
                        <div class="border"></div>
                        <li><b>24h</b> Support</li>
                    </ul>
                    <a href="accountContents/register.html">Choose this option!</a>
                </div>

                <div class="pricing-table table3">
                    <div class="pricing-header">
                        <div class="price"><span>$</span>40</div>
                        <div class="title">Premiem User</div>
                    </div>
                    <ul class="pricing-list">
                        <li><b>20%</b> Discount</li>
                        <div class="border"></div>
                        <li><b>1</b> Year</li>
                        <div class="border"></div>
                        <li><b>24h</b> Support</li>
                    </ul>
                    <a href="accountContents/register.html">Choose this option!</a>
                </div>
            </div>
    </div>
    </section>
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
    <noscript>It seems like your browser does not support JavaScript. Please check again.</noscript>
</body>

</html>