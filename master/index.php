<?php
<<<<<<< Updated upstream
require "datafunction.php";
session_start();
$mypagePath = "\"".changeMyPagePath()."\"";
?>
<!DOCTYPE html>
<html lang='en' dir='ltr'>

<head>
    <meta charset="utf-8">
    <title>G14 web Programming</title>
    <link rel='stylesheet' href='css/style.css'>
    <link rel='stylesheet' href='css/headerandfooter.css'>
    <link rel="stylesheet" type="text/css" href="css/cookies.css" />
    <script src="https://kit.fontawesome.com/13954ad90d.js" crossorigin="anonymous"></script>
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
                    <a class="link" id="account" href=<?=$mypagePath?>>My account</a>
                    <a class="link" href="browseproducts.php">Browse</a>
                    <a class="link" href="faq.php">FAQs</a>
                    <a class="link" href="contact.php">Contact</a>
                </nav>
            </div>
        </div>
    </header>
=======
require "../lib/commonphp.php";
require_once "../lib/head.php";
$cssArr = ["style","headerandfooter","cookies"];
$fileTitle = "Index";
callCSSfile($cssArr, $fileTitle);
require_once "../lib/header.php";
?>
<main>
>>>>>>> Stashed changes
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>WELCOME TO OUR MALL</h1>
                    <p>“To uncover your true potential you must first find your own limits and then you have to have the
                        courage to blow past them.” – Picabo Street</p>
                </div>
                <div class="col">
                    <img id="home" src="New_products/home.png" alt="Home page image">
                </div>
            </div>
        </div>
    </div>

<<<<<<< Updated upstream
    <!-- Body -->
    <div class="container">
        <div class="tag">
            <h1>New Stores</h1>
        </div>
        <div class="slider-wrap">
            <div class="slider">
                <div class="slider-item">
                    <div class="img-div"></div>
                </div>
                <div class="slider-item">
                    <div class="img-div"></div>
                </div>
                <div class="slider-item">
                    <div class="img-div"></div>
                </div>
                <div class="slider-item">
                    <div class="img-div"></div>
                </div>
                <div class="slider-item">
                    <div class="img-div"></div>
                </div>
                <div class="slider-item">
                    <div class="img-div"></div>
                </div>
            </div>
        </div>
        <div class="tag">
            <h1>New Product</h1>
=======
    <div class="tag">
        <h1>New Stores</h1>
        <div class="slider-wrap">
            <div class="slider">
                <?php
            require_once 'stores_function.php';
            $new_stores_names = array();
            $new_stores = read_newest_stores();
            $new_stores_count = 0;
            foreach ($new_stores as $new_store) {
                $name = $new_store['name'];
                echo "
                <div class='slider-item'>
                    <div class='img-div'></div>
                    <h3>$name</h3>
                </div>
        ";
                $new_stores_count++;
                if ($new_stores_count == 10) {
                    break;
                }
            }
            ?>
            </div>
        </div>
    </div>
    <div class="tag">
        <h1>New products</h1>
    </div>
    <div class="slider-wrap1">
        <div class="slider1">
            <?php
            require_once 'product_functions.php';
            $new_products_names = array();
            $new_products = read_all_products();
            $new_products_count = 0;
            foreach ($new_products as $new_product) {
                $name = $new_product['name'];
                $price = $new_product['price'];
                echo "
                <div class='slider-item1'>
                    <div class='img-div1'></div>
                    <h3>$name</h3>
                    <h3>$price</h3>
                </div>
        ";
                $new_products_count++;
                if ($new_products_count == 10) {
                    break;
                }
            }
            ?>
>>>>>>> Stashed changes
        </div>
        <div class="slider-wrap1">
            <div class="slider1">
                <div class="slider-item1">
                    <div class="img-div1"></div>
                </div>
                <div class="slider-item1">
                    <div class="img-div1"></div>
                </div>
                <div class="slider-item1">
                    <div class="img-div1"></div>
                </div>
                <div class="slider-item1">
                    <div class="img-div1"></div>
                </div>
                <div class="slider-item1">
                    <div class="img-div1"></div>
                </div>
                <div class="slider-item1">
                    <div class="img-div1"></div>
                </div>
            </div>
        </div>
        <div class="tag">
            <h1>Featured Stores</h1>
        </div>
        <div class="slider-wrap2nd">
            <div class="slider2nd">
                <div class="slider-item2nd">
                    <div class="img-div2nd"></div>
                </div>
                <div class="slider-item2nd">
                    <div class="img-div2nd"></div>
                </div>
                <div class="slider-item2nd">
                    <div class="img-div2nd"></div>
                </div>
                <div class="slider-item2nd">
                    <div class="img-div2nd"></div>
                </div>
                <div class="slider-item2nd">
                    <div class="img-div2nd"></div>
                </div>
                <div class="slider-item2nd">
                    <div class="img-div2nd"></div>
                </div>
            </div>
        </div>
        <div class="tag">
            <h1>Featured Products</h1>
        </div>
        <div class="slider-wrap3rd">
            <div class="slider3rd">
                <div class="slider-item3rd">
                    <div class="img-div3rd"></div>
                </div>
                <div class="slider-item3rd">
                    <div class="img-div3rd"></div>
                </div>
                <div class="slider-item3rd">
                    <div class="img-div3rd"></div>
                </div>
                <div class="slider-item3rd">
                    <div class="img-div3rd"></div>
                </div>
                <div class="slider-item3rd">
                    <div class="img-div3rd"></div>
                </div>
                <div class="slider-item3rd">
                    <div class="img-div3rd"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
<<<<<<< Updated upstream

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

    <script type="text/javascript" src="js/infinite_carousel.js"></script>
    <script type="text/javascript" src="js/infinite_carousel1.js"></script>
    <script type="text/javascript" src="js/infinite_carousel2.js"></script>
    <script type="text/javascript" src="js/infinite_carousel3.js"></script>
    <noscript>It seems like your browser does not support JavaScript. Please check again.</noscript>
</body>

</html>
=======
</main>
<?php
    require_once "../lib/cookie.php";
    require_once "../lib/footer.php";
    require_once "../lib/script.php";
    $jsArr = ["cookies","infinite_carousel","infinite_carousel1","infinite_carousel2","infinite_carousel3"];
    callJSfile($jsArr);       
?>
>>>>>>> Stashed changes
