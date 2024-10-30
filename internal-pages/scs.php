<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../CSS/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ecb3190b9d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/style.css"> 
</head>

<body>

    <div class="transition transition3 isActive"></div>

    <!-- HERO IMAGE SECTION -->

    <?php

            $title = "SCS Scheme";   
            include "../PHP/Includes/heroImage.php"

    ?>

    <!-- Navigation -->

    <?php

    include "../PHP/Includes/navigation.php"

    ?>

<!-- SCS Scheme Section -->

<div id="scsSection">

    <div id="scsIntro">
        <h2 class="title">Introduction to Scion Coalition Scheme</h2>
        <p>The Scion Coalition Scheme is an intensive, specially tailored training program run by Netmatters in order to give willing candidates the opportunity to enter the industry as web developers. Under the supervision of senior web developers, scions generally aim to complete training within six to nine months. The course is intensive and therefore the level of learning achieved is extensive in a short space of time.</p>
    </div>

    <div id="scsContainer">
        
        <div id="scsInfo">
        <div class="scsItem" id="treehouse">
            <div class="scsItemTopSection">
                <img src="../Assets/treehouseLogo.png" alt="treehouse logo">
            </div>
            <div class="scsItemBottomSection">
                <h3>Treehouse</h3>
                <p>Treehouse is an online learning community, featuring videos covering a number of topics from basic HTML to C# programming, iOS development, data analysis, and more. By completing courses users can earn points, allowing them to track their progress and see how much they've covered in certain areas.</p>
                <p>Total Score: 12,691</p>
            </div>
        </div>

        <div class="scsItem" id="netmatters">
            <div class="scsItemTopSection">
                <img src="../Assets/netmattersLogo.png" alt="treehouse logo">
            </div>
            <div class="scsItemBottomSection">
                <h3>About Netmatters</h3>
                <p>Established in 2008 Norfolk's leading technology company Winner of the Princess Royal Training Award Winner of EDP Skills of Tomorrow Award 80+ staff, 2 locations across Norfolk Digital Marketing, Website & Software development & IT Support Broad spectrum of clients, working nationwide Operate to strict company values</p>
            </div>  
        </div>
        </div>
        
    </div>

    <div id="backToTop">
        <i class="fa-solid fa-angle-up fa-3x" id="arrowUp"></i>
        <h4>Back To Top</h4>
    </div>

</div>

</div>

<script src="../JS/textScroll.js"></script>
<script src="../JS/hamburgerMenu.js"></script>
<script src="../JS/transition.js"></script>

</body>
</html>