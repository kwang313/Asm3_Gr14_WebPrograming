<?php
require "datafunction.php";
session_start();
$mypagePath = "\"".changeMyPagePath()."\"";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/headerandfooter.css'>
    <link rel='stylesheet' href='css/accountcontentsStyle.css'>
    <link rel='stylesheet' href='css/register.css'>
    <link rel='stylesheet' href='css/formvalidation.css'>
    <link rel="stylesheet" type="text/css" href="css/cookies.css" />
    <title>Register Account</title>
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
    <main id="mainReg">
        <!--Sign In Btn-->
        <section id="rSignInCont">
            <p>Are you already our member?</p>
            <button type="button"><a href="myaccount.php">Sign In</a></button>
        </section>

        <!--Register Form-->
        <section id="allFormCont">
            <h1>Register Account</h1>
            <h2>Personal Information</h2>
            <p>The following fields are required for all member.</p>
            <form id="registerForm" action="success.php" onsubmit="return register();">
                <label for="email">
                    <h3>Email:</h3>
                </label>
                <input type="text" id="rEmail" name="rEmail" required>
                <ul class="errCont invalidForm validForm" id="emailList"></ul>
                <label for="phoneNvm">
                    <h3>Phone Number:</h3>
                </label>
                <input type="text" id="rPhoneNvm" name="rPhoneNvm" required>
                <ul class="errCont invalidForm validForm" id="phoneNvmList"></ul>
                <label for="psw">
                    <h3>Password:</h3>
                </label>
                <input type="password" id="psw" name="psw" required>
                <ul class="errCont invalidForm validForm" id="pwList"></ul>
                <label for="pswCheck">
                    <h3>Retype password:</h3>
                </label>
                <input type="password" id="pswCheck" name="pswCheck" required>
                <ul class="errCont invalidForm validForm" id="repwList"></ul>
                <label for="pic">
                    <h3>Profile picture:</h3>
                </label>
                <input type="file" id="pic" name="pic" required>
                <label for="fName">
                    <h3>First Name:</h3>
                </label>
                <input type="text" id="fName" name="fName" required>
                <ul class="errCont invalidForm validForm" id="fNameList"></ul>
                <label for="lName">
                    <h3>Last Name:</h3>
                </label>
                <input type="text" id="lName" name="lName" required>
                <ul class="errCont invalidForm validForm" id="lNameList"></ul>
                <label for="address">
                    <h3>Address:</h3>
                </label>
                <input type="text" id="address" name="address" required>
                <ul class="errCont invalidForm validForm" id="addressList"></ul>
                <label for="city">
                    <h3>City:</h3>
                </label>
                <input type="text" id="city" name="city" required>
                <ul class="errCont invalidForm validForm" id="cityList"></ul>
                <label for="zCode">
                    <h3>Zipcode:</h3>
                </label>
                <input type="text" id="zCode" name="zCode" placeholder="only 4 or 6 digits are available" required>
                <ul class="errCont invalidForm validForm" id="zCodeList"></ul>

                <!--Country List-->
                <h3>Country:</h3>
                <select name="countryList" required>
                    <option value="">Please Select</option>
                    <optgroup label="A">
                        <option value="AF">Afghanistan</option>
                        <option value="AX">Åland Islands</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarctica</option>
                        <option value="AG">Antigua and Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                    </optgroup>
                    <optgroup label="B">
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia, Plurinational State of</option>
                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                        <option value="BA">Bosnia and Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet Island</option>
                        <option value="BR">Brazil</option>
                        <option value="IO">British Indian Ocean Territory</option>
                        <option value="BN">Brunei Darussalam</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                    </optgroup>
                    <optgroup label="c">
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island</option>
                        <option value="CC">Cocos (Keeling) Islands</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CD">Congo, the Democratic Republic of the</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CI">Côte d'Ivoire</option>
                        <option value="HR">Croatia</option>
                        <option value="CU">Cuba</option>
                        <option value="CW">Curaçao</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                    </optgroup>
                    <optgroup label="D">
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                    </optgroup>
                    <optgroup label="E">
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                    </optgroup>
                    <optgroup label="F">
                        <option value="FK">Falkland Islands (Malvinas)</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="TF">French Southern Territories</option>
                    </optgroup>
                    <optgroup label="G">
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GG">Guernsey</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="GY">Guyana</option>
                    </optgroup>
                    <optgroup label="H">
                        <option value="HT">Haiti</option>
                        <option value="HM">Heard Island and McDonald Islands</option>
                        <option value="VA">Holy See (Vatican City State)</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                    </optgroup>
                    <optgroup label="I">
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IR">Iran, Islamic Republic of</option>
                        <option value="IQ">Iraq</option>
                        <option value="IE">Ireland</option>
                        <option value="IM">Isle of Man</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                    </optgroup>
                    <optgroup label="J">
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JE">Jersey</option>
                        <option value="JO">Jordan</option>
                    </optgroup>
                    <optgroup label="K">
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KP">Korea, Democratic People's Republic of</option>
                        <option value="KR">Korea, Republic of</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                    </optgroup>
                    <optgroup label="L">
                        <option value="LA">Lao People's Democratic Republic</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                    </optgroup>
                    <optgroup label="M">
                        <option value="MO">Macao</option>
                        <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia, Federated States of</option>
                        <option value="MD">Moldova, Republic of</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="ME">Montenegro</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                    </optgroup>
                    <optgroup label="N">
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="NO">Norway</option>
                    </optgroup>
                    <optgroup label="O">
                        <option value="OM">Oman</option>
                    </optgroup>
                    <optgroup label="P">
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau</option>
                        <option value="PS">Palestine, State of</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                    </optgroup>
                    <optgroup label="Q">
                        <option value="QA">Qatar</option>
                    </optgroup>
                    <optgroup label="R">
                        <option value="RE">Réunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russian Federation</option>
                        <option value="RW">Rwanda</option>
                    </optgroup>
                    <optgroup label="S">
                        <option value="BL">Saint Barthélemy</option>
                        <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                        <option value="KN">Saint Kitts and Nevis</option>
                        <option value="LC">Saint Lucia</option>
                        <option value="MF">Saint Martin (French part)</option>
                        <option value="PM">Saint Pierre and Miquelon</option>
                        <option value="VC">Saint Vincent and the Grenadines</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">Sao Tome and Principe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbia</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SX">Sint Maarten (Dutch part)</option>
                        <option value="SK">Slovakia</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                        <option value="SS">South Sudan</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard and Jan Mayen</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syrian Arab Republic</option>
                    </optgroup>
                    <optgroup label="T">
                        <option value="TW">Taiwan, Province of China</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania, United Republic of</option>
                        <option value="TH">Thailand</option>
                        <option value="TL">Timor-Leste</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                    </optgroup>
                    <optgroup label="U">
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States</option>
                        <option value="UM">United States Minor Outlying Islands</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                    </optgroup>
                    <optgroup label="V">
                        <option value="VU">Vanuatu</option>
                        <option value="VE">Venezuela, Bolivarian Republic of</option>
                        <option value="VN">Viet Nam</option>
                        <option value="VG">Virgin Islands, British</option>
                        <option value="VI">Virgin Islands, U.S.</option>
                    </optgroup>
                    <optgroup label="W">
                        <option value="WF">Wallis and Futuna</option>
                        <option value="EH">Western Sahara</option>
                    </optgroup>
                    <optgroup label="Y">
                        <option value="YE">Yemen</option>
                    </optgroup>
                    <optgroup label="Z">
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                    </optgroup>
                </select>

                <!--radio Btn-->
                <h3>Account Type:</h3>
                <div id="typeCont">
                    <input type="radio" id="shopper" name="rType" checked>
                    <label class="radioType " for="shopper">
                        <img src="New_products/icon/shopper.png"
                            alt="This is an icon of shopper. The icon displays person holds two shopping bags..">
                        <span>Shopper</span>
                    </label>
                    <input type="radio" id="owner" name="rType">
                    <label class="radioType " for="owner">
                        <img src="New_products/icon/owner.png"
                            alt="This is an icon of owner. The icon displays a person holds a briefcase.">
                        <span>Store Owner</span>
                    </label>
                </div>

                <!--Store Owner Only-->
                <div class="ownerInfo">
                    <h2>Business Information</h2>
                    <p>The following fields are required only for a store owner.</p>
                    <label for="bName">
                        <h3>Business name</h3>
                    </label>
                    <input type="text" class="" id="bName" name="bName">
                    <label for="sName">
                        <h3>Store name</h3>
                    </label>
                    <input type="text" class="" id="sName" name="sName">
                    <h3>Store Category:</h3>
                    <select name='storeCategory'>
                        <option value="" selected>Please Select</option>
                        <option value="acc">Accessory stores</option>
                        <option value="cloth">Clothing stores</option>
                        <option value="department">Department stores</option>
                        <option value="grocery">Grocery stores</option>
                        <option value="kiosks">Kiosks</option>
                        <option value="pet">Pet stores</option>
                        <option value="pharmacy">Pharmacies</option>
                        <option value="restaurant">Restaurants</option>
                        <option value="service">Services</option>
                        <option value="specialty">Specialty stores</option>
                        <option value="tech">Technology stores</option>
                        <option value="thrift">Thrift stores</option>
                        <option value="toy">Toy stores</option>
                    </select>
                </div>

                <!--Below Btn-->
                <div id="submitBtnCont">
                    <input type="reset" value="Clear" />
                    <input type="submit" value="Register" />
                </div>
            </form>
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
    <script type="text/javascript" src="js/register.js"></script>

    <noscript>It seems like your browser does not support JavaScript. Please check again.</noscript>
</body>

</html>