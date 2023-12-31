<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="./styles/style.css">
    <title>Home - Hotel Miranda</title>
</head>

<body>
    <!-- HEADER -->
    <header class="header">
        <div class="header__top">
            <p>We Make Your Feel Comfortable</p>
        </div>
        <div class="header__navbar">
            <div class="header__toggle">
                <div class="toggle__menu">
                    <img class="toggle__menu__close" src="./assets/header/close_menu_mobile.png" alt="Menu close">
                    <img class="toggle__menu__open" src="./assets/header/open_menu_mobile.png" alt="Menu open">
                </div>
                <ul class="menu__mobile" style="display: none;">
                    <li class="menu__item"><a href="about">About Us</a></li>
                    <li class="menu__item"><a href="rooms">Rooms</a></li>
                    <li class="menu__item"><a href="offers">Offers</a></li>
                    <li class="menu__item"><a href="contact">Contact</a></li>
                </ul>
            </div>
            <div class="header__logo"><a href="index"><img src="./assets/header/logo_mobile.png" alt="Logo"></a></div>
            <div class="desktop">
                <ul class="menu__desktop">
                    <li class="menu__desktop__item"><a href="about">About Us</a></li>
                    <li class="menu__desktop__item"><a href="rooms">Rooms</a></li>
                    <li class="menu__desktop__item"><a href="offers">Offers</a></li>
                    <li class="menu__desktop__item"><a href="contact">Contact</a></li>
                </ul>
            </div>
            <div class="header__user-button"><img src="./assets/header/login_mobile.png" alt="UserLogin"></div>
            <div class="header__search-button"><img src="./assets/header/search_mobile.png" alt="Search"></div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="footer">

            <div class="container">
                <div class="footer__logo">
                    <img class="footer__logo--image" src="./assets/footer/logo_footer_mobile.png" alt="Logo Hotel">
                </div>
                <p class="footer__description">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius
                    mod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat
                    ion
                    ullamco laboris nisi.</p>
                <div class="footer__socials">
                    <img class="footer__socials--image" src="./assets/footer/Socials_footer_mobile.png" alt="RRSS">
                </div>
            </div>

            <div class="container">
                <h4 class="footer__title">Services.</h4>
                <div class="footer__list">
                    <ul class="footer__list__ul">
                        <li class="footer__list__ul--item">+ Restaurent &amp Bar</li>
                        <li class="footer__list__ul--item">+ Swimming Pool</li>
                        <li class="footer__list__ul--item">+ Wellness &amp Spa</li>
                        <li class="footer__list__ul--item">+ Restaurant</li>
                        <li class="footer__list__ul--item">+ Conference Room</li>
                        <li class="footer__list__ul--item">+ Coctail Party House</li>
                    </ul>
                    <ul class="footer__list__ul">
                        <li class="footer__list__ul--item">+ Gaming Zone</li>
                        <li class="footer__list__ul--item">+ Marrige Party</li>
                        <li class="footer__list__ul--item">+ Party Planning</li>
                        <li class="footer__list__ul--item">+ Tour Consultancy</li>
                    </ul>
                </div>
            </div>

            <div class="container">
                <h4 class="footer__contact">Contact Us.</h4>
                <div class="footer__phone">
                    <div class="group">
                        <div class="item">
                            <div class="footer__phone__image">
                                <img src="./assets/footer/phono_footer_mobile.svg" alt="phono icon">
                            </div>
                            <div class="footer__phone__number">
                                <p>Phone Number</p>
                                <p>+987 876 765 76 577</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="footer__phone__image">
                                <img src="./assets/footer/mail_footer_mobile.svg" alt="mail icon">
                            </div>
                            <div class="footer__phone__number">
                                <p>Email</p>
                                <p>info@webmail.com jobs.webmail@mail.com</p>
                            </div>
                        </div>

                        <div class="item" id="item3">
                            <div class="footer__phone__image">
                                <img src="./assets/footer/gps_footer_mobile.svg" alt="gps icon">
                            </div>
                            <div class="footer__phone__number">
                                <p>Hotel Address</p>
                                <p>19/A, Cirikon City hall Tower New York, NYC</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="finish">
            <p class="finish__copyright">Copyright By@Damian Silvera - 2023</p>
            <p class="finish__terms">Terms of use | Privacy Environmental Policy</p>
        </div>
    </footer>

    <script src="./scripts/main.js"></script>
    <script src="./scripts/swiper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</body>

</html>