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

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../navbar.css">
    <link rel="stylesheet" href="../../footer.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="stylesheet" href="../../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap-4.6.0-dist/css/bootstrap.min.css">

    <link rel="shortcut icon" href="Images/favicon.png" type="image/x-icon">

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
            <script src="../../bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js">

    <title>HR Free Course</title>
    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
</head>

<body>
    <?php
require_once('../navbar.php');
?>
    <div class="d-flex d-lg-block flex-column">
        <div class="sticky-card order-2 order-lg-0">
            <div class="sticky-card-inner">
                <div class="sticky-card-title">Регистрирај се тука за воведниот online курс</div>
                <?php
                 require_once('../course-form.html')
                ?>
            </div>
        </div>

        <div class="page-header order-1 order-lg-1">
            <br><br>
            <div class="col-lg-6">
                <h1 class="title"> ЗАПОЧНИ ДЕНЕС СО ТВОЈАТА КАРИЕРА ВО ЧОВЕЧКИ РЕСУРСИ</h1>
                <p class="text-left page-description">
                Стартувај со бесплатен воведен курс во човечки ресурси и доколку си задоволен продолжи со целосната програма на Aкадемија за човечки ресурси на Creative Hub. 

                </p>
                <br>
            </div>
        </div>

        <div class="page-bg order-3">
            <div class="sticky-container">
                <div class="cards">
                    <div class="cards-inner">
                        <div class="card-title">
                            ШТО КЕ НАУЧИШ?
                        </div>
                        <p>
                            На сесиите на курсот за човечки ресурси ќе се разговара за улогата на HR-от во компанијата,
                            ќе се демистифицираат темите и термините од областа на HR. <br> <br>

                            Слушателите ќе имаат можност да навлезат во професијата, да ја разберат и да ја засакаат. Ќе
                            слушнат примери од вистински искуства и ќе се мотивираат самите да навлезат во материјалот
                            преку голем број истражувања и студии на случај кои ќе ги работат. Ќе работат на домашни и
                            задачи и ќе изработат самите проект за визијата за иднината на HR тимовите.

                        </p>
                    </div>
                </div>

                <div class="cards">
                    <div class="cards-inner">
                        <div class="card-title">
                            ПРОГРАМА
                        </div>
                        <div class="card-ul">
                            <div class="d-flex align-items-center mb-3">
                                <div class="item-number">01</div>
                                <div class="item-text">Што преставува менаџментот <br> на човечки ресурси?</div>
                                <div class="item-free">Бесплатно</div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="item-number">02</div>
                                <div class="item-text">Стратегии и управување <br> со човечки ресурси</div>
                                <div class="item-free">Бесплатно</div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="item-number">03</div>
                                <div class="item-text">Процес на управување со перформанси</div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="item-number">04</div>
                                <div class="item-text">Работни односи</div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="item-number">05</div>
                                <div class="item-text">Регрутација и селекција</div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="item-number">06</div>
                                <div class="item-text">Компензација и бенефиции</div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="item-number">07</div>
                                <div class="item-text">Селектори и својства</div>
                            </div>
                        </div>

                        <div class="lecturer-card d-flex flex-column flex-lg-row">
                            <div>
                                <img class="d-none d-lg-block" src="Images/mentor.png" alt="Creativehub Lecturer">
                            </div>
                            <div class="lecturer-card-text ms-3">
                                Предавач: <b>Стефан Јовановски</b>
                                <br><br>
                                Директор на одделот за човечки ресурси во А1 Македонија со 20 години работно искуство.
                                Предавач по предметите Регрутација и селекција и Перформанс Менаџмент.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cards">
                    <div class="cards-inner">
                        <div class="card-title">
                            ЗА КОГО Е ОВАА ПРОГРАМА?
                        </div>
                        <p class="mb-4">
                            Оваа програма е наменета за секој што сака да започне да работи како HR и да се развие
                            професионално во полето на човечки ресурси. За да започнеш со програмата не ти е потребно
                            предзнаење, само силна мотивација!
                        </p>
                        <ul class="ms-2 ps-0">
                            <li class="d-flex align-items-center">
                                <img class="h-100" src="Images/yellow_tick.png">
                                <p class="m-0 ms-2">
                                    Комплетни почетници без никакво искуство, кои имаат за цел да изградат кариера во HR
                                    индустријата
                                </p>
                            </li>
                            <li class="d-flex align-items-center">
                                <img src="Images/yellow_tick.png">
                                <p class="m-0 ms-2">Секој што сака да направи промена во кариерата или да се
                                    преквалификува</p>
                            </li>
                            <li class="d-flex align-items-center">
                                <img src="Images/yellow_tick.png">
                                <p class="m-0 ms-2">Лица кои имаат основни познавања и кои сакаат да ги надградат своите
                                    вештини1</p>
                            </li>   
                        </ul>
                    </div>
                </div>
                <div class="card-title questions-title">КАКО ДА ЗАПОЧНАМ?</div>
                    <div class="how-to-start-wrapper">
                        <div class="hts-element">
                            <div class="text-center"><img src="Images/how-to-start1.svg" alt="Register"></div>
                            <p>1.Регистрирај се на формата</p>
                        </div>
                        <div class="hts-element">
                            <div class="text-center"><img src="Images/how-to-start2.svg" alt="Register"></div>
                            <p>2. Добиј пристап до 2 бесплатни часа</p>
                        </div>
                        <div class="hts-element">
                            <div class="text-center"><img src="Images/how-to-start3.svg" alt="Register"></div>
                            <p>3. Плати и добиј целосен пристап до сите часови </p>
                        </div>
                    </div>
                    <div class="card-title questions-title">КОЛКУ ЧИНИ КУРСОТ?</div>
                    <p class="f-18" style="color:grey">Цената на курсот зависи од тоа колку време сакаш да имаш пристап
                        до материјалите.</p>
                    <div class="row">
                    <div class="col-md-8">
                        <div class="access-card">
                            <div class="access-card-title">
                                НЕОГРАНИЧЕН ПРИСТАП <br>
                                <span>1299 </span> мкд <br>
                                <p>плаќањето се врши преку банка, на жиро сметка</p>
                            </div>
                            <ul class="yellow-checkmark-list-small">
                                <li>првите 2 часа бесплатно</li>
                                <li>неограничен пристап</li>
                                <li>задача после секој завршен модул</li>
                                <li>сертификат што може да го споделиш на LinkedIn</li>
                            </ul>
                        </div>
                    </div>
                    </div>

                    <div class="card-title questions-title mt-3">ОДЛУЧИ САМ</div>
                    <p class="f-18" style="color:grey">Види дали професијата е за тебе, приклучи се на Академијата и
                        стани професионалец во сферата.</p>
                    <div class="cards-purple">
                        <div class="cards-inner-purple">
                            <p class="grey-text">ЧЕКОР 1</p>
                            <div class="card-purple-title">
                                БЕСПЛАТЕН КУРС
                            </div>
                            <p class="grey-text">
                                ‚‚Ѕирни‘‘ во професијата! <br> <br>

                                Погледни ја динамиката на работа, околината, типот на обврските и основните начела на
                                дигиталниот маркетинг пред да се одлучиш за кариерно насочување.
                            </p>
                        </div>
                    </div>
                    <div class="text-center mt-5 mb-5"><img src="Images/arrow.png" class="responsive" alt="Arrow"></div>
                    <div class="cards-purple-1">
                        <div class="cards-inner-purple">
                            <p class="grey-text">ЧЕКОР 2</p>
                            <div class="card-purple-title">
                            НАПРЕДНА ПРОГРАМА
                            </div>
                            <p class="grey-text">
                            Стани професионалец! <br> <br>

                            Научи ги сите алатки и принципи на дигиталениот маркетинг.
                            </p>
                            <a href="../"><button class="academy-link">Повеќе за Академијата</button></a>
                        </div>
                    </div>
                    <div class="card-title questions-title mt-5">ПРАШАЊА И ОДГОВОРИ</div>

                    <div class="p-2">
                        <div class="accordion-item">
                            <div class="accordion-item-inner">
                                <button class="accordion position-relative">
                                    <div class="pe-4">Што претставува курсот “ Вовед во Човечки Ресурси ”?
                                    </div>
                                </button>
                                <div class="panel">
                                    <br>
                                    <p class="m-0">
                                        Академијата за Човечки Ресурси на Creative Hub започнува со курсот
                                        „ Вовед во HR “. Овој курс го воведовме за сите оние кои не се сигурни дали оваа
                                        професија е правилниот избор за нив. Воедно сакаме да дадеме можност да се
                                        запознаете со предавачите и целосниот систем на програмата на Академијата. Ќе
                                        имате можност да работите домашни и задачи, преку кои со самостојно истражување
                                        и напор ќе треба да дојдете до решение на барањето и за истото ќе добиете и
                                        соодветна оценка. <br> <br>

                                        Воведниот курс за Човечки Ресурси се финализира со испит, кој доколку успешно го
                                        положите ќе Ви обезбеди место на програмата на Академијата за Човечки Ресурси.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr class="accordion-hr">

                        <hr class="accordion-hr">
                        <div class="accordion-item">
                            <div class="accordion-item-inner">
                                <button class="accordion position-relative">
                                    <div class="pe-4">Како е распоредот за курсот и до кога трае пријавувањето за
                                        истиот?
                                    </div>  
                                </button>
                                <div class="panel">
                                    <br>
                                    <p class="m-0">
                                        Курсот е онлајн, станува збор за снимени видеа што значи дека курсот може да го
                                        слушаш со твое темпо - кога тебе ти одговара.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr class="accordion-hr">

                        <div class="accordion-item">
                            <div class="accordion-item-inner">
                                <button class="accordion position-relative">
                                    <div class="pe-4">Како да го купам курсот?</div>
                                </button>
                                <div class="panel">
                                    <br>
                                    <p class="m-0">
                                        Курсот можеш да го купиш со уплата во банка на нашата жиро сметка, додека не
                                        имплементираме онлајн плаќање. Доколку си заинтересиран, јави ни се на +389 71
                                        214 849.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr class="accordion-hr">

                        <div class="accordion-item">
                            <div class="accordion-item-inner">
                                <button class="accordion position-relative">
                                    <div class="pe-4">Колку долго ќе имам пристап до видеата?</div>
                                </button>
                                <div class="panel">
                                    <br>
                                    <p class="m-0">
                                        Пристапот до курсот ќе ти биде отворен зависно од тоа која опција ќе ја купите.
                                        Има две опции: пристап од <b>еден месец за 1299 денари</b> или пристап од
                                        <b>шест месеца за 2999 денари</b>.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr class="accordion-hr">

                        <div class="accordion-item">
                            <div class="accordion-item-inner">
                                <button class="accordion position-relative">
                                    <div class="pe-4">Колку време е потребно за да дипломирам и да се вработам?
                                    </div>
                                </button>
                                <div class="panel">
                                    <br>
                                    <p class="m-0">
                                        Во просек студентите ја завршуваат програмата за 5 месеци, и се вработуваат од 1
                                        до 6 месеци по завршувањето. Со оглед на фактот дека станува збор за нова
                                        професија од која се повеќе има потреба на пазарот на труд доколку стекнете
                                        вештини и навистина се посветите нема да имате проблем во изнаоѓање на работа
                                        како Менаџер за човечки ресурси.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr class="accordion-hr">

                        <div class="accordion-item">
                            <div class="accordion-item-inner">
                                <button class="accordion position-relative">
                                    <div class="pe-4">Kолку чини Академијата? </div>
                                </button>
                                <div class="panel">
                                    <br>
                                    <p class="m-0">
                                         Цената на Академијата варира во зависност од
                                        тоа дали ќе изберете Само Академија ( 1299 ЕУР) , ЕУ Сертифицирана ( 1599 ЕУР)
                                        или Fast-track Академија (2999 ЕУР) што вклучува +88 часови и 1-на-1 менторски
                                        сесии 2 пати неделно.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr class="accordion-hr">

                        <div class="accordion-item">
                            <div class="accordion-item-inner">
                                <button class="accordion position-relative">
                                    <div class="pe-4">Кои се кариерните можности по завршувањето на Академијата?</div>
                                </button>
                                <div class="panel">
                                    <br>
                                    <p class="m-0">
                                        За време на Академијата нашите предавачи ќе го следат Вашиот перформанс и ќе
                                        добивате константен фидбек за Вашите резултати. Ако навистина се посветите и
                                        имате високи поени пред да завршите со програмата, нашиот Координатор за
                                        вработување ќе ви ги претстави отворените позиции кај нашите партнерски компании
                                        и ќе Ви помогне добро да се претставите со CV и портфолио за да можете да
                                        започнете со работа.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr class="accordion-hr">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        require_once('../footer.php')
        ?>
    </div>

    <script>
    const acc = document.getElementsByClassName("accordion");
    let i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            const panel = this.nextElementSibling;
            panel.parentElement.classList.add('accordion-item-inner')
            panel.parentElement.parentElement.classList.add('accordion-item')
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
    </script>

    <script src="../../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>