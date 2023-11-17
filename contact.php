<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet"
          href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet"
          href=
"style.css" />
    <link href="stylesheets/contact.css" rel="stylesheet" type="text/css"/>
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
</header>
      <div class="header">
    <h2>Contact Me</h2>
  </div>
  <section class="content">
        <!-- heading -->
        <div class="full">
 
            <div class="lt">
 
                <!-- form starting  -->
                <form class="form-horizontal" method="post"
                      action="docontact.php">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <!-- name  -->
                            <input type="text" class="form-control"
                                   id="name" placeholder="NAME"
                                   name="name" value="" />
                        </div>
                    </div>
 
                    <div class="form-group">
                        <div class="col-sm-12">
                            <!-- email  -->
                            <input type="email" class="form-control"
                                   id="email" placeholder="EMAIL"
                                   name="email"
                                value="" />
                        </div>
                    </div>
 
                    <!-- message  -->
                    <textarea class="form-control" rows="10"
                              placeholder="MESSAGE" name="message">
            </textarea>
 
                    <button class="btn btn-primary send-button"
                            id="submit" type="submit" value="SEND">
                        <i class="fa fa-paper-plane"></i>
                        <span class="send-text">SEND</span>
                    </button>
                </form>
                <!-- end of form -->
            </div>
 
            <!-- Contact information -->
            <div class="rt">
                <!--<ul class="contact-list">
                    <li class="list-item">
                        <i class="fa fa-map-marker fa-1x">
                            <span class="contact-text place">
                                your address
                            </span>
                        </i>
                    </li>-->
 
                    <li class="list-item">
                        <i class="fa fa-envelope fa-1x">
                            <span class="contact-text gmail">
                                <a href="mailto:gabrielchee06@gmail.com"
                                   title="Send me an email">
                                    gabrielchee06@gmail.com</a>
                            </span>
                        </i>
                    </li>
 
                    <li class="list-item">
                        <i class="fa fa-phone fa-1x">
                            <span class="contact-text phone">
                                98477478
                            </span>
                        </i>
                    </li>
                </ul>
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


