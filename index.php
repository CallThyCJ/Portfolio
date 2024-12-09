<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ecb3190b9d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/style.css"> 
</head>

<body>

    <div class="transition transition2 isActive"></div>


    <!-- HERO IMAGE SECTION -->

    <?php

        $title = "Web Developer";
        include "PHP/Includes/heroImage.php"

    ?>


    <!-- Navigation -->

    <?php

        include "PHP/Includes/navigation.php"

    ?>


    <!-- PROJECTS SECTION -->

<div id="projectsSection">

    <div id="portfolioTitle">
    <h2>PORTFOLIO</h2>
    <div class="underline" id="portfolioUnderline">
    </div>

    </div>

    <div id="projectContainer">

        <div class="projectItem" id="projectItem1">
           
            <div class="projectTopSection">
                <a href="https://netmatters.celestin-jacobs.netmatters-scs.co.uk/">
                    <img src="Assets/netmattersHomePage.png" alt="netmatters home page screenshot" class="projectImg">
                </a>
            </div>

            <div class="projectBottomSection">
                <h3>Netmatters Landing Page</h3>
                <div class="projectFooter">
                    <a href="https://netmatters.celestin-jacobs.netmatters-scs.co.uk/"><h4>View Project </h4></a>
                    <i class="fa-solid fa-right-long fa-2x arrowRight"></i>
                </div>
            </div>

        </div>

        <div class="projectItem" id="projectItem2">

            <div class="projectTopSection">
                <a href="https://js-array.celestin-jacobs.netmatters-scs.co.uk/">
                <img src="Assets/imageAssigner.png" alt="Image Assigner screenshot" class="projectImg">
            </div>

            <div class="projectBottomSection">
                <h3>Random Image Assigner</h3>
                <div class="projectFooter">
                    <a href="https://js-array.celestin-jacobs.netmatters-scs.co.uk/"><h4>View Project </h4></a>
                    <i class="fa-solid fa-right-long fa-2x arrowRight"></i>
                </div>
            </div>

        </div>

        <div class="projectItem" id="projectItem3">

            <div class="projectTopSection">
                <a href="https://netmatters.celestin-jacobs.netmatters-scs.co.uk/PHP/Site%20Pages/contact-us.php">
                <img src="Assets/NetmattersContactPage.png" alt="netmatters contact page screenshot" class="projectImg">
            </div>

            <div class="projectBottomSection">
                <h3>Netmatters Contact Page</h3>
                <div class="projectFooter">
                    <a href="https://netmatters.celestin-jacobs.netmatters-scs.co.uk/PHP/Site%20Pages/contact-us.php"><h4>View Project </h4></a>
                    <i class="fa-solid fa-right-long fa-2x arrowRight"></i>
                </div>
            </div>

        </div>

        <div class="projectItem" id="projectItem4">

            <div class="projectTopSection">
                <img src="Assets/placeholder.png" alt="placeholder image" class="projectImg">
            </div>

            <div class="projectBottomSection">
                <h3>Laravel CRUD Project</h3>
                <div class="projectFooter">
                    <a href="http://laravel.celestin-jacobs.netmatters-scs.co.uk/"><h4>View Project </h4></a>
                    <i class="fa-solid fa-right-long fa-2x arrowRight"></i>
                </div>
            </div>

        </div>

        <div class="projectItem" id="projectItem5">

            <div class="projectTopSection">
                <img src="Assets/placeholder.png" alt="[placeholder image" class="projectImg">
            </div>

            <div class="projectBottomSection">
                <h3>Project 5</h3>
                <div class="projectFooter">
                    <a href=""><h4>View Project </h4></a>
                    <i class="fa-solid fa-right-long fa-2x arrowRight"></i>
                </div>
            </div>

        </div>

        <div class="projectItem" id="projectItem6">

            <div class="projectTopSection">
                <img src="Assets/placeholder.png" alt="netmatters home page screenshot" class="projectImg">
            </div>

            <div class="projectBottomSection">
                <h3>Project 6</h3>
                <div class="projectFooter">
                    <a href=""><h4>View Project </h4></a>
                    <i class="fa-solid fa-right-long fa-2x arrowRight"></i>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- CONTACT ME SECTION -->

<div id="contactSection">

    <div id="contactContainer">

    <div id="contactLeftSection">

        <div id="contactPara1">  
            <h2 id="contactTitle">Get In Touch</h2>
            <div class="underline">
            </div>
            <p>Kindly reach out to me using the contact methods found here.</p>
        </div>

        <div id="contactPara2">
            <a href="tel:07484337778" class="contactInfo">
            <h3 id="myNumber">07484337778</h3>
            </a>
            <div class="underline" id="sidebarUnderline">
            </div>
            <a href="mailto:celestinjacobss@gmail.com" class="contactInfo">
                <h3>celestinjacobss@gmail.com</h3>
            </a>
            <div class="underline" id="sidebarUnderline">
            </div>    
            <p>Any emails or voice messages will be responded to within a maximum of 24 hours. I look forward to hearing from you.</p>
        </div>
        
    </div>

    <div id="contactRightSection">

            <form action="PHP/Functionality/sendMessage.php" method="POST" id="contactForm">
                <div id="submitSuccess" class="">
                    <p>Message has successfully been sent</p>
                </div>
                
                <div id="formRow">
                    <input type="text" name="firstName" placeholder="First Name*" id="formFirstName" class="formInput">
                    <div class="invalidWarning" id="invalidFirstName">
                        
                    </div>
                    <input type="text" name="lastName" placeholder="Last Name*" id="formLastName" class="formInput">
                    <div class="invalidWarning" id="invalidLastName">

                    </div>
                </div>

                <div id="formColumn">
                    <input type="text" name="email" placeholder="Email Address*" id="formEmail" class="formInput">
                    <div class="invalidWarning" id="invalidEmail">

                    </div>
                    <input type="text" name="subject" placeholder="Subject" class="formInput">
                    <textarea name="message" id="messageBox" placeholder="Message" class="formInput">Hello, I'm interested in discussing an opportunity with you.</textarea>
                    <button id="formSubmit" type="submit" name="submit">Submit</button>
                </div>
            </form>    

    </div>

    </div>

    <div id="backToTop">
        <i class="fa-solid fa-angle-up fa-3x" id="arrowUp"></i>
        <h4>Back To Top</h4>
    </div>


</div>

</div> 

<script src="JS/textScroll.js"></script>
<script src="JS/hamburgerMenu.js"></script>
<script src="JS/validation.js"></script>
<script src="JS/transition.js"></script>
<script src="JS/formSubmission.js"></script>

</body>
</html>