<?php
require "../lib/commonphp.php";

// Load template
require_once "../lib/head.php";
$cssArr = ["faq","headerandfooter","cookies"];
$fileTitle = "FAQ";
callCSSfile($cssArr, $fileTitle);
require_once "../lib/header.php";
?>

<main id="content">
    <h1>FAQ</h1>
    <hr>
    <h2 class="sub-title">These are some question that we had from few cutomer before.</h2>
    <br>
    <details>
        <summary class="question">Why is our website name mall?</summary>
        <div class="faq__content">
            <p>- Since our website sells various stuff online and we link you to many shops that had those stuff. We
                call ourself mall</p>
        </div>
    </details>
    <details>
        <summary class="question">How many product do you have?</summary>
        <div class="faq__content">
            <p>- We are feturing a total of 40 product. which is from 8 stores and each stores present 4 products.
            </p>
        </div>
    </details>
    <details>
        <summary class="question">Who is your customer?</summary>
        <div class="faq__content">
            <p>- Anyone who is interested in our website and love shopping at the mall. Our website let the customer
                have the feleing like they are at the real mall.</p>
        </div>
    </details>
    <details>
        <summary class="question">How can we contact you?</summary>
        <div class="faq__content">
            <p>- Our phone number is xxx-xxx-xxx</p>
        </div>
    </details>
    <details>
        <summary class="question">Where is your store?</summary>
        <div class="faq__content">
            <p>- We are currently at Rmit school which is 702 Nguyen Van Linh, District 7, Ho Chi Minh City</p>
            <p>- Below is the destination of our store.</p>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.063676043263!2d106.69088691531155!3d10.729572262989512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fbea5fe3db1%3A0xfae94aca5709003f!2sRMIT%20University%20Vietnam%2C%20Saigon%20South%20campus!5e0!3m2!1sen!2s!4v1618568940735!5m2!1sen!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </details>
    <br>
</main>
<?php
    require_once "../lib/cookie.php";
    require_once "../lib/footer.php";
    require_once "../lib/script.php";
    $jsArr = ["cookies"];
    callJSfile($jsArr);       
?>