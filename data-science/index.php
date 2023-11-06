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

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">
    <link rel="shortcut icon" href="Images/favicon.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,800;0,900;1,600&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-4.6.0-dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="../node_modules/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="../node_modules/@glidejs/glide/dist/css/glide.theme.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="../bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js">
    < title > Data - Science < /title>  
    <script >
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
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
    <!--FIRST SECTION -->
    <div id="WHOLEBG">
        <div>
            <div class="container">
                <div class="row" style="color: white;">

                    <div class="col-md-6">
                        <div class="upperText text-left mt-5">
                            <h2>DATA SCIENCE<br>АКАДЕМИЈА</h2>
                            <br>
                            <p class="text-left font-18">Инвестирај во себе и стекни знаење за да започнеш кариера
                                во една
                                од најбараните и најбрзорастечки професии денес.</p>
                            <br>
                            <div>
                                <a href="#academy"><button type="button" id="enroll">Повеќе за Академијата</button></a>

                            </div>
                            <br>
                            <p class="text-left" id="career">Career possibilities:</p>
                            <h3 class="possibilities">Data Scientist | Data Integration Specialist <br>
                                Data Analytics | Data Researcher</h3>
                        </div>
                    </div>
                    <div class="col-md-6 form-header">


                        <div class="form-title">Започни со <br> воведен курс <br>
                            <span>и провери дали е оваа професија за тебе</span>
                        </div>
                        <div class="text-center mt-3"><img src="Images/course_img.png" alt="Course image"
                                class="responsive" /></div>
                        <ul class="free-course-list ps-1 mb-0 f-18">
                            <li><img src="Images/play_icon.png">6 часа снимени видео-материјали</li>
                            <li><img src="Images/wallet_icon.png">Сертификат за на LinkedIn</li>
                            <li><img src="Images/tick_square_icon.png">Задачи и истражувања</li>
                            <li><img src="Images/yellow-thick.svg" alt="Yellow check" class="yellow-check">Започнува од
                                февруари
                            </li>
                        </ul>
                        <div class="text-center mt-3"><a href="free-course"><button class="course-btn">Повеќе за
                                    курсот</button></a></div>
                        <p class="small">Првите 2 часа од курсот се бесплатни.</p>
                    </div>

                    <div class="col-md-12 posibilities-mobile">
                        <p>Career possibilities:</p>
                        <h3>Data Scientist | Data integration specialist Data Analytics |
                            Market intelligence</h3>
                    </div>

                </div>
            </div>
        </div>

        </section>
        <!--FIRST SECTION -end-->
        <div class="get-hired">ВРАБОТИ СЕ ЗА <span>1-6</span> МЕСЕЦИ ПО <span>ЗАВРШУВАЊЕТО</span></div>


        <!--GET STARTED-->


        <!-- WHO CAN GET IN THIS PROGRAM AND WHY CAREER IN DATA SCIENCE -->

        <div class="container" id="academy">
            <h2 class="wc-1 ">ЗОШТО КАРИЕРА ВО DATA SCIENCE?</h2>
            <h4 class="wc-2">Погледни ги видеата на нашите предавачи и
                дознај повеќе за програмата и Академијата.</h4>
            <p class="wc-3">Како и во секоја професија значаен е
                пристапот на предавачот. Нашите ментори на Академјата ќе ти ги пренесат нивните знаења и искуства, а
                преку програмата за вежби и реални проекти секојдневно самиот ќе се ставиш во улога на практично
                решавање на предзвици се со цел пред завршувањето на Академијата да стекнеш рутина и искуство во
                работата со податоци.</p>
            <div class="row" id="lecturersDesktop">

                <div class="col-md-6 lecturer-text">
                    <p> Горјан Поповски <br>
                        <span>Предавач на SQL, Python основен и напреден</span> <br> <br>
                        Data Scientist во Enetra, со претходно искуство во истражувачкиот институт Jožef Stefan, а со 3
                        години искуство во полето.
                    </p>
                </div>
                <div class="col-md-6"><img src="Images/lecturer1.png" class="lecturer" alt="Creativehub Lecturer"
                        data-toggle="modal" data-target="#exampleModalCenter" alt="Creativehub Lecturer">
                </div>

                <div class="col-md-6"><img src="Images/lecturer2.png" class="lecturer" alt="Creativehub Lecturer"
                        data-toggle="modal" data-target="#exampleModalCenter1" alt="Creativehub Lecturer">
                </div>
                <div class="col-md-6 lecturer-text">
                    <p> Ивана Смиљанска <br>
                        <span>Предавач на Power Bi</span> <br> <br>
                        Program, Project & Strategy Specialist, DB Schenker Head Office SEE Vienna за 12 држави од
                        регионот и 13 филијали во Австрија.
                    </p>
                </div>

                <div class="col-md-6 lecturer-text">
                    <p> Лазе Ѓорѓиев <br>
                        <span>Предавач на Machine learning напреден и основен</span> <br> <br>
                        Data Engineer во Intertec, повеќе од три години работа во аналитика и stream processing.
                    </p>
                </div>
                <div class="col-md-6"><img src="Images/lecturer3.png" class="lecturer" alt="Creativehub Lecturer"
                        data-toggle="modal" data-target="#exampleModalCenter2" alt="Creativehub Lecturer">
                </div>

                <div class="col-md-6"><img src="Images/lecturer4.png" class="lecturer" alt="Creativehub Lecturer"
                        data-toggle="modal" data-target="#exampleModalCenter3" alt="Creativehub Lecturer">
                </div>
                <div class="col-md-6 lecturer-text">
                    <p> Илија Вишинов <br>
                        <span>Предавач по предметот Математика и статистика</span> <br> <br>
                        Data Scienitst во Aurora Labs со значајно искуство во статистичка анализа на податоци, временски
                        серии и machine learning.
                    </p>
                </div>

                <div class="col-md-6 lecturer-text">
                    <p> Бошко Колоски <br>
                        <span>Предавач на SQL, Python основен и напреден</span> <br> <br>
                        ML and NLP Research Assistant со искуство во решавање на проблеми со помош на користење на
                        податоци и алгоритми.
                    </p>
                </div>
                <div class="col-md-6"><img src="Images/lecturer5.png" class="lecturer" alt="Creativehub Lecturer">
                </div>
            </div>
            <div class="glide">
                <div data-glide-el="track" class="glide__track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <div><img src="Images/lecturer1.png" class="lecturer" data-toggle="modal"
                                    data-target="#exampleModalCenter" alt="Creativehub Lecturer">
                            </div>
                            <div class="lecturer-carusel">
                                <p> Горјан Поповски <br>
                                    <span>Предавач на SQL, Python основен и напреден</span> <br> <br>
                                    Data Scientist во Enetra, со претходно искуство во истражувачкиот институт Jožef
                                    Stefan, а со 3
                                    години искуство во полето.
                                </p>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div><img src="Images/lecturer2.png" class="lecturer" data-toggle="modal"
                                    data-target="#exampleModalCenter" alt="Creativehub Lecturer">
                            </div>
                            <div class="lecturer-carusel">
                                <p> Ивана Смиљанска <br>
                                    <span>Предавач на Power Bi</span> <br> <br>
                                    Program, Project & Strategy Specialist, DB Schenker Head Office SEE Vienna за 12
                                    држави од регионот и 13 филијали во Австрија.
                                </p>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div><img src="Images/lecturer3.png" class="lecturer" data-toggle="modal"
                                    data-target="#exampleModalCenter" alt="Creativehub Lecturer">
                            </div>
                            <div class="lecturer-carusel">
                                <p> Лазе Ѓорѓиев <br>
                                    <span>Предавач на Machine learning напреден и основен</span> <br> <br>
                                    Data Engineer во Intertec, повеќе од три години работа во аналитика и stream
                                    processing.
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div><img src="Images/lecturer4.png" class="lecturer" data-toggle="modal"
                                    data-target="#exampleModalCenter" alt="Creativehub Lecturer">
                            </div>

                            <div class="lecturer-carusel">
                                <p> Илија Вишнов<br>
                                    <span>Предавач по предметот Математика и статистика</span> <br> <br>
                                    Data Scienitst во Aurora Labs со значајно искуство во статистичка анализа на
                                    податоци, временски серии и machine learning.
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div><img src="Images/lecturer5.png" class="lecturer" data-toggle="modal"
                                    data-target="#exampleModalCenter" alt="Creativehub Lecturer">
                            </div>
                            <div class="lecturer-carusel">
                                <p>Бошко Колоски<br>
                                    <span>Предавач на SQL, Python основен и напреден</span> <br> <br>
                                    ML and NLP Research Assistant со искуство во решавање на проблеми со помош на
                                    користење на податоци и алгоритми.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--row end-->
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <iframe width="auto" height="315" src="https://www.youtube.com/embed/BaGVtImtycM"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Bla8ZpAqYWk"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/h4SLEracsc4"
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
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Xle9mzAKul4"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--container-end -->
        <!--PROGRAM COMPONENT-->
        <section>
            <div class="container mb-5">
                <h2 class="program-title">ПРОГРАМА ИЗРАБОТЕНА СПОРЕД
                    ПОТРЕБИТЕ НА КОМПАНИИТЕ</h2>
                <p class="program-text">Направивме анализа на
                    пазарот на описот на работни места кои се потребни доколку сакаш да работиш како data analyst, data
                    specialist итн. Совладувањето на предметите од оваа програма ќе ти даде самодоверба да аплицираш за
                    работа по завршувањето на Академијата.</p>
                <br>
                <div class="row mb-3">

                    <div class="col-md-4">
                        <div class="programs-card">
                            <div class="programs">
                                <img src="Images/program-power-bi.png" alt="CreativeHub DataScience program">
                                <div>Power BI</div>
                            </div>
                            <p>
                                * Introduction to Power BI <br>
                                * Power Query Editor <br>
                                * Cardinality /Relationships <br>
                                * Power BI app и Visualizations <br>
                                * Intro DAX <br>
                                * DAX + AI Visuals + BI Sharepoint <br>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="programs-card">
                            <div class="programs">
                                <img src="Images/program-sql.png" alt="CreativeHub DataScience program">
                                <div>SQL</div>
                            </div>
                            <p>
                                * Концепти во релациони бази <br>
                                * Power Query Editor <br>
                                * Релациона алгебра<br>
                                * Креирање, манипулација на бази, нормализација и оптимизација <br>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="programs-card">
                            <div class="programs">
                                <img src="Images/program-big-data.png" alt="CreativeHub DataScience program">
                                <div>Big Data</div>
                            </div>
                            <p>
                                * Концепти во Big Data <br>
                                * Организирање на Big Data <br>
                                * Дистрибуирано процесирање и складирање <br>
                                * Hadoop and MapReduce <br>
                                * ML во пракса и Data Science во продукција <br>
                                * AWS and Serverless computing <br>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="programs-card">
                            <div class="programs">
                                <img src="Images/python.png" alt="CreativeHub DataScience program">
                                <div>Python 1</div>
                            </div>
                            <p>
                                * Основни концепти во Python (податочни структури, функции, контрола на тек, класи и
                                објекти) <br>
                                * Модули во Python (Numpy, Pandas) <br>
                                * Стандарди и практики во Python <br>
                                * Манипулација на податоци со Pandas <br>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="programs-card">
                            <div class="programs">
                                <img src="Images/python.png" alt="CreativeHub DataScience program">
                                <div>Python 2</div>
                            </div>
                            <p>
                                * Мултипроцесирање <br> Напредни функционални концепти<br>
                                * Numba <br>
                                * Flask, Dash, Plotly <br>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="programs-card">
                            <div class="programs">
                                <img src="Images/program-network-analysis.png" alt="CreativeHub DataScience program">
                                <div>Network analysis</div>
                            </div>
                            <p>
                                * Вовед во анализи на мрежи<br>
                                * Типови и еволуции на мрежи <br>
                                * Техники на Анализа на мрежи<br>
                                * Анализа на мрежи и машинско учење <br>
                                * Примени на анализи на мрежи <br>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="programs-card">
                            <div class="programs">
                                <img src="Images/program-statistics.png" alt="CreativeHub DataScience program">
                                <div>Статистика</div>
                            </div>
                            <p>
                                * Вовед во калкулус<br>
                                * Дескриптивни статистики
                                Веројатност <br>
                                * Баесова класификација<br>
                                * Распределби <br>
                                * Интервали на доверба <br>
                                * Тестирање хипотези <br>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="programs-card">
                            <div class="programs">
                                <img src="Images/program-machine-learning.png" alt="CreativeHub DataScience program">
                                <div>Machine
                                    learning 1</div>
                            </div>
                            <p>
                                * Вовед во калкулус<br>
                                * Дескриптивни статистики
                                Веројатност <br>
                                * Баесова класификација<br>
                                * Распределби <br>
                                * Интервали на доверба <br>
                                * Тестирање хипотези <br>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="programs-card">
                            <div class="programs">
                                <img src="Images/program-machine-learning.png" alt="CreativeHub DataScience program">
                                <div>Machine
                                    learning 2</div>
                            </div>
                            <p>
                                * Вовед во невронски мрежи<br>
                                * Вовед и работа со временски серии <br>
                                * Обработка на природни јазици<br>
                                * Препознавање на слики <br>
                                <!-- * Вовед во концептот на Encoder-Decoder Architecture<br> -->
                                * Трансформери<br>
                            </p>
                        </div>
                    </div>

                </div>
            </div> <!-- row -->
        </section>
        <!--PROGRAM COMPONENT END -->
        <!--WHY CREATIVEHUB-->
        <section>
            <div id="blueBG">
                <div class="container">
                    <h1 class="text-center mb-4 blue-title"><span id="THETEXT">ЗОШТО ДА ГО
                            ИЗБЕРЕШ </span>CREATIVE HUB</h1>
                    <div class="text-left" style="color: white;">
                        <ul style="margin-bottom:-1%" class="ul-arijana">
                            <li class="whyCHLIST"><img src="Images/check.svg">
                                <p> Академијата започнува со ПРЕТПРОГРАМА која ќе ти даде вовед во професијата</p>
                            </li>
                            <li class="whyCHLIST"><img src="Images/check.svg">
                                <p> Единствена акредитирана од Data Science Council of US, можност да се стекнеш со
                                    американски сертификат</p>
                            </li>
                            <li class="whyCHLIST"><img src="Images/check.svg">
                                <p> Покана до голем број Data Science настани за студентите како “Global Citizen Data
                                    Science”, “Virtual Ken Kennedy AI and Data Science Conference”...</p>
                            </li>
                            <li class="whyCHLIST"><img src="Images/check.svg">
                                <p> Најниска цена на Академија за Data Science</p>
                            </li>
                            <li class="whyCHLIST"><img src="Images/check.svg">
                                <p> Ќе ја повратиш инвестицијата уште во првата година од вработувањето. На пазарот има
                                    огромен недостаток од “data scientists”!</p>
                            </li>
                            <li class="whyCHLIST"><img src="Images/check.svg">
                                <p> Преку нашата “Hiring Partners” програма ќе се вработиш 1-6 месеци по завршувањето
                                </p>
                            </li>
                            <li class="whyCHLIST"><img src="Images/check.svg">
                                <p> Визитинг предавања од експерти од областа</p>
                            </li>
                            <li class="whyCHLIST"><img src="Images/check.svg">
                                <p> Вежби на кои ќе изработиш “tech алатки” кои ќе ги ставиш во портфолио</p>
                            </li>
                            <li class="whyCHLIST"><img src="Images/check.svg">
                                <p> Ќе учиш од предавачи на македонски јазик кои активно работат во data science</p>
                            </li>
                            <li class="whyCHLIST"><img src="Images/check.svg">
                                <p> Организираме “data дружби”</p>
                            </li>
                            <li class="whyCHLIST"><img src="Images/check.svg">
                                <p> Ќе запознаеш луѓе со интереси слични на твоите, ќе го прошириш кругот на
                                    пријателства </p>
                            </li>
                            <li class="whyCHLIST"><img src="Images/check.svg">
                                <p> Ќе станеш дел од нашата Facebook група на Data Science професионалци каде
                                    секојдневно споделуваме отворени работни позиции, Live стримови, Q&A сесии</p>
                            </li>
                            <li class="whyCHLIST"><img src="Images/check.svg">
                                <p> 24/7 менторска поддршка</p>
                            </li>
                            <li class="whyCHLIST"><img src="Images/check.svg">
                                <p> Ќе добиеш Европски признаен сертификат со ЕКТС кредити</p>
                            </li>
                            <li class="whyCHLIST"><img src="Images/check.svg">
                                <p> Работа на реални проекти по секој предмет според програмата како и бонус проекти за
                                    партнерски компании</p>
                            </li>
                            <li class="whyCHLIST"><img src="Images/check.svg">
                                <p> Хакатони со студенти од други Академии</p>
                            </li>
                            <li class="whyCHLIST"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--WHY CREATIVEHUB END-->
        <!-- CV PROJETS-->
        <section style="background:white">
            <div class="container">
                <div class="projects-title">ПРОЕКТИ ИЗРАБОТЕНИ ОД ПРЕТХОДНИТЕ ГРУПИ</div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="projects-card">
                            <img src="Images/project1.png" class="responsive" alt="CreativeHub Students Project">
                            <div class="card-text">
                                <h3 class="pc-mobile-1">Quarterly Report for Production Plant</h3>
                                <p class="pc-mobile-2">По завршувањето на предмeтот Power BI & SQL студентите креираат
                                    извештај по нивен
                                    избор
                                    на дизајн со спецификации по земја, продажен агент, производ и производствен погон.
                                    <br>
                                    <br>

                                    Од извештајот ги прикажаа трошоците на производство, вредноста на продажбата и
                                    профитот.
                                    <br> <br>

                                    Дополнително изработија вижуали за картица трошок на производ поврзана со мапа на
                                    држави, продажни единици, вкупна продажба по сегмент итн. <br>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="projects-card">
                            <img src="Images/project2.png" class="responsive" alt="CreativeHub Students Project">
                            <div class="card-text">
                                <h3 class="pc-mobile-1">Strategic Report for Unemployment Rate Q1 2021
                                </h3>
                                <p class="pc-mobile-2"> Студентите имаа задача преку стекнатото знаење да изработат
                                    извештај со голем број
                                    податоци според
                                    бројот на невработеност по индустрии и индекс.
                                    <br>
                                    <br>
                                    Преку работата со функции ги сортираа податоците во насока на тоа што целиот
                                    извештај доби визуелен
                                    и автоматизиран приказ и во иднина може да се користи за стратешки цели.
                                    <br> <br>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="data-title">DATA НЕТВОРКИНГ</div>
                <div class="data-text">За студентите од Академијата обезбедивме бесплатни карти за глобални Data Science
                    настани. </div>
                <div class="row">
                    <div class="col-md-6"><img src="Images/data1.png" class="responsive"
                            alt="Creativehub Data Networking"></div>
                    <div class="col-md-6"><img src="Images/data2.png" class="responsive"
                            alt="Creativehub Data Networking"></div>
                </div>
            </div>
        </section>

        <marquee class="marquee-1">
            СЛЕДИ ЈА АКАДЕМИЈАТА ОНЛАЈН&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;СЛЕДИ ЈА АКАДЕМИЈАТА ОНЛАЈН
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;СЛЕДИ ЈА АКАДЕМИЈАТА ОНЛАЈН
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;СЛЕДИ ЈА АКАДЕМИЈАТА ОНЛАЈН
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;СЛЕДИ ЈА АКАДЕМИЈАТА ОНЛАЈН
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;СЛЕДИ ЈА АКАДЕМИЈАТА ОНЛАЈН
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;СЛЕДИ ЈА АКАДЕМИЈАТА ОНЛАЈН
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;СЛЕДИ ЈА АКАДЕМИЈАТА ОНЛАЈН &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </marquee>

        <br>
        <div class="container-fluid mt-4">
            <div class="text-center">
                <img src="Images/places.png" style="width: 80%; height:auto;" id="places_destop">
                <img src="Images/placesmob.png" class="responsive" id="places_mobile">
            </div>

        </div>
        <!--IMAGES AND CALENDLY SECTION-->
        <section style="background-color:#1D1A41">

            <div class="container">
                <div class="row">
                    <div class="col-md-6" style="color: white;">
                        <br>
                        <h3 class="any-q">
                            Имаш прашања?
                        </h3>
                        <br>
                        <div class="text-center"><img src="Images/stojancho.png" style="width:50%; height: auto;"></div>
                        <br>
                        <p class="text-left">
                            Пријави се и закажи онлајн состанок со Стојанчо.
                            Дознај повеќе за програмата, условите за плаќање и почетокот на следната група.

                        </p>
                    </div>

                    <div class="col-md-6 calendly" style="padding-top:7% !Important">
                        <div class="calendly-inline-widget" data-url="https://calendly.com/stojanco_ch"
                            style="min-width:320px;height:630px;"></div>
                        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"
                            async>
                        </script>
                    </div>
                </div>

            </div>

        </section>
        <!--IMAGES AND CALENDLY SECTION END -->

        <!-- CV PROJETS-->
        <div class="container">
            <div class="row" id="companiesDesktop">
                <div class="col-md-12 companies-title">KОМПАНИИ УЧЕСНИЦИ НА POWER BI ПРОГРАМАТА </div>
                <div class="col-md-4">
                    <div class="power-bi-companies">
                        <img src="Images/navodnici.png" class="navodnici" alt="Sign">
                        <p>„Особено ми се допадна што имавме и домашни задачи, што правеше да сме вкучени во процесот.
                            Исто така, огромниот број дополнителни извештаи што ни ги даде Ивана ни помага да имаме
                            вистински примери за разгледување“ <br> <br> </p>
                        <div class="companies-people">
                            <img src="Images/company1.png" class="responsive" alt="Company name">
                            Теодора Стефановска,
                            Microsoft Dynamics 365 Finance and Operations Implementer, Seavus
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="power-bi-companies">
                        <img src="Images/navodnici.png" class="navodnici" alt="Sign">
                        <p>„Големо благодарам до предавачот кој многу професионално ја водеше обуката и не се штедеше во
                            сите објаснувања и одговори на нашите прашања. Посебно ми се допадна нејзиниот методолошки
                            пристап и пренесувањето на нејзиното знаење. Многу ефективна обука!“</p>
                        <div class="companies-people">
                            <img src="Images/company2.png" class="responsive" alt="Company name">
                            Катерина Бутикоска Панајотова, Times & Methods Specialist, KEMET Electronics Macedonia
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="power-bi-companies">
                        <img src="Images/navodnici.png" class="navodnici" alt="Sign">
                        <p>„Ивана е одличен предавач, ги поедноставува работите и ги прави јасни и за почетници како
                            мене. Уживам во предавањата“ <br> <br> <br> <br> <br> </p>
                        <div class="companies-people">
                            <img src="Images/company3.png" class="responsive" alt="Company name">
                            Емилија Каранфиловиќ,
                            Law Specialist & HR Admin,
                            Gulf Oil Macedonia
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="power-bi-companies">
                        <img src="Images/navodnici.png" class="navodnici" alt="Sign">
                        <p>„Предавањата поминаа одлично. Сите на почеток бевме збунети кога се соочивме сами со
                            изработка на проект но задоволна сум со оглед на фактот дека беа онлајн.“ <br> <br> <br>
                            <br>
                        </p>
                        <div class="companies-people">
                            <img src="Images/company4.png" class="responsive" alt="Company name">
                            Весна Петрова,
                            Senior Software Analyst,
                            Еуролинк Осигурување
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="power-bi-companies">
                        <img src="Images/navodnici.png" class="navodnici" alt="Sign">
                        <p>„Професионалност и висок степен на квалитет. Здоволна сум од предавањата за бизнис аналитика
                            и сметам дека се корисни за стратешкиот менаџмент на компанијата.“ <br> <br> <br>
                        </p>
                        <div class="companies-people">
                            <img src="Images/company5.png" class="responsive" alt="Company name">
                            Ана Живковиќ Крстевска,
                            директор на финансии,
                            Кроациа Осигурување
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="power-bi-companies">
                        <img src="Images/navodnici.png" class="navodnici" alt="Sign">
                        <p>„Обуката беше доста интересна и Ивана успеа да ни пренесе дел од нејзиното знаење. Голема
                            тема опфативме на овие часови и мислам дека ќе биде корисна и ќе може дел од она што го
                            научивме да го примениме.“ <br> <br>
                        </p>
                        <div class="companies-people">
                            <img src="Images/company6.png" class="responsive" alt="Company name">
                            Лилија Џокова,
                            Еуролинк Осигурување
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="power-bi-companies">
                        <img src="Images/navodnici.png" class="navodnici" alt="Sign">
                        <p>„Ивана е одлична во својата работа и многу добро го познава репортингот во бизнис аналитика (
                            Power BI ) . Успеав да покријам многу непознаници и основни прашања и за мене курсот беше
                            многу добра основа.
                            Отвореноста на Ивана за разговор, за прашања, трпеливоста при бараната репетитивност да
                            научиме и потврдиме знаење навистина ми остави впечаток.“
                        </p>
                        <div class="companies-people">
                            <img src="Images/company7.png" class="responsive" alt="Company name">
                            Габриела Сотировска,
                            Senior Project Manager,
                            Netcetera
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="glide1">
            <div class="academy-cards-title">ИЗБЕРИ АКАДЕМИЈА ШТО <br> НАЈМНОГУ ТИ ОДГОВАРА</div>
            <div data-glide-el="track" class="glide__track">
                <ul class="glide__slides">
                    <li class="glide__slide">
                        <div class="power-bi-companies">
                            <img src="Images/navodnici.png" class="navodnici" alt="Sign">
                            <p>„Особено ми се допадна што имавме и домашни задачи, што правеше да сме вкучени во
                                процесот.
                                Исто така, огромниот број дополнителни извештаи што ни ги даде Ивана ни помага да имаме
                                вистински примери за разгледување“</p>
                            <div class="companies-people">
                                <img src="Images/company1.png" class="responsive" alt="Company name">
                                Весна Петрова,
                                Senior Software Analyst,
                                Еуролинк Осигурување
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="power-bi-companies">
                            <img src="Images/navodnici.png" class="navodnici" alt="Sign">
                            <p>„Големо благодарам до предавачот кој многу професионално ја водеше обуката и не се
                                штедеше во
                                сите објаснувања и одговори на нашите прашања. Посебно ми се допадна нејзиниот
                                методолошки
                                пристап и пренесувањето на нејзиното знаење. Многу ефективна обука!“</p>
                            <div class="companies-people">
                                <img src="Images/company2.png" class="responsive" alt="Company name">
                                Весна Петрова,
                                Senior Software Analyst,
                                Еуролинк Осигурување
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="power-bi-companies">
                            <img src="Images/navodnici.png" class="navodnici" alt="Sign">
                            <p>„Ивана е одличен предавач, ги поедноставува работите и ги прави јасни и за почетници како
                                мене. Уживам во предавањата“ </p>
                            <div class="companies-people">
                                <img src="Images/company3.png" class="responsive" alt="Company name">
                                Емилија Каранфиловиќ,
                                Law Specialist & HR Admin,
                                Gulf Oil Macedonia
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="power-bi-companies">
                            <img src="Images/navodnici.png" class="navodnici" alt="Sign">
                            <p>„Предавањата поминаа одлично. Сите на почеток бевме збунети кога се соочивме сами со
                                изработка на проект но задоволна сум со оглед на фактот дека беа онлајн.“
                            </p>
                            <div class="companies-people">
                                <img src="Images/company4.png" class="responsive" alt="Company name">
                                Весна Петрова,
                                Senior Software Analyst,
                                Еуролинк Осигурување
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="power-bi-companies">
                            <img src="Images/navodnici.png" class="navodnici" alt="Sign">
                            <p>„Професионалност и висок степен на квалитет. Здоволна сум од предавањата за бизнис
                                аналитика
                                и сметам дека се корисни за стратешкиот менаџмент на компанијата.“
                            </p>
                            <div class="companies-people">
                                <img src="Images/company5.png" class="responsive" alt="Company name">
                                Ана Живковиќ Крстевска,
                                директор на финансии,
                                Кроациа Осигурување
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="power-bi-companies">
                            <img src="Images/navodnici.png" class="navodnici" alt="Sign">
                            <p>„Обуката беше доста интересна и Ивана успеа да ни пренесе дел од нејзиното знаење. Голема
                                тема опфативме на овие часови и мислам дека ќе биде корисна и ќе може дел од она што го
                                научивме да го примениме.“
                            </p>
                            <div class="companies-people">
                                <img src="Images/company6.png" class="responsive" alt="Company name">
                                Лилија Џокова,
                                Еуролинк Осигурување
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="power-bi-companies">
                            <img src="Images/navodnici.png" class="navodnici" alt="Sign">
                            <p>„Ивана е одлична во својата работа и многу добро го познава репортингот во бизнис
                                аналитика (
                                Power BI ) . Успеав да покријам многу непознаници и основни прашања и за мене курсот
                                беше
                                многу добра основа.
                                Отвореноста на Ивана за разговор, за прашања, трпеливоста при бараната репетитивност да
                                научиме и потврдиме знаење навистина ми остави впечаток.“
                            </p>
                            <div class="companies-people">
                                <img src="Images/company7.png" class="responsive" alt="Company name">
                                Габриела Сотировска,
                                Senior Project Manager,
                                Netcetera
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>




        <!--HIRING PLATFORM-->
        <section class="hiring-margin">
            <div class="container-fluid" style="background-color: #141236;color:white;padding-bottom:30px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <br>
                            <h3 class="platform-title">ПЛАТФОРМА ЗА <br>ВРАБОТУВАЊЕ</h3>
                            <p class="platform-text">
                                На нашата веб страна можете да ја погледнете платформата за вработување. По завршувањето
                                на Академијата добивате “долгогодишен” пристап независно дали барате работа или пак сте
                                отворени за работа на проект.
                                <br>
                                Оваа платформа ја развивме за Вас, за полесно и директно да бидете контактирани од
                                компаниите.

                            </p>
                            <a href="../../HiringPlatform"><button type="button" class="check-btn"
                                    style="background-color:white;color:#793CCF;border-radius: 12px; margin-bottom:5%;">Провери</button></a>

                        </div>
                        <div class="col-md-6">
                            <img src="Images/hiringpic.png" id="hiringpic">
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!--HIRING PLATFORM-->
        <section style="background:white; padding: 3% 0%;">
            <marquee behavior="" direction="right">
                <img src="Images/marquee1.png" class="responsive" alt="CreativeHub Sponsors">
                <img src="Images/marquee1.png" class="responsive" alt="CreativeHub Sponsors">
                <img src="Images/marquee1.png" class="responsive" alt="CreativeHub Sponsors">
            </marquee>
            <marquee behavior="" direction="left">
                <img src="Images/marquee2.png" class="responsive" alt="CreativeHub Sponsors">
                <img src="Images/marquee2.png" class="responsive" alt="CreativeHub Sponsors">
                <img src="Images/marquee2.png" class="responsive" alt="CreativeHub Sponsors">
            </marquee>

            <marquee behavior="" direction="right">
                <img src="Images/marquee3.png" class="responsive" alt="CreativeHub Sponsors">
                <img src="Images/marquee3.png" class="responsive" alt="CreativeHub Sponsors">
                <img src="Images/marquee3.png" class="responsive" alt="CreativeHub Sponsors">
            </marquee>
        </section>
        // SONJA DASCA AND PERCENTS
        <section style="background:rgba(29, 26, 65, 1);">

            <div class="container mt-5 mb-5 d-none d-lg-block">
                <div class="row sonja-bg">
                    <div class="col-md-6"><img src="Images/sonja.png" class="sonja-img" alt="Creative Hub regruter">
                    </div>
                    <div class="col-md-6 sonja-text text-center">
                        <div>ЗАПОЗНАЈ ЈА СОЊА</div>
                        <p>Твојот регрутер за работа во странство.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-5">
                    <h3 class="certificate">СЕРТИФИКАТ</h3>
                    <br>
                    <h4 class="cetificate-text">Стекни се со американски и
                        <br>европски признаен сертификат
                    </h4>
                    <br>

                </div>
                <div class="card" id="laptopcard">
                    <div class="row g-0" style="color: white;">
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">Преку патнерството со “Data Science Council of US” на студентите им
                                    даваме можност да се стекнат со признаена диплома еднаква на онаа во САД и ЕУ.
                                    <br>
                                    Како Акредитирана институција издаваме и додаток на диплома со ЕКТС кредити кои
                                    можете да го приложите кога аплциирате за работа во странство.

                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="Images/laptop.png" id="laptop">
                        </div>
                        <img src="Images/dasca.png" id="shrmPaper">

                    </div>

                </div>
                <div class="why-title">ЗОШТО ДА ИЗБЕРЕШ ALL ACCESS АКАДЕМИЈА?</div>
                <div class="row why-bg">
                    <div class="col-md-6 why-left">
                        САКАШ ДА РАБОТИШ ВО <span style="color:red">С</span> А <span style="color:blue">Д</span> ?
                    </div>
                    <div class="col-md-6 why-right">Третата опција е наменета за студенти кои сакаат да работат во
                        странски
                        компании и на кои им е потребна
                        амеркански верификувана диплома. DASCA (Data Science Council of US е официјалното акредитационо
                        тело
                        на
                        американскиот пазар кое ги верификува програмите во оваа област.</div>
                </div>
            </div>

        </section>

        <!--ACADEMY CARDS SECTION-->

        <section class="mt-5">
            <div class="container">

                <div class="academy-cards-title">ИЗБЕРИ АКАДЕМИЈА ШТО <br> НАЈМНОГУ ТИ ОДГОВАРА</div>

                <div class="row" style="color: white;">

                    <div class="col-md-4">
                        <div class="card academyCARDS" style="width:auto;" id="red">
                            <div class="academytitle mt-2">
                                <img src="Images/shape1.jpg" class="card-img-top responsive academyIMG" alt="...">
                                <div class="text-left">
                                    <div class="academy-title">САМО АКАДЕМИЈА</div>
                                    <br>
                                    <h2 class="academy-price">2450 <span>EUR</span></h2>
                                    <span class="hours">152 часа</span>
                                </div>


                            </div>
                            <hr style="width: 90%;margin-left:auto;margin-right:auto">
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="text-left" style="color: white;">
                                        <ul style="padding: 0 !important;" cl>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>Претпрограма</p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p> Целосна програма</p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>Creative Hub сертификат</p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/x.svg">
                                                <p> Без eвропска диплома со ЕКТС кредити</p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/x.svg">
                                                <p>Без aмерикански сертификат - DASCA</p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>#Facebook заедница </p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>Реални проекти</p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p> Пристап до платформа за вработување</p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>Соработка со компании за потенцијално вработување и конкретна задача
                                                </p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>Поврзување со консалтинг компании кои регрутираат junior data
                                                    scientist за странски пазар </p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>Покана за data science настани</p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>0% камата за плаќање на рати</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card academyCARDS " style="width:auto;" id="green">
                            <div class="academytitle mt-2">
                                <img src="Images/shape2.jpg" class="card-img-top responsive academyIMG" alt="...">
                                <div class="text-left">
                                    <div class="academy-title">ЕУ СЕРТИФИЦИРАНА АКАДЕМИЈА</div>

                                    <h2 class="academy-price">2650 <span>EUR</span></h2>
                                    <span class="hours">152 часа</span>
                                </div>


                            </div>
                            <hr style="width: 90%;margin-left:auto;margin-right:auto">
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="text-left" style="color: white;">
                                        <ul style="padding: 0 !important;">
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>Претпрограма</p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p> Целосна програма</p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>Creative Hub сертификат</p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>Европска диплома со ЕКТС кредити</p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/x.svg">
                                                <p>Без aмерикански сертификат - DASCA</p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>#Facebook заедница </p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>Реални проекти</p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p> Пристап до платформа за вработување</p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>Соработка со компании за потенцијално вработување и конкретна задача
                                                </p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>Поврзување со консалтинг компании кои регрутираат junior data
                                                    scientist за странски пазар </p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>Покана за data science настани</p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>0% камата за плаќање на рати</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card academyCARDS " style="width:auto;" id="orange">
                            <div class="academytitle mt-2">
                                <img src="Images/shape3.jpg" class="card-img-top responsive academyIMG" alt="...">
                                <div class="text-left">
                                    <div class="academy-title">ALL ACCESS</div>
                                    <br>
                                    <h2 class="academy-price"><b>7000</b> <span>EUR</span></h2>
                                    <span class="hours">152 часа</span>
                                </div>


                            </div>
                            <hr style="width: 90%;margin-left:auto;margin-right:auto">
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="text-left" style="color: white;">
                                        <ul style="padding: 0 !important;">
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>Претпрограма</p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p> Целосна програма</p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>Creative Hub сертификат</p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p> Европска диплома со ЕКТС кредити</p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>Американски сертификат - DASCA</p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>#Facebook заедница </p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>Реални проекти</p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p> Пристап до платформа за вработување</p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>Соработка со компании за потенцијално вработување и конкретна задача
                                                </p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>Поврзување со консалтинг компании кои регрутираат junior data
                                                    scientist за странски пазар </p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>Покана за data science настани</p>
                                            </li>
                                            <li class="whyCHLIST"><img src="Images/TickSquare.svg">
                                                <p>0% камата за плаќање на рати</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--ACADEMY CARDS SECTION END-->
        <!--CALCULATOR SECTION-->
        <br><br>
        <section>

            <div class="container mt-5" id="calculator">
                <div class="text-center">
                    <h1 style=" font-weight:900; font-size:40px;">КАЛКУЛАТОР</h1>
                    <h4 style="font-size:24px"><b>за пресметка на месечните трошоци </b></h4>
                </div>
                <div id="calculator">
                    <div class="row">
                        <div class="col-md-8">
                            <div id="testing">
                                <div>
                                    <div class="calculator-flex">
                                        <h4 class="input-type">
                                            Програма:
                                        </h4>
                                        <form id="payments">
                                            <label class="label">2450 €
                                                <input type="radio" id="firstpay" name="pay" value="2450">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="label">2650 €
                                                <input type="radio" id="secondpay " name="pay" value="2650">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="label">7000 €
                                                <input type="radio" id="secondpay " name="pay" value="7000">
                                                <span class="checkmark"></span>
                                            </label>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <form id="reponses">
                                    <h4 class="input-type">
                                        Број на рати:
                                    </h4>
                                    <table class="table-width">
                                        <tbody>
                                            <tr style="font-weight:900">
                                                <td>
                                                    <label for="answer_1">наеднаш</label>
                                                </td>
                                                <td>
                                                    <label for="answer_2">7 </label>
                                                </td>
                                                <td>
                                                    <label for="answer_3">15 </label>
                                                </td>
                                                <td>
                                                    <label for="answer_4">24 </label>
                                                </td>
                                                <td>
                                                    <label for="answer_5">36 </label>
                                                </td>
                                                <td>
                                                    <label for="answer_6">50 </label>
                                                </td>
                                            </tr>
                                            <tr class="line">
                                                <td style="width: 20%;">
                                                    <input name="answer" id="answer_1" type="radio" value="0">
                                                    <br>
                                                </td>
                                                <td>
                                                    <input name="answer" id="answer_2" type="radio" value="7">
                                                    <br>
                                                </td>
                                                <td>
                                                    <input name="answer" id="answer_3" type="radio" value="15">
                                                    <br>
                                                </td>
                                                <td id="Payinput">
                                                    <input name="answer" id="answer_4" type="radio" value="24">
                                                    <br>
                                                </td>
                                                <td>
                                                    <input name="answer" id="answer_5" type="radio" value="36">
                                                    <br>
                                                </td>
                                                <td>
                                                    <input name="answer" id="answer_6" type="radio" value="50">
                                                    <br>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4" style="padding-top: 50px; text-align: center;">
                            <div id="result1">
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <h6 class="text-center" style="padding-bottom: 25px; font-size:18px; font-weight:500; color:white;">
                        Можност за финансирање на 15, 36 или 50 рати преку NLB Bank или Halkbank</h6>
                </div>
            </div>
        </section>
        <!--CALCULATOR SECTION END-->
        <section style="background-color:#1D1A41">

            <!--raspored-->
            <div class="container-fluid text-center">
                <h1 class="scaduale-title">РАСПОРЕД НА АКАДЕМИЈАТА
                </h1>
            </div>
            <div class="text-center">
                <img src="Images/raspored.png" id="scadualeDesktop">
                <img src="Images/scaduale-mobile.png" class="responsive" id="scadualeMobile" alt="">
            </div>


            <div class="container">
                <div class="row technologies mt-5 mb-5">
                    <div class="col-md-9">
                        <h5>Најбараните алатки во индустријата</h5>
                        <p>
                            Аплицирај за целосната Data-science Академија, или започни со воведен 10 часовен курс и
                            дознај дали кодирањето е за тебе. Програмата на Академијата ја составивме според она што
                            се најбараните вештини за еден front-end developer на пазарот: Python, Machine Learning,
                            Power BI, Network Analysis & Big Data.
                        </p>
                    </div>

                    <div class="col-md-3">
                        <img src="Images/tehnologies.png" class="tehnologies-dekstop" alt="Tehnologies">
                        <img src="Images/tehnologies-mobile.png" class="tehnologies-mobile" alt="Tehnologies">
                    </div>
                </div>
            </div>
        </section>
        <!--Raspored-end -->
        <!-- WHY CAREER IN DATA SCIENCE -->

        <section class="why-start-bg">
            <div class="container">

                <div class="why-apply">
                    <h3>Зоштo да аплицирам?</h3>
                    <ul class="check-list-1">
                        <li><img src="Images/check.svg">
                            Без ризик
                            <p>0% ризик бидејќи започнуваш со воведен курс кој е комплетно бесплатен</p>
                        </li>
                        <li><img src="Images/check.svg">Искусни предавачи - експерти од областа
                            <p>Ќе учиш од некои од најпроминентните “data” експерти во Македонија</p>
                        </li>
                        <li><img src="Images/check.svg">Практична програма
                            <p>In-depth програма која се базира на работа на реални проекти</p>
                        </li>
                        <li> <img src="Images/check.svg">Активна заедница
                            <p>Ќе станеш дел од заедница каде ќе го споделуваш твоето знаење и искуство</p>
                        </li>
                        <li> <img src="Images/check.svg">Менторски сесии
                            <p>1-на-1 со ментор за да ги совладаш потешкотиите при стекнување на новите вештини</p>
                        </li>
                        <li> <img src="Images/check.svg">Поврзување со работодавци
                            <p> Кариерна помош од Creative Hub за да те поврзе со +100 компании со кои соработуваме за
                                пракса или работа на нашите студенти.</p>
                        </li>
                    </ul>
                </div>

                <div class="four-steps-title">ПАТОТ НА СТУДЕНТИТЕ <br> ВО 4 ЧЕКОРИ</div>
                <div class="four-steps-text">Во зависност од тебе и времето што ќе го посветиш, целата програма можеш да
                    ја завршиш во период од 9 месеци
                </div>

                <div class="row">

                    <div class="col-md-3">
                        <div class="four-steps-card-1" style="border-bottom: 1px solid #E8505B;">
                            <div class="four-steps-card-title">
                                <span>Чекор 1</span> <br>
                                Аплицирај за воведен курc
                            </div>
                            <ul class="check-list">
                                <li><img src="Images/check.svg">Започни со учење на воведниот курс “Вовед во Data
                                    Science” и дознај дали оваа професија е за тебе</p>
                                </li>
                                <li><img src="Images/check.svg">Помини го успешно <br>
                                    <p>приемниот испит и продолжи да учиш во
                                        целосната Data Science акредитирана програма.</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="four-steps-card-1" style="border-bottom: 1px solid #FCCC6B">
                            <div class="four-steps-card-title">
                                <span>Чекор 2</span> <br>
                                Постави основи во знаењата и вештините во “data science”
                            </div>
                            <ul class="check-list">
                                <li><img src="Images/check.svg">Награди ги твоите основни познавања со фундаментално
                                    знаење и вештини во областа на data science.
                                    </p>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="four-steps-card-1" style="border-bottom: 1px solid #A56EF4">
                            <div class="four-steps-card-title">
                                <span>Чекор 3</span> <br>
                                Специјализирај се со напредна програма
                            </div>
                            <ul class="check-list">
                                <li><img src="Images/check.svg">Продолжи со обуката <br>
                                    <p> и навлези во напредните модули на Академијата, стекни се со
                                        неопходни вештини за да започнеш работа како data scientist.</p>
                            </ul>
                            <div class="text-center"><img src="Images/four-card-img.png" style="padding: 0% 5%;"
                                    class="responsive" alt="CreativeHub steps to data science"></div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="four-steps-card-1" style="border-bottom: 1px solid #43E8E1">
                            <div class="four-steps-card-title">
                                <span>Чекор 4</span> <br>
                                Кариерна реализација и дипломирање
                            </div>
                            <ul class="check-list">
                                <li><img src="Images/check.svg">Започни со учење на <br>
                                    <p> бесплатниот курс “Вовед во Data
                                        Science” и дознај дали оваа професија е за тебе.</p>
                                </li>
                                <li><img src="Images/check.svg">Помини го успешно <br>
                                    <p>приемниот испит и продолжи да учиш во
                                        целосната Data Science акредитирана програма.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <br>
            </div>
        </section>


        <div class="container">
            <div class="form-footer">
                <h5>АПЛИЦИРАЈ ЗА АКАДЕМИЈА ПО ДИГИТАЛЕН МАРКЕТИНГ</h5>
                <?php
                    require_once('./academy-form.html')
                    ?>
            </div>
            <br>
        </div>

    </div>
    <!--Second section-->
    <div class="container-fluid second-section-wrapper position-relative">
        <section class="container">
            <div class="second-section-bg"></div>
            <div class="d-flex flex-column align-items-center">
                <div class="start-your-carrier">
                    <h2>Стартувај ја твојата високо платена Data кариера!</h2>
                    <h3>
                        Започни со бесплатен воведен курс во Data Science и вклучи се во целосната програма по Data
                        Science на Creative Hub!
                    </h3>
                    <div class="start-free-course d-flex flex-column">
                        <h3>Започни со <br><span>ВОВЕДЕН</span><br class="d-none d-lg-block d-xl-none"> курс</h3>
                        <img class="mentor-img d-none d-lg-block" src="Images/free_course_mentor.png"
                            alt="Mentor image">
                        <div class="steps-wrapper">
                            <div class="d-flex flex-column flex-lg-row steps-inner">
                                <div class="d-flex step align-items-center">
                                    <div class="step-circle fill-step-circle">01</div>
                                    <p class="step-orange-text">Воведен курс</p>
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
                            <li>Онлајн, во време кое тебе ти одговара
                            </li>
                            <li>Самостојна работа на задачи</li>
                            <li>Менторска сесија со приклучување во живо</li>
                            <li>Сертификат по успешното завршување на финалната задача</li>
                        </ul>
                    </div>
                </div>

                <div class="text-center mt-5 mb-5"><a href="free-course"><button class="free-course-btn">Повеќе за курсот</button></a></div>

            </div>
        </section>
    </div>

    <!--End of second section-->


    <?php 
        require_once ('../footer.php')
        ?>

    <script defer src="../node_modules/@glidejs/glide/dist/glide.min.js"></script>
    <script async src="script.js"></script>
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