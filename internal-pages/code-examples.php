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

            $title = "Code Examples";   
            include "../PHP/Includes/heroImage.php"

    ?>

    <!-- Navigation -->

    <?php

    include "../PHP/Includes/navigation.php"

    ?>

<!-- Code Examples Section -->

<div id="codeExamplesSection">

    <div id="codeExamplesContainer">
        <h2>COMING SOON!</h2>
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