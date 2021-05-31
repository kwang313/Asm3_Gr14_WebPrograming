<?php
require "../lib/commonphp.php";
if ((!isset($_SESSION['admin']))&&
    (!isset($_SESSION['login']))){
    header("location:myaccount.php");
}

// Load template
require_once "../lib/head.php";
$cssArr = ["aboutusStyle","headerandfooter","cookies"];
$fileTitle = "About Us";
callCSSfile($cssArr, $fileTitle);
require_once "../lib/header.php";
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
    <title>Edit Content</title>
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

    <!--Main-->
    <main id="editMain">
        <h1>Edit Content</h1>
        <form method="post" action="writingProcessing.php">
            <label for="title">
                <h2>Title:</h2>
            </label>
            <input type="text" id="title" name="title" value="<?=$result["title"]?>" required>
            <label for="wAuthor">
                <h2>Author:</h2>
            </label>
            <input type="text" id="wAuthor" name="wAuthor" value="<?=$result["author"]?>" required>
            <label for="content">
                <h2>Content:</h2>
            </label>
            <textarea id="content" name="content" required><?=$result["content"];?>    
            </textarea>
            <input type="hidden" name="filename" value="<?=$targetFile?>">
            <input type="submit" name="editsubmitOn" value="Edit">
        </form>
    </main>
    <?php
    require_once "../lib/cookie.php";
    require_once "../lib/footer.php";
    require_once "../lib/script.php";
    $jsArr = ["cookies"];
    callJSfile($jsArr);       
?>