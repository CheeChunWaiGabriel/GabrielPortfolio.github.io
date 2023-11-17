<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and HTML</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/portfoliostyle.css">
</head>
<body>
        <header>
    <div class="header-container">
        <div class="logo">
            <img src="website resources/Untitled-1.png" alt=""/>
        </div>
        <div class="breadcrumbs">
    <a href="index.php">Home</a> >
    <a href="projects.php">Projects</a> >
    <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    switch ($currentPage) {
        case 'android.php':
            echo 'Android';
            break;
        case 'photos.php':
            echo 'Photos';
            break;
        case 'websites.php':
            echo 'Websites';
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
    <div class="container">
        <h1>PHP and HTML Projects</h1>
        <!-- Create a row -->
        <div class="row">
            <!-- Define columns for different screen sizes -->
            <div class="col-md-4 custom-column">
                <div class="card">
                    <div class="card-body">
                        <video width="320" height="240" controls>
                            <source src="website resources/WebsiteDemovids/C203 GA Project V2.mp4" type="video/mp4">
                            Your browser does not support the <code>video</code> tag.
                        </video>
                        <h2>Gabriel's Movies</h2>
                        <p>A very rough outline of a movie review website, and my most complete work. Allows one to register for an account, login, and add/edit/delete movie reviews.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 custom-column">
                <div class="card">
                    <div class="card-body">
                        <video width="320" height="240" controls>
                            <source src="website resources/WebsiteDemovids/Items for Sale (4th edited version).mp4" type="video/mp4">
                            Your browser does not support the <code>video</code> tag.
                        </video>
                        <h2>ItemsForSale</h2>
                        <p>Allows for one to add/edit items to sell online. Also has login capabilities, and allows one to verify if you are allowed to edit some items.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 custom-column">
                <div class="card">
                    <div class="card-body">
                        <video width="320" height="240" controls>
                            <source src="website resources/WebsiteDemovids/TravelHighlightsDemo(Edited V2)mp4.mp4" type="video/mp4">
                            Your browser does not support the <code>video</code> tag.
                        </video>
                        <h2>TravelHighlights</h2>
                        <p>A tech demo for editing entries. While not shown, it is possible to delete entries too.
                            </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 custom-column">
                <div class="card">
                    <div class="card-body">
                        <video width="320" height="240" controls>
                            <source src="website resources/WebsiteDemovids/Song Maker V2.mp4" type="video/mp4">
                            Your browser does not support the <code>video</code> tag.
                        </video>
                        <h2>Song Lyrics Maker</h2>
                        <p>This was one project I didn't finish properly. I went back and fixed it up. Now, it works as intended-you can pick a few verses, complete 3 pre-set ones, and (theoretically) make some kind of song.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 custom-column">
                <div class="card">
                    <div class="card-body">
                        <video width="320" height="240" controls>
                            <source src="website resources/WebsiteDemovids/Supermarket Demo V2.mp4" type="video/mp4">
                            Your browser does not support the <code>video</code> tag.
                        </video>
                        <h2>Store Website Demo</h2>
                        <p>A rough framework of a supermarket store I did.</p>
                    </div>
                </div>
            </div>
        </div>
                  <a href="projects.php" style="color: #6BD2EE;">Back to all projects</a>
    </div>
    <footer class="footer-container">
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
    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

