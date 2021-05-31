session_start();
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="Khang Tran s3855823">
    <title>Asport | CART</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/headerandfooter.css" />
	 <link rel="stylesheet" type ="text/css" href="../css/cookies.css"/>
    <script src="https://kit.fontawesome.com/13954ad90d.js" crossorigin="anonymous"></script>
</head>

<body>
<div id ="shop-name" hidden>sport</div>
    <div class="header">
        <!-- Header -->
        <header>
            <div class="bar-content">
                <div class="bar-content center">
                    <img  src="img/logo.png">
                    <label class="bar__nav-toggle" for="inpNavToggle">
                        <div class = "icon">
                            <i id = "ham" class="fas fa-bars"></i>
                        </div>
                    </label>
                    <input type="checkbox" id="inpNavToggle" />
                    <nav class="nav">
                        <a class="link" href="index.php">Home</a>
                        <a class="link" href="aboutus.html">About us</a>
                        <a class="link" href="product.php">Product</a>
                        <a class="link" href="contact.html">Contact</a>
                        <a class="link cart-number" href="cart.php">
								

						</a>

                    </nav>
                </div>
            </div>
        </header>   
		<div id="myModal" class="modal">
		  <!-- Modal content -->
		  <div class="modal-content">
			<span class="close">&times;</span>
			This is an invalid coupon. Please check again.
		  </div>
		</div>  
        <?php
        if($_SESSION['login'] === true){
        }
        else{
            echo '<div id="login-modal" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        Please login to proceed.
                        </br>
                        <span>
                            <a href="../register.php" class="button">login</a>
                        </span>
                    </div>
                    </div>';
        }
        ?>
        
        <!-- CART -->
        <div class="container-cart">
            <table class = "cart">
                <tr>
                    <th>Product</th>
                    <th>Quanity</th>
                    <th>Subtotal</th>
                </tr>
                
            </table>
            <div class="total-price">
                <table>
                    <tr>
                        <td >Subtotal</td>
                        <td class = "sub-total">$130</td>
                    </tr>
                    <tr>
                        <td >Tax</td>
                        <td class = "tax">$13</td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td class = "delivery">$5</td>
                    </tr>
					<tr>
                        <td>COUPON</td>
                        <td><input class = "coupon"  type="text">
						</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">TOTAL</td>
                        <td style="font-weight: bold;" class = "total">$148</td>
                    </tr>
                </table>

            </div>
            <div class="buttons">
                <a href="product.php" class="button">Continue Shopping</a>
                <a href="thankyou.html" class="button1 order">Order</a>
            </div>
        </div>
    </div>
	 <!--Cookies-->
     <div class="popup_cookies">
        <img src="../New_products/cookie.gif" alt="A cookie">
        <div class="cookies_content">
          <h1>We use Cookies!</h1>
          <p>This website use cookies to help us maintain the functioning. By continuing browsing, you consent to use our use of cookies and other technologies.</p>
          <div class="cookies_buttons">
            <button class="learn_more">I agree</button>
            <a href="https://gdpr-info.eu/" class="learn_more">GDPR</a>
          </div>
        </div>
      </div>
    <footer>
        <a class="footer-link" href="footerContents/copyright.html">
            <i class="far fa-copy"></i>
            <span class="des">Copy Right</span>
        </a>
        <a class="footer-link" href="footerContents/tos.html">
            <i class="fas fa-concierge-bell"></i>
            <span class="des">ToS</span>
        </a>
        <a class="footer-link" href="footerContents/privacypolicy.html">
            <i class="fas fa-user-secret"></i>
            <span class="des">Privacy policy</span>
        </a>
    </footer>

</body>
	<script type="text/javascript" src="../js/cookies.js"></script>
<script src ="./js/product.js" ></script>
<script src ="./js/cart.js" ></script>


</html>
