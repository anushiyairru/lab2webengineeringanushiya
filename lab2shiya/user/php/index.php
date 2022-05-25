<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="../scripts/menu.js" defer></script>
    <script src="../scripts/img.js" defer></script>
    <script src="../scripts/reg.js" defer></script>


    <title>HOME</title>


</head>

<body>
    <!--desktop mode navigation-->
    <div class="w3-bar w3-teal w3-hover-light-green w3-hover-text-pink" style="position: fixed">
        <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-left">Home</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-left">Tutors</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-left">Free classes</a>
        <a href="reguser.php" class="w3-bar-item w3-button w3-hide-small w3-left">Register</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-left">Book n' Pay</a>
        <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-left">Log in</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-left w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
    </div>
    <!--phone mode navigation-->
    <div id="idnavbar" class="w3-bar-block w3-teal w3-hover-light-green w3-hover-text-pink w3-hide w3-hide-large w3-hide-medium" style="position: fixed">
        <a href="index.php" class="w3-bar-item w3-button w3-center">Home</a>
        <a href="#" class="w3-bar-item w3-button w3-center">Tutors</a>
        <a href="#" class="w3-bar-item w3-button w3-center">Free classes</a>
        <a href="reguser.php" class="w3-bar-item w3-button w3-center">Register</a>
        <a href="#" class="w3-bar-item w3-button w3-center">Book n' Pay</a>
        <a href="login.php" class="w3-bar-item w3-button w3-center">Log in</a>
    </div>
    <header class="w3-header w3-container w3-black w3-padding-32 w3-center">
        <h1 class="w3-xxxxxlarge font-effect-shadow-multiple">My Tutor</h1>
        <h2 class="w3-text-teal" style="text-shadow:1px 1px 0 rgb(136, 199, 215)">invest in knowledge</h2>
    </header>
    <!--home page contents-->
    <div class="w3-row-padding" id="about">
        <div class="w3-center w3-padding-64">
            <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">About Us</span>
        </div>

        <div class="w3-third w3-margin-bottom">
            <div class="w3-card-4">
                <img src="../res/backgrounds/ceo.jpg" alt="robert" style="width:50%">
                <div class="w3-container">
                    <h3>Sir Robert</h3>
                    <p class="w3-opacity" style="text-decoration: underline overline dotted Blue">Founder of MyTutor</p>
                    <p>Studies at university od minisota, retired and founded this website to help students</p>

                </div>
            </div>
        </div>

        <div class="w3-third w3-margin-bottom">
            <div class="w3-card-4">
                <img src="../res/backgrounds/head.jpg" alt="scarlet" style="width:50%">
                <div class="w3-container">
                    <h3>Mdm.Scarlett</h3>
                    <p class="w3-opacity" style="text-decoration: underline overline dotted red">Head Management </p>
                    <p>Retired headmistress at smk simpang ampat.and now helps to manage the website as well.</p>

                </div>
            </div>
        </div>

        <div class="w3-third w3-margin-bottom">
            <div class="w3-card-4">
                <img src="../res/backgrounds/marketing.jpg" alt="tom" style="width:50%">
                <div class="w3-container">
                    <h3>Dr.Tom</h3>
                    <p class="w3-opacity" style="text-decoration: underline overline dotted Blue">Techinical HOD </p>
                    <p>Graduated from harvard, and worked along side sir robert to build this platform </p>

                </div>
            </div>
        </div>
    </div>

    <!--home page contents-->
    <div class="w3-container w3-center w3-yellow" style="padding:128px 16px" id="pricing">
        <h3>PRICING</h3>
        <p class="w3-large">Choose a tutor subscription plan that you would like.</p>
        <div class="w3-row-padding" style="margin-top:64px">
            <div class="w3-third w3-section">
                <ul class="w3-ul w3-white w3-hover-shadow">
                    <li class="w3-black w3-xlarge w3-padding-32">1-Month</li>
                    <li class="w3-padding-16"><b>Price</b> RM60</li>
                    <li class="w3-padding-16"><b>Benefits</b> online class</li>
                    <li class="w3-padding-16"><b>Resources</b> Lifetime useable</li>
                    <li class="w3-padding-16"><b>Period</b> 30-Days</li>
                    <li class="w3-padding-16">
                        <h2 class="w3-wide">RM 60</h2>
                        <span class="w3-opacity">per month</span>
                    </li>
                    <li class="w3-light-grey w3-padding-24">
                        <button class="w3-button w3-black w3-padding-large">Register</button>
                    </li>
                </ul>
            </div>
            <div class="w3-third">
                <ul class="w3-ul w3-white w3-hover-shadow">
                    <li class="w3-red w3-xlarge w3-padding-48">6-Month</li>
                    <li class="w3-padding-16"><b>Price</b> RM300</li>
                    <li class="w3-padding-16"><b>Benefits</b> online + tutor chats </li>
                    <li class="w3-padding-16"><b>Resources</b> Lifetime useable+ extra tutor questions sets</li>
                    <li class="w3-padding-16"><b>Period</b> 6 months</li>
                    <li class="w3-padding-16">
                        <h2 class="w3-wide">RM50</h2>
                        <span class="w3-opacity">per month</span>
                    </li>
                    <li class="w3-light-grey w3-padding-24">
                        <button class="w3-button w3-black w3-padding-large">Register</button>
                    </li>
                </ul>
            </div>
            <div class="w3-third w3-section">
                <ul class="w3-ul w3-white w3-hover-shadow">
                    <li class="w3-black w3-xlarge w3-padding-32">1-Year</li>
                    <li class="w3-padding-16"><b>Price</b> RM540</li>
                    <li class="w3-padding-16"><b>Benefits</b> online&offline class + tutor chats+ </li>
                    <li class="w3-padding-16"><b>Resources</b> Lifetime useable+ extra tutor questions sets+student community forum</li>
                    <li class="w3-padding-16"><b>Period</b> 12 months</li>
                    <li class="w3-padding-16">
                        <h2 class="w3-wide">RM45</h2>
                        <span class="w3-opacity">per month</span>
                    </li>
                    <li class="w3-light-grey w3-padding-24">
                        <button class="w3-button w3-black w3-padding-large">Register</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <footer class="w3-container w3-black w3-hover-teal w3-center w3-margin-top">
        <p>Stay conected with me!</p>
        <a href="https://www.facebook.com/anu.hikari" class="fa fa-facebook-official w3-hover-pink"></a>
        <a href="https://youtube.com/channel/UCXREH-_X8f_3lJ6yz4e2y6A" class="fa fa-youtube-play w3-hover-pink"></a>
        <a href="https://pin.it/3YY5aq0" class="fa fa-pinterest-p w3-hover-pink"></a>
        <p>

        </p>
    </footer>
</body>

</html>