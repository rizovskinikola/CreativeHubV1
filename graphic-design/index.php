<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script src="https://kit.fontawesome.com/2b7c92c2d4.js" crossorigin="anonymous"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,800;0,900;1,600&display=swap"
        rel="stylesheet">


    <!--GOOGLE FONDS--->

    <!--GLIDER-->
    <link rel="stylesheet" href="../node_modules/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="../node_modules/@glidejs/glide/dist/css/glide.theme.min.css">
    <script src="../node_modules/@glidejs/glide/dist/glide.min.js"></script>
    <!--GLIDER JS-->

    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>GRAPHIC DESIGN</title>
    <link rel="shortcut icon" href="Images\favicon.png" type="image/x-icon">

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
 require_once ('../navbar.php')
 ?>
    <!-- HEADER -->
    <section class="header-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 header-m">
                    <div class="f-43">
                        АКАДЕМИЈА ЗА ГРАФИЧКИ ДИЗАЈН
                    </div>
                    <ul class="header-list f-16">
                        <li>Програма прилагодена за почетници</li>
                        <li>Учи од најдобрите експерти во индустријата</li>
                        <li>Стекни се со ЕУ и UK акредитирана диплома и усоврши ги твоите вештини во полето на графички
                            дизајн</li>
                    </ul>
                    <div><a href="#academy"><button class="enroll-header" style="visibility:hidden;">Повеќе за Академијата</button></a></div>
                    <div class="header-bottom">
                        <p class="f-18">Кариерни можности:</p>
                        <p class="f-18" style="font-weight:700">
                            Graphic designer I Freelancer I Art director I Visual communicator Typographer I Branding
                            specialist
                        </p>
                    </div>
                </div>


                <div class="col-md-6 form-header">

                    <div class="form-title f-32">Започни со <br> воведен курс<br>
                        <span class="f-18">и провери дали е оваа професија за тебе</span>
                    </div>
                    <div class="text-center mt-3"><img src="Images/course_img.png" alt="Course image"
                            class="responsive" /></div>
                    <ul class="free-course-list ps-1 mb-0 f-18">
                        <li><img src="Images/play_icon.png">6 часа снимени видео-материјали</li>
                        <li><img src="Images/wallet_icon.png">Сертификат за на LinkedIn</li>
                        <li><img src="Images/tick_square_icon.png">Задачи и истражувања</li>
                        <li><img src="Images/yellow-thick.svg" alt="Yellow check" class="ml-2 mr-2">Започнува од
                            февруари
                        </li>
                    </ul>
                    <div class="text-center mt-3"><a href="free-course"><button class="course-btn">Повеќе за
                                курсот</button></a></div>
                    <p class="small">Првите 2 часа од курсот се бесплатни.</p>
                </div>
                <?php
                    // require_once('./course-form.html')
                    ?>
            </div>
            <div class="header-bottom-mobile">
                <p class="f-18">Career possibilities:</p>
                <p class="f-18" style="font-weight:700">
                    Graphic designer I Freelancer I Art director I Visual communicator Typographer I Branding specialist
                </p>
            </div>
        </div>
    </section>
    <!-- HEADER -->
    <!-- FREE -->
    <div class="f-43 text-center header-border">ВРАБОТИ СЕ ЗА <span style="color: #61a97d">1-6</span> МЕСЕЦИ ПО <span
            style="color:#61a97d">ЗАВРШУВАЊЕТО</span> </div>



    <div class="container">
        <div class="f-43 text-center mt-5">КОЈ ЌЕ ТЕ ВОДИ НИЗ ПРОЦЕСОТ?</div>
        <div class="f-24 text-center mb-5">Нашите предавачи - експерти од индустријата. </div>

        <div class="glide1">
            <div data-glide-el="track" class="glide__track">
                <ul class="glide__slides">
                    <li class="glide__slide">
                        <div class="lecturer-card">
                            <img src="Images/lecturer1.png" class="max-width" alt="CreativeHub Lecturer">
                            <p>Сертифициран Adobe предавач за Adobe Photoshop. Повеќе од 20 години искуство како
                                предавач за Графички дизајн во повеќе Академии. Сертифициран Adobe експерт за Adobe
                                Illustrator, InDesign.</p>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="lecturer-card">
                            <img src="Images/lecturer2.png" class="max-width" alt="CreativeHub Lecturer">
                            <p>Art Director во Saatchi & Saatchi со повеќе од 10 години искуство во адвертајзинг.</p>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="lecturer-card">
                            <img src="Images/lecturer3.png" class="max-width" alt="CreativeHub Lecturer">
                            <p>Senior UX UI Designer @One Inside. Искусен дизајнер со големо работно искуство во областа
                                на адвертајзинг и дизајн. Искусен во Branding, User Interface, Advertising, Web Design и
                                типографија. Дипломирал на дизајн и комуникации.
                            </p>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="lecturer-card">
                            <img src="Images/lecturer4.png" class="max-width" alt="CreativeHub Lecturer">
                            <p>Моден фотограф со повеќе од 5 години работно искуство работејќи со уметници како Јелена
                                Јованова и Тамара Тодевска. Официјален фотограф на македонската делегација на Eurovision
                                Song Contest 2020 и 2021 и фотограф на многу светски модни брендови вклучувајќи ги
                                брендовите Pinko, Мarella итн.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="text-center d-lg-none mt-2">
                <img src="Images/mobile_carousel_icon.png" alt="carousel icon" />
            </div>
        </div>


    </div> <!-- Container end -->
    <!--PROGRAM-->
    <div class="text-center f-43 mt-5">ПРОГРАМА</div>
    <section class="program-bg">
        <div class="container">

            <div class="program-wrapper">
                <img src="Images/program-ul-1.svg" alt="">
                <ul class="program-1-ul">
                    <li class="program-title f-24">
                        Introducton to Graphic Design
                        <ul class="program-ul f-18">
                            <li>The history of design and art</li>
                            <li>Design Philosophy</li>
                            <li>Methodology of design.</li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="program-wrapper">
                <img src="Images/program-ul-2.svg" alt="">
                <ul class="program-2-ul">
                    <li class="program-title f-24">
                        Font Basics and Extensis Suitecase
                    </li>
                </ul>
            </div>


            <div class="program-wrapper">
                <img src="Images/program-ul-3.svg" alt="">
                <ul class="program-1-ul">
                    <li class="program-title f-24">
                        Computer Literacy (optonal)
                    </li>
                </ul>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="program-wrapper">
                        <img src="Images/program-ul-4.svg" class="program-numbers" alt="">
                        <ul class="program-1-ul">
                            <li class="program-title f-24">
                                Adobe Photoshop
                                <ul class="program-ul f-18">
                                    <li>Basic elements and concepts in Graphic Design</li>
                                    <li>Development of a a final design portfolio</li>
                                    <li>Learning the art board in Adobe Photoshop</li>
                                    <li>Work with layers</li>
                                    <li>Correction and improvement of digital photo</li>
                                    <li>Masks and channels</li>
                                    <li>Techniques of vectordraw</li>
                                    <li>Computer animations photo</li>
                                    <li>Portfolio creation</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 program-mobile">
                    <ul class="program-1-ul">
                        <li class="program-title f-24">
                            You’ll work on
                            <ul class="program-ul f-18">
                                <li>Photo Manipulation</li>
                                <li>Mock up scene creation </li>
                                <li>Photo Retouching</li>
                                <li>Poster Creation</li>
                                <li>Ads</li>
                                <li>Book Cover</li>
                                <li>Social Media Design</li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <div class="program-wrapper">
                        <img src="Images/program-ul-5.svg" class="program-numbers-2" alt="">
                        <ul class="program-1-ul">
                            <li class="program-title f-24">
                                Adobe Illustrator
                                <ul class="program-ul f-18">
                                    <li>Learning the art board in Adobe Illustrator</li>
                                    <li>Techniques of selection of vector graphics</li>
                                    <li>Creation and recoding of forms and objects</li>
                                    <li>Transformation of objects</li>
                                    <li>Colors and palette</li>
                                    <li>Typography design</li>
                                    <li>Work with layers</li>
                                    <li>Implementation of elements and styles</li>
                                    <li>Creation of portfolio</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 program-mobile">
                    <ul class="program-1-ul">
                        <li class="program-title f-24">
                            You’ll work on
                            <ul class="program-ul f-18">
                                <li>Illustration</li>
                                <li>Visit card</li>
                                <li>Mood board for poster</li>
                                <li>Corporate designs for companies (booklet, memorandum, logo, and business card)</li>
                                <li>Poster with theme and style of choice</li>
                                <li>Creation of the identity of any existing or premeditated firm branding</li>
                                <li>Personal monogram work</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="program-apply">
                    <div class="f-32">ПРЕЗЕМИ ЈА КОМПЛЕТНАТА ПРОГРАМА</div>
                    <div class="f-18">Внеси го твојот е-маил и очекувај ја комплетната програма на Академијата за
                        графички дизајн</div>
                    <?php 
                    require_once ('program-form.html')
                     ?>

                </div>

            </div>
            <!--row end-->
        </div>
        <!--container end-->
    </section>

    <!--PROGRAM-->

    <!--WHY CREATIVEHUB-->
    <section>
        <div id="blueBG">
            <div class="container">
                <div class="text-center mb-4 blue-title">ШТО ДОБИВАШ
                    ВО <span> CREATIVE HUB</span></div>

                <div class="text-left">
                    <ul class="ul-wyg">
                        <li>Апдејтирана програма која секоја година се подобрува</li>
                        <li>Ексклузивни визитинг предаввачи</li>
                        <li>Вежби и финален проект по секој предмет</li>
                        <li>Интерактивни и практични сесии на работа на проекти со компании</li>
                        <li>Speed Networking</li>
                        <li>Британска диплома - CPD Certificate ***** само во Creative Hub</li>
                        <li>Европски сертификат со ЕКТС кредити ***** само во Creative Hub</li>
                        <li>Стануваш дел од глобална # Facebook заедница со колеги од Приштина, Берлин...</li>
                        <li>Практични, а не теоретски предавања</li>
                        <li>Brainstorming сесии</li>
                        <li>Вечери на „дизајн дружење“ ексклузивно за студенти и Алумни</li>
                        <li>Можност за вработување во земјата или странство преку нашите партнерски компании</li>
                        <li>Пристап до нашата Hiring & Outsourcing platform</li>
                        <li>Помош со градење на твојот личен брендинг, CV и мотивационо писмо</li>
                        <li>Поврзување со компании</li>
                        <li>Хакатони</li>
                        <li>Вработување на најдобрите преку работа на реални проекти за компании</li>
                        <li>Поврзување со студенти од други Академии, градење заеднички алатки, аплицирање за ФИТР
                            проекти</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--WHY CREATIVEHUB END-->

    <!-- EVENTS AND PROJECTS -->
    <section class="blue-gradient-bg">
        <div class="container">

            <div class="text-center f-43 m-5">КРЕАТИВНИ НАСТАНИ</div>

            <div class="glide multi">
                <div data-glide-el="track" class="glide__track" data-glide-el="controls">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <div class="events-card">
                                <img src="Images/event1.png" class="max-width" alt="CreativeHub Event">
                                <h3 class="event-title">Билборд камапања со Intermezzo Music Bar</h3>
                                <p class="event-text">Во пресрет на Глобалната недела против насилство над жени,
                                    студентите фотографираа, дизајнираа и креираа целосна кампања против насилство која
                                    доби огромна медиумска поддршка.
                                </p>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="events-card">
                                <img src="Images/event2.png" class="max-width" alt="CreativeHub Event">
                                <h3 class="event-title">Креатон со Словенечка Амбасада</h3>
                                <p class="event-text">Низ 45-дневниот период 15 студенти од Академија за графички дизајн
                                    и Академија за веб дизајн на Creative Hub работеа на редизајнирање на понудата на 5
                                    македонски компании кои произведуваат македонски производи.
                                </p>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="events-card">
                                <img src="Images/event3.png" class="max-width" alt="CreativeHub Event">
                                <h3 class="event-title">Design Thinking Workshop со Факултетот за применети уметности,
                                    Љубљана</h3>
                                <p class="event-text">За студентите организиравме и solution-based approach workshop или
                                    популарно наречено design thinking со предавачи од Љубљанскиот Универзитет за
                                    применети уметности.
                                </p>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="events-card">
                                <img src="Images/event4.png" class="max-width" alt="CreativeHub Event">
                                <h3 class="event-title">Изложба: Creative Hub X NLB Gallery </h3>
                                <p class="event-text">НЛБ ги отвори вратите за изложба на црно-бели фотографии на нашите
                                    студенти.
                                </p>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="events-card">
                                <img src="Images/event5.png" class="max-width" alt="CreativeHub Event">
                                <h3 class="event-title">Изложба: Public Room 2020</h3>
                                <p class="event-text">Традиционално дипломирање на групата графички дизајнери и showcase
                                    на нивните порфолија.
                                </p>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="events-card">
                                <img src="Images/event6.png" class="max-width" alt="CreativeHub Event">
                                <h3 class="event-title">Гостин Алесандро Капоча - Италијански Вог</h3>
                                <p class="event-text">Модниот фотограф на Миранда Кер, ни беше гостин во Скопје на
                                    првиот Фотографски Workshop кој го организиравме за нашите студенти.
                                </p>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="events-card">
                                <img src="Images/event7.png" class="max-width" alt="CreativeHub Event">
                                <h3 class="event-title">Посета на Полиестердеј</h3>
                                <p class="event-text">Посета на најголемата печатница на Балканот, Полиестердеј каде
                                    студентите имаа можност да се запознаат со припрема за печат.
                                </p>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="events-card">
                                <img src="Images/event8.png" class="max-width" alt="CreativeHub Event">
                                <h3 class="event-title">Изложба: Кинотека на Македонија 2019</h3>
                                <p class="event-text">Традиционално дипломирање на групата графички дизајнери и showcase
                                    на нивните порфолија.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="glide__arrows d-none d-lg-block" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                        <img src="Images/carousel_left_arrow.png" alt="Left arrow">
                    </button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                        <img src="Images/carousel_right_arrow.png" alt="Right arrow">
                    </button>
                </div>

                <div class="text-center d-lg-none mt-2">
                    <img src="Images/mobile_carousel_icon.png" alt="carousel icon" />
                </div>
            </div>

            <div class="text-center f-43 m-5">ПРОЕКТИ</div>
                <div class="text-center pinterest"> <a data-pin-do="embedUser" style="width: 100%"
            href="https://www.pinterest.com/creativehubacademy/"></a></div>
            <!-- <div class="row text-center">
                <div class="col-md-3">
                    <img src="Images/project1.png" class="responsive" alt="CreativeHub Project">
                    <div class="project-info">Дизајн на списание</div>
                    <p>Татјана Симонова</p>
                </div>
                <div class="col-md-3">
                    <img src="Images/project2.png" class="responsive" alt="CreativeHub Project">
                    <div class="project-info">Редизајн на пакување</div>
                    <p>Сандра Наумчева</p>
                </div>
                <div class="col-md-3">
                    <img src="Images/project3.png" class="responsive" alt="CreativeHub Project">
                    <div class="project-info">Илустрација</div>
                    <p>Сандра Наумчева</p>
                </div>
                <div class="col-md-3">
                    <img src="Images/project4.png" class="responsive" alt="CreativeHub Project">
                    <div class="project-info">iStock фотографии</div>
                    <p>Викторија Мирчевска</p>
                </div>
            </div> -->

            <!-- <marquee behavior="" direction="right">
                <div class="marquee-wrapper">
                    <div class="project">
                        <img src="Images/project1.png" class="responsive" alt="CreativeHub Project">
                        <div class="project-info">Дизајн на списание</div>
                        <p>Татјана Симонова</p>
                    </div>
                    <div class="project">
                        <img src="Images/project2.png" class="responsive" alt="CreativeHub Project">
                        <div class="project-info">Редизајн на пакување</div>
                        <p>Сандра Наумчева</p>
                    </div>
                    <div class="project">
                        <img src="Images/project3.png" class="responsive" alt="CreativeHub Project">
                        <div class="project-info">Илустрација</div>
                        <p>Сандра Наумчева</p>
                    </div>
                    <div class="project">
                        <img src="Images/project4.png" class="responsive" alt="CreativeHub Project">
                        <div class="project-info">iStock фотографии</div>
                        <p>Викторија Мирчевска</p>
                    </div>
                    <div class="project">
                        <img src="Images/project5.png" class="responsive" alt="CreativeHub Project">
                        <div class="project-info">Дизајн на пакување</div>
                        <p>Џенета Незири</p>
                    </div>
                    <div class="project">
                        <img src="Images/project6.png" class="responsive" alt="CreativeHub Project">
                        <div class="project-info">Дизајн на флаер</div>
                        <p>Елена Цветаноска</p>
                    </div>
                    <div class="project">
                        <img src="Images/project7.png" class="responsive" alt="CreativeHub Project">
                        <div class="project-info">Фото манипулација</div>
                        <p>Ирена Вангеловска</p>
                    </div>
                </div>
            </marquee> -->

            <!-- <marquee behavior="" direction="left">
                <div class="marquee-wrapper">
                    <div class="project">
                        <img src="Images/project8.png" class="responsive" alt="CreativeHub Project">
                        <div class="project-info">Дизајн на постер</div>
                        <p>Ирена Вангеловска</p>
                    </div>
                    <div class="project">
                        <img src="Images/project9.png" class="responsive" alt="CreativeHub Project">
                        <div class="project-info">Дизајн на пакување</div>
                        <p>Елена Цветаноска</p>
                    </div>
                    <div class="project">
                        <img src="Images/project10.png" class="responsive" alt="CreativeHub Project">
                        <div class="project-info">Дизајн на корица</div>
                        <p>Татјана Симонова</p>
                    </div>
                    <div class="project">
                        <img src="Images/project11.png" class="responsive" alt="CreativeHub Project">
                        <div class="project-info">Дизајн на пакување</div>
                        <p>Викторија Мирчевска</p>
                    </div>
                    <div class="project">
                        <img src="Images/project12.png" class="responsive" alt="CreativeHub Project">
                        <div class="project-info">Илустрација</div>
                        <p>Христина Мазнеска</p>
                    </div>
                    <div class="project">
                        <img src="Images/project13.png" class="responsive" alt="CreativeHub Project">
                        <div class="project-info">Дизајн на пакување</div>
                        <p>Татјана Симонова</p>
                    </div>
                    <div class="project">
                        <img src="Images/project14.png" class="responsive" alt="CreativeHub Project">
                        <div class="project-info">Дизајн на фонт</div>
                        <p>Фросина Волческа</p>
                    </div>
                </div>
            </marquee> -->

            <!-- <marquee behavior="" direction="right">
                <div class="marquee-wrapper">
                    <div class="project">
                        <img src="Images/project15.png" class="responsive" alt="CreativeHub Project">
                        <div class="project-info">Дизајн на етикета</div>
                        <p>Фросина Волческа</p>
                    </div>
                    <div class="project">
                        <img src="Images/project16.png" class="responsive" alt="CreativeHub Project">
                        <div class="project-info">Дизајн на каталог</div>
                        <p>Џенета Незири</p>
                    </div>
                    <div class="project">
                        <img src="Images/project17.png" class="responsive" alt="CreativeHub Project">
                        <div class="project-info">iStock фотографии</div>
                        <p>Викторија Мирчевска</p>
                    </div>
                    <div class="project">
                        <img src="Images/project18.png" class="responsive" alt="CreativeHub Project">
                        <div class="project-info">Дизајн на пакување</div>
                        <p>Татјана Симонова</p>
                    </div>
                    <div class="project">
                        <img src="Images/project19.png" class="responsive" alt="CreativeHub Project">
                        <div class="project-info">Фото манипулација</div>
                        <p>Ирена Вангеловска</p>
                    </div>
                    <div class="project">
                        <img src="Images/project20.png" class="responsive" alt="CreativeHub Project">
                        <div class="project-info">Дизајн на пакување</div>
                        <p>Елена Цветаноска</p>
                    </div>
                    <div class="project">
                        <img src="Images/project21.png" class="responsive" alt="CreativeHub Project">
                        <div class="project-info">Дизајн на фонт</div>
                        <p>Елена Цветаноска</p>
                    </div>
                </div>
            </marquee> -->

            <div class="text-center m-5 f-43">КАДЕ РАБОТАТ НАШИТЕ СТУДЕНТИ </div>

        </div>
        <div>
            <marquee behavior="" direction="right">
                <img src="Images/student1.png" class="responsive" alt="CreativeHub Students">
                <img src="Images/student2.png" class="responsive" alt="CreativeHub Students">
                <img src="Images/student3.png" class="responsive" alt="CreativeHub Students">
                <img src="Images/student4.png" class="responsive" alt="CreativeHub Students">
                <img src="Images/student5.png" class="responsive" alt="CreativeHub Students">
                <img src="Images/student6.png" class="responsive" alt="CreativeHub Students">
            </marquee>
            <marquee behavior="" direction="left">
                <img src="Images/student7.png" class="responsive" alt="CreativeHub Students">
                <img src="Images/student8.png" class="responsive" alt="CreativeHub Students">
                <img src="Images/student9.png" class="responsive" alt="CreativeHub Students">
                <img src="Images/student10.png" class="responsive" alt="CreativeHub Students">
                <img src="Images/student11.png" class="responsive" alt="CreativeHub Students">
                <img src="Images/student12.png" class="responsive" alt="CreativeHub Students">
            </marquee>
            <marquee behavior="" direction="right">
                <img src="Images/student13.png" class="responsive" alt="CreativeHub Students">
                <img src="Images/student14.png" class="responsive" alt="CreativeHub Students">
                <img src="Images/student15.png" class="responsive" alt="CreativeHub Students">
                <img src="Images/student16.png" class="responsive" alt="CreativeHub Students">
                <img src="Images/student17.png" class="responsive" alt="CreativeHub Students">
                <img src="Images/student18.png" class="responsive" alt="CreativeHub Students">
            </marquee>
        </div>
    </section>

    <!-- EVENTS AND PROJECTS -->

    <!-- VIDEOS -->
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6">
                <img src="Images/video1.png" class="videos" alt="Video experience" data-toggle="modal"
                    data-target="#exampleModalCenter">
                <p class="f-18 mt-3"><span style="font-weight:900; color: #06928D;">Викторија Мирчевска</span> <br>
                    iStock
                </p>
            </div>
            <div class="col-md-6"><img src="Images/video2.png" class="videos" alt="Video experience" data-toggle="modal"
                    data-target="#exampleModalCenter1">
                <p class="f-18 mt-3"><span style="font-weight:900; color: #06928D;">Елена Стојановска</span> <br>
                    Progressiva PR & Media
                </p>
            </div>
            <div class="col-md-12  f-43 mt-5 mb-5">ДИЗАЈНОТ КАКО ДОПОЛНИТЕЛНА ВЕШТИНА</div>
            <div class="col-md-6"><img src="Images/video3.png" class="videos" alt="Video experience" data-toggle="modal"
                    data-target="#exampleModalCenter2">
                <p class="f-18 mt-3"><span style="font-weight:900; color: #06928D;">Софче Иванова</span> <br>
                    Советник во Сектор за меѓународна соработка, Општина Стумица
                </p>
            </div>

            <div class="col-md-6"><img src="Images/video4.png" class="videos" alt="Video experience" data-toggle="modal"
                    data-target="#exampleModalCenter3">
                <p class="f-18 mt-3"><span style="font-weight:900; color: #06928D;">Ана Јорданова Дубровска</span> <br>
                    Ко-основач на Мелем на Вкусови
                </p>
            </div>
        </div>
    </div>

    <!-- modals -->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <iframe width="auto" height="315" src="https://www.youtube.com/embed/HQLdBZ_bMNA"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <iframe width="auto" height="315" src="https://www.youtube.com/embed/_2vamlOTVyM"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <iframe width="auto" height="315" src="https://www.youtube.com/embed/GIE1UigmvL4"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <iframe width="auto" height="315" src="https://www.youtube.com/embed/if7LQ8tpyVk"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- VIDEOS -->


    <!-- FACEBOOK -->
    <div class="container mt-5">

        <div class="row fb-bg">

            <div class="col-md-8 fb-left">
                <div class="f-32 fb-title">Приклучи се на нашата #FB група за графички дизајн</div>
                <div class="f-18 fb-text">Поврзи се со алумни и студенти од други држави.</div>
                <div class="fb-link">
                    <a href="https://www.facebook.com/groups/857018105003649/" target="blank"
                        style="color:black !important">
                        <img src="Images/fb-icon.svg" class="responsive" alt="Facebook logo">
                        <span>Go to Facebook group</span>
                        <img src="Images/right.svg" class="responsive" alt="Link">
                    </a>
                </div>
                <div class="fb-people">
                    <img src="Images/fb-people.png" class="responsive" alt="Facebook people"> 250+ people joined in the
                    last 30 day
                </div>
            </div>

            <div class="col-md-4"><img src="Images/fb.png" class="fb-img" alt="CreativeHub Facebook community"></div>
        </div>

    </div><!-- Container end -->
    <!-- FACEBOOK -->



    <!-- HIRING PLATFORM -->

    <div class="hiring-bg row">
        <div class="col-md-6 hiring-left">
            <div class="f-43">
                ПЛАТФОРМА ЗА ВРАБОТУВАЊЕ
            </div>
            <p class="f-18 mb-5">Над 3000 компании ја користат нашата платформа
                за директно да се поврзат со студентите
                кои сакаат да ги вработат.
            </p>
            <a href="https://creativehub.mk/HiringPlatform/" target="blank"><button
                    class="hiring-btn">Провери</button></a>
        </div>
        <div class="col-md-6"><img src="Images/hiring.png" class="hiring-img" alt="CreativeHub Facebook community">
        </div>
    </div>

    <!-- HIRING PLATFORM -->

    <!--LOGOS-->
    <section style="background:white; padding-bottom:5%;">
        <marquee behavior="" direction="right">
            <img src="Images/logos_first_row.png" class="responsive" alt="CreativeHub Sponsors">
            <img src="Images/logos_first_row.png" class="responsive" alt="CreativeHub Sponsors">
            <img src="Images/logos_first_row.png" class="responsive" alt="CreativeHub Sponsors">
        </marquee>
        <marquee behavior="" direction="left">
            <img src="Images/logos_second_row.png" class="responsive" alt="CreativeHub Sponsors">
            <img src="Images/logos_second_row.png" class="responsive" alt="CreativeHub Sponsors">
            <img src="Images/logos_second_row.png" class="responsive" alt="CreativeHub Sponsors">
        </marquee>

        <marquee behavior="" direction="right">
            <img src="Images/logos_third_row.png" class="responsive" alt="CreativeHub Sponsors">
            <img src="Images/logos_third_row.png" class="responsive" alt="CreativeHub Sponsors">
            <img src="Images/logos_third_row.png" class="responsive" alt="CreativeHub Sponsors">
        </marquee>
    </section>
    <!--LOGOS-->

    <!-- CH TV -->
    <div class="container">
        <div class="text-center f-32">Саем за вработување за нашите студенти</div>
        <div class="text-center f-18 mt-3">Дојди со CV и најди работа.</div>
    </div>
    </div>
    <div class="text-center">
        <img src="Images/saem-ch.png" class="saem" alt="CreativeHub">
        <img src="Images/saem-ch-mobile.png" class="saem-mobile full-width" alt="CreativeHub">
        <!-- CH TV -->

        <!-- SONJA -->
        <div class="row sonja-bg">
            <div class="col-md-12"> </div>
            <div class="col-md-6 sonja-right">
                <div class="f-43">ЗАПОЗНАЈ ЈА СОЊА</div>
                <div class="f-18">Твојот регрутер за работа во странство.</div>
            </div>
            <div class="col-md-6 sonja-left"><img src="Images/sonja.png" class="sonja" alt="CreativeHub Recruter"></div>
        </div>
        <!-- SONJA -->

        <!-- CPD -->
        <div class="container">
            <div class="f-43 mt-5 text-left">ШТО ЗНАЧИ CPD СЕРТИФИКАТОТ?</div>
            <div class="row text-left">
                <div class="col-md-6 f-18 mt-5">
                    Кога аплицираш за работа во странство најчесто се бара признаена диплома. <br> <br>

                    Во Creative Hub издаваме: <br> <br>

                    CPD Certified Digital Marketer - Британски признаена диплома со која можеш да се стекнеш. <br> <br>

                    Сертификат со ЕКТС кредити.
                </div>
                <div class="col-md-6"><img src="Images/cpd.png" class="responsive" alt="CreativeHub CPD Certificate">
                </div>
            </div>

        </div>
        <!-- CPD -->


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
                                    <img src="Images/academy_card_1.png" alt="Colored object">
                                </div>
                                <div class="d-flex flex-column justify-content-between">
                                    <h5 class="academy-name">Само академија</h5>
                                    <div>
                                        <div class="academy-price">1299 <span>EUR</span></div>
                                        <div class="academy-hours">160 часа</div>
                                    </div>
                                </div>
                            </div>
                            <hr class="academy-card-hr">
                            <ul class="yellow-checkmark-list-small">
                                <li>Целосна програма (без предметот Фотографија)</li>
                                <li>Creative Hub сертификат </li>
                                <li class="x-icon">Без Европска диплома</li>
                                <li class="x-icon">Без CPD диплома</li>
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
                                    <img src="Images/academy_card_2.png" alt="Colored object">
                                </div>
                                <div class="d-flex flex-column justify-content-between">
                                    <h5 class="academy-name academy-name-small">ЕУ Сертифицирана Академија</h5>
                                    <div>
                                        <div class="academy-price">1599 <span>EUR</span></div>
                                        <div class="academy-hours">180 часа</div>
                                    </div>
                                </div>
                            </div>
                            <hr class="academy-card-hr">
                            <ul class="yellow-checkmark-list-small">
                                <li>Целосна програма (плус предметот Фотографија)</li>
                                <li>Creative Hub сертификат </li>
                                <li>Европска диплома со ЕКТС кредити</li>
                                <li class="x-icon">Без CPD диплома</li>
                                <li>#Facebook заедница</li>
                                <li>Хакатони</li>
                                <li>Пристап до платформа за вработување</li>
                                <li>Покани за настани</li>
                                <li>Гарантирана пракса или вработување</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="academy-card academy-third-card">
                    <div class="academy-card-inner">
                        <div class="d-flex flex-column">
                            <div class="d-flex">
                                <div class="mr-3">
                                    <img src="Images/academy_card_3.png" alt="Colored object">
                                </div>
                                <div class="d-flex flex-column justify-content-between">
                                    <h5 class="academy-name academy-name-small">Fast-Track Академија</h5>
                                    <div>
                                        <div class="academy-price">2999 <span>EUR</span></div>
                                        <div class="academy-hours">268 часа</div>
                                    </div>
                                </div>
                            </div>
                            <hr class="academy-card-hr">
                            <ul class="yellow-checkmark-list-small">
                                <li>Целосна програма</li>
                                <li><b>Менторство еден на еден</b></li>
                                <li><b>+ 88 часа реална работа
                                        паралелно со Академијата, која ќе го забрза процесот на стекнување на вештини
                                    </b>
                                </li>
                                <li>Creative Hub сертификат </li>
                                <li>Европска диплома со ЕКТС кредити</li>
                                <li><b>CPD диплома (Британски сертфикат)</b></li>
                                <li>#Facebook заедница </li>
                                <li>Хакатони</li>
                                <li>Пристап до платформа за вработување</li>
                                <li>Гарантирана пракса или вработување</li>
                                <li>Покана за настани</li>
                                <li>Работа со студенти од други Академии помош при изработка на проекти и аплицирање за
                                    ФИТР
                                </li>
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
                            <div class="eu-academy-radio calculator-radio-margin-right">
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
                                        <td>
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
            <div class="text-center mt-5"><a href="#form"><button class="academy-btn">Аплицирај за Академијата</button></a></div>
        </section>
        <!--End of choose academy section-->

        <!--Start of why fast academy section-->
        <section class="why-fast-track-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 wft-left text-left">
                        <h1 class="f-43 mt-3">Зошто да избереш Fast-Track Академија?</h1>
                        <h3 class="f-24 mt-3">Сакаш да работиш само 1 на 1 со ментор, 2 пати неделно, паралелно со
                            Академијата? <br> <br>
                            Избери Fast-Track Академија!</h3>
                        <br>
                        <h3 class="f-24 fw-600 mt-3">Програмата вклучува и светски признаена диплома SHRM сертификат.
                        </h3>
                    </div>
                    <div class="col-md-6">
                        <div class="why-fast-track-card">
                            <img src="Images/elena.png" class="elena" alt="CreativeHub Fast Track Student"
                                data-toggle="modal" data-target="#exampleModalCenter5">
                            <h3 class="f-18 fw-700">Елена Наскова</h3>
                            <h3 class="f-18">Студент на Fast-track Академијата за графички дизајн
                                <br> <br>
                                „Најмногу се одлучив за Fast-track Академијата, поради тоа што имаме менторски часови
                                еден на еден. Тие ни се индивидуални предавања на кои што работиме на проекти за реални
                                клиенти. Добиваме дополнителен фонд на часови и за секоја наша задача добиваме соодветен
                                фидбек. Се одлучив за Академијата по графички дизајн бидејќи се работи за премногу
                                креативна професија“
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- modal -->
        <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <iframe width="auto" height="315" src="https://www.youtube.com/embed/Nfzey8Yg41A"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <!--End of why fast academy section-->

        <!--Start of questions section-->
        <section class="calendly-section">
            <div class="container">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="d-flex flex-column calendly-questions">
                        <h5>Имаш прашања?</h5>
                        <img src="Images/stojancho.png" alt="Stojancho" />
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
        <div class="container">
        <div class="row mt-5 mb-5 uss-width">
            <div class="col-md-8 uss-left">
                <div class="f-24 fw-600 mb-3">Најбараните алатки во индустријата</div>
                <div class="f-18" style="color:#606060">Аплицирај за целосната академија за Графички дизајн или започни
                    со 10-часовен воведен курс и дознај дали графичкиот дизајн е за тебе. Програмата на Академијата ја
                    составивме според најбараните вештини за еден графички дизајнер на пазарот. </div>
            </div>
            <div class="col-md-4 text-right">
                <img src="Images/square.png" class="square-desktop" alt="Squares">
                <img src="Images/steps-img.png" class="squeare-mobile mt-5" alt="Squares">
            </div>
        </div>
        <div class="who-bg">
            <div class="f-24 who-title">
                За кого е оваа програма?
            </div>
            <div class="f-18 who-text">Оваа програма е наменета за секој што сака да работи како графички дизајнер и да
                се развие професионално во полето на дизајнот. За да започнеш со програмата не ти е потребно предзнаење,
                само желба за учење и силна мотивација!
            </div>
            <ul class="who-ul">
                <li>Комплетни почетници без никакво искуство, кои имаат за цел да изградат кариера во најперспективна
                    професија
                </li>
                <li>Секој што сака да направи промена во кариерата или да се преквалификува
                </li>
                <li>Лица кои имаат основни познавања и кои сакаат да ги надградат своите вештини
                </li>
            </ul>
        </div>

        <div class="f-24 why-title">
            Зоштo да аплицирам?
        </div>
        <ul class="why-ul">
            <li>Без ризик <br>
                <span>0% ризик бидејќи започнуваш со воведен курс кој е комплетно бесплатен</span>
            </li>
            <li>Искусни предавачи - експерти од областа <br>
                <span>Ќе учиш од искусни експерти во полето на графички дизајн </span>
            </li>
            <li>Практична програма <br>
                <span>Детална програма која се базира на работа на реални проекти</span>
            </li>
            <li>Активна заедница <br>
                <span>Ќе станеш дел од заедница каде ќе го споделуваш твоето знаење и искуство</span>
            </li>
            <li>Менторски сесии <br>
                <span>1-на-1 со ментор за да ги совладаш потешкотиите при стекнување на новите вештини</span>
            </li>
            <li>Поврзување со работодавци <br>
                <span>Кариерна помош од Creative Hub за да те поврзе со +100 компании со кои соработуваме за пракса или
                    работа на нашите студенти.</span>
            </li>
        </ul>

    </div>

    <!-- FREE -->

    <!-- BLUE PERCENT -->
    <div class="row">
        <div class="percent-bg col-md-9">
            <div class="percent">
                <div class="percent-bold">97%</div>
                <p class="f-18"> oд студентите започнуваат работа во полето на дизајнот 1-6 месеци по завршувањето на
                    Академијата </p>
            </div>

            <div class="hash">
                <div class="hash-bold">#1</div>
                <p class="f-18"> рангирана како најсреќна професија
                </p>
            </div>

            <div class="euro">
                <div class="euro-bold">500-2500 ЕУР</div>
                <p class="f-18">се движат платите на mid-to-senior графички дизајнери во Македонија
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <img src="Images/percent.png" class="percent-img" alt="">
        </div>
    </div>

    <!-- BLUE PERCENT -->

    <!-- Steps section and mentors -->

    <div class="container">

        <div class="text-center f-43 mt-5">ПАТОТ НА СТУДЕНТИТЕ ВО 4 ЧЕКОРИ</div>
        <div class="steps-text f-24">Во зависност од тебе и времето што ќе го посветиш, целата програма можеш да ја
            завршиш
            во период од 5 месеци</div>
        <div class="row">
            <div class="col-md-3">
                <div class="steps-card">
                    <div class="steps-card-title">Чекор 1
                    </div>
                    <div class="f-16 p-3">Аплицирај за воведен курс</div>
                    <ul class="steps-ul">
                        <li>Започни со учење на воведниот онлајн курс „Вовед во графички дизајн“ и провери дали оваа
                            професија е за тебе.</li>
                        <li>Запознај се со предавачите и начинот на предавање и доколку си задоволен продолжи на
                            Академијата за графички дизајн.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="steps-card">

                    <div class="steps-card-title">Чекор 2
                    </div>
                    <div class="f-16 p-3">Постави основи во знаењата и вештините во дигиталниот маркетинг</div>
                    <ul class="steps-ul">
                        <li>Надгради ги твоите основни познавања со фундаментално знаење и вештини во областа на
                            Графичкиот Дизајн.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="steps-card">
                    <div class="steps-card-title">Чекор 3</div>
                    <div class="f-16 p-3">Специјализирај се со напредна програма</div>
                    <ul class="steps-ul">
                        <li>Продолжи со обуката и навлези во напредните модули на Академијата, стекни се со неопходни
                            вештини и знаења за да започнеш со работа како графички дизајнер.</li>
                    </ul>
                    <div class="text-center"><img src="Images/steps-img.png" class="steps-img" alt="Steps"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="steps-card">
                    <div class="steps-card-title">Чекор 4
                    </div>
                    <div class="f-16 p-3">Кариерна реализација и дипломирање</div>
                    <ul class="steps-ul">
                        <li>Завршете ја комплетната програма успешно!
                        </li>
                        <li>Стекнете се со акредитирана диплома со ЕКТС кредити.
                        </li>
                        <li>Започни го процесот на вработување со нашиот Student Success Manager од Центарот за кариера
                            и вработете се во една од нашите партнерски компании или во компанија по твој избор.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

        <div class="container" id="form">
            <div class="form-footer">
                <h5>АПЛИЦИРАЈ ЗА АКАДЕМИЈА ПО ГРАФИЧКИ ДИЗАЈН</h5>
                <?php
                require_once('./academy-form.html')
                ?>
            </div>
        </div>
        <!--Second section-->
        <div class="container-fluid second-section-wrapper position-relative">
            <section class="container">
                <!-- <img class="free-img" src="Images/free.png" alt="Free img" /> -->
                <div class="second-section-bg"></div>
                <div class="d-flex flex-column align-items-center">
                    <div class="start-your-carrier">
                        <h2>АКО СЕ ДВОУМИШ ДАЛИ ОВАА ПРОФЕСИЈА Е ЗА ТЕБЕ...</h2>
                        <h3>
                            Започни со курсот „Вовед во графички дизајн“. Дознај дали графичкиот дизајн е кариерата што
                            ти
                            одговара и вклучи се во целосната програма на Академија за графички дизајн во Creative Hub!
                        </h3>

                        <div class="start-free-course d-flex flex-column">
                            <h3>Започни со <br><span>ВОВЕДЕН</span><br class="d-none d-lg-block d-xl-none"> курс</h3>
                            <img class="mentor-img d-none d-lg-block" src="Images/free_course_mentor.png"
                                alt="Mentor image">
                            <div class="steps-wrapper">
                                <div class="d-flex flex-column flex-lg-row steps-inner">
                                    <div class="d-flex step align-items-center steps-mobile">
                                        <div class="step-circle fill-step-circle">01</div>
                                        <p class="step-green-text">Воведен курс</p>
                                    </div>
                                    <div class="d-flex step align-items-center steps-mobile">
                                        <div class="step-circle">02</div>
                                        <p class="step-white-text">Основи</p>
                                    </div>
                                    <div class="d-flex step align-items-center steps-mobile">
                                        <div class="step-circle">03</div>
                                        <p class="step-white-text">Напредни вештини</p>
                                    </div>
                                    <div class="d-flex step align-items-center steps-mobile">
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
        <div class="text-center mt-5 mb-5"><a href="free-course"><button class="academy-btn">Повеќе за курсот</button></a></div>
        <?php
        require_once('../footer.php')
        ?>


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
        <script async defer src="//assets.pinterest.com/js/pinit.js"></script>

</body>

</html>