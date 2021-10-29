<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>myanime</title>

        <link href="css/1.css" rel="stylesheet" />
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    </head>

    <body>
        <div class="header sticky-top">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand">
                    <img src="img/Screenshot 2021-10-20 101751.png">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar" style="border-color:rgb(0, 0, 0);" >
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                    <ul class="navbar-nav">
                        <?php
                        //Check if user is loging or not
                        if (!isset($_SESSION["id"])) {
                        ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal">
                                    <i class="fas fa-user"></i>Signup
                                </a>
                            </li>
                            <div class="nav-vl"></div>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">
                                    <i class="fas fa-sign-in-alt"></i>Login
                                </a>
                            </li>
                        <?php
                        } else {
                        ?>
                            <div class='nav-name'>
                                Hi, <?php echo $_SESSION["name"] ?>
                            </div>
                            <li class="nav-item">
                                <a class="nav-link" href="Anime_dashboard.php">
                                    <i class="fas fa-user"></i>Dashboard
                                </a>
                            </li>
                            <div class="nav-vl"></div>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">
                                    <i class="fas fa-sign-out-alt"></i>Logout
                                </a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </nav>
        </div>
        
        <div id="loading">
        </div>




        <div id="anime-images" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#anime-images" data-slide-to="0" class="active"></li>
                <li data-target="#anime-images" data-slide-to="1" class=""></li>
                <li data-target="#anime-images" data-slide-to="2" class=""></li>
                <li data-target="#anime-images" data-slide-to="3" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/DgID39tWAAAcX3w.jpg" alt="slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/tumblr_p32gwvV0yK1wkdn9no2_1280.png" alt="slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/wallpapersden.com_nezuko-and-tanjirou_2560x1080.jpg" alt="slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/33214.jpg" alt="slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#anime-images" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#anime-images" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>



        <div class="content">               
            <div class="banner-container">
                <form id="search-form" action="Anime.php" method="GET">
                    <div class="input-group anime-search">
                        <input type="text" class="form-control input-anime" id='anime' name='anime' placeholder="Enter your anime" />
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="container0">
                <div class="page-container1">
                    <div class="filter-bar row justify-content-around">
                        <div class="col-auto" data-toggle="modal" data-target="#filter-modal">
                            <img src="img/filter.png" alt="filter" />
                            <span>Filter</span>
                        </div>
                        <div class="col-auto">
                            <img src="img/desc.png" alt="sort-desc" />
                            <span>Ascending order</span>
                        </div>
                        <div class="col-auto">
                            <img src="img/asc.png" alt="sort-asc" />
                            <span>Descending order</span>
                        </div>
                        <div class="col-auto">
                            <img src="img/like.png" alt="like" />
                            <span>Most Liked</span>
                        </div>
                    </div>
                </div>

                <div class="image-container justify-content-between">
                    <div class="item">
                        <img src="img/B-H6qRrCYAA7D7c.jpg" ><br>
                        <span>Ultimate Otaku Teacher</span>
                    </div>
                    <div class="item">
                        <img src="img/DSMT_lightbox-poster_MENA-rev1-scaled.jpg" ><br>
                        <span>Demon Slayer</span>
                    </div>
                    <div class="item">
                        <img src="img/images (1).jpeg" ><br>
                        <span>Attack On Titan</span>
                    </div>
                    <div class="item">
                        <img src="img/images.jpeg" ><br>
                        <span>My Hero Academia</span>
                    </div>
                    <div class="item">
                        <img src="img/MV5BMGNmMWI4MGUtYmU0ZS00ZDkxLTgzMTAtZDU4YmQ1MDM3Y2IyXkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_FMjpg_UX1000_.jpg" ><br>
                        <span> Inuyasha</span>
                    </div>
                    <div class="item">
                        <img src="img/NipponTV-Edenszero-2020-1.jpg" ><br>
                        <span>Edenszero</span>
                    </div>
                    <div class="item">
                        <img src="img/The-God-of-Highschool_2x3-600x1066.png" ><br>
                        <span>The God of Highschool</span>
                    </div>
                    <div class="item">
                        <img src="img/Upcoming-anime-4.jpg" ><br>
                        <span>Fire Force</span>
                    </div>
                </div>  
            </div>
        </div>

        <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signup-heading" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="signup-heading">Signup with MyAnime</h5> 
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
    
                    <div class="modal-body">
                        <form id="signup-form" class="form" role="form" method="post"  action="signup_submit.php">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="name" placeholder="Name" maxlength="30" required>
                            </div>
    
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
    
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                            </div>
    
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary" style="background-color:rgb(104, 102, 102)">Create Account</button>
                            </div>
                        </form>
                    </div>
    
                    <div class="modal-footer">
                        <span>Already have an account?
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#login-modal" style="color:rgb(124, 5, 5)"    >Login</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-heading" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="login-heading">Login with MyAnime</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
    
                    <div class="modal-body">
                        <form id="login-form" class="form" role="form" method="post" action="login_submit.php">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
    
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                            </div>
    
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary"  style="background-color:rgb(104, 102, 102);">Login</button>
                            </div>
                        </form>
                    </div>
    
                    <div class="modal-footer">
                        <span>
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signup-modal"  style="color:rgb(109, 0, 0);">Click here</a>
                            to register a new account
                        </span>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="filter-modal" tabindex="-1" role="dialog" aria-labelledby="filter-heading" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="filter-heading">Filters</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
    
                    <div class="modal-body">
                        <h5>Genre</h5>
                        <hr />
                        <div>
                            <button class="btn btn-outline-dark btn-active">
                                No Filter
                            </button>
                            <button class="btn btn-outline-dark">
                                <i class="fas fa-skull"></i>Action
                            </button>
                            <button class="btn btn-outline-dark">
                                <i class="fas fa-grin-tears"></i>Comedy
                            </button>
                            <button class="btn btn-outline-dark">
                                <i class="fas fa-heart"></i>Romance
                            </button>
                        </div>
                    </div>
    
                    <div class="modal-footer" >
                        <button data-dismiss="modal" class="btn btn-success" style="background-color:rgb(104, 102, 102);">Okay</button>
                    </div>
                </div>
            </div>
        </div>
          

        <div class="footer">
            <div class="page-container footer-container">
                <div class="footer-animes">
                    <div class="footer-anime">
                        <a href="">Japanese Anime</a>
                    </div>
                    <div class="footer-anime">
                        <a href="">English-Dub Anime</a>
                    </div>
                    <div class="footer-anime">
                        <a href="">New Anime</a>
                    </div>
                    <div class="footer-anime">
                        <a href="">Most watched</a>
                    </div>
                </div>
                <div class="footer-copyright">© 2021 Copyright myanime </div>
            </div>
        </div> 


        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/1.js"></script>
    </body>
</html>
