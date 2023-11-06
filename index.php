<?php
if (!defined("SITE_URL"))
    define("SITE_URL", "http://creativehub.mk/");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="facebook-domain-verification" content="zqer1a6stwlx3mwiuyydhb6fj0x4ow" />


    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">


    <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css">


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="node_modules\@glidejs\glide\dist\css\glide.core.min.css">
    <link rel="stylesheet" href="node_modules\@glidejs\glide\dist\css\glide.theme.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js">
    </script>

    <script>
    $(document).ready(function() {

        $("a").on('click', function(event) {


            if (this.hash !== "") {
                background: #FFA928;

                event.preventDefault();


                var hash = this.hash;


                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function() {


                    window.location.hash = hash;
                });
            } // End if
        });
    });
    </script>



    <!-- Facebook Pixel Code -->
    <script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '950882672134128');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=950882672134128&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
    <script>
    (function(h, o, t, j, a, r) {
        h.hj = h.hj || function() {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {
            hjid: 2919442,
            hjsv: 6
        };
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>

    <script>
    var site_url = '<?php echo SITE_URL; ?>';
    </script>

    <title>CreativeHub</title>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NB5S9TR');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NB5S9TR" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        openNav = () => {
            document.getElementById("mainMobileMenu").style.height = "100vh";
        }

        closeNav = () => {
            document.getElementById("mainMobileMenu").style.height = "0";
            document.getElementById("academiesMenu").style.width = "0";
            document.getElementById("careersMenu").style.width = "0";
            document.getElementById("campusMenu").style.width = "0";
        }

        closeMenu = (id) => {
            document.getElementById(id).style.width = "0";
        }

        openMenu = (id) => {
            document.getElementById(id).style.width = "100%";
        }

        const url = window.location.href;

        if (url.search('digital-marketing') > -1) {
            document.getElementById('academiesDropdown').classList.add('active-blue-color')
            document.getElementById('DMMenuItem').classList.add('active-menu-item')
            document.getElementById('DMFooterItem').classList.add('active-footer-item')
        } else if (url.search('graphic-design') > -1) {
            document.getElementById('academiesDropdown').classList.add('active-blue-color')
            document.getElementById('GDMenuItem').classList.add('active-menu-item')
            document.getElementById('GDFooterItem').classList.add('active-footer-item')
        } else if (url.search('hr') > -1) {
            document.getElementById('academiesDropdown').classList.add('active-blue-color')
            document.getElementById('HRMenuItem').classList.add('active-menu-item')
            document.getElementById('HRFooterItem').classList.add('active-footer-item')
        } else if (url.search('ux-ui') > -1) {
            document.getElementById('academiesDropdown').classList.add('active-blue-color')
            document.getElementById('UXMenuItem').classList.add('active-menu-item')
            document.getElementById('UXFooterItem').classList.add('active-footer-item')
        } else if (url.search('front-end') > -1) {
            document.getElementById('academiesDropdown').classList.add('active-blue-color')
            document.getElementById('FEMenuItem').classList.add('active-menu-item')
            document.getElementById('FEFooterItem').classList.add('active-footer-item')
        } else if (url.search('data-science') > -1) {
            document.getElementById('academiesDropdown').classList.add('active-blue-color')
            document.getElementById('DSMenuItem').classList.add('active-menu-item')
            document.getElementById('DSFooterItem').classList.add('active-footer-item')
        } else if (url.search('java') > -1) {
            document.getElementById('academiesDropdown').classList.add('active-blue-color')
            document.getElementById('JavaMenuItem').classList.add('active-menu-item')
            document.getElementById('JavaFooterItem').classList.add('active-footer-item')
        } else if (url.search('power-bi') > -1) {
            document.getElementById('academiesDropdown').classList.add('active-blue-color')
            document.getElementById('PowerBIMenuItem').classList.add('active-menu-item')
            document.getElementById('PowerBIFooterItem').classList.add('active-footer-item')
        }
    });
    </script>
    <div class="full-div">
        <header class="header-navbar d-none d-lg-block">
            <div class="yellow-top" id="yellowTop">Закажи состанок со career advisor <a
                    href="https://calendly.com/stojanco_ch/30min?month=2022-05" target="blank">тука.</a> <img
                    src="x-button.svg" id="closeBtn" alt="X button"></div>
            <div class="container pt-3">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center telephone-box">
                        <img src="images-navbar/calling-icon.png">
                        <a href="tel:+38971214849">
                            <p class="ml-2">+ 389 71 214 849</p>
                        </a>
                    </div>
                    <div>
                        <ul class="m-0 p-0 campus-ul">
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="campusDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Кампуси
                                </a>
                                <div class="dropdown-menu" aria-labelledby="campusDropdown">
                                    <a class="dropdown-item" href="#">Македонија</a>
                                    <a class="dropdown-item" href="https://creativehubkos.com/">Косово</a>
                                    <a class="dropdown-item" href="#">Мајами</a>
                                    <a class="dropdown-item" href="#">Берлин</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="navbar-hr">
                <div class="pb-3">
                    <nav class="navbar navbar-expand-lg p-0">
                        <div class="d-flex align-items-center justify-content-center logo">
                            <a class="nav-brand" href="https://creativehub.mk"><img src="images-navbar/logo.png" /></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <img src="images-navbar/hamburger_menu.png" class="navbar-toggler-icon" />
                            </button>
                            <p class="mb-0 ml-2 p-0">| Successful careers
                                <span>made possible.</span>
                            </p>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="academiesDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Академии
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="academiesDropdown">
                                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>digital-marketing"
                                            id="DMMenuItem">
                                            Дигитален маркетинг
                                        </a>
                                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>graphic-design"
                                            id="GDMenuItem">
                                            Графички дизајн
                                        </a>
                                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>hr" id="HRMenuItem">
                                            Човечки ресурси
                                        </a>
                                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>ux-ui" id="UXMenuItem">
                                            UX/UI дизајн
                                        </a>
                                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>front-end"
                                            id="FEMenuItem">
                                            Front-End
                                        </a>
                                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>data-science"
                                            id="DSMenuItem">
                                            Data Science
                                        </a>
                                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>java" id="JavaMenuItem">
                                            Java
                                        </a>
                                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>power-bi"
                                            id="PowerBIMenuItem">
                                            Power BI
                                        </a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="careersDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Кариера
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="careersDropdown">
                                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>blog">
                                            Нашите студенти
                                        </a>
                                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>hakatoni">
                                            Хакатони
                                        </a>
                                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>ux-ui-quests">
                                            UX/UI Quests
                                        </a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo SITE_URL; ?>HiringPlatform">
                                        <b>Платформа за вработување</b>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>


        <header class="header-mobile-navbar d-lg-none">
            <div class="yellow-top" id="yellowTop">Закажи состанок со career advisor <a
                    href="https://calendly.com/stojanco_ch/30min?month=2022-05" target="blank">тука.</a> <img
                    src="x-button.svg" id="closeBtn" alt="X button"></div>
            <div id="mainMobileMenu" class="overlay">
                <div class="menu-overlay-header">
                    <div class="container d-flex align-items-center justify-content-between">
                        <img src="images-navbar/logo.png" />
                        <img onclick="closeNav()" class="close-menu-btn" src="images-navbar/menu_close_icon.png" />
                    </div>
                </div>
                <div class="overlay-content container">
                    <div class="mobile-menu-item d-flex align-items-center justify-content-between"
                        onclick="openMenu('academiesMenu')">
                        Академии <img src="images-navbar/menu_right_arrow.png">
                    </div>
                    <div class="mobile-menu-item d-flex align-items-center justify-content-between"
                        onclick="openMenu('careersMenu')">
                        Кариера <img src="images-navbar/menu_right_arrow.png">
                    </div>
                    <div class="mobile-menu-item">Платформа за вработување</div>
                    <hr class="navbar-hr">
                    <div class="d-flex align-items-center telephone-box mb-4">
                        <img src="images-navbar/calling-icon.png">
                        <a href="tel:+38971214849">
                            <p class="ml-2">+ 389 71 214 849</p>
                        </a>
                    </div>
                    <div class="mobile-menu-item d-flex align-items-center justify-content-between"
                        onclick="openMenu('campusMenu')">
                        <div>Кампус: <span class="campus-name">Македонија</span></div>
                        <img src="images-navbar/menu_right_arrow.png">
                    </div>
                </div>
            </div>

            <div id="academiesMenu">
                <div class="menu-overlay-header">
                    <div class="container d-flex align-items-center justify-content-between">
                        <img onclick="closeMenu('academiesMenu')" src="images-navbar/menu_left_arrow.png" />
                        <div class="active-blue-color">Академии</div>
                        <img onclick="closeNav()" class="close-menu-btn" src="images-navbar/menu_close_icon.png" />
                    </div>
                </div>

                <div class="container d-flex flex-column pt-4">
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>digital-marketing">
                        <div class="d-flex justify-content-between align-items-center">
                            Дигитален маркетинг
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>graphic-design">
                        <div class="d-flex justify-content-between align-items-center">
                            Графички дизајн
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>hr">
                        <div class="d-flex justify-content-between align-items-center">
                            Човечки ресурси
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>ux-ui">
                        <div class="d-flex justify-content-between align-items-center">
                            UX/UI дизајн
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>front-end">
                        <div class="d-flex justify-content-between align-items-center">
                            Front-End
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>data-science">
                        <div class="d-flex justify-content-between align-items-center">
                            Data Science
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>java">
                        <div class="d-flex justify-content-between align-items-center">
                            Java
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                </div>
            </div>

            <div id="careersMenu">
                <div class="menu-overlay-header">
                    <div class="container d-flex align-items-center justify-content-between">
                        <img onclick="closeMenu('careersMenu')" src="images-navbar/menu_left_arrow.png" />
                        <div class="active-blue-color">Кариера</div>
                        <img onclick="closeNav()" class="close-menu-btn" src="images-navbar/menu_close_icon.png" />
                    </div>
                </div>

                <div class="container d-flex flex-column pt-4">
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>blog">
                        <div class="d-flex justify-content-between align-items-center">
                            Нашите студенти
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>hakatoni">
                        <div class="d-flex justify-content-between align-items-center">
                            Хакатони
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>ux-ui-quests">
                        <div class="d-flex justify-content-between align-items-center">
                            UX/UI Quests
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                </div>
            </div>

            <div id="campusMenu">
                <div class="menu-overlay-header">
                    <div class="container d-flex align-items-center justify-content-between">
                        <img onclick="closeMenu('campusMenu')" src="images-navbar/menu_left_arrow.png" />
                        <div class="active-blue-color">Кампус</div>
                        <img onclick="closeNav()" class="close-menu-btn" src="images-navbar/menu_close_icon.png" />
                    </div>
                </div>

                <div class="container d-flex flex-column pt-4">
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>">
                        <div class="d-flex justify-content-between align-items-center">
                            Македонија
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                    <a class="mobile-submenu-item" href="https://creativehubkos.com/">
                        <div class="d-flex justify-content-between align-items-center">
                            Косово
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>">
                        <div class="d-flex justify-content-between align-items-center">
                            Мајами
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>">
                        <div class="d-flex justify-content-between align-items-center">
                            Берлин
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                </div>
            </div>

            <div class="container d-flex justify-content-between mobile-navbar align-items-center">
                <a href="<?php echo SITE_URL; ?>">
                    <img src="images-navbar/logo_mobile.png">
                </a>
                <img class="hamburger-icon" src="images-navbar/hamburger_menu.png" onclick="openNav()">
            </div>
        </header>
        <!--Start of header section-->
        <section class="header-section">
            <div class="container d-flex flex-column">
                <h1 class="main-title  color-custom-white">
                    Им помагаме на нашите студенти да ја променат кариерата или <br>
                    да започнат нова!

                </h1>
                <h4 class="text-center color-custom-white my-3">
                    Закажи #БЕСПЛАТЕН состанок со career advisor!
                </h4>
                <?php
        require_once('career-form.html')
        ?>

                <div class="row bubbles">
                    <div class="col-md-4 col-6">
                        <div class="header-bubble">
                            <div class="header-bubble-inner">
                                <h4>Најниска цена!</h4>
                                <img src="images/bubble-gradient.svg" alt="Gradient">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="header-bubble">
                            <div class="header-bubble-inner">
                                <h4>Не ти е потребно предзнаење</h4>
                                <img src="images/bubble-gradient.svg" alt="Gradient">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="header-bubble">
                            <div class="header-bubble-inner">
                                <h4>Гарантирано
                                    вработување</h4>
                                <img src="images/bubble-gradient.svg" alt="Gradient">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="header-bubble">
                            <div class="header-bubble-inner">
                                <h4>Меѓународно искуство</h4>
                                <img src="images/bubble-gradient.svg" alt="Gradient">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="header-bubble">
                            <div class="header-bubble-inner">
                                <h4>Project-based learning</h4>
                                <img src="images/bubble-gradient.svg" alt="Gradient">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="header-bubble">
                            <div class="header-bubble-inner">
                                <h4>6-9 месечни програми</h4>
                                <img src="images/bubble-gradient.svg" alt="Gradient">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End of header section-->

        <!-- Start of right place -->
        <div class="container right-place">
            <h2 class="mb-3">Ти си на вистинското место ако…</h2>
            <div class="d-flex my-2">
                <img src="images/grey-thick.svg" alt="">
                <h4>Сакаш да ја промениш кариерата</h4>
            </div>
            <div class="d-flex my-2">
                <img src="images/grey-thick.svg" alt="">
                <h4>Невработен си и потребни ти се вештини за да започнеш нова кариера
                </h4>
            </div>
            <div class="d-flex my-2">
                <img src="images/grey-thick.svg" alt="">
                <h4>Сакаш брзо да напредуваш на работа и ти требаат дополнителни знаења
                </h4>
            </div>
            <div class="d-flex my-2">
                <img src="images/grey-thick.svg" alt="">
                <h4>Завршуваш средно и не знаеш што понатаму</h4>
            </div>
            <div class="d-flex my-2">
                <img src="images/grey-thick.svg" alt="">
                <h4>Не си задоволен од изборот на факултет и сакаш да го промениш тоа</h4>
            </div>
            <div class="d-flex my-2">
                <img src="images/grey-thick.svg" alt="">
                <h4>Ги гледаш другите околу тебе како напредуваат, а ти стагнираш</h4>
            </div>

            <h2 class="right-place-title-2">на вистинското место си <span class="also-gradient">Исто така</span> ако:
            </h2>
        </div>
        <div class="right-place-2">
            <div class="right-place-2-inner">
                <div class="container">
                    <div class="d-flex my-2">
                        <img src="images/grey-thick.svg" alt="">
                        <h4>Сакаш да имаш “План Б кариера” во животот
                        </h4>
                    </div>
                    <div class="d-flex my-2">
                        <img src="images/grey-thick.svg" alt="">
                        <h4>Не ти се потребни традиционални, туку <b>#вештини на иднината</b>

                        </h4>
                    </div>
                    <div class="d-flex my-2">
                        <img src="images/grey-thick.svg" alt="">
                        <h4>Сакаш да стекнеш вештини за брзорастечка кариера што ќе можеш да ја работиш од дома -
                            засекогаш.
                        </h4>
                    </div>
                    <div class="d-flex my-2">
                        <img src="images/grey-thick.svg" alt="">
                        <h4>Те одбиваат на интервјуа за работа
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of right place -->
        <!--Start of what to learn section-->
        <section class="container section-m">
            <h2 class="section-title my-lg-5 mt-5 mb-0 text-left">Нашите #Result-Oriented програми </h2>

            <div class="row">
                <div class="col-md-4">
                    <a class="text-decoration-none" href="/graphic-design">
                        <div class="academy-box-wrapper">
                            <div class="academy-box d-flex">
                                <img src="images/graphic_design_icon.png" alt="Graphic design icon">
                                <p>Графички дизајн</p>
                                <img class="right-arrow" src="images/right_arrow.png" alt="Right arrow" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="text-decoration-none" href="/ux-ui">
                        <div class="academy-box-wrapper">
                            <div class="academy-box d-flex">
                                <img src="images/ux_ui_icon.png" alt="Graphic design icon">
                                <p>UX/UI дизајн</p>
                                <img class="right-arrow" src="images/right_arrow.png" alt="Right arrow" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="text-decoration-none" href="/digital-marketing">
                        <div class="academy-box-wrapper">
                            <div class="academy-box d-flex">
                                <img src="images/digital_marketing_icon.png" alt="Graphic design icon">
                                <p>Дигитален маркетинг</p>
                                <img class="right-arrow" src="images/right_arrow.png" alt="Right arrow" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="text-decoration-none" href="/data-science">
                        <div class="academy-box-wrapper">
                            <div class="academy-box d-flex">
                                <img src="images/data_science_icon.png" alt="Graphic design icon">
                                <p>Data Science</p>
                                <img class="right-arrow" src="images/right_arrow.png" alt="Right arrow" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="text-decoration-none" href="/front-end">
                        <div class="academy-box-wrapper">
                            <div class="academy-box d-flex">
                                <img src="images/frontend_icon.png" alt="Graphic design icon">
                                <p>Front-End</p>
                                <img class="right-arrow" src="images/right_arrow.png" alt="Right arrow" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="text-decoration-none" href="/hr">
                        <div class="academy-box-wrapper">
                            <div class="academy-box d-flex">
                                <img src="images/hr_icon.png" alt="Graphic design icon">
                                <p>Човечки ресурси</p>
                                <img class="right-arrow" src="images/right_arrow.png" alt="Right arrow" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="text-decoration-none" href="/java">
                        <div class="academy-box-wrapper">
                            <div class="academy-box d-flex">
                                <img src="images/java_icon.png" alt="Graphic design icon">
                                <p>JAVA</p>
                                <img class="right-arrow" src="images/right_arrow.png" alt="Right arrow" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="text-decoration-none" href="/power-bi">
                        <div class="academy-box-wrapper">
                            <div class="academy-box d-flex">
                                <img src="images/power_bi_icon.png" alt="Graphic design icon">
                                <p>Power BI</p>
                                <img class="right-arrow" src="images/right_arrow.png" alt="Right arrow" />
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!--End of what to learn section-->
        <!-- Start of studnets section -->
        <div class="container">
            <h2>Потврдени од 900+ Студенти</h2>
        </div>
        <div class="students-section">
            <div class="first-row-students">
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Работев во продажба неколку години, сакав да почнам да работам за себе, но не знаев што.
                            Се запишав на Академија за графички дизајн за да научам да правам реклами, логоа и да
                            работам за
                            себе и од дома.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student1.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Сара</h6>
                                <p class="academy-name">Академија за
                                    Графички Дизајн</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Додека бев во средно, ја слушав Академијата за графички дизајн. Дополнително се запишав на
                            Miami
                            Ad School во Берлин поради тоа што дипломата од Creative Hub е признаена таму.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student2.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Тамара</h6>
                                <p class="academy-name">Академија за
                                    Графички Дизајн</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Работев како архитект, но не бев задоволна од условите. Сметав дека UX/UI е сродна
                            професија, па
                            затоа се запишав на Академијата и веднаш се вработив по завршувањето.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student3.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Александра</h6>
                                <p class="academy-name">Академија за
                                    Web Design</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Дипломирав превод и толкување, не најдов простор за работа и се запишав на Академија за да
                            се
                            преквалификувам во дигитален маркетинг. “</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student4.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Стојанчо</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Завршив Јава Академија и се вработив веднаш како Junior Java програмер во италијанската ИТ
                            компанија, Сапиенца.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student5.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Никола</h6>
                                <p class="academy-name">Академија
                                    JAVA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Работам во политика веќе неколку години и сакав да го доусовршам менаџирањето со социјалните
                            медиуми, па затоа се запишав на Академијата.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student6.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Митко, Скопје</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Се запишав на Академијата за дигитален маркетинг додека бев се’ уште во средно за да го
                            искористам времето и да стекнам вештини што побрзо. Creative Hub ми овозможи да плаќам на 50
                            рати што беше многу олеснителна околност за мене бидејќи имав само 16 години.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student7.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Ѓорѓи, Струмица</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Работев како келнер во кафуле и сакав да променам професија. Се запишав на Академијата за
                            дигитален маркетинг и веднаш се вработив во Power Ad. Една година по завршувањето на
                            Академијата
                            работам во Дубаи, во Advertum, како маркетинг менаџер.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student8.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Љупче, Струмица</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Работев како професор по англиски јазик, се одлучив за Академија за дигитален маркетинг
                            бидејќи
                            сакав да почнам да работам како copywriter. Сега пишувам книги за Амазон.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student9.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Јована, Велес</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Јас се запишав на дигитален маркетинг, а сестра ми на графички дизајн. По завршувањето на
                            Академијата се вработив како SEO специјалист во Shortlist.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student10.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Ирена, Скопје</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="second-row-students">
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Разликата помеѓу факултет и Creative Hub е практичното и применливото знаење што го добив
                            тука.
                            Завршив UX/UI Академија и изградив портфолио. Преку Creative Hub бев повикан на неколку
                            интервјуа и како резултат на сето тоа ја добив првата работа како UX/UI дизајнер.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student11.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Антониј</h6>
                                <p class="academy-name">Академија за
                                    UX/UI Дизајн</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Сакав да променам кариера од продажба во дигитален маркетинг бидејќи сакав да растам и да
                            заработувам повеќе.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student12.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Соња</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Додека бев во средно водев свој Блог, па затоа и се запишав на Акaдемија за дигитален
                            маркетинг.
                            Преку организираниот Хакатон од страна на Creative Hub се вработив во Idea Lab.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student13.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Фросина, Скопје</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Јас сум мајка на 2 деца и воедно сум дипломиран правник. Сакав работа што можам да ја
                            работам од
                            дома и затоа се запишав на Академијата. Среќна сум што си ја остварив целта и сега работам
                            freelance за романската фирма Marketing Corner Studio.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student14.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Љубица, Скопје</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Имам успешна музичка кариера и сакав да научам како самиот да се промовирам на социјалните
                            медиуми и да се стекнам со дополнителни вештини што би ми овозможиле да имам и план Б во
                            животот. “</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student15.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Филип, Скопје</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Имам 18 години и многу време поминувам на Инстаграм. Се сметам себеси за многу креативна
                            особа.
                            Избрав Академија за дигитален маркетинг бидејќи сакам да работам нешто креативно.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student16.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Мери, Кочани</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“По професија сум пијанист и живеев и работев во Дубаи. За време на пандемијата се запишав на
                            Академија за дигитален маркетинг. Преку Creative Hub се вработив во грчка маркетинг
                            агенција.“
                        </p>
                        <div class="d-flex align-items-start">
                            <img src="images/student17.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Христина, Скопје</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="third-row-students">
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Се запишав на Академија за графички дизајн поради мојата креативност и пасија за content
                            creation.
                            Сега работам како part-time дизајнер и истовремено студирам психологија. “
                        </p>
                        <div class="d-flex align-items-start">
                            <img src="images/student18.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Сандра</h6>
                                <p class="academy-name">Академија за
                                    Графички Дизајн</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Додека студирав маркетинг на факултет сметав дека имав недостиг од дигиталните вештини
                            поврзани
                            со маркетингот, па затоа се одлучив да се запишам на Академија. Веднаш по завршувањето се
                            вработив во IMA.“
                        </p>
                        <div class="d-flex align-items-start">
                            <img src="images/student19.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Ангела, Скопје</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“10 години работам како сметководител и на Академијата се запишав за да ја променам
                            професијата.
                            Особено ми се допаднаа реалните проекти и фидбекот преку кој се стигнува до вработување. “
                        </p>
                        <div class="d-flex align-items-start">
                            <img src="images/student20.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Јасмина, Куманово</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Дипломирав семејни студии, но поради панедимијата сакав да работам од дома. Затоа се запишав
                            на
                            Академијата за дигитален маркетинг и веќе 5 месеци сум дел од remote тимот на Creative Hub.
                            “
                        </p>
                        <div class="d-flex align-items-start">
                            <img src="images/student21.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Ангела, Куманово</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Сопственик сум на агенција за илустрација и сакав сама да научам да си ги менаџирам
                            социјалните
                            медиуми наместо да плаќам некој друг“
                        </p>
                        <div class="d-flex align-items-start">
                            <img src="images/student22.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Катерина, Скопје</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Студент сум на Економски факултет и Академијата ја запишав паралелно со студиите бидејќи
                            сакав
                            да стекнам практични знаења за дигитален маркетинг и да работам на реални проекти.“
                        </p>
                        <div class="d-flex align-items-start">
                            <img src="images/student23.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Валентина, Кичево</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“По 8 години работење како проектен асистент во јавна администрација, одлучив да направам
                            промена
                            на кариерата и се запишав на Академијата за дигитален маркетинг. По завршувањето на
                            Академијата
                            се вработив во маркетинг агенцијата на предавачот Борче.“
                        </p>
                        <div class="d-flex align-items-start">
                            <img src="images/student24.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6> Катерина, Скопје</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of studnets section -->
        <!--Start of logos section-->
        <section class="d-flex flex-column">
            <div class="container">
                <h2 class="section-title mb-5 text-left">Кои се вработија во <br> <span class="also-gradient">Топ 100
                        најуспешни компании</span> </h2>
            </div>
            <div class="logos-section">
                <div class="first-row-logos"></div>
                <div class="second-row-logos"></div>
                <div class="third-row-logos"></div>
            </div>
        </section>
        <!--End of logos section-->

        <!-- Table section -->
        <div class="container section-m">
            <h2>Зошто да нЀ избереш нас? </h2>
            <div class="table-titles">
                <p class="d-none d-lg-flex">Факултет</p>
                <p>Други
                    Академии</p>
                <p class="d-none d-lg-flex">Udemy</p>
                <p style="border: none">Creative Hub</p>
            </div>
            <div class="table-wrapper">
                <div class="table-left">
                    <p>4 години учење</p>
                    <p>6-9 месечни програми</p>
                    <p>Работа на реални проекти</p>
                    <p>Експерти од пракса</p>
                    <p>3 програми и цени според твоите потреби</p>
                    <p class="two-row">Забрзана (Fast-Track) Програма со 1 на 1 менторски сесии</p>
                    <p>Гарантирана работа </p>
                    <p class="two-row">Регрутер посветен на тебе кој ќе те поврзе со компании по завршувањето</p>
                    <p class="two-row">Програма изработена со ментори од САД и Европа</p>
                    <p>Канцеларии во Македонија, Косово и САД</p>
                    <p>Диплома со ЕКТС кредити</p>
                    <p>Меѓународно акредитирана диплома од САД</p>
                    <p style="border: none">Networking</p>
                </div>
                <div class="table-right">
                    <div class="table-column d-none d-lg-block">
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box" style="border: none">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                    </div>
                    <div class="table-column">
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box" style="border: none;">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                    </div>
                    <div class="table-column d-none d-lg-block">
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box" style="border: none">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                    </div>
                    <div class="table-column" style="border: none">
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box" style="border: none">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of table section -->
        <!-- us logos -->
        <div class="container mt-5 d-none d-lg-block">
            <h3 class="forbes-title">Прочитај за нас во:</h3>
            <div class="us-logos">
            <div>
                <a href="https://www.forbes.com/profile/creative-hub/?sh=13de4b352319"
                    target="blank"><img src="images/us-logo-1.png" alt="US Logo"></a>
                <a href="https://finance.yahoo.com/news/european-awarded-founder-entrepreneur-arijana-183700786.html"
                    target="blank"><img src="images/us-logo-2.png" alt="US Logo"></a>
                <a href="https://fox8live.com/prnewswire/2022/03/30/european-awarded-founder-entrepreneur-arijana-koskarova-expands-us-tech-market-with-new-creative-hub-academy/"
                    target="blank"><img src="images/us-logo-3.png" alt="US Logo"></a>
                <a href="https://www.prnewswire.com/news/creative-hub-academy/" target="blank"><img
                        src="images/us-logo-4.png" alt="US Logo"></a>
                <a href="https://www.wytv.com/news/business/press-releases/cision/20220330FL08796/european-awarded-founder-and-entrepreneur-arijana-koskarova-expands-to-the-u-s-tech-market-with-new-creative-hub-academy"
                    target="blank"><img src="images/us-logo-5.png" alt="US Logo"></a>
                <a href="https://faktor.mk/britanskata-sertifikacija-cpd-na-programite-na-creative-hub-"
                    target="blank"><img src="images/us-logo-6.png" alt="US Logo"></a>
            </div>
            <div>
                <a href="https://wwnytv.com/prnewswire/2022/03/30/european-awarded-founder-entrepreneur-arijana-koskarova-expands-us-tech-market-with-new-creative-hub-academy/"
                    target="blank"><img src="images/us-logo-7.png" alt="US Logo"></a>
                <a href="https://www.informnny.com/news/business/press-releases/cision/20220330FL08796/european-awarded-founder-and-entrepreneur-arijana-koskarova-expands-to-the-u-s-tech-market-with-new-creative-hub-academy"
                    target="blank"><img src="images/us-logo-8.png" alt="US Logo"></a>
                <a href="https://www.wwnytv.com/prnewswire/2022/03/30/european-awarded-founder-entrepreneur-arijana-koskarova-expands-us-tech-market-with-new-creative-hub-academy/"
                    target="blank"><img src="images/us-logo-9.png" alt="US Logo"></a>
                <a href="https://mysuncoast.com/prnewswire/2022/03/30/european-awarded-founder-entrepreneur-arijana-koskarova-expands-us-tech-market-with-new-creative-hub-academy/"
                    target="blank"><img src="images/us-logo-10.png" alt="US Logo"></a>
                <a href="https://therecursive.com/women-in-tech-arijana-koskarova-founder-of-creative-hub-there-is-no-such-thing-as-failure-or-success-we-just-live-another-day-to-fight-for-our-dreams/"
                    target="blank"><img src="images/us-logo-11.png" alt="US Logo"></a>
                <a href="https://www.themediabulletin.com/news/forbes-business-council-accepts-arijana-koskarova-as-a-member/"
                    target="blank"><img src="images/us-logo-12.png" alt="US Logo"></a>
            </div>
        </div>
        </div>




        <!-- us logos -->
        <!-- Calendly -->
        <div class="container mt-5 m-lg-0">
            <h3>Имаш прашања?
                Закажи разговор со #career-advisor денес!</h3>
        </div>
        <div class="calendly-wrapper">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="d-flex">
                    <img src="images/stojancho.png" alt="Creative Hub Stojancho">
                    <p>Пријави се и закажи онлајн состанок со Стојанчо.
                    </p>
                </div>
                <a href="https://calendly.com/stojanco_ch/30min?month=2022-05" target="blank"> <button
                        class="calendly-btn">Тука</button></a>
            </div>
        </div>

        <!-- Calendly -->
        <footer class="footer-wrapper">
            <div class="footer-inner-wrapper">
                <div class="container d-flex flex-wrap justify-content-between">
                    <div class="footer-logo-section pe-2 pe-lg-0 d-flex flex-column justify-content-between">
                        <div>
                            <img src="images-navbar/footer_logo.png" />
                            <hr class="footer-hr" />
                            <div class="d-flex justify-content-between">
                                <a href="https://www.facebook.com/creativehubmacedonia" target="_blank">
                                    <img src="images-footer/facebook_logo.png" alt="Facebook" />
                                </a>
                                <a href="https://www.linkedin.com/company/creativehubmacedonia/" target="_blank"><img
                                        src="images-footer/linkedin_logo.png" alt="LinkedIn" /></a>
                                <a href="https://www.instagram.com/creativehubmacedonia/?hl=en" target="_blank"><img
                                        src="images-footer/instagram_logo.png" alt="Instagram" /></a>
                                <a href="https://www.pinterest.com/creativehubacademy" target="_blank"><img
                                        src="images-footer/pinterest_logo.svg" alt="Instagram" /></a>
                            </div>
                            <p class="mb-0 mt-3">Стекни знаење, поврзи се и најди ја твојата идеална кариерна насока.
                            </p>
                        </div>
                        <div class="mb-4 mb-lg-2">
                            Македонија
                        </div>
                    </div>

                    <div class="footer-menu mb-3 mb-lg-0">
                        <div class="footer-menu-title mb-3 pl-lg-2">Академии</div>
                        <a href="<?php echo SITE_URL; ?>digital-marketing">
                            <div class="footer-menu-item py-2 px-lg-2" id="DMFooterItem">Дигитален маркетинг</div>
                        </a>
                        <a href="<?php echo SITE_URL; ?>graphicdesign">
                            <div class="footer-menu-item py-2 px-lg-2" id="GDFooterItem">Графички дизајн</div>
                        </a>
                        <a href="<?php echo SITE_URL; ?>hr">
                            <div class="footer-menu-item py-2 px-lg-2" id="HRFooterItem">Човечки ресурси</div>
                        </a>
                        <a href="<?php echo SITE_URL; ?>ux-ui">
                            <div class="footer-menu-item py-2 px-lg-2" id="UXFooterItem">UX/UI дизајн</div>
                        </a>
                        <a href="<?php echo SITE_URL; ?>front-end">
                            <div class="footer-menu-item py-2 px-lg-2" id="FEFooterItem">Front-End</div>
                        </a>
                        <a href="<?php echo SITE_URL; ?>data-science">
                            <div class="footer-menu-item py-2 px-lg-2" id="DSFooterItem">Data Science</div>
                        </a>
                        <a href="<?php echo SITE_URL; ?>java">
                            <div class="footer-menu-item py-2 px-lg-2" id="JavaFooterItem">Java</div>
                        </a>
                        <a href="<?php echo SITE_URL; ?>power-bi">
                            <div class="footer-menu-item py-2 px-lg-2" id="PowerBIFooterItem">Power BI</div>
                        </a>
                    </div>

                    <div class="footer-menu mb-3 mb-lg-0">
                        <div class="footer-menu-title mb-3 pl-lg-2">Кариера</div>
                        <a href="<?php echo SITE_URL; ?>HiringPlatform">
                            <div class="footer-menu-item py-2 px-lg-2">Hiring platform</div>
                        </a>
                        <a href="<?php echo SITE_URL; ?>blog">
                            <div class="footer-menu-item py-2 px-lg-2">Нашите студенти</div>
                        </a>
                        <a href="<?php echo SITE_URL; ?>hakatoni">
                            <div class="footer-menu-item py-2 px-lg-2">Хакатони</div>
                        </a>
                        <a href="<?php echo SITE_URL; ?>ux-ui-quests">
                            <div class="footer-menu-item py-2 px-lg-2">UX/UI Quests</div>
                        </a>
                    </div>

                    <div>
                        <div class="footer-menu-title mb-3 pl-lg-2">Koнтакт</div>
                        <a href="mailto: contact@creativehub.mk">
                            <div class="footer-menu-item py-2 px-lg-2">contact@creativehub.mk</div>
                        </a>
                        <a href="tel:0038970927756">
                            <div class="footer-menu-item py-2 px-lg-2">+389 71 214 849</div>
                        </a>
                    </div>
                </div>

                <div class="container credits-footer">
                    <hr class="footer-hr" />

                    <div class="d-flex flex-wrap justify-content-between pb-3">
                        <div>© Copyright 2021 Creative Hub</div>
                        <div class="d-flex flex-wrap">
                            <div class="mr-4">Политика за приватност</div>
                            <div>Општи правила и услови</div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Add the code below inside the <body> tags of your HTML page -->
<!-- Add the code below inside the <body> tags of your HTML page -->
<script>
window.VIDEOASK_EMBED_CONFIG = {
  "kind": "widget",
  "url": "https://www.videoask.com/fano11m1p",
  "options": {
    "widgetType": "VideoThumbnailWindowTall",
    "text": "",
    "backgroundColor": "#7D00FE",
    "position": "bottom-right",
    "dismissible": false
  }
}
</script>
<script src="https://www.videoask.com/embed/embed.js"></script>
    <script type="text/javascript">
    (function(e, t, o, n, p, r, i) {
        e.visitorGlobalObjectAlias = n;
        e[e.visitorGlobalObjectAlias] = e[e.visitorGlobalObjectAlias] || function() {
            (e[e.visitorGlobalObjectAlias].q = e[e.visitorGlobalObjectAlias].q || []).push(arguments)
        };
        e[e.visitorGlobalObjectAlias].l = (new Date).getTime();
        r = t.createElement("script");
        r.src = o;
        r.async = true;
        i = t.getElementsByTagName("script")[0];
        i.parentNode.insertBefore(r, i)
    })(window, document, "https://diffuser-cdn.app-us1.com/diffuser/diffuser.js", "vgo");
    vgo('setAccount', '651120725');
    vgo('setTrackByDefault', true);

    vgo('process');
    </script>


    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>
    <script src="index.js"></script>

</body>


</html>