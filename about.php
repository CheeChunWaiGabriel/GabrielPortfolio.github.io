<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="stylesheets/aboutstyle.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <img src="website resources/Untitled-1.png" alt=""/>
            </div>
            <div class="breadcrumbs">
                <a href="index.php">Home</a> > 
                <?php
                $currentPage = basename($_SERVER['PHP_SELF']);
                switch ($currentPage) {
                    case 'about.php':
                        echo 'About';
                        break;
                    case 'projects.php':
                        echo 'Projects';
                        break;
                    case 'contact.php':
                        echo 'Contact';
                        break;
                    // Add more cases for other pages if needed
                    default:
                        echo 'Unknown Page';
                }
                ?>
            </div>
            <div class="topnav">
                <a href="index.php">Home</a>
                <a href="about.php" <?php if(basename($_SERVER['PHP_SELF']) == 'about.php') echo 'class="active"'; ?>>About</a>
                <a href="projects.php" <?php if(basename($_SERVER['PHP_SELF']) == 'projects.php') echo 'class="active"'; ?>>Projects</a>
                <a href="contact.php" <?php if(basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'class="active"'; ?>>Contact</a>
            </div>
        </div>
    </header>
    
    <section class="content">
        <h1>About Me</h1>
        <div class="card">
            <img class="profile-image" src="website resources/mugshot.png" alt="Your Name">
            <div>
                <h2 class="name">Chee Chun Wai Gabriel</h2>
                <p class="job">Programmer/Artist/Nerd</p>
                <p class="bio">A fan of media franchises like Pokémon and Transformers, Gabriel is a freelance designer that often doodles stuff related to both - and more depending on what he's interested in. He's also a somewhat decent programmer. He hopes to one day do something to contribute officially to something that he likes.</p>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="footer-links">
            <h2>My Socials</h2>
            <a href="https://www.linkedin.com/in/gabriel-chee-6b30b0239/">
                <img src="website resources/socials/LI-In-Bug.png" alt="Linkedin" width="70" height="70"/>
            </a>
            <a href="https://github.com/CheeChunWaiGabriel">
                <img src="website resources/socials/github-mark-white.png" alt="GitHub" width="70" height="70"/>
            </a>
        </div>
    </footer>
</body>
</html>

