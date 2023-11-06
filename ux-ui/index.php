<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-mobile.css">
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">


    <link href="../bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../bootstrap-4.6.0-dist/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <title>UX/UI</title>


    <script>
    $(document).ready(function() {

        $("a").on('click', function(event) {


            if (this.hash !== "") {


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
require_once('../navbar.php');
?>
    <!--FIRST SECTIOn-->
    <div class="page-bg">
        <!--First section-->
        <section>
            <div class="header-bg">
                <div class="container first-section d-flex flex-column flex-md-row">
                    <div class="d-flex flex-column justify-content-between">
                        <div>
                            <h1 class="page-title">UX/UI Академија</h1>
                            <p class="page-subtitle">Најтемелна програма по UX/UI во Македонијa акредитирана од МОН.</p>
                            <ul class="custom-checkmark-list page-header-list pt-0">
                                <li>Програма прилагодена за почетници</li>
                                <li>Учи од најдобрите експерти во индустријата</li>
                                <li>Стекни се со ЕУ и МОН акредитирана диплома и дизајн вештини</li>
                            </ul>

                            <a href="">
                                <button class="green-btn header-btn" name="submit-frontend" value="Submit"
                                    type="submit" style="visibility:hidden;">
                                    Повеќе за Академијата
                                </button>
                            </a>
                        </div>
                        <div class="career-possibilities d-none d-md-block">
                            <p class="mb-2">Career possibilities:</p>
                            <p class="font-weight-bold">UX UI Designer | Web Designer</p>
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
                            <li><img src="images/green-thick.svg" alt="Yellow check" class="yellow-check">Започнува од
                                февруари
                            </li>
                        </ul>
                        <div class="text-center mt-3"><a href="free-course"><button class="course-btn">Повеќе за
                                    курсот</button></a></div>
                        <p class="small">Првите 2 часа од курсот се бесплатни.</p>
                    </div>

                    <div class="career-possibilities d-md-none">
                        <p class="mb-2">Career possibilities:</p>
                        <p class="font-weight-bold">UX UI Designer | Web Designer</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="get-hired">
            Вработи се за <span>1-6</span> месеци по <span>завршувањето</span>
        </div>
        <!--End of first section-->

        <!--Start of figma center section-->
        <section class="figma-center-section position-relative">
            <div class="figma-center-bg"></div>
            <div class="container position-relative d-flex flex-column flex-xl-row">
                <img class="figma-center-img img-fluid" src="images/figma_center_img.png" alt="Squares" />


                <div class="figma-center-text">
                    We are official <br><span>Figma </span> education center
                    <img class="figma-border-img" src="images/figma_img.png" alt="Figma logo with border" />
                    <img class="creative-hub-rainbow" src="images/creative_hub_rainbow_logo.png"
                        alt="Figma logo with border" />
                    <img class="cursor-img" src="images/cursor.png" alt="Figma logo with border" />
                </div>
            </div>
        </section>
        <!--End of figma center section-->


        <!--Start of mentors section-->
        <section class="mentors-section" id="academy">
            <h2>ќе УЧИш СО ПРОФЕСИОНАЛЦИ ОД ОБЛАСТА</h2>
            <div class="mentors-section-bg">
                <div class="d-flex flex-column flex-xl-row align-items-center container">
                    <div class="d-flex flex-column mentors-wrapper">
                        <div class="d-flex flex-column flex-xl-row align-items-center mentors-vertical-margin">
                            <div class="mentor-box d-flex flex-column w-min-fit mentor-margin-right">
                                <img src="images/mentor_maja.png" alt="Image of Maja" />
                                <div class="position-relative mentor-box-wrapper">
                                    <img class="mentors-box-bg" src="images/mentors_box_bg.png" />
                                    <div class="mentor-box-text maja-box">
                                        Повеќе од 20 години искуство како предавач за графички дизајн во повеќе Академии
                                        и
                                        тренинг центри. Сертифициран Adobe експерт за Adobe Illustrator & Photoshop.
                                    </div>
                                </div>
                            </div>

                            <div class="mentor-box d-flex flex-column w-min-fit">
                                <img src="images/mentor_ile.png" alt="Image of Ile" />
                                <div class="position-relative mentor-box-wrapper">
                                    <img class="mentors-box-bg" src="images/mentors_box_bg.png" />
                                    <div class="mentor-box-text ile-box">
                                        Искусен дизајнер со работно искуство во Branding, User Interface, Advertising,
                                        Web
                                        Design и Typography.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column flex-xl-row align-items-center mentors-margin-top">
                            <div class="mentor-box d-flex flex-column w-min-fit mentor-margin-right">
                                <img src="images/mentor_ilija.png" alt="Image of Ilija" />
                                <div class="position-relative mentor-box-wrapper">
                                    <img class="mentors-box-bg" src="images/mentors_box_bg.png" />
                                    <div class="mentor-box-text ilija-box">
                                        Software инженер во Code Chemistry со повеќе од 5 години искуство во областа на
                                        software development.
                                    </div>
                                </div>
                            </div>

                            <div class="mentor-box d-flex flex-column w-min-fit">
                                <img src="images/mentor_pavlina.png" alt="Image of Pavlina" />
                                <div class="position-relative mentor-box-wrapper">
                                    <img class="mentors-box-bg" src="images/mentors_box_bg.png" />
                                    <div class="mentor-box-text pavlina-box">
                                        Full Stack програмер со повеќе од 8 години искуство во ICT индустријата. Со
                                        големо
                                        искуство како предавач и ментор во повеќе академии.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mentor-box mentor-dejan d-flex flex-column w-min-fit justify-content-center">
                        <img src="images/mentor_dejan.png" alt="Image of Dejan" />
                        <div class="position-relative mentor-box-wrapper">
                            <img class="mentors-box-bg" src="images/mentors_box_bg.png" />
                            <div class="mentor-box-text dejan-box">
                                1-на-1 ментор за реална работа
                                <b><br>*** само за студенти
                                    на Fast-Track Академијата</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End of mentors section-->


        <!--Start of program section-->
        <section>
            <div class="container">
                <h2 class="program-title">ПРОГРАМА ШТО вклучува И FRONT-END:</h2>
                <h3 class="program-subtitle">СИТЕ ВЕШТИНИ КОИШТО ТИ ТРЕБААТ ЗА ДА БИДЕШ</h3>
                <h4 class="program-note">КОМПЛЕТЕН UX/UI ДИЗАЈНЕР</h4>
                <p class="program-description">
                    Се прашуваш што значи комплетен UX/UI дизајнер?
                    Тоа значи дека освен што имаш око за финеси и знаеш како да изработиш одличен дизајн - знаеш и како
                    една
                    веб
                    страна фунционира , и како сето тоа се имлементира во front-end.
                    <br><br>
                    Во иднина кога ќе се вработиш, ќе работиш во тим со front-end програмери кои ќе го напишат кодот за
                    твојот
                    дизајн. Познавањата од front-end што ќе ги стекнеш на Академијата ќе ти помогнат во пристапот со веб
                    девелоперите и во тимската работа.
                </p>
            </div>

            <div class="program-section-bg d-flex justify-content-center">
                <div class="program-blocks-wrapper">
                    <div class="program-block program-html">
                        <div class="program-html-text">
                            <h5>HTML & CSS</h5>
                            <ul class="list-unstyled">
                                <li>HTML тагови, CSS properties</li>
                                <li>Дизајнирање на изглед на сајтот и планирање</li>
                                <li>Семантика на сајтот</li>
                                <li>Images & hyperlinks</li>
                                <li>Работење со структура на сајтот</li>
                                <li>Градење форми со валидација</li>
                                <li>Градење на комплетен веб сајт</li>
                            </ul>
                        </div>
                    </div>

                    <div class="program-block program-ux">
                        <div class="program-ux-text">
                            <h5 class="text-white">UX</h5>
                            <ul class="list-unstyled">
                                <li>Истражување</li>
                                <li>Стратегија за производот</li>
                                <li>Креирање user stories</li>
                                <li>Информација за архитектура</li>
                                <li>Креирање графикони</li>
                                <li>Wireframes</li>
                            </ul>
                        </div>
                    </div>

                    <div class="program-block program-ui">
                        <div class="program-ui-text">
                            <h5 class="text-white">UI</h5>
                            <ul class="list-unstyled">
                                <li>Работа во Figma / Adobe Xd</li>
                                <li>Работа на Moodboards</li>
                                <li>Креирање visual layout design</li>
                                <li>Креирање graphic assets</li>
                                <li>High-fidelity mockups</li>
                                <li>Clickable prototypes</li>
                                <li>Креирање UI елементи за повторно користење</li>
                                <li>Правење темплејти</li>
                            </ul>
                        </div>
                    </div>

                    <div class="program-block program-illustrator">
                        <div class="program-illustrator-text">
                            <h5>Adobe Illustrator за Web</h5>
                            <ul class="list-unstyled">
                                <li>Креирање wireframe</li>
                                <li>Дизајн на лого</li>
                                <li>Mockups на веб страната</li>
                                <li>SVGs</li>
                                <li>Зачувување и експортирање за web</li>
                            </ul>
                        </div>
                    </div>

                    <div class="program-block program-photoshop">
                        <div class="program-photoshop-text">
                            <h5>Adobe Photoshop За Web</h5>
                            <ul class="list-unstyled">
                                <li>Креирање навигациски елементи</li>
                                <li>Креирање текстура и позадина</li>
                                <li>Вградување или поврзување smart objects</li>
                                <li>Користење libraries</li>
                                <li>Responsive design совети и трикови</li>
                                <li>Поставување breakpoints, workspaces и artboards</li>
                                <li>Зачувување и експортирање за web</li>
                                <li>Користење Generator</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End of program section-->

        <!--Start of what do you need for success section-->
        <section class="container-fluid success-section">
            <div class="container">
                <h2 class="success-section-title">Што ти треба <span>тебе</span>?</h2>
                <ul class="yellow-checkmark-list">
                    <li>Детален систем за бодување, пракса и работа за најдобрите.</li>
                    <li>“Design based hiring process” - Дизајни за компании и избор на најдобриот при вработување</li>
                    <li>1 на 1 менторска програма 2 секој вторник и четврток</li>
                    <li>Диплома признаена од Министерството за Образование и Наука ***** само во Creative Hub</li>
                    <li>Европски сертификат со ЕКТС кредити ***** само во Creative Hub</li>
                    <li>Стекни искуство додека учиш!</li>
                    <li>Апдејтирана програма која секоја година се подобрува</li>
                    <li>Вежби и финален проект по секој предмет</li>
                    <li>Бесплатен пристап на евенти и самити организирани од Creative Hub</li>
                    <li>Speed Networking</li>
                    <li>Стануваш дел од глобална #Facebook заедница со колеги од Приштина, Берлин, Мајами</li>
                    <li>Практични, а не теоретски предавања</li>
                    <li>Brainstorming сесии</li>
                    <li>Вечери на „ UX/UI дружење“ ексклузивно за студенти и Алумни</li>
                    <li>Можност за вработување во земјата или странство преку нашите партнерски компании</li>
                    <li>Пристап до нашата Hiring & Outsourcing platform</li>
                    <li>Помош со градење на твојот личен брендинг, CV и мотивационо писмо</li>
                    <li>Хакатони</li>
                    <li>Вработување на најдобрите п реку работа на реални проекти за компании</li>
                    <li>Поврзување со студенти од други Академии, градење заеднички алатки, аплицирање за ФИТР проекти
                    </li>
                </ul>
            </div>
        </section>
        <!--End of what do you need for success section-->

        <!--Start of projects section-->
        <section>
            <h2 class="projects-title">ЗАВРШНИ ПРОЕКТИ НА НАШИТЕ СТУДЕНТИ</h2>
            <div class="projects-section">
                <div class="container">
                    <div class="d-flex flex-column flex-lg-row first-project project">
                        <div class="text-end order-last order-lg-first">
                            <img class="img-transition img-fluid" src="images/first_project.png" data-toggle="modal"
                                data-target="#firstProjectModal" alt="Project image" />
                        </div>
                        <div class="w-lg-50">
                            <h2>Outsourcing.mk</h2>
                            <h3>Платформа за outsourcing</h3>
                            <p>
                                Веб страница која користи на две кориснички групи: компании и таленти истовремено. Целта
                                е и
                                двете
                                страни да добијат едноставно, а корисно решение за проблемот каде да се најде соодветна
                                работа/проект, или соодветен кандидат.
                                <br>
                                И двете кориснички групи можат лесно да пребаруваат по пат на тагови и филтри.
                            </p>
                        </div>

                        <!--Modal-->
                        <div class="modal fade" id="firstProjectModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <iframe width="auto" height="315" src="https://www.youtube.com/embed/fMqFh31hp1c"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <!--End of Modal-->
                    </div>

                    <div class="d-flex flex-column flex-lg-row project">
                        <div class="w-lg-50">
                            <h2 class="text-left">E-learning Platform</h2>
                            <h3 class="text-left">Платформа за онлајн учење</h3>
                            <p class="text-left">
                                Платформа за снимени онлајн предавања со таргет група за целиот Балкан.
                                <br>
                                Отпимизирана и респонзивна за mobile со вклучен payment план.
                            </p>
                        </div>

                        <div class="text-start">
                            <img class="img-transition img-fluid" src="images/second_project.png" data-toggle="modal"
                                data-target="#secondProjectModal" alt="Project image" />
                        </div>

                        <!--Modal-->
                        <div class="modal fade" id="secondProjectModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <iframe width="auto" height="315" src="https://www.youtube.com/embed/ADLD6wXZ8fI"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <!--End of Modal-->
                    </div>
                </div>
            </div>
        </section>
        <!--End of projects section-->

        <!--Start of weekly challenges section-->
        <section class="position-relative weekly-challenges-section">
            <div class="weekly-challenges-bg"></div>
            <div class="weekly-challenges-box container d-flex align-items-center justify-content-between">
                <div class="z-index-1">
                    <h2>Неделни UX/UI предизвици</h2>
                    <h3>Реши го предизвикот и освој 200 ЕУР!</h3>
                    <a href="https://creativehub.mk/ux-ui-quests/">
                        <button class="see-more-btn">Види повеќе</button>
                    </a>
                </div>
                <div class="z-index-1">
                    <img class="d-none d-lg-block" src="images/weekly_challenges_img.png" alt="Weekly challenges img" />
                </div>
            </div>
        </section>
        <!--End of weekly challenges section-->

        <!--Start of successful stories section-->
        <section>
            <div class="container d-flex flex-column mt-5 mt-lg-0">
                <div class="d-flex justify-content-end">
                    <img class="img-fluid" src="images/successfully_stories.png" alt="Text successfully stories">
                </div>
                <div class="d-flex flex-column flex-lg-row first-story-wrapper">
                    <img src="images/frosina.png" alt="2 images of Frosina" />
                    <div class="text-end story-wrapper ms-3">
                        <h3>ПРАКСА + МЕНТОРСКА ПОМОШ</h3>
                        <p>
                            Фросина Колевска дипломираше на Академијата, но и беше потребна пракса и место за да стекне
                            самодоверба во процесот на самостојно креирање на UX UI решенија.
                            <br><br>
                            Во Creative Hub и обезбедивме платена пракса и ѝ дадовме задача за време на работните
                            саати да работи на Форум за дизајнери.
                            <br><br>
                            На овој проект работеше заедно со нашиот предавач Павлина, ментор на Академијата.
                        </p>
                        <!-- <button class="see-more-black-btn">Види повеќе</button> -->
                    </div>
                </div>

                <div class="d-flex flex-column flex-lg-row second-story-wrapper">
                    <div class="text-left story-wrapper me-5 order-lg-first order-last">
                        <h3>ВРАБОТУВАЊЕ & ПРОМЕНА НА КАРИЕРА</h3>
                        <p>
                            Александра беше студентот кој најмногу се истакнуваше на Академијата. Иако архитект по
                            професија, сепак упорноста и пренасочувањето во областа на UX UI и беше нов предизвик.
                            <br><br>
                            Бидејќи најдобрите студенти ги вработуваме кај нас, денес Александра е дел од нашиот UX UI
                            тим.
                        </p>
                    </div>

                    <img class="order-lg-last order-first" src="images/aleksandra.png" alt="2 images of Frosina" />
                </div>

                <div class="join-us-fb">
                    <div class="join-us-inner d-flex flex-column position-relative">
                        <h2>Приклучи се на нашата UX/UI група</h2>
                        <h3>Поврзи се со алумни и студенти од други држави.</h3>
                        <a class="w-min-fit" href="https://www.facebook.com/groups/306860560931028/" target="_blank">
                            <img class="fb-img" src="images/go_to_fb.png" alt="Go to FB" />
                        </a>
                        <div class="d-flex mt-4 align-items-center">
                            <img class="me-4" src="images/fb_people.png" alt="People avatars" />
                            <p class="m-0"><b>250+ people</b> joined in the last 30 day</p>
                        </div>

                        <img class="join-us-img d-none d-xl-block" src="images/join_us_img.png" alt="Join us">
                    </div>
                </div>
            </div>
        </section>
        <!--End of successful stories section-->

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
                        <button class="hiring-platform-btn green-btn">Провери</button>
                    </a>
                </div>
                <div>
                    <img class="hiring-platform-img d-none d-lg-block" src="images/hiring_platform_img.png" alt="Man" />
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

            <a href="free-course">
                <button class="green-btn free-listen-btn">Пробај со воведен курс</button>
            </a>

            <div class="d-none d-lg-flex position-relative">
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

        <!--Start of diploma section-->
        <section>
            <div class="d-flex flex-column flex-lg-row container">
                <div class="diploma w-lg-50">
                    <h2>ПРИЗНАЕНА ДИПЛОМА</h2>
                    <h3>Од Министерство за Образование и Наука на Република Северна Македонија</h3>
                    <p>
                        Академијата е официјално акредитирана од Центарот за образование за возрасни и МОН.
                        <br><br>
                        Дополнително, сите Академии на Creative Hub се акредитирани од Европска комисија за неформално
                        образование и студентите добиваат додаток на диплома со ЕКТС кредити.
                    </p>
                </div>

                <div>
                    <img class="diploma-img img-fluid" src="images/diplomi.png" alt="Diploma">
                </div>
            </div>

            <!-- <div class="d-flex justify-content-center">
                <a href="#form">
                    <button class="green-btn free-listen-second-btn">Аплицирај за Академијата</button>
                </a>
            </div> -->
        </section>
        <!--Start of diploma section-->

        <!--Start of choose academy section-->
        <section class="choose-academy-section d-flex flex-column align-items-center">
            <h5 class="choose-academy-title">Избери ја Академијата што<br class="d-none d-lg-block"> најмногу ти
                одговара
            </h5>
            <div
                class="d-flex flex-column flex-lg-row w-100 justify-content-evenly align-items-lg-start align-items-center">
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
                                        <div class="academy-price">1299 <span>EUR</span></div>
                                        <div class="academy-hours">90 часа</div>
                                    </div>
                                </div>
                            </div>
                            <hr class="academy-card-hr">
                            <ul class="yellow-checkmark-list-small">
                                <li>Целосна програма</li>
                                <li>Creative Hub сертификат</li>
                                <li class="x-icon">Без eвропска диплома со ЕКТС кредити</li>
                                <li><b>Акредитирана од Министерство за Образование и Наука</b></li>
                                <li class="x-icon">Без 1 на 1 менторство</li>
                                <li>#Facebook заедница</li>
                                <li>Хакатони</li>
                                <li>Пристап до платформа за вработување</li>
                                <li>Помош при наоѓање на пракса или вработување</li>
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
                                        <div class="academy-price">1599 <span>EUR</span></div>
                                        <div class="academy-hours">90 часа</div>
                                    </div>
                                </div>
                            </div>
                            <hr class="academy-card-hr">
                            <ul class="yellow-checkmark-list-small">
                                <li>Целосна програма</li>
                                <li>Creative Hub сертификат</li>
                                <li>Eвропска диплома со ЕКТС кредити</li>
                                <li><b>Акредитирана од Министерство за Образование и Наука</b></li>
                                <li class="x-icon">Без 1 на 1 менторство</li>
                                <li>#Facebook заедница</li>
                                <li>Хакатони</li>
                                <li>Пристап до платформа за вработување</li>
                                <li>Гарантирана пракса или вработување</li>
                                <li>Покана за настани</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="academy-card academy-third-card">
                    <div class="academy-card-inner">
                        <div class="d-flex flex-column">
                            <div class="d-flex">
                                <div class="mr-3">
                                    <img src="images/academy_card_3.png" alt="Colored object">
                                </div>
                                <div class="d-flex flex-column justify-content-between">
                                    <h5 class="academy-name academy-name-small">Fast-Track Академија</h5>
                                    <div>
                                        <div class="academy-price">2999 <span>EUR</span></div>
                                        <div class="academy-hours">178 часа</div>
                                    </div>
                                </div>
                            </div>
                            <hr class="academy-card-hr">
                            <ul class="yellow-checkmark-list-small">
                                <li>Целосна програма</li>
                                <li><b>+ 88 часа работа со UX UI Lead Designer во Creative Hub паралелно со Академијата,
                                        која ќе го забрза процесот на стекнување на вештини </b></li>
                                <li>Creative Hub сертификат</li>
                                <li>Европска диплома со ЕКТС кредити</li>
                                <li><b>Акредитирана од Министерство за Образование и Наука</b></li>
                                <li>#Facebook заедница</li>
                                <li>Хакатони</li>
                                <li>Пристап до платформа за вработување</li>
                                <li>Гарантирана пракса или вработување</li>
                                <li>Покана за настани</li>
                                <li>Менторство еден на еден</li>
                                <li><b>Работа со студенти од други Академии, помош при изработка на проекти и аплицирање
                                        за
                                        ФИТР</b></li>
                                <li>Creative Hub канцеларија</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="calculator">
                <h4>КАЛКУЛАТОР</h4>
                <h5>за пресметка на месечните трошоци</h5>

                <div class="d-flex flex-column flex-lg-row px-2 px-lg-0">
                    <div class="d-flex flex-column calculator-label-wrapper">
                        <div class="calculator-label">Програма:</div>
                        <div class="d-none d-lg-block calculator-label">Број на рати:</div>
                    </div>

                    <div class="d-flex flex-column justify-content-between">
                        <div class="d-flex flex-column flex-lg-row align-items-center">
                            <div class="calculator-radio-margin-right mb-3 mb-lg-0">
                                <div class="d-flex align-items-center">
                                    <input id="only-academy-price" type="radio" name="academy-price" value="1299">
                                    <label for="only-academy-price">1299 €</label>
                                </div>
                                <div class="calculator-small-label">Само Академија</div>
                            </div>
                            <div class="eu-academy-radio calculator-radio-margin-right mb-3">
                                <div class="d-flex align-items-center">
                                    <input id="eu-academy" type="radio" name="academy-price" value="1599">
                                    <label for="eu-academy">1599 €</label>
                                </div>
                                <div class="calculator-small-label">Еу Сертифицирана</div>
                            </div>

                            <div class="eu-academy-radio calculator-radio-margin-right">
                                <div class="d-flex align-items-center">
                                    <input id="all-academy" type="radio" name="academy-price" value="2999">
                                    <label for="all-academy">2999 €</label>
                                </div>
                                <div class="calculator-small-label">All Access</div>
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

        <!--Start of why fast academy section-->
        <section class="why-fast-track-section position-relative">
            <img class="why-fast-track-pattern d-none d-lg-block" src="images/why_fast_track_pattern.png"
                alt="pattern" />
            <div class="d-flex flex-column container justify-content-center why-fast-track">
                <h2>Зошто да избереш <br>Fast-Track Академија?</h2>
                <h3>
                    Сакаш да работиш само 1 на 1 со ментор, 2 пати неделно, паралелно со Академијата?
                    <br><br>
                    Избери Fast-Track Академија!
                </h3>
            </div>
        </section>
        <!--Start of why fast academy section-->

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
                <h5 class="schedule-title">Распоред на академијата</h5>
                <img class="w-100" src="images/schedule.png">
            </div>
        </section>
        <!--End of schedule section-->
            <!--Third section-->
            <div class="container">
        <div class="technologies d-flex flex-column flex-md-row">
                        <div>
                            <h5>Најбараните алатки во индустријата</h5>
                            <p>
                                Аплицирај за целосната академија за UX/UI дизајн или започни со 10-часовен воведен курс
                                и дознај дали UX/UI дизајнот е за тебе. Програмата на Академијата ја составивме според
                                најбараните вештини за еден UX/UI дизајнер на пазарот.
                            </p>
                        </div>

                        <div class="technologies-logos-grid">
                            <img src="images/figma_logo.png" alt="HTML icon">
                            <img src="images/ai_logo.png" alt="JS icon">
                            <img src="images/photoshop_logo.png" alt="CSS icon">
                            <img src="images/xd_logo.png" alt="React icon">
                        </div>
                    </div>
             </div>
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
                                <div> Ќе учиш од сениор UX/UI дизајнери</div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div>Практична програма</div>
                                <div>Детална програма која се базира на работа на реални проекти</div>
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
                            <div class="big-number mr-4">97%</div>
                            <div class="statistic-text">
                                од студентите започнуваат работа во UX/UI секторот 1-6 месеци по завршувањето на
                                Академијата
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="big-number mr-4">#1</div>
                            <div class="statistic-text">рангирана како најкреативна професија</div>
                        </div>
                        <div>
                            <div class="big-number mr-4">500-2500 ЕУР</div>
                            <div class="statistic-text">се движат платите на mid-to-senior дизајнери во Македонија</div>
                        </div>
                    </div>
                    <img class="why-to-apply-img d-none d-xl-block" src="images/why_to_apply_img.png"
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
                    <ul class="custom-checkmark-list text-white">
                        <li>
                            Започни со учење на воведниот курс „Вовед во UX/UI дизајн“ и види дали оваа професија е за
                            тебе.
                        </li>
                        <li>
                            Помини го успешно приемниот испит и продолжи да учиш во целосно акредитираната програма за
                            UX/UI
                            дизајн.
                        </li>
                    </ul>
                </div>
                <div class="step-card mb-4 mb-lg-0">
                    <h5>Чекор 2</h5>
                    <p>Постави основи во знаењата и вештините во UX/UI</p>
                    <ul class="custom-checkmark-list text-white">
                        <li>
                            Награди ги твоите основни познавања со фундаментално знаење и вештини во областа на UX/UI
                            дизајнот.

                        </li>
                    </ul>
                </div>
                <div class="step-card mb-4 mb-lg-0 d-flex flex-column justify-content-between">
                    <div>
                        <h5>Чекор 3</h5>
                        <p>Специјализирај се со напредна програм</p>
                        <ul class="custom-checkmark-list text-white">
                            <li>
                                Продолжи со обуката и навлези во напредните модули на Академијата, стекни се со
                                неопходни
                                вештини и знаења за да започнеш со работа како UX/UI дизајнер.
                            </li>
                        </ul>
                    </div>
                    <div class="technologies-logos d-flex justify-content-evenly">
                        <img src="images/figma_logo.png" alt="HTML icon">
                        <img src="images/ai_logo.png" alt="JS icon">
                        <img src="images/photoshop_logo.png" alt="CSS icon">
                        <img src="images/xd_logo.png" alt="React icon">
                    </div>
                </div>
                <div class="step-card mb-4 mb-lg-0">
                    <h5>Чекор 4</h5>
                    <p>Кариерна реализација и дипломирање</p>
                    <ul class="custom-checkmark-list text-white">
                        <li>Завршете ја комплетната програма успешно!</li>
                        <li>Стекнете се со акредитирана диплома со ЕКТС кредити и акредитирана диплома од МОН.</li>
                        <li>
                            Започнете го процесот на вработување со нашиот Student Success Manager од Центарот за
                            кариера и
                            вработете се во една од нашите партнерски компании или во компанија по ваш избор.
                        </li>
                    </ul>
                </div>
            </div>


            <div class="container limited-academy-text">
                Претпрограмата на Академијата за UX/UI е бесплатна, но со ограничен број на слушатели.
            </div>
        </section>
        <!--End of third section-->
        <div class="container" id="form">
            <div class="form-footer">
                <h5>АПЛИЦИРАЈ ЗА АКАДЕМИЈА ПО UX/UI</h5>
                <?php
                    require_once('./academy-form.html')
                    ?>
            </div>
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
                            Започни со курсот „Вовед во UX/UI дизајн“. Дознај дали UX / UI дизајн е кариерата што ти
                            одговара и вклучи се во целосната програма на Академија за графички дизајн во Creative Hub!
                        </h3>

                        <div class="start-free-course d-flex flex-column">
                            <h3>Започни со <br><span>ВОВЕДЕН</span><br class="d-none d-lg-block d-xl-none"> курс</h3>
                            <img class="mentor-img d-none d-lg-block" src="images/free_course_mentor.png"
                                alt="Mentor image">
                            <div class="steps-wrapper">
                                <div class="d-flex flex-column flex-lg-row steps-inner">
                                    <div class="d-flex step align-items-center">
                                        <div class="step-circle fill-step-circle">01</div>
                                        <p class="step-green-text">Воведен курс</p>
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
                            <ul class="custom-checkmark-list text-white">
                                <li>Онлајн, во време кое тебе ти одговара</li>
                                <li>Самостојна работа на задачи</li>
                                <li>Менторска сесија со приклучување во живо </li>
                                <li>Сертификат по успешното завршување на финалната задача</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </section>
        </div>
        <!--End of second section-->
                    <div class="d-flex justify-content-center mt-5">
                <a href="free-course">
                    <button class="green-btn free-listen-second-btn">Повеќе за курсот</button>
                </a>
            </div>

        <?php
    require_once('../footer.php')
    ?>
    </div>
</body>
<script src="../bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
<script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
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

</html>