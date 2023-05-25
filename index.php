<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/gotham" rel="stylesheet">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>IronSoftware</title>
</head>

<body>
    <?php
    include('./inc/nav.php');
    include('./inc/modal.php');
    ?>
    <div class="container topIntroSection">
        <img src="./assets/colorizedLogo.svg" alt="IronSoftware Logo">
        <div class="introContent">
            <p class="aboveIntroTitle">Building on the success of IronPDF for .NET</p>
            <h1>Beta Software Program</br><span>IronPDF for C++</span></h1>
            <small>Coming soon</small>
        </div>
    </div>
    <div class="container-fluid whiteSignUpSection">
        <img src="./assets/topRightShape.svg" alt="IronSoftware Shape Logo" class="topRightShape">
        <div class="container whiteSignUpContent">
            <h1>Be one of the first</h1>
            <p>Sign up NOW to get early access!</p>
        </div>
        <div class="container">
            <div class="signUpDiv">
                <input type="text" class="emailInput" name="firstEmailInput" placeholder="Enter email adress">
                <button class="signupBtn" data-toggle="modal" data-target="#signupModal">Sign up now
                    &#x203A;</button>
            </div>
            <div class="belowSignupFormNotice">
                <div class="hashtagBtn">
                    <span>
                        # Coming Soon
                    </span>
                </div>
                <p>IronPDF Beta Program also coming soon for <span>Python</span> | <span>Node.JS</span> |
                    <span>Java</span>
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid ironPDFForC">
        <div class="container">
            <h1>IronPDF for C++ <img src="./assets/comingSoonBadge.svg" alt="Coming Soon Badge Icon"></h1>
            <div class="ironPDFServicesRow">
                <span><b>#</b> Generate PDFs from HTML in C++</span>
                <div class="hLine"></div>
                <span><b>#</b> Combine, split, and modify PDFs quickly in C++</span>
                <div class="hLine"></div>
                <span><b>#</b> Extract text and images from PDFs using C++</span>
            </div>
        </div>
    </div>
    <div class="container-fluid ironPDFDesc">
        <div class="descBack"></div>
        <div class="container">
            <p>The new <b>IronPDF library for C++</b> will enhance the C++ developer’s tool set with robust PDF
                generation and
                conversion capabilities. Developers will be able to generate new PDFs from HTML content (from text or
                from URL), as well as to combine, split, extract, and modify content from existing PDFs.</p>
            <p><b>IronPDF for C++</b> will help developers create C++ applications that can do all of these PDF
                processing
                tasks and more, with speed, precision, control, and excellence.</p>
        </div>
    </div>
    <div class="container-fluid whySection">
        <div class="container imageSectionRow">
            <div class="col-12 col-lg-4">
                <div class="whyBackBlur"></div>
                <img src="./assets/htmlToPdfIcon.svg" alt="HTML to PDF Icon">
            </div>
            <div class="col-12 col-lg-8">
                <h1>Why make a <span>C++ PDF Library</span></h1>
                <p>C++ is one of the most popular, oldest, and important programming languages in use, being the
                    language of choice in low-level systems and network programming and other domains where performance
                    is critical.</p>
                <p>The release of IronPDF for C++ will aid developers in building performant applications that can carry
                    out PDF-related processing tasks</p>
            </div>
        </div>
    </div>
    <div class="container-fluid earlyAccessSection">
        <div class="descBack"></div>
        <div class="container">
            <h1>Early Access to <span>C++ PDF Library<span></h1>
            <p>Joining the early access program will allow you to collaborate closely with our engineering team. You
                will be playing a key role in the development process as you share your early experiences using the C++
                PDF library before its official launch. Your continual feedback after we release the library will be
                immensely helpful as we release new features and improve on existing features.</p>
            <div class="servicesRow">
                <button class="servicesBtn">
                    <div class="hashtagBtn released">
                        <span>
                            # Released
                        </span>
                    </div>
                    <div class="btnTitle">
                        <img src="./assets/ironPDFText.svg" alt="IronPDF Text Image">
                        <img src="./assets/Net.svg" alt="Java Image" class="platformSvg">
                    </div>
                </button>
                <button class="servicesBtn">
                    <div class="hashtagBtn">
                        <span>
                            # Coming Soon
                        </span>
                    </div>
                    <div class="btnTitle">
                        <img src="./assets/ironPDFText.svg" alt="IronPDF Text Image">
                        <img src="./assets/Python.svg" alt="Python Image" class="platformSvg">
                    </div>
                </button>
                <button class="servicesBtn">
                    <div class="hashtagBtn">
                        <span>
                            # Coming Soon
                        </span>
                    </div>
                    <div class="btnTitle">
                        <img src="./assets/ironPDFText.svg" alt="IronPDF Text Image">
                        <img src="./assets/NodeJS.svg" alt="Java Image" class="platformSvg">
                    </div>
                </button>
            </div>
        </div>
    </div>
    <div class="container-fluid signupSection">
        <div class="container">
            <h1>Early Access to <span>C++ PDF Library<span></h1>
            <div class="signUpDiv">
                <input type="text" class="emailInput" placeholder="Enter email adress" />
                <button type="submit" class="signupBtn" data-toggle="modal" data-target="#signupModal">Sign up now
                    &#x203A;</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>