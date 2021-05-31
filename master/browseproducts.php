<!DOCTYPE html>
<html lang='en' dir='ltr'>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/headerandfooter.css" />
    <script src="https://kit.fontawesome.com/13954ad90d.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/13954ad90d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/cookies.css" />
    <meta name='viewport' content="width=device-width, intial-scale=1.0">
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
                    <a class="link" id="account" href="myaccount.php">My account</a>
                    <a class="link" href="browseproducts.php">Browse</a>
                    <a class="link" href="faq.php">FAQs</a>
                    <a class="link" href="contact.php">Contact</a>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="card">
                <h1 class="name">Browse Stores by Name</h1>
                <form method="get" action="">
                    <select class="catagories_name" name="store_catagories">
                        <option value="" selected disabled hidden>Select a store category</option>
                        <option value="1">Department stores</option>
                        <option value="2">Grocery stores</option>
                        <option value="3">Restaurants</option>
                        <option value="4">Clothing stores</option>
                        <option value="5">Accessory stores</option>
                        <option value="6">Pharmacies</option>
                        <option value="7">Technology stores</option>
                        <option value="8">Pet stores</option>
                        <option value="9">Toy stores</option>
                        <option value="10">Specialty stores</option>
                        <option value="11">Thrift stores</option>
                        <option value="12">Services</option>
                        <option value="13">Kiosks</option>
                    </select>
                    <input type="submit" name="submitName" value="Browse">
                </form>
            </div>
            <div class="card">
                <h1 class="name">Browse Stores by Category</h1>
                <form method="get" action="">
                    <select class="catagories_name" name="store_name">
                        <option value="" selected disabled hidden>Select a letter for the store name.</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        <option value="G">G</option>
                        <option value="H">H</option>
                        <option value="I">I</option>
                        <option value="J">J</option>
                        <option value="K">K</option>
                        <option value="L">L</option>
                        <option value="M">M</option>
                        <option value="N">N</option>
                        <option value="O">O</option>
                        <option value="P">P</option>
                        <option value="Q">Q</option>
                        <option value="R">R</option>
                        <option value="S">S</option>
                        <option value="T">T</option>
                        <option value="U">U</option>
                        <option value="V">V</option>
                        <option value="W">W</option>
                        <option value="X">X</option>
                        <option value="Y">Y</option>
                        <option value="Z">Z</option>
                    </select>
                    <input type="submit" name="submitCatagory" value="Browse">
                </form>
            </div>
        </div>
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

    <!--Footer-->
    <footer>
        <a class="footer-link" href="copyright.php">
            <i class="far fa-copy"></i>
            <span class="des">CopyRight</span>
        </a>
        <a class="footer-link" href="tos.php">
            <i class="fas fa-concierge-bell"></i>
            <span class="des">ToS</span>
        </a>
        <a class="footer-link" href="privacypolicy.php">
            <i class="fas fa-user-secret"></i>
            <span class="des">Privacy policy</span>
        </a>
    </footer>
    <script type="text/javascript" src="js/cookies.js"></script>
    <noscript>It seems like your browser does not support JavaScript. Please check again.</noscript>
</body>

</html>