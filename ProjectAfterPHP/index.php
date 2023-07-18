<?php
    session_start();
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"> -->
    <script src="https://kit.fontawesome.com/a54ff25879.js" crossorigin="anonymous"></script>
    <title>HAMMEDzFLIX</title>
    <link rel="shortcut icon" href="images/MainLogoNew.png" />
</head>

<body>
    <div class="navbar">
        <div class="navbar-container">
            <!-- <i class="logo-icon fas fa-video"></i> -->
            <!-- <i class="logo-icon fas fa-tv"></i> -->
            <i class="logo-icon fas fa-laptop"></i>
            <!-- <i class="logo-icon fas fa-desktop"></i> -->
            <div class="logo-container">
                <h1 class="logo">HAMMEDzFLIX</h1>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li class="menu-list-item"><a href="#">Movies</a></li>
                    <li class="menu-list-item"><a href="#mcu">MCU</a></li>
                    <li class="menu-list-item"><a href="#hollywood">Hollywood</a></li>
                    <li class="menu-list-item"><a href="#anime">Anime</a></li>

                </ul>
            </div>
            <div class="profile-container">
                <div class="toggle">
                    <i class="fas fa-moon toggle-icon"></i>
                    <i class="fas fa-sun toggle-icon"></i>
                    <div class="toggle-ball"></div>
                </div>
                <div class="profile-text-container">
                    <a href="includes/logout.inc.php"><span class="profile-text">Logout</a></span>
                    <i class="fas fa-sign-out-alt"></i>
                </div>
                <img class="profile-picture" src="/images/me.jpeg" alt="">
                
            </div>
        </div>
    </div>
    <div class="sidebar">
        <a class="active" href="index.html"><i class="left-menu-icon fas fa-home"></a></i>
        <a href="search.html"><i class="left-menu-icon fas fa-search"></a></i>
        <i class="left-menu-icon fas fa-bookmark"></i>
        <i class="left-menu-icon fas fa-users"></i>
    </div>
    <div class="container">                                        
        <div class="content-container">                                                   
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('images/two.png');" >       <!--link for name 1-->
                <img class="featured-title" src="images/NWHlogo.png" alt="">
                <div class="movie-infos top-down delay-2">
                <div class="movie-info">
                    <i class="fas fa-star"></i>
                    <span>9.5</span>
                </div>
                <div class="movie-info">
                    <i class="fas fa-clock"></i>
                    <span>2h 28min</span>
                </div>
                <div class="movie-info">
                    <span>Action/Adventure</span>
                </div>
                </div>
                <p class="featured-desc">With Spider-Man's identity now revealed, Peter asks Doctor Strange for help. When a spell goes wrong,
                    dangerous foes from other worlds start to appear,forcing Peter to discover what it truly means to be Spider-Man.</p>
                <button class="featured-button"><a href="spiderman.html">WATCH NOW</a></button>
            </div>
            <div class="movie-list-container">
                <h1 id= "mcu" class="movie-list-title">MARVEL CINEMATIC UNIVERSE</h1>                                <!--link name 2-->
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/EndgameCover.png" alt="">
                            <span class="movie-list-item-title">Avengers: ENDGAME</span>
                            <p class="movie-list-item-desc">Aftermath of Avengers: Infinity War, the Avengers assemble one last time to reverse Thanos' actions and restore balance to the universe.</p>
                            <button class="movie-list-item-buttono"><a href="avengers.html">WATCH NOW</a></button>
                        
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/MultiverseCover.png" alt="">
                            <span class="movie-list-item-title">DOCTOR STRANGE II</span>
                            <p class="movie-list-item-desc">Dr. Stephen Strange casts a forbidden spell that opens the door to the multiverse, including an alternate version of himself.</p>
                            <button class="movie-list-item-buttono"><a href="drstrange.html">WATCH NOW</a></button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/LOKIcover.png" alt="">
                            <span class="movie-list-item-title">LOKI</span>
                            <p class="movie-list-item-desc">The mercurial villain Loki resumes his role as the God of Mischief in a 
                                new series that takes place after the events of “Avengers: Endgame.”</p>
                            <button class="movie-list-item-buttono">WATCH NOW</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/Infinity.png" alt="">
                            <span class="movie-list-item-title">INFINITY WAR</span>
                            <p class="movie-list-item-desc">Superheroes amass to stop Thanos from acquiring all 
                                Infinity Stones and wiping out half of all life in the universe.</p>
                            <button class="movie-list-item-buttono">WATCH NOW</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/CivilWar.png" alt="">
                            <span class="movie-list-item-title">CIVIL WAR</span>
                            <p class="movie-list-item-desc">It's Avengers vs. Avengers, where Captain America fights his pal Iron Man.</p>
                            <button class="movie-list-item-buttono">WATCH NOW</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/BlackPanther.png" alt="">
                            <span class="movie-list-item-title">BLACK PANTHER</span>
                            <p class="movie-list-item-desc">T'Challa is crowned king of Wakanda following his father's death, 
                                but he is challenged by Killmonger who plans to begin a global revolution.</p>
                            <button class="movie-list-item-buttono">WATCH NOW</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/AvengersCover.png" alt="">
                            <span class="movie-list-item-title">AGE OF ULTRON</span>
                            <p class="movie-list-item-desc">Returning to action to stem another lethal threat to planet Earth, the cadre of superheroes: Avengers take on the evil and all-powerful Ultron.</p>
                            <button class="movie-list-item-buttono">WATCH NOW</button>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('images/DuneCover.png');" id="hollywood">      <!--link name 3-->
                <img class="featured-title-hollywood" src="images/DuneTitle.png" alt="">
                <div class="movie-infos top-down delay-2">
                    <div class="movie-info-holly">
                        <i class="fas fa-star"></i>
                        <span>9.0</span>
                    </div>
                    <div class="movie-info-holly">
                        <i class="fas fa-clock"></i>
                        <span>2h 35min</span>
                    </div>
                    <div class="movie-info-holly">
                        <span>Sci-FI/Adventure</span>
                    </div>
                    </div>
                <p class="featured-desc">A mythic and emotionally charged journey of Paul Atreides,
                    a brilliant and gifted young man born into a great destiny beyond his understanding,
                    who must travel to the most dangerous planet in the universe to ensure the future of his family and his people.</p>
                <button class="featured-button-hollywood"><a href="dune.html">WATCH NOW</a></button>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">HOLLYWOOD MOVIES</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/InceptionCover.png" alt="">
                            <span class="movie-list-item-title">INCEPTION</span>
                            <p class="movie-list-item-desc">A thief who extrats people's dreams takes one last job: 
                                leading a dangerous mission to plant an idea in a target's subconscious.</p>
                            <button class="movie-list-item-button"><a href="inception.html">WATCH NOW</a></button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/Stay.png" alt="">
                            <span class="movie-list-item-title">INTERSTELLAR</span>
                            <p class="movie-list-item-desc">With humanity teetering on the brink of extinction, 
                                a group of astronauts travels through a wormhole in search of another inhabitable planet.</p>
                            <button class="movie-list-item-button">WATCH NOW</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/ShutterIsland.png" alt="">
                            <span class="movie-list-item-title">Shutter Island</span>
                            <p class="movie-list-item-desc">A U.S. marshal's troubling visions compromise his investigation into the 
                                disappearance of a patient from a hospital for the criminally insane.</p>
                            <button class="movie-list-item-button">WATCH NOW</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/DunkirkTrap.png" alt="">
                            <span class="movie-list-item-title">DUNKIRK</span>
                            <p class="movie-list-item-desc">Events of WORLD WAR II where soldiers & civilians struggle by land, 
                                sea and air to evacuate the British army and their allies, from Dunkirk.</p>
                            <button class="movie-list-item-button">WATCH NOW</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/TENETcover.png" alt="">
                            <span class="movie-list-item-title">TENET</span>
                            <p class="movie-list-item-desc">An undercover agent must retrieve a mysterious and 
                                powerful weapon in order to stop a temporal war that could destroy the world.</p>
                            <button class="movie-list-item-button">WATCH NOW</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/DarKnight.png" alt="">
                            <span class="movie-list-item-title">The Dark Knight</span>
                            <p class="movie-list-item-desc">The Joker wreaks havoc and chaos on the people of Gotham, Batman must accept the psychologicals test of his ability to fight injustice.</p>
                            <button class="movie-list-item-button">WATCH NOW</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/SocialNetwork.png" alt="">
                            <span class="movie-list-item-title">Facebook</span>
                            <p class="movie-list-item-desc">Mark Zuckerberg pursues an idea that propels him to internet success, 
                                bringing in legal trouble and costing him friendships.</p>
                            <button class="movie-list-item-button">WATCH NOW</button>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>

            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('images/KimiOne.png');" id="anime">   <!--link name 4-->
                <img class="featured-title-hollywood" src="images/kimi.png" alt="">
                <div class="movie-infos top-down delay-2">
                    <div class="movie-info-anime">
                        <i class="fas fa-star"></i>
                        <span>9.8</span>
                    </div>
                    <div class="movie-info-anime">
                        <i class="fas fa-clock"></i>
                        <span>1h 52min</span>
                    </div>
                    <div class="movie-info-anime">
                        <span>Romance/Fantasy</span>
                    </div>
                    </div>
                <p class="featured-desc">This anime film tells the story of Tachibana Taki- A boy from Tokyo and Miyamizu Mitsuha– A girl from a rural town, find themselves linked.
                    When a connection forms, will distance be the only thing to keep them apart?</p>
                <button class="featured-button-anime"><a href="playvid.html">WATCH NOW</a></button>
            </div>
            <!-- <div id="video" class="video">
                <video width="500" height="400" controls>
                    <source src="videos/YourName.mp4" type="video/mp4">
                  Video hasnt played.
                  </video>
            </div> -->

            <div class="movie-list-container">
                <h1 class="movie-list-title">JAPANESE ANIME</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/2.png" alt="">
                            <span class="movie-list-item-title">鬼滅の刃</span>
                            <p class="movie-list-item-desc">Kamado Tanjiro embarks upon a perilous journey to find a cure for his sister's curse and to avenge his murdered family.</p>
                            <button class="movie-list-item-buttona"><a href="demonslayer.html">WATCH NOW</a></button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/Anime1.png" alt="">
                            <span class="movie-list-item-title">七つの大罪</span>
                            <p class="movie-list-item-desc">The legend of a group of warriors who were wrongly 
                                accused of a crime they didn't commit and went on a quest to vindicate themselves.</p>
                            <button class="movie-list-item-buttona">WATCH NOW</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/3.png" alt="">
                            <span class="movie-list-item-title">僕のヒーローアカデミア</span>
                            <p class="movie-list-item-desc">A superhero-loving boy without any powers is determined to enroll in a 
                                prestigious hero academy and learn what it really means to be a hero.</p>
                            <button class="movie-list-item-buttona">WATCH NOW</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/Anime.png" alt="">
                            <span class="movie-list-item-title">ハイキュー!!</span>
                            <p class="movie-list-item-desc">Determined to be like the volleyball championship's star player, 
                                a short boy nicknamed "the small giant," Hinata joins a volleyball club.</p>
                            <button class="movie-list-item-buttona"><a href="haikyuu.html">WATCH NOW</a></button>
                        </div>
                        <!-- <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/1.png" alt="">
                            <span class="movie-list-item-title">進撃の巨人</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">WATCH NOW</button>
                        </div> -->
                    </div>
                    <!-- <i class="fas fa-chevron-right arrow"></i> -->
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER SECTION -->
    <!-- <footer class="section">
        <div class="container">
            <div class="row">
                <div class="col-4 col-md-6 col-sm-12">
                    <div class="logo-container">
                        <h1><a href="#" class="logo">HAMMEDzFLIX</h1>
                        </a>
                    </div>
                        <p>
                            Hey there! Thanks for choosing HAMMEDzFLIX. We hope you had fun along with some Quality User-interaction experience!
                        </p>
                        <div class="social-list">
                            <a href="#" class="social-item">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a href="#" class="social-item">
                                <i class="bx bxl-twitter"></i>
                            </a>
                            <a href="#" class="social-item">
                                <i class="bx bxl-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-8 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-3 col-md-6 col-sm-6">
                            <div class="content">
                                <p><b>Flix</b></p>
                                <ul class="footer-menu">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">My profile</a></li>
                                    <li><a href="#">Pricing plans</a></li>
                                    <li><a href="#">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3 col-md-6 col-sm-6">
                            <div class="content">
                                <p><b>Browse</b></p>
                                <ul class="footer-menu">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">My profile</a></li>
                                    <li><a href="#">Pricing plans</a></li>
                                    <li><a href="#">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3 col-md-6 col-sm-6">
                            <div class="content">
                                <p><b>Help</b></p>
                                <ul class="footer-menu">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">My profile</a></li>
                                    <li><a href="#">Pricing plans</a></li>
                                    <li><a href="#">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3 col-md-6 col-sm-6">
                            <div class="content">
                                <p><b>Download app</b></p>
                                <ul class="footer-menu">
                                    <li>
                                        <a href="#">
                                            <img src="./images/google-play.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="./images/app-store.png" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->
    <!-- END FOOTER SECTION -->

    <!-- COPYRIGHT SECTION -->
    <div class="copyright">
        Copyright <i class="far fa-copyright"></i><i class="far fa-registered"></i> 2022 <a href="https://www.instagram.com/hammed.designz/" target="_blank">
            HammeDesignz</a>
    </div>
    <!-- END COPYRIGHT SECTION -->

    <script src="app.js"></script>
    <script src="https://kit.fontawesome.com/a54ff25879.js" crossorigin="anonymous"></script>
</body>

</html>