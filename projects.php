<!DOCTYPE html>
<html lang="en">
<head>
<title>Projects</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="stylesheets/portfoliostyle.css" rel="stylesheet" type="text/css"/>
    <link href="stylesheets/Projectspecific.css" rel="stylesheet" type="text/css"/>
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
   
    
   

<div class="grid-container">
 <div class="header" style="background-color: #1C96B8">
    <h2>Projects</h2>
  </div>
      <div class="left" style="background-color: #22C0EA;">
      <h2><a href="android.php">Android</a></h2>
      <img src="website resources/ProjectsNav/Android_logo_2023_(stacked).svg.png" alt="Android"/>
</div>
    <div class="middle" style="background-color: #22C0EA;">
        <h2> <a href="photos.php">Photography</a></h2>
        <img src="website resources/ProjectsNav/pexels-beyzaa-yurtkuran-18164683 (1).jpg" alt="Photo"/>
</div>
<div class="right" style="background-color: #22C0EA;">
    <h2><a href="websites.php">PHP and HTML websites</a></h2>
    <img src="website resources/ProjectsNav/computercursor copy.png" alt="PHP"/>
</div>
</div>
    
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

