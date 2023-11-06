<?php
if (!defined("SITE_URL"))
    define("SITE_URL", "http://creativehub.mk/");
?>

<script>
    document.addEventListener("DOMContentLoaded", function () {
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
        }
        else if (url.search('power-bi') > -1) {
            document.getElementById('academiesDropdown').classList.add('active-blue-color')
            document.getElementById('PowerBIMenuItem').classList.add('active-menu-item')
            document.getElementById('PowerBIFooterItem').classList.add('active-footer-item')
        }
    });
</script>

<header class="header-navbar d-none d-lg-block">
    <div class="container pt-3">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center telephone-box">
                <img src="../../images-navbar/calling-icon.png">
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
                <a class="nav-brand" href="https://creativehub.mk"><img src="../../images-navbar/logo.png"/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <img src="../../images-navbar/hamburger_menu.png" class="navbar-toggler-icon"/>
                </button>

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
                                <a class="dropdown-item" href="<?php echo SITE_URL; ?>graphic-design" id="GDMenuItem">
                                    Графички дизајн
                                </a>
                                <a class="dropdown-item" href="<?php echo SITE_URL; ?>hr" id="HRMenuItem">
                                    Човечки ресурси
                                </a>
                                <a class="dropdown-item" href="<?php echo SITE_URL; ?>ux-ui" id="UXMenuItem">
                                    UX/UI дизајн
                                </a>
                                <a class="dropdown-item" href="<?php echo SITE_URL; ?>front-end" id="FEMenuItem">
                                    Front-End
                                </a>
                                <a class="dropdown-item" href="<?php echo SITE_URL; ?>data-science" id="DSMenuItem">
                                    Data Science
                                </a>
                                <a class="dropdown-item" href="<?php echo SITE_URL; ?>java" id="JavaMenuItem">
                                    Java
                                </a>
                                <a class="dropdown-item" href="<?php echo SITE_URL; ?>power-bi" id="PowerBIMenuItem">
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
    <div id="mainMobileMenu" class="overlay">
        <div class="menu-overlay-header">
            <div class="container d-flex align-items-center justify-content-between">
                <img src="../../images-navbar/logo.png"/>
                <img onclick="closeNav()" class="close-menu-btn" src="../../images-navbar/menu_close_icon.png"/>
            </div>
        </div>
        <div class="overlay-content container">
            <div class="mobile-menu-item d-flex align-items-center justify-content-between"
                 onclick="openMenu('academiesMenu')">
                Академии <img src="../images-navbar/menu_right_arrow.png">
            </div>
            <div class="mobile-menu-item d-flex align-items-center justify-content-between"
                 onclick="openMenu('careersMenu')">
                Кариера <img src="../images-navbar/menu_right_arrow.png">
            </div>
            <div class="mobile-menu-item">Платформа за вработување</div>
            <hr class="navbar-hr">
            <div class="d-flex align-items-center telephone-box mb-4">
                <img src="../../images-navbar/calling-icon.png">
                <a href="tel:+38971214849">
                    <p class="ml-2">+ 389 71 214 849</p>
                </a>
            </div>
            <div class="mobile-menu-item d-flex align-items-center justify-content-between"
                 onclick="openMenu('campusMenu')">
                <div>Кампус: <span class="campus-name">Македонија</span></div>
                <img src="../../images-navbar/menu_right_arrow.png">
            </div>
        </div>
    </div>

    <div id="academiesMenu">
        <div class="menu-overlay-header">
            <div class="container d-flex align-items-center justify-content-between">
                <img onclick="closeMenu('academiesMenu')" src="../../images-navbar/menu_left_arrow.png"/>
                <div class="active-blue-color">Академии</div>
                <img onclick="closeNav()" class="close-menu-btn" src="../../images-navbar/menu_close_icon.png"/>
            </div>
        </div>

        <div class="container d-flex flex-column pt-4">
            <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>digital-marketing">
                <div class="d-flex justify-content-between align-items-center">
                    Дигитален маркетинг
                    <img src="../../images-navbar/menu_right_arrow.png">
                </div>
            </a>
            <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>graphic-design">
                <div class="d-flex justify-content-between align-items-center">
                    Графички дизајн
                    <img src="../../images-navbar/menu_right_arrow.png">
                </div>
            </a>
            <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>hr">
                <div class="d-flex justify-content-between align-items-center">
                    Човечки ресурси
                    <img src="../../images-navbar/menu_right_arrow.png">
                </div>
            </a>
            <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>ux-ui">
                <div class="d-flex justify-content-between align-items-center">
                    UX/UI дизајн
                    <img src="../../images-navbar/menu_right_arrow.png">
                </div>
            </a>
            <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>front-end">
                <div class="d-flex justify-content-between align-items-center">
                    Front-End
                    <img src="../../images-navbar/menu_right_arrow.png">
                </div>
            </a>
            <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>data-science">
                <div class="d-flex justify-content-between align-items-center">
                    Data Science
                    <img src="../../images-navbar/menu_right_arrow.png">
                </div>
            </a>
            <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>java">
                <div class="d-flex justify-content-between align-items-center">
                    Java
                    <img src="../../images-navbar/menu_right_arrow.png">
                </div>
            </a>
        </div>
    </div>

    <div id="careersMenu">
        <div class="menu-overlay-header">
            <div class="container d-flex align-items-center justify-content-between">
                <img onclick="closeMenu('careersMenu')" src="../../images-navbar/menu_left_arrow.png"/>
                <div class="active-blue-color">Кариера</div>
                <img onclick="closeNav()" class="close-menu-btn" src="../../images-navbar/menu_close_icon.png"/>
            </div>
        </div>

        <div class="container d-flex flex-column pt-4">
            <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>blog">
                <div class="d-flex justify-content-between align-items-center">
                    Нашите студенти
                    <img src="../../images-navbar/menu_right_arrow.png">
                </div>
            </a>
            <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>hakatoni">
                <div class="d-flex justify-content-between align-items-center">
                    Хакатони
                    <img src="../../images-navbar/menu_right_arrow.png">
                </div>
            </a>
            <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>ux-ui-quests">
                <div class="d-flex justify-content-between align-items-center">
                    UX/UI Quests
                    <img src="../../images-navbar/menu_right_arrow.png">
                </div>
            </a>
        </div>
    </div>

    <div id="campusMenu">
        <div class="menu-overlay-header">
            <div class="container d-flex align-items-center justify-content-between">
                <img onclick="closeMenu('campusMenu')" src="../../images-navbar/menu_left_arrow.png"/>
                <div class="active-blue-color">Кампус</div>
                <img onclick="closeNav()" class="close-menu-btn" src="../../images-navbar/menu_close_icon.png"/>
            </div>
        </div>

        <div class="container d-flex flex-column pt-4">
            <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>">
                <div class="d-flex justify-content-between align-items-center">
                    Македонија
                    <img src="../../images-navbar/menu_right_arrow.png">
                </div>
            </a>
            <a class="mobile-submenu-item" href="https://creativehubkos.com/">
                <div class="d-flex justify-content-between align-items-center">
                    Косово
                    <img src="../../images-navbar/menu_right_arrow.png">
                </div>
            </a>
            <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>">
                <div class="d-flex justify-content-between align-items-center">
                    Мајами
                    <img src="../../images-navbar/menu_right_arrow.png">
                </div>
            </a>
            <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>">
                <div class="d-flex justify-content-between align-items-center">
                    Берлин
                    <img src="../../images-navbar/menu_right_arrow.png">
                </div>
            </a>
        </div>
    </div>

    <div class="container d-flex justify-content-between mobile-navbar align-items-center">
        <a href="<?php echo SITE_URL; ?>">
            <img src="../../images-navbar/logo_mobile.png">
        </a>
        <img class="hamburger-icon" src="../../images-navbar/hamburger_menu.png" onclick="openNav()">
    </div>
</header>