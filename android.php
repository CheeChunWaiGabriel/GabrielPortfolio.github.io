<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Android</title>
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
        <h1>Android</h1>
        <!-- Create a row -->
        <div class="row">
            <!-- Define columns for different screen sizes -->
            <div class="col-md-4 custom-column">
                <div class="card">
                    <div class="card-body">
                            <video width="320" height="240" controls>
                                <source src="website resources/AndroidDemovids/SongDBManager (Compressed and trimmed).mp4" type="video/mp4">
                                Your browser does not support the <code>video</code> tag.
                            </video>
                        <h2>MyNDPSongs</h2>
                        <p>This project is my proudest achievement. It started out as a simple C346 assignment,
                            it evolved into a tough commitment that my lecturer and I worked painstakingly to make work.
                            It's also one of the few android apps I have customized the appearance of, painting it red
                            and white.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 custom-column">
                <div class="card">
                    <div class="card-body">
                        <video width="320" height="240" controls>
                            <source src="website resources/AndroidDemovids/SimpleToDo (Compressed).mp4" type="video/mp4">
                            Your browser does not support the <code>video</code> tag.
                        </video>
                        <h2>Task List</h2>
                        <p>A simple task list with the option to add tasks or clear it all away. Its one of the few apps I have that has a custom background.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 custom-column">
                <div class="card">
                    <div class="card-body">
                        <video width="320" height="240" controls>
                            <source src="website resources/AndroidDemovids/L04-Reservation (Compressed) .mp4" type="video/mp4">
                            Your browser does not support the <code>video</code> tag.
                        </video>
                        <h2>Reservation</h2>
                        <p>A simple reservartion app with the option to reset the first 3 sections.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 custom-column">
                <div class="card">
                    <div class="card-body">
                        <video width="320" height="240" controls>
                            <source src="website resources/AndroidDemovids/My Local Banks (Compressed).mp4" type="video/mp4">
                            Your browser does not support the <code>video</code> tag.
                        </video>
                        <h2>MyLocalBanks</h2>
                        <p>App that allows quick access to the phone numbers and websites of 3 banks.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 custom-column">
                <div class="card">
                    <div class="card-body">
                        <video width="320" height="240" controls>
                            <source src="website resources/AndroidDemovids/MyMovies (Compressed).mp4" type="video/mp4">
                            Your browser does not support the <code>video</code> tag.
                        </video>
                        <h2>Movies</h2>
                        <p>A reskin of my NDP songs app. It shows the movies Advisory rating instead of audience rating instead, and while not documented here, the Show all PG13 movies function does work as intended. </p>
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

