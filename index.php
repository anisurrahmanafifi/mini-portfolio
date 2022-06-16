<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
        
        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>ANISUR RAHMAN AFIFI - Portfolio</title>
    </head>
    <body>
        <!--=============== HEADER ===============-->
        <header class="profile container">
            <!-- Theme button -->
            <i class="ri-moon-line change-theme" id="theme-button"></i>

            <div class="profile__container grid">
                <div class="profile__data">
                    <div class="profile__border">
                        <div class="profile__perfil">
                            <!-- Insert your image, according to the example size of the portfolio -->
                            <img src="assets/img/perfil.png" alt="">
                        </div>
                    </div>

                    <h2 class="profile__name">ANISUR RAHMAN AFIFI</h2>
                    <h3 class="profile__profession">Full stack web developer, UI Designer and VFX Enthusiast</h3>

                    <ul class="profile__social">
                        <a href="https://github.com/anisurrahmanafifi" target="_blank" class="profile__social-link">
                            <i class="ri-github-line"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/anisurrahmanafifi/" target="_blank" class="profile__social-link">
                            <i class="ri-linkedin-box-line"></i>
                        </a>
                        <a href="https://www.facebook.com/anisurrahmanafifi" target="_blank" class="profile__social-link">
                            <i class="ri-facebook-line"></i>
                        </a>
                    </ul>
                </div>

                <div class="profile__info grid">
                    <div class="profile__info-group">
                        <h3 class="profile__info-number">4</h3>
                        <p class="profile__info-description">
                            Years of <br> work
                        </p>
                    </div>
                    <div class="profile__info-group">
                        <h3 class="profile__info-number">+24</h3>
                        <p class="profile__info-description">
                            Completed <br> projects
                        </p>
                    </div>
                    <div class="profile__info-group">
                        <h3 class="profile__info-number">66</h3>
                        <p class="profile__info-description">Satisfied <br> customers</p>
                    </div>
                </div>

                <div class="profile__buttons">
                    <!-- Insert your CV -->
                    <a download="" href="assets/pdf/Gianell-Cv.pdf" class="button">
                        Contact <i class="ri-download-line"></i>
                    </a>

                    <div class="profile__buttons-small">
                        <!-- Insert a real number plus country code -->
                        <a href="https://api.whatsapp.com/send?phone=8801946524822&text=I'm%20interested%20to%20chat%20with%20you." target="_blank" class="button button__small button__gray">
                            <i class="ri-whatsapp-line"></i>
                        </a>
                        <!-- Insert your brand name or profile -->
                        <a href="https://m.me/anisurrahmanafifi" target="_blank" class="button button__small button__gray">
                            <i class="ri-messenger-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <!--=============== MAIN ===============-->
        <main class="main">
            <section class="filters container">
                <!--=============== FILTERS TABS ===============-->
                <ul class="filters__content">
                    <button class="filters__button filter-tab-active" data-target="#projects">
                        Projects
                    </button>
                    <button class="filters__button" data-target="#skills">
                        Skills
                    </button>
                </ul>

                <div class="filters__sections">
                    <!--=============== PROJECTS ===============-->
                    <div class="projects__content grid filters__active" data-content id="projects">
                        <article class="projects__card">
                            <!-- Insert your image in a rectangular format (Ex: 600 x 400, 1000 x 800, 1200 x 1000, etc) -->
                            <img src="assets/img/project1.jpg" alt="" class="projects__img">

                            <div class="projects__modal">
                                <div>
                                    <span class="projects__subtitle">Web</span>
                                    <h3 class="projects__title">Payment Site</h3>
                                    <a href="#" class="projects__button button button__small">
                                        <i class="ri-github-line"></i>
                                    </a>
                                    <a href="#" class="projects__button button button__small">
                                        <i class="ri-link"></i>
                                    </a>
                                </div>
                            </div>
                        </article>

                        <article class="projects__card">
                            <img src="assets/img/project2.jpg" alt="" class="projects__img">

                            <div class="projects__modal">
                                <div>
                                    <span class="projects__subtitle">Web</span>
                                    <h3 class="projects__title">Portfolio website</h3>
                                    <a href="#" class="projects__button button button__small">
                                        <i class="ri-github-line"></i>
                                    </a>
                                    <a href="#" class="projects__button button button__small">
                                        <i class="ri-link"></i>
                                    </a>
                                </div>
                            </div>
                        </article>

                        <article class="projects__card">
                            <img src="assets/img/project3.jpg" alt="" class="projects__img">

                            <div class="projects__modal">
                                <div>
                                    <span class="projects__subtitle">Movil</span>
                                    <h3 class="projects__title">Fast food app</h3>
                                    <a href="#" class="projects__button button button__small">
                                        <i class="ri-github-line"></i>
                                    </a>
                                    <a href="#" class="projects__button button button__small">
                                        <i class="ri-link"></i>
                                    </a>
                                </div>
                            </div>
                        </article>

                        <article class="projects__card">
                            <img src="assets/img/project4.jpg" alt="" class="projects__img">

                            <div class="projects__modal">
                                <div>
                                    <span class="projects__subtitle">Movil</span>
                                    <h3 class="projects__title">Travel app</h3>
                                    <a href="#" class="projects__button button button__small">
                                        <i class="ri-github-line"></i>
                                    </a>
                                    <a href="#" class="projects__button button button__small">
                                        <i class="ri-link"></i>
                                    </a>
                                </div>
                            </div>
                        </article>

                        <article class="projects__card">
                            <img src="assets/img/project5.jpg" alt="" class="projects__img">

                            <div class="projects__modal">
                                <div>
                                    <span class="projects__subtitle">Design</span>
                                    <h3 class="projects__title">Music app design</h3>
                                    <a href="#" class="projects__button button button__small">
                                        <i class="ri-github-line"></i>
                                    </a>
                                    <a href="#" class="projects__button button button__small">
                                        <i class="ri-link"></i>
                                    </a>
                                </div>
                            </div>
                        </article>

                        <article class="projects__card">
                            <img src="assets/img/project5.jpg" alt="" class="projects__img">

                            <div class="projects__modal">
                                <div>
                                    <span class="projects__subtitle">Design</span>
                                    <h3 class="projects__title">Music app design</h3>
                                    <a href="#" class="projects__button button button__small">
                                        <i class="ri-github-line"></i>
                                    </a>
                                    <a href="#" class="projects__button button button__small">
                                        <i class="ri-link"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!--=============== SKILLS ===============-->
                    <div class="skills__content grid" data-content id="skills">
                        <div class="skills__area">
                            <h3 class="skills__title">Frontend Developer</h3>
    
                            <div class="skills__box">
                                <div class="skills__group">
                                    <div class="skills__data">
                                        <i class="ri-checkbox-circle-line"></i>
        
                                        <div>
                                            <h3 class="skills__name">HTML</h3>
                                            <span class="skills__level">Advanced</span>
                                        </div>
                                    </div>
        
                                    <div class="skills__data">
                                        <i class="ri-checkbox-circle-line"></i>
        
                                        <div>
                                            <h3 class="skills__name">CSS</h3>
                                            <span class="skills__level">Advanced</span>
                                        </div>
                                    </div>
        
                                    <div class="skills__data">
                                        <i class="ri-checkbox-circle-line"></i>
        
                                        <div>
                                            <h3 class="skills__name">JavaScript</h3>
                                            <span class="skills__level">Intermediate</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="skills__group">
                                    <div class="skills__data">
                                        <i class="ri-checkbox-circle-line"></i>
        
                                        <div>
                                            <h3 class="skills__name">React</h3>
                                            <span class="skills__level">Basic</span>
                                        </div>
                                    </div>
        
                                    <div class="skills__data">
                                        <i class="ri-checkbox-circle-line"></i>
        
                                        <div>
                                            <h3 class="skills__name">Bootstrap</h3>
                                            <span class="skills__level">Intermediate</span>
                                        </div>
                                    </div>
        
                                    <div class="skills__data">
                                        <i class="ri-checkbox-circle-line"></i>
        
                                        <div>
                                            <h3 class="skills__name">Git</h3>
                                            <span class="skills__level">Intermediate</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="skills__area">
                            <h3 class="skills__title">Backend Developer</h3>
    
                            <div class="skills__box">
                                <div class="skills__group">
                                    <div class="skills__data">
                                        <i class="ri-checkbox-circle-line"></i>
        
                                        <div>
                                            <h3 class="skills__name">PHP</h3>
                                            <span class="skills__level">Intermediate</span>
                                        </div>
                                    </div>
        
                                    <div class="skills__data">
                                        <i class="ri-checkbox-circle-line"></i>
        
                                        <div>
                                            <h3 class="skills__name">MySQL</h3>
                                            <span class="skills__level">Advanced</span>
                                        </div>
                                    </div>
        
                                    <div class="skills__data">
                                        <i class="ri-checkbox-circle-line"></i>
        
                                        <div>
                                            <h3 class="skills__name">Firebase</h3>
                                            <span class="skills__level">Basic</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="skills__group">
                                    <div class="skills__data">
                                        <i class="ri-checkbox-circle-line"></i>
        
                                        <div>
                                            <h3 class="skills__name">Python</h3>
                                            <span class="skills__level">Basic</span>
                                        </div>
                                    </div>
        
                                    <div class="skills__data">
                                        <i class="ri-checkbox-circle-line"></i>
        
                                        <div>
                                            <h3 class="skills__name">Node Js</h3>
                                            <span class="skills__level">Intermediate</span>
                                        </div>
                                    </div>
                                    <div class="skills__data">
                                        <i class="ri-checkbox-circle-line"></i>
        
                                        <div>
                                            <h3 class="skills__name">Typescript</h3>
                                            <span class="skills__level">Basic</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!--=============== FOOTER ===============-->
        <footer class="footer container">
            <span class="footer__copy">
            <?php
            $start_year = 2021;
            if ($start_year == date("Y")) {
            echo $start_year;
            } else {
            echo $start_year."-".date("Y");
            }
            ?>
            &#169; ANISUR RAHMAN AFIFI. All rigths reserved
            </span>
        </footer>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>