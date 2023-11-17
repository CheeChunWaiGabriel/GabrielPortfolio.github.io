<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photos</title>
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
        <h1>Photos</h1>
        <!-- Create a row -->
        <div class="row">
            <!-- Define columns for different screen sizes -->
            <div class="col-md-4 custom-column">
    <a href="#lightbox1" data-toggle="modal">
        <div class="card">
            <div class="card-body">
                <img src="website resources/Photos/Photo 1.jpg" alt="" height="200px" width="320px"/>
                <h2>Lilly Pads</h2>
            </div>
        </div>
    </a>
</div>
            
            <div class="col-md-4 custom-column">
    <a href="#lightbox2" data-toggle="modal">
        <div class="card">
            <div class="card-body">
                <img src="website resources/Photos/Photo 2.jpg" alt="" height="200px" width="320px"/>
                <h2>Resting Toys</h2>
            </div>
        </div>
    </a>
</div>
                      <div class="col-md-4 custom-column">
    <a href="#lightbox3" data-toggle="modal">
        <div class="card">
            <div class="card-body">
                <img src="website resources/Photos/Photo 3a.jpg" alt="" height="200px" width="320px"/>
                <h2>Racing The Colossus</h2>
            </div>
        </div>
    </a>
</div>
              <div class="col-md-4 custom-column">
    <a href="#lightbox4" data-toggle="modal">
        <div class="card">
            <div class="card-body">
                <img src="website resources/Photos/Photo 4.jpg" alt="" height="200px" width="320px"/>
                <h2>Owl Mayhem</h2>
            </div>
        </div>
    </a>
</div>
            <div class="col-md-4 custom-column">
    <a href="#lightbox5" data-toggle="modal">
        <div class="card">
            <div class="card-body">
                <img src="website resources/Photos/Photo 5.jpg" alt="" height="200px" width="320px"/>
                <h2>Heroes United</h2>
            </div>
        </div>
    </a>
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
    <!-- Lightbox Section 1 -->
<div class="modal fade" id="lightbox1" tabindex="-1" role="dialog" aria-labelledby="lightbox1Label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Content for the first section of the lightbox -->
            <div class="modal-header">
                <h5 class="modal-title" id="lightbox1Label">Lilly Pads</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add your content for the first section here, such as a larger image or additional information -->
                <img src="website resources/Photos/Photo 1.jpg" alt="" class="img-fluid"/>
                <p>This lilypad was found outside the Art Science Museum. I found them interesting as I never saw a lillypad in real life before.</p>
            </div>
        </div>
    </div>
</div>

<!-- Repeat the above code for lightbox sections 2 and 3, with unique IDs and content -->
<!-- Lightbox Section  -->
<div class="modal fade" id="lightbox2" tabindex="-1" role="dialog" aria-labelledby="lightbox1Label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Content for the first section of the lightbox -->
            <div class="modal-header">
                <h5 class="modal-title" id="lightbox1Label">Resting Toys</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add your content for the first section here, such as a larger image or additional information -->
               <img src="website resources/Photos/Photo 2.jpg" alt="" class="img-fluid"/>
                <p>This picture was taken outside 313@Somerset. The toys here are owned by me and accompanied me to check out S*CAPE. Short of a backyard, I often risk losing my toys outside to take cool shots of them in different environments beyond plain old 4 walls.</p>
            </div>
        </div>
        </div>
    </div>
    <div class="modal fade" id="lightbox3" tabindex="-1" role="dialog" aria-labelledby="lightbox1Label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Content for the first section of the lightbox -->
            <div class="modal-header">
                <h5 class="modal-title" id="lightbox1Label">Racing the Colossus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add your content for the first section here, such as a larger image or additional information -->
               <img src="website resources/Photos/Photo 3a.jpg" alt="" class="img-fluid"/>
                <p>Taken during the F1 season in 2022, this picture pit my tiny, probably almost microscopic Transformers car against a huge, life-sized, Lego F1 car model on display outside Ngee Ann City. Who will win? I have no idea, but it should be interesting to see.</p>
            </div>
        </div>
    </div>
    </div>
        <div class="modal fade" id="lightbox4" tabindex="-1" role="dialog" aria-labelledby="lightbox1Label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Content for the first section of the lightbox -->
            <div class="modal-header">
                <h5 class="modal-title" id="lightbox1Label">Owl Mayhem</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add your content for the first section here, such as a larger image or additional information -->
               <img src="website resources/Photos/Photo 4.jpg" alt="" class="img-fluid"/>
                <p>When I'm not indulging in Transformers, I'm probably indulging in Pokemon, so I was happy to see the Pokemon Center store open at Jewel (though in hindsight it was a little underwhelming. This picture came from one of many trips I made to that store, with my Pokemon plushes in tow. As the saying goes, Birds (in this case, owls) of a feather flock together.</p>
            </div>
        </div>
    </div>
    </div>
<div class="modal fade" id="lightbox5" tabindex="-1" role="dialog" aria-labelledby="lightbox1Label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Content for the first section of the lightbox -->
            <div class="modal-header">
                <h5 class="modal-title" id="lightbox1Label">Heroes United</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add your content for the first section here, such as a larger image or additional information -->
                                <img src="website resources/Photos/Photo 5.jpg" alt=""  class="img-fluid"/>
                <p>While I rarely pay attention to pop culture beyond my interests, I decided to take this pic just for its novelty. The location was City Square Mall, and was a preview to a Comic Convention I went to last year (and only found out about it too!)that is returning this year. I may not follow these characters adventures, but its probably surreal to see so many of them in the same room.</p>
            </div>
        </div>
    </div>
    </div>
</body>
</html>

