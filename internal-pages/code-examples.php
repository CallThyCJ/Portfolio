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

    <div class="exampleBackground">
        <i class="fa-solid fa-xmark" id="exampleCloseButton"></i>
    </div>

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

        <div class="exampleContainer">
            <div class="exampleTitle">
                <h3>Vanilla Javascript Image Slider</h3>
            </div>

            <div class="exampleImage">
                <img src="../Assets/codeExample1.PNG" alt="Code Example">
            </div>

            <div class="exampleDescription">
                <p>This is an image slider I created with pure Vanilla Javascript. It can handle any number of images and includes functionality for clickable buttons that displays the corresponding image in the array.</p>
            </div>
        </div>

        <div class="exampleContainer">
            <div class="exampleTitle">
                <h3>PHP/SQL Database Integration</h3>
            </div>

            <div class="exampleImage">
                <img src="../Assets/codeExample2.PNG" alt="Code Example">
            </div>

            <div class="exampleDescription">
                <p>Here I used PHP to connect to a database I made in SQL. The SQL statement gets all the data from the specified table ordered by the most recent entries. Then the PHP limits the dataset to the amount of data items I need, which in this case was 3. It then generates the HTML markeup for each data item to be presented on the page and fills out the appropriate sections with the SQL data.</p>
            </div>
        </div>

        <div class="exampleContainer">
            <div class="exampleTitle">
                <h3>PHP Contact Form with Validation</h3>
            </div>

            <div class="exampleImage">
                <img src="../Assets/codeExample3.png" alt="Code Example">
            </div>

            <div class="exampleDescription">
                <p>Here I used PHP to connect to a database I made in SQL. Then using the Post method, I get all the information the user has entered into the form and filter it to make sure no code can be injected in the process. Then I run validation checks to ensure the user has entered all the required information before binding the data and attaching it to an SQL statement used to send the information to the database.</p>
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
<script src="../JS/codeExamples.js"></script>

</body>
</html>