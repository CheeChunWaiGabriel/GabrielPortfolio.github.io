<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="stylesheets/aboutstyle.css" rel="stylesheet" type="text/css">
</head>
<body>    
    <header>
    <div class="header-container">
        <div class="logo">
            <img src="website resources/Untitled-1.png" alt=""/>
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
    <h1>Featured Project</h1>
    <div class="project-container">
        <video class="centered-video"  width="60%%" height="auto" controls>
    <source src="website resources/AndroidDemovids/SongDBManager (Compressed and trimmed).mp4" type="video/mp4">
    Your browser does not support the <code>video</code> tag.
</video>
        <h2>MyNDPSongs</h2>
        <p>This project is my proudest achievement. It started out as a simple C346 assignment,
            it evolved into a tough commitment that my lecturer and I worked painstakingly to make work. It's also one of the few Android apps I have customized the appearance of, painting it red and white.</p>
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
