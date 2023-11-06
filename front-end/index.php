<?php
if (!defined("SITE_URL"))
    define("SITE_URL", "http://creativehub.mk/");

define("ACTIVECAMPAIGN_URL", "https://akoskarova.activehosted.com/");
define("ACTIVECAMPAIGN_API_KEY", "3f5664fd94a6f867b1e6f46740d22cdb4ea80b73");
require_once("../activecampaign-api-php/includes/ActiveCampaign.class.php");
$ac = new ActiveCampaign(ACTIVECAMPAIGN_URL, ACTIVECAMPAIGN_API_KEY);
$ac->track_actid = " 651120725";
$ac->track_key = "3f5664fd94a6f867b1e6f46740d22cdb4ea80b73";
$ac->track_email = "akoskarova@hotmail.com";
$post_data = array("event" => "submit-frontend", "eventdata" => "Submit",);
$response = $ac->api("tracking/log", $post_data);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-mobile.css">
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>


    <!--GOOGLE FONTS--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,800;0,900;1,600&display=swap"
        rel="stylesheet">
    <!--END GOOGLE FONTS--->

    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-4.6.0-dist/css/bootstrap.min.css">


    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">


    <title>Front-end</title>
    <script>
    $(document).ready(function() {
        $("a").on('click', function(event) {
            if (this.hash !== "") {
                background: '#FFA928';
                event.preventDefault();
                const hash = this.hash;

                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function() {
                    window.location.hash = hash;
                });
            }
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
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NB5S9TR');</script>
<!-- End Google Tag Manager -->
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NB5S9TR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


    <?php

require_once('../navbar.php')

?>

    <!--FIRST SECTIOn-->
    <div class="squares-bg">
        <!--First section-->
        <section>
            <div class="header-bg">
                <div class="container first-section d-flex flex-column flex-md-row">
                    <div class="d-flex flex-column justify-content-between">
                        <div>
                            <h1 class="page-title">Front-END Академија</h1>
                            <p class="page-subtitle">Најтемелна програма по фронт-енд програмирање во Македонија.</p>
                            <p class="page-subtitle m-0">Започни да кодираш со воведен курс уште денес!</p>

                            <a >
                                <button class="header-btn" name="submit-frontend" value="Submit" type="submit" style="visibility:hidden;">
                                    Повеќе за Академијата
                                </button>
                            </a>
                        </div>
                        <div class="career-possibilities d-none d-md-block">
                            <p class="mb-2">Career possibilities:</p>
                            <p class="font-weight-bold">Junior Front-end Developer</p>
                        </div>
                    </div>

                    <div class="form-header">
                        <h2 class="form-title">Започни со <br> воведен курс</h2>
                        <h5 class="form-subtitle">и провери дали е оваа професија за тебе</h5>
                        <div class="text-center mt-3"><img src="images/course_img.png" alt="Course image"
                                class="responsive" /></div>
                        <ul class="free-course-list ps-1 mb-0 f-18">
                            <li><img src="images/play_icon.png">6 часа снимени видео-материјали</li>
                            <li><img src="images/wallet_icon.png">Сертификат за на LinkedIn</li>
                            <li><img src="images/tick_square_icon.png">Задачи и истражувања</li>
                            <li><img src="images/yellow-thick.svg" alt="Yellow check" class="yellow-check">Започнува од
                                февруари
                            </li>
                        </ul>
                        <div class="text-center mt-3"><a href="free-course"><button class="course-btn">Повеќе за
                                    курсот</button></a></div>
                        <p class="small">Првите 2 часа од курсот се бесплатни.</p>
                    </div>

                    <div class="career-possibilities d-md-none">
                        <p class="mb-2">Career possibilities:</p>
                        <p class="font-weight-bold">Junior Front-end Developer</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="get-hired">
            Вработи се за <span>1-6</span> месеци по <span>завршувањето</span>
        </div>
        <!--End of first section-->


        <div class="container">
        <div class="technologies d-flex flex-column flex-md-row">
                        <div>
                            <h5>Најбараните алатки во индустријата</h5>
                            <p>
                                Аплицирај за целосната Front-end Академија, или започни со воведен 15 часовен курс и
                                дознај дали кодирањето е за тебе. Програмата на Академијата ја составивме според она што
                                се најбараните вештини за еден front-end developer на пазарот: HTML, CSS, Javascript,
                                React и Git.
                            </p>
                        </div>

                        <div class="technologies-logos-grid">
                            <img src="images/html_icon.png" alt="HTML icon">
                            <img src="images/js_icon.png" alt="JS icon">
                            <img src="images/css_icon.png" alt="CSS icon">
                            <img src="images/react_icon.png" alt="React icon">
                        </div>
                    </div>
        </div>


        <!--Start of mentors section-->
        <section class="container-fluid p-0 d-flex flex-column align-items-center" id="academy">
            <h2 class="grey-title mentors-title">
                Ментори
            </h2>
            <div class="d-flex flex-column flex-lg-row w-100 position-relative justify-content-center mentors-wrapper">
                <img class="d-lg-none mentors-bg-mobile" src="images/mentors_bg_mobile.png">
                <div>
                    <img class="d-none d-lg-block mentors-bg" src="images/mentors_bg.png">
                    <img class="d-none d-lg-block mentors-bg-left-pattern" src="images/mentors_bg_pattern.png">
                    <img class="d-none d-lg-block mentors-bg-right-pattern" src="images/mentors_bg_pattern.png">
                </div>
                <div class="mentor-box mr-lg-3 mb-5 mb-lg-0">
                    <img class="img-fluid" src="images/mentor_sashe.png" alt="Mentor Sashe" data-toggle="modal"
                        data-target="#sasheMentorModal" />
                    <p>
                        Founder & CTO на Coding Factory, 5+ години во работа со front-end технологии. <br>
                        4 години предавач на академии.
                    </p>
                </div>

                <div class="mentor-box">
                    <img class="img-fluid" src="images/mentor_nikola.png" alt="Mentor Nikola" data-toggle="modal"
                        data-target="#nikolaMentorModal" />
                    <p>
                        Front-end developer со 6+ години искуство во развивање на веб апликации и работа со front-end
                        технологии како TypeScript, AngularJS, Angular 2+, React, HTML и CSS.
                    </p>
                </div>
            </div>

            <!-- Mentors modals -->
            <div class="modal fade" id="nikolaMentorModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <iframe width="auto" height="315" src="https://www.youtube.com/embed/OZx3yvb2zn0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="sasheMentorModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <iframe width="auto" height="315" src="https://www.youtube.com/embed/W7dql2MYgAI"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <!--End of modals-->
            <div class="container d-none d-lg-flex align-items-center frontend-slack-wrapper">
                <div class="frontend-slack">
                    <h5>Front-end заедница</h5>
                    <p>
                        Во било кое време можеш да поставиш прашање на нашата “Slack” платформа, да ти одговорат
                        менторите
                        или колегите од Скопје или Приштина.
                    </p>
                </div>
                <div>
                    <img src="images/slack.png" alt="Slack logo" />
                </div>
            </div>
        </section>
        <!--End of mentors section-->

        <!--Start of program section-->
        <section class="container program-section">
            <h2 class="grey-title">
                Програма
            </h2>

            <div>
                <div class="d-flex flex-column">
                    <button class="accordion d-flex">
                        <div class="program-item-number">1.</div>
                        <div class="program-item-name w-100">HTML</div>
                    </button>
                    <div class="program-active-description">
                        <ul class="blue-checkmark-list program-active-list">
                            <li>Како работи интернетот ( комуникација помеѓу веб страните и серверите)</li>
                            <li>Запознавање со код едитор</li>
                            <li>Структура на HTML елементи</li>
                            <li>Објаснување на атрибути и тагови и нивна правилна употреба</li>
                            <li>Мини веб страна само со HTML</li>
                        </ul>
                    </div>
                </div>
                <hr class="program-hr">
                <div class="d-flex flex-column">
                    <button class="accordion d-flex">
                        <div class="program-item-number">2.</div>
                        <div class="program-item-name w-100">css</div>
                    </button>
                    <div class="program-active-description">
                        <ul class="blue-checkmark-list program-active-list">
                            <li>Основи на синтакса</li>
                            <li>CSS селектори</li>
                            <li>CSS бои, позадински бои, фонтови, слики</li>
                            <li>Позиционирање на елементи</li>
                            <li>Pseudo класи и pseudo елементи</li>
                            <li>Flexbox</li>
                            <li>Трансформации и анимации</li>
                            <li>Респонзивен дизајн - media queries</li>
                            <li>Користење на надворешни библиотеки и фонтови (CDN)</li>
                            <li>Примери од пракса</li>
                            <li>Респонзивни веб страни со HTML & CSS</li>
                        </ul>
                    </div>
                </div>
                <hr class="program-hr">
                <div class="d-flex flex-column">
                    <button class="accordion d-flex">
                        <div class="program-item-number">3.</div>
                        <div class="program-item-name w-100">Bootstrap</div>
                    </button>
                    <div class="program-active-description">
                        <ul class="blue-checkmark-list program-active-list">
                            <li>Основи на синтакса</li>
                            <li>Grid системи и grid класи</li>
                            <li>Типографија, слики, бои и позадински бои</li>
                            <li>Класи на елементите и компонентите</li>
                            <li>Компоненти и нивна модификација</li>
                            <li>Комплетни респонзивни веб страни со Bootstrap 4</li>
                        </ul>
                    </div>
                </div>
                <hr class="program-hr">
                <div class="d-flex">
                    <div class="program-item-number">4.</div>
                    <div class="program-item-name">Git</div>
                </div>
                <hr class="program-hr">
                <div class="d-flex flex-column">
                    <button class="accordion d-flex">
                        <div class="program-item-number">5.</div>
                        <div class="program-item-name w-100">Javascript</div>
                    </button>
                    <div class="program-active-description">
                        <ul class="blue-checkmark-list program-active-list">
                            <li>Javascript introduction (history, console, comments, linking files (defer vs async)</li>
                            <li>Data types (basic data types, constants, arithmetic operators) - 1 ден</li>
                            <li>Objects and Arrays</li>
                            <li>Properties, Methods</li>
                            <li>Loops</li>
                            <li>Functions (scope, arrow functions)</li>
                            <li>DOM</li>
                            <li>Events & callbacks</li>
                            <li>Promises & Async / Await</li>
                            <li>AJAX</li>
                            <li>Classes and object oriented programming</li>
                            <li>Closures & Recursions</li>
                            <li>Modern javascript</li>
                        </ul>
                    </div>
                </div>
                <hr class="program-hr">
                <div class="d-flex">
                    <div class="program-item-number">6.</div>
                    <div class="program-item-name">JQuery</div>
                </div>
                <hr class="program-hr">
                <div class="d-flex flex-column">
                    <button class="accordion d-flex">
                        <div class="program-item-number">7.</div>
                        <div class="program-item-name w-100">React Beginner</div>
                    </button>
                    <div class="program-active-description">
                        <ul class="blue-checkmark-list program-active-list">
                            <li>Intro & Basics to React</li>
                            <li>Git</li>
                            <li>Structure</li>
                            <li>The useState Hook</li>
                            <li>The useEffect Hook</li>
                            <li>The useReducer & useContext Hook</li>
                            <li>Creating Custom Hooks</li>
                            <li>Recursive for Repetitive Components</li>
                        </ul>
                    </div>
                </div>
                <hr class="program-hr">
                <div class="d-flex flex-column">
                    <button class="accordion d-flex">
                        <div class="program-item-number">8.</div>
                        <div class="program-item-name w-100">React Advanced</div>
                    </button>
                    <div class="program-active-description">
                        <ul class="blue-checkmark-list program-active-list">
                            <li>Design Better Components</li>
                            <li>Managing React State in a Component Hierarchy</li>
                            <li>Asynchronously Updating React State using Custom React Hooks</li>
                            <li>Using React Context and the useContext React Hook for Component Data Sharing</li>
                            <li>Use React Context to Share a Speaker Data and CRUD Functons</li>
                            <li>Master Performance Monitoring, Error Reporting and Debugging of Components</li>
                            <li>Use Higher Order Components ( HOC) and Render Props</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--End of program section-->

        <!--Start of what do you need for success section-->
        <section class="container-fluid success-section">
            <div class="container">
                <h2 class="success-section-title">Што ти треба за <span>успех?</span></h2>
                <ul class="yellow-checkmark-list">
                    <li>Основа на реално веб програмирање</li>
                    <li>Да можеш да се снајдеш сам со нови технологии</li>
                    <li>Да научиш да генерираш решенија за нови проблеми</li>
                    <li>Да научиш како да комуницираш со тимот</li>
                    <li>Да стекнеш вистинско работно искуство на реални проекти</li>
                    <li>Да научиш како да дојдеш најбрзо до работа и како да се истакнеш</li>
                    <li>Да научиш да пишуваш код што и другите после тебе ќе можат лесно да го разберат и одржат</li>
                    <li>Систем на оценување, вработување или пракса за најдобрите студенти</li>
                    <li>Европски сертификат со ЕКТС кредити ***** само во Creative Hub</li>
                    <li>Ќе научиш да бидеш професионален додека работиш на проектот</li>
                    <li>Brainstorming сесии</li>
                    <li>„Tech дружби“ ексклузивно за студенти и Алумни</li>
                    <li>Пристап до нашата Hiring & Outsourcing platform</li>
                </ul>
            </div>
        </section>
        <!--End of what do you need for success section-->

        <!--Start of what projects you will work on section-->
        <section class="container-fluid p-0 d-flex flex-column align-items-center">
            <!-- <a href="free-course">
                <button class="free-first-module-btn">Бесплатно слушај го првиот модул</button>
            </a> -->
            <h2 class="grey-title projects-title mt-5">Какви проекти ќе изработиш?</h2>
            <div class="d-flex justify-content-center w-100 position-relative">
                <img class="projects-bg-pattern d-none d-lg-block" src="images/projects_bg.png" alt="Pattern image" />
                <img class="projects-bg-pattern-mobile d-lg-none" src="images/projects_bg_mobile.png"
                    alt="Pattern image" />
                <div class="d-flex flex-column flex-lg-row">
                    <div class="project-box mb-4 mb-lg-none">
                        <img src="images/personal_website_img.png" alt="Personal website image" />
                        <h5>Personal website / Form / Developing Cache /Documentation</h5>
                        <p>Со инструкциите што ги следиш од предавачот ќе изработиш комплетно респонзивна статичка веб
                            страна.</p>
                    </div>
                    <div class="project-box mb-4 mb-lg-none">
                        <img src="images/e-commerce_img.png" alt="Personal website image" />
                        <h5>E-commerce сајт / Блог / Calendar To do site</h5>
                        <p>
                            Избери некој од горенаведените и сам изработи го вториот проект на Академијата - комплетно
                            респонзивна динамичка веб страна.
                        </p>
                    </div>
                    <div class="project-box mb-4 mb-lg-none">
                        <img src="images/netflix_img.png" alt="Personal website image" />
                        <h5>Netflix / Shopping Cart / Spreadsheet / Email Program</h5>
                        <p>
                            Избери веб апликација по избор, стави го твоето знаење во функција и со помош на менторите
                            изработи
                            го твојот трет проект.
                        </p>
                    </div>
                </div>
            </div>

            <div class="here-for-you-wrapper w-100">
                <div class="container position-relative">
                    <div class="here-for-you d-flex justify-content-end">
                        <div>
                            <img src="images/here_for_you_img.png" />
                        </div>
                        <div class="d-flex flex-column text-end">
                            <h5>
                                Tука сме <br>за тебе!
                            </h5>
                            <p>
                                Доколку сѐ уште не си спремен, ќе доаѓаш во CreativeHub да работиш заедно со нашиот IT
                                тим
                                од Full-Stack девелопери и UX/UI дизајнери!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <a href="free-course">
                <button class="free-first-module-btn m-0">Бесплатно слушај го првиот модул</button>
            </a> -->

            <div class="container text-center react-conference">
                <img class="react-img img-fluid" src="images/react_img.png" alt="React logo" />
                <img class="img-fluid" src="images/dev_conferences.png" alt="Dev conferences text" />
            </div>
        </section>
        <!--End of what projects you will work on section-->

        <!--Start of hiring platform section-->
        <section class="container-fluid hiring-platform-wrapper position-relative">
            <div class="container d-flex">
                <div class="hiring-platform">
                    <h5>Платформа за вработување</h5>
                    <p>
                        На нашата веб страна можете да ја погледнете платформата за вработување. По завршувањето на
                        Академијата добивате “долгогодишен” пристап независно дали барате работа или пак сте отворени за
                        работа на проект.
                        <br><br>
                        Оваа платформа ја развивме за Вас, за полесно и директно да бидете контактирани од компаниите.
                    </p>

                    <a href="../HiringPlatform">
                        <button class="hiring-platform-btn">Провери</button>
                    </a>
                </div>
                <div>
                    <img class="d-none d-lg-block" src="images/hiring_platform_img.png" alt="Man" />
                </div>
            </div>
        </section>
        <!--End of hiring platform section-->

        <!--Start of logos section-->
        <section style="background:white; padding: 3% 0%;">
            <marquee behavior="" direction="right">
                <img src="images/logos/logos_first_row.png" class="responsive" alt="CreativeHub Sponsors">
                <img src="images/logos/logos_first_row.png" class="responsive" alt="CreativeHub Sponsors">
                <img src="images/logos/logos_first_row.png" class="responsive" alt="CreativeHub Sponsors">
            </marquee>
            <marquee behavior="" direction="left">
                <img src="images/logos/logos_second_row.png" class="responsive" alt="CreativeHub Sponsors">
                <img src="images/logos/logos_second_row.png" class="responsive" alt="CreativeHub Sponsors">
                <img src="images/logos/logos_second_row.png" class="responsive" alt="CreativeHub Sponsors">
            </marquee>

            <marquee behavior="" direction="right">
                <img src="images/logos/logos_third_row.png" class="responsive" alt="CreativeHub Sponsors">
                <img src="images/logos/logos_third_row.png" class="responsive" alt="CreativeHub Sponsors">
                <img src="images/logos/logos_third_row.png" class="responsive" alt="CreativeHub Sponsors">
            </marquee>
        </section>
        <!--End of logos section-->

        <!--Start of employment section-->
        <section class="container-fluid text-center employment-section">
            <div>
                <h5>Саем за вработување за нашите студенти</h5>
                <p>
                    2 пати годишно организираме Саем за вработување за нашите студенти. Во хотел Парк го организиравме
                    првиот
                    Саем за вработување за нашите студенти. Над 40 реномирани компании беа гости на самитот како А1,
                    Пивара,
                    Некстсенс, Публицис, Силиндо, Декра, Пиксел. Фронтвајс Груп, Slice, EOS Matrix, NLB Bank,
                    Sourcico....
                </p>
                <img class="img-fluid" src="images/employment_img.png" alt="Group of people" />
            </div>
            <div class="d-none d-lg-flex position-relative mt-5">
                <img class="sonja-img" src="images/sonja_img.png" alt="Girl" />
                <img class="meet-sonja-left-pattern" src="images/meet_sonja_pattern.png" alt="Circles pattern" />
                <div class="meet-sonja">
                    <h5>Запознај ја СОња</h5>
                    <p>Твојот регрутер за работа во странство.</p>
                </div>
                <img class="meet-sonja-right-pattern" src="images/meet_sonja_pattern.png" alt="Circles pattern" />
            </div>
        </section>
        <!--End of employment section-->

        <!--Start of choose academy section-->
        <section class="choose-academy-section d-flex flex-column align-items-center">
            <h5 class="choose-academy-title">Избери ја Академијата што<br> најмногу ти одговара</h5>
            <div class="d-flex flex-column flex-lg-row">
                <div class="academy-card">
                    <div class="academy-card-inner">
                        <div class="d-flex flex-column">
                            <div class="d-flex">
                                <div class="mr-3">
                                    <img src="images/academy_card_1.png" alt="Colored object">
                                </div>
                                <div class="d-flex flex-column justify-content-between">
                                    <h5 class="academy-name">Само академија</h5>
                                    <div>
                                        <div class="academy-price">2100 <span>EUR</span></div>
                                        <div class="academy-hours">185 часа</div>
                                    </div>
                                </div>
                            </div>
                            <hr class="academy-card-hr">
                            <ul class="yellow-checkmark-list-small">
                                <li>Целосна програма</li>
                                <li>Creative Hub сертификат</li>
                                <li class="x-icon">Без eвропска диплома со ЕКТС кредити</li>
                                <li>#Slack заедница</li>
                                <li>Проекти во твоето GitHub портфолио</li>
                                <li>Секоја сабота менторски сесии</li>
                                <li>Пристап до платформа за вработување</li>
                                <li>
                                    Соработка со компании за потенцијално вработување преку конкретна задача и проверка
                                    на
                                    изработениот код
                                </li>
                                <li>Поврзување со консалтинг компании кои регрутираат јуниор програмери</li>
                                <li>0% камата за плаќање на рати</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="academy-card academy-second-card">
                    <div class="academy-card-inner">
                        <div class="d-flex flex-column">
                            <div class="d-flex">
                                <div class="mr-3">
                                    <img src="images/academy_card_2.png" alt="Colored object">
                                </div>
                                <div class="d-flex flex-column justify-content-between">
                                    <h5 class="academy-name academy-name-small">ЕУ Сертифицирана Академија</h5>
                                    <div>
                                        <div class="academy-price">2450 <span>EUR</span></div>
                                        <div class="academy-hours">185 часа</div>
                                    </div>
                                </div>
                            </div>
                            <hr class="academy-card-hr">
                            <ul class="yellow-checkmark-list-small">
                                <li>Целосна програма</li>
                                <li>Creative Hub сертификат</li>
                                <li>Eвропска диплома со ЕКТС кредити</li>
                                <li>#Slack заедница</li>
                                <li>Проекти во твоето GitHub портфолио</li>
                                <li>Секоја сабота менторски сесии</li>
                                <li>Пристап до платформа за вработување</li>
                                <li>
                                    Соработка со компании за потенцијално вработување преку конкретна задача и проверка
                                    на
                                    изработениот код
                                </li>
                                <li>Поврзување со консалтинг компании кои регрутираат јуниор програмери</li>
                                <li>0% камата за плаќање на рати</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="calculator">
                <h4>КАЛКУЛАТОР</h4>
                <h5>за пресметка на месечните<br> трошоци</h5>

                <div class="d-flex flex-column flex-lg-row px-2 px-lg-0">
                    <div class="d-flex flex-column calculator-label-wrapper">
                        <div class="calculator-label">Програма:</div>
                        <div class="d-none d-lg-block calculator-label">Број на рати:</div>
                    </div>

                    <div class="d-flex flex-column justify-content-between">
                        <div class="d-flex flex-column flex-lg-row align-items-center">
                            <div class="only-academy-radio mb-3 mb-lg-0">
                                <div class="d-flex align-items-center">
                                    <input id="only-academy-price" type="radio" name="academy-price" value="2100">
                                    <label for="only-academy-price">2100 €</label>
                                </div>
                                <div class="calculator-small-label">Само Академија</div>
                            </div>
                            <div class="eu-academy-radio">
                                <div class="d-flex align-items-center">
                                    <input id="eu-academy" type="radio" name="academy-price" value="2450">
                                    <label for="eu-academy">2450 €</label>
                                </div>
                                <div class="calculator-small-label">Еу Сертифицирана</div>
                            </div>
                        </div>
                        <div class="calculator-label d-lg-none">Број на рати:</div>

                        <div>
                            <table class="calculator-table">
                                <tbody>
                                    <tr class="line">
                                        <td style="width: 20%;">
                                            <input name="calculator-rati" id="answer_1" type="radio" value="0">
                                            <br>
                                        </td>
                                        <td>
                                            <input name="calculator-rati" id="answer_2" type="radio" value="7">
                                            <br>
                                        </td>
                                        <td>
                                            <input name="calculator-rati" id="answer_3" type="radio" value="15">
                                            <br>
                                        </td>
                                        <td>
                                            <input name="calculator-rati" id="answer_4" type="radio" value="24">
                                            <br>
                                        </td>
                                        <td>
                                            <input name="calculator-rati" id="answer_5" type="radio" value="36">
                                            <br>
                                        </td>
                                        <td class="no-line">
                                            <input name="calculator-rati" id="answer_6" type="radio" value="50">
                                            <br>
                                        </td>
                                    </tr>
                                    <tr class="price-labels">
                                        <td>
                                            <label for="answer_1">наеднаш</label>
                                        </td>
                                        <td>
                                            <label for="answer_2">7 рати</label>
                                        </td>
                                        <td>
                                            <label for="answer_3">15 рати</label>
                                        </td>
                                        <td>
                                            <label for="answer_4">24 рати</label>
                                        </td>
                                        <td>
                                            <label for="answer_5">36 рати</label>
                                        </td>
                                        <td>
                                            <label for="answer_6">50 рати</label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="bank-credit-text">Можност за финансирање на 15, 36 или 50 рати преку NLB Bank
                                или
                                Halkbank
                            </div>
                        </div>
                    </div>
                    <div class="calculator-price" id="calculator-price-box">
                        <h5 class="calculator-price-text">Месечно ќе<br> издвојувам по</h5>
                        <p id="calculator-monthly-price">200 €</p>
                    </div>
                </div>
            </div>
        </section>
        <!--End of choose academy section-->
        <!-- <div class="text-center mb-5"><a href="#form"><button class="academy-btn">Аплицирај за Академијата</button></a></div> -->


        <!--Start of questions section-->
        <section class="calendly-section">
            <div class="container">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="d-flex flex-column calendly-questions">
                        <h5>Имаш прашања?</h5>
                        <img src="images/stojancho.png" alt="Stojancho" />
                        <p>
                            Пријави се и закажи онлајн состанок со Стојанчо.<br><br>
                            Дознај повеќе за програмата, условите за плаќање и почетокот на следната група.
                        </p>
                    </div>
                    <div class="calendly-widget">
                        <div class="calendly-inline-widget h-100" data-url="https://calendly.com/stojanco_ch"></div>
                        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"
                            async>
                        </script>
                    </div>
                </div>
            </div>
        </section>
        <!--End of questions section-->


        <!--Start of schedule section-->
        <section>
            <div>
                <h5 class="schedule-title">Распоред на часови</h5>
                <img class="w-100" src="images/schedule.png">
            </div>
        </section>
                <!--Third section-->
                <section class="container-fluid third-section-fluid p-0">
            <div class="container d-flex justify-content-center">
                <div class="why-to-apply">
                    <h5>Зоштo да аплицирам?</h5>
                    <ul class="blue-checkmark-list">
                        <li>
                            <div>
                                <div>Без ризик</div>
                                <div>0% ризик бидејќи започнуваш со воведен курс кој е комплетно бесплатен</div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div>Искусни предавачи - експерти од областа</div>
                                <div>Ќе учиш од искусни ИТ предавачи во Македонија</div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div>Практична програма</div>
                                <div>In-depth програма која се базира на работа на реални проекти</div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div>Активна заедница</div>
                                <div>Ќе станеш дел од заедница каде ќе го споделуваш твоето знаење и искуство</div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div>Менторски сесии</div>
                                <div>1-на-1 со ментор за да ги совладаш потешкотиите при стекнување на новите вештини
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div>Поврзување со работодавци</div>
                                <div>
                                    Кариерна помош од Creative Hub за да те поврзе со +100 компании со кои соработуваме
                                    за
                                    пракса или работа на нашите студенти.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="position-relative">
                <div class="why-to-apply-statistic-wrapper"></div>
                <div class="container d-flex justify-content-center">
                    <div class="why-to-apply-statistic">
                        <div class="d-flex align-items-center mb-3">
                            <div class="big-blue-number mr-4">97%</div>
                            <div class="statistic-text">
                                од студентите започнуваат работа во ИТ секторот 1-6 месеци по завршувањето на
                                Академијата
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="big-blue-number mr-4">#1</div>
                            <div class="statistic-text">најплатена индустрија во земјата</div>
                        </div>
                        <div>
                            <div class="big-blue-number mr-4">1000-3000 ЕУР</div>
                            <div class="statistic-text">се движат платите на mid-to-senior програмери во Македонија
                            </div>
                        </div>
                    </div>
                    <img class="why-to-apply-img d-none d-xl-block" src="images/why_to_apply_girl.png"
                        alt="Girl on computer" />
                </div>
            </div>

            <div class="container students-path">
                <h2 class="mb-4">Патот на студентите<br class="d-none d-lg-block"> во 4 чекори</h2>
                <p>
                    Во зависност од тебе и времето што ќе го посветиш, целата програма можеш да ја завршиш во период од
                    9
                    месеци
                </p>
            </div>

            <div class="container d-flex flex-column flex-lg-row">
                <div class="step-card mb-4 mb-lg-0">
                    <h5>Чекор 1</h5>
                    <p>Аплицирај за воведен курс</p>
                    <ul class="white-checkmark-list">
                        <li>
                            Започни со учење на воведниот курс „Вовед во програмирање ” и дознај дали оваа професија е
                            за тебе
                        </li>
                        <li>
                            Помини го успешно приемниот испит и продолжи да учиш во целосната Front-end акредитирана
                            програма
                        </li>
                    </ul>
                </div>
                <div class="step-card mb-4 mb-lg-0">
                    <h5>Чекор 2</h5>
                    <p>Постави основи во знаењата и вештините во Front-End програмирање</p>
                    <ul class="white-checkmark-list">
                        <li>
                            Награди ги твоите основни познавања со фундаментално знаење и вештини во областа на
                            Front-End програмирање
                        </li>
                    </ul>
                </div>
                <div class="step-card mb-4 mb-lg-0 d-flex flex-column justify-content-between">
                    <div>
                        <h5>Чекор 3</h5>
                        <p>Специјализирај се со напредна програм</p>
                        <ul class="white-checkmark-list">
                            <li>
                                Продолжи со обуката и навлези во напредните модули на Академијата, стекни се со
                                неопходни
                                вештини за да започнеш работа како Front-End програмер
                            </li>
                        </ul>
                    </div>
                    <div class="technologies-logos d-flex justify-content-evenly">
                        <img src="images/html_icon.png" alt="HTML icon">
                        <img src="images/js_icon.png" alt="JS icon">
                        <img src="images/css_icon.png" alt="CSS icon">
                        <img src="images/react_icon.png" alt="React icon">
                    </div>
                </div>
                <div class="step-card mb-4 mb-lg-0">
                    <h5>Чекор 4</h5>
                    <p>Кариерна реализација и дипломирање</p>
                    <ul class="white-checkmark-list">
                        <li>Завршете ја комплетната програма успешно!</li>
                        <li>Стекнете се со акредитирана диплома со ЕКТС кредити</li>
                        <li>
                            Започнете го процесот на вработување со нашиот Student Success Manager од Центарот за
                            кариера и
                            вработете се во една од нашите партнерски компании или во компанија по ваш избор
                        </li>
                    </ul>
                </div>
            </div>


            <div class="container limited-academy-text">
                Претпрограмата на Академијата за Front-end е бесплатна, но со ограничен број на слушатели.
            </div>
        </section>
        <!--End of third section-->
        <!--End of schedule section-->
        <div class="container">
        <a name="form">
            <div class="form-footer" id="form">
                <h5>АПЛИЦИРАЈ ЗА АКАДЕМИЈА ПО FRONT-END</h5>
                <?php
                    require_once('./academy-form.html')
                    ?>
            </div>
            </a>
        </div>
                <!--Second section-->
                <div class="container-fluid second-section-wrapper position-relative">
            <section class="container">
                <!-- <img class="free-img" src="images/free.png" alt="Free img" /> -->
                <div class="second-section-bg"></div>
                <div class="d-flex flex-column align-items-center">
                    <div class="start-your-carrier">
                        <h2>АКО СЕ ДВОУМИШ ДАЛИ ОВАА ПРОФЕСИЈА Е ЗА ТЕБЕ...</h2>
                        <h3>
                            Започни со курсот „Вовед во Front End програмирање“. Дознај дали Front End е кариерата што
                            ти одговара и вклучи се во целосната програма на Академија за Front End во Creative Hub!
                        </h3>

                        <div class="start-free-course d-flex flex-column">
                            <h3>Започни со <br><span>ВОВЕДЕН</span><br class="d-none d-lg-block d-xl-none"> курс</h3>
                            <img class="mentor-img d-none d-lg-block" src="images/sashe_img.png" alt="Mentor image">
                            <div class="steps-wrapper">
                                <div class="d-flex flex-column flex-lg-row steps-inner">
                                    <div class="d-flex step align-items-center">
                                        <div class="step-circle fill-step-circle">01</div>
                                        <p class="step-blue-text">Воведен курс</p>
                                    </div>
                                    <div class="d-flex step align-items-center">
                                        <div class="step-circle">02</div>
                                        <p class="step-white-text">Основи</p>
                                    </div>
                                    <div class="d-flex step align-items-center">
                                        <div class="step-circle">03</div>
                                        <p class="step-white-text">Напредни вештини</p>
                                    </div>
                                    <div class="d-flex step align-items-center">
                                        <div class="step-circle">04</div>
                                        <p class="step-white-text">Започни да работиш</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="start-your-carrier-description d-flex justify-content-center">
                        <div class="start-your-carrier-description-inner">
                            <ul class="white-checkmark-list">
                                <li>Онлајн, во време кое тебе ти одговара</li>
                                <li>Самостојна работа на задачи</li>
                                <li>Менторска сесија со приклучување во живо</li>
                                <li>Сертификат по успешното завршување на финалната задача</li>
                            </ul>
                        </div>
                    </div>

                </div>

            </section>
        </div>
        <div class="text-center mt-5 mb-5"><a href="free-course"><button class="academy-btn">Повеќе за курсот</button></a></div>
                <!--End of second section-->

        <?php
require_once('../footer.php')
?>
    </div>

    <script>
    const acc = document.getElementsByClassName("accordion");

    const toggleAccordion = (accordion) => {
        accordion.classList.toggle("active");
        accordion.children[0].classList.toggle("program-item-number")
        accordion.children[0].classList.toggle("program-active-number")
        accordion.children[1].classList.toggle("program-item-name")
        accordion.children[1].classList.toggle("program-active-name")
        const panel = accordion.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    }

    for (let i = 0; i < acc.length; i++) {
        if (i === 0) toggleAccordion(acc[0]);
        acc[i].addEventListener("click", () => toggleAccordion(acc[i]));
    }
    </script>
    <script src="script.js"></script>
    <script src="../bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
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

</body>

</html>