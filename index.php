<?php 
    include 'settings/config.php';

    // Kobler til databasen med riktig informasjon
    $connection = new mysqli($servername, $username, $password, $dbname);

    // Sjekker etter kobling
    if($connection->connect_error){
        die("Connection failed: " . $connection->connect_error);
    }

    // Denne koden utfører den faktiske querien. Query() er å sende en spørring til databasen, i dette tilfelle så spørr vi om en SELECT.
    $result = $connection->query("SELECT * FROM projects");

    // Sjekker om querien gikk igjennom
    if($result === FALSE){
        die("Error: " . $conn->error);
    }
?>

<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	
	<title>Oskar Jenssen | Portfolio</title>
	
	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">
	
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.typekit.net/iqh7wdu.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <header>
        <div class="nav-container">
            <a href="index.html"><img class="oskar-logo" src="images/oskarLogo_black.png" alt="Oskars portfolio logo"></a>
            <nav class="desktop-nav">
                <a class="navigation-link" href="#projects">Projects</a>
                <a class="navigation-link" href="#">Skills</a>
                <a class="navigation-link" href="#">Contact</a>
            </nav>
            <button class="hamburger">
                <div class="bar"></div>
            </button>
        </div>
        <nav class="mobile-nav">
            <a href="index.html">Hjem</a>
            <a href="#projects">Projects</a>
            <a href="#">Skills</a>
            <a href="#">Contact</a>
        </nav>
    </header>

    <main>
        <section id="hero-section">

            <div class="hero">
                <div class="text">
                    <p class="curlyBracket">&#123;</p>
                    <div class="hero-text-container">
                        <p class="hero-text">Hello world, my name is:</p>
                        <h1 class="pageTitle">Oskar Heming Jenssen</h1>
                    </div>
                    <p class="curlyBracket">&#125;</p>
                    <p class="hero-text2">Forestill deg følgende, du ser etter en praktikant, du kommer over denne portfolioen, det neste som skjer.</p>
                    <img class="slogan" src="./images/slogan.svg" alt="slogan" alt="if(hireOskar) {getGreatSuccess()}">
                </div>
                <div class="portrait-image-container">
                    <img src="./images/oskar_portrett.png" class="portrait" alt="Portrettbilde av Oskar">
                    <img src="./images/oskar_portrett_path.svg" class="portrait-path" alt="graphics">
                </div>
            </div>

        </section>
        <div class="section-seperation">
            <img src="./images/sectionPath.svg" class="section-seperation-path">
        </div>
        <section id="projects" class="mt-4">
            <h2>Projects</h2>
            <div class="projectSlider">
                <?php 
                    while($project = $result->fetch_assoc()){
                        ?>
                        <div class="singleProject">
                            <div class="singleProjectImgContainer">
                                <img class="singleProjectImg" src="<?php echo $project["logo"] ?>">
                            </div>
                        </div>
                         <?php
                    }
                    
                ?>
            </div>

            <div class="projectContainer">
                <h2 class="projectTitle">Holidaze</h2>
                <div class="projectContainerImages">
                    <div class="projectImageDesktopContainer">
                        <img class="projectImageDesktop" src="./images/projects/holidaze/holidaze_front.png">
                    </div>
                    <div class="projectImageMobileContainer">
                        <img class="projectImageMobile" src="./images/projects/holidaze/holidaze_front_mobile.png">
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut purus commodo, ultrices erat nec, dictum justo. Phasellus quis nulla pharetra, convallis libero et, iaculis arcu. Duis tempor dolor et purus venenatis, id euismod dolor tempor. Praesent in est et massa interdum tincidunt ac eget nisl.</p>
                <div class="projectBtnContainer">
                    <button class="customBtn"><img src="./images/icons/github.svg" class="github">Github</button>
                    <button class="customBtn">Go to page</button>
                </div>
            </div>
        </section>
        
    </main>

   <footer>
        <div class="footer-top">
            <img src="./images/footer_top.svg" class="footerImg">
        </div>
        <div class="footer-body">
            <h2>Currently based in Copenhagen</h2>
        </div>
        <div class="footer-footer">
            <div class="soMeContainer">
                <a href="https://www.linkedin.com/in/oskar-heming-jenssen/"><img src="./images/icons/linkedin.svg" class="footerIcons"></a>
                <a href="https://github.com/ohjenssen"><img src="./images/icons/github.svg" class="footerIcons"></a>
            </div>
            <div class="eMailContainer">
                <a href="mailto:oskar_jenssen@hotmail.com">oskar_jenssen@hotmail.com</a>
            </div>
        </div>
   </footer>

    <script src="./js/index.js" type="module"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
