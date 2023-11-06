$(document).ready(function () {
    // Projects carousel
    new Glide('.glide', {
        type: 'carousel',
        startAt: 0,
        perView: 3,
        gap: 15,
        breakpoints: {
            758: {
                perView: 1
            },
            992: {
                perView: 2
            }
        }
    }).mount()
    // End of projects carousel

    // Feedbacks carousel
    new Glide('.feedback-glide', {
        type: 'carousel',
        startAt: 0,
        perView: 2,
        gap: 15,
        peek: {before: 0, after: 150},
        breakpoints: {
            758: {
                perView: 1,
                peek: 0
            },
            992: {
                perView: 2,
                peek: 0
            }
        }
    }).mount()
    // End of feedbacks carousel

    // Alumni carousel
    new Glide('.alumni-glide', {
        type: 'carousel',
        startAt: 0,
        perView: 3,
        gap: 27,
        breakpoints: {
            758: {
                perView: 1,
                gap: 16
            },
            992: {
                perView: 2,
                gap: 16
            }
        }
    }).mount()
    // End of alumni carousel

    // Our students carousel
    new Glide('.our-students-glide', {
        type: 'carousel',
        startAt: 0,
        perView: 4,
        gap: 10,
        breakpoints: {
            758: {
                perView: 2,
                gap: 16
            },
            992: {
                perView: 3,
                gap: 16
            }
        }
    }).mount()
    // End of our students carousel

    // Own business carousel
    new Glide('.own-business-glide', {
        type: 'carousel',
        startAt: 0,
        perView: 2,
        gap: 16,
        breakpoints: {
            992: {
                perView: 1
            }
        }
    }).mount()
    // End of own business carousel

    // Events carousel
    new Glide('.events-glide', {
        type: 'carousel',
        startAt: 0,
        perView: 3,
        gap: 16,
        breakpoints: {
            758: {
                perView: 1
            },
            992: {
                perView: 2
            }
        }
    }).mount()
    // End events carousel

    // Mentors mobile carousel
    new Glide('.mentors-mobile-glide', {
        type: 'carousel',
        startAt: 0,
        perView: 1
    }).mount()
    // End mentors mobile carousel

    // Directors
    const directorsMap = {
        'panajotis': {
            text: 'Дигиталната маркетинг Академија претставуваше одлична можност за нас да си ги прошириме видиците, ' +
                'полесно да ги идентификуваме нашите недостатоци, да се реорганизираме и да ја ре-етаблираме нашата ' +
                'стратегија, на тој начин подобро наоѓајќи и пристапувајќи до нашите ниши и тоа преку дигиталните ' +
                'канали, кои не само што им помогнаа на нашите вработени да го прават тоа побрзо, поефикасно и ' +
                'технолошки понапредно, туку и за нашите гости да ни пристапат полесно и да ги имаат сите информации ' +
                'достапни на едноставен и покомпактен начин. \n' +
                'Тоа е win-win ситуација, како за нас така и за нашите клиенти и гости.',
            link: 'https://faktor.mk/promovirame-kompanii-koi-vlozuvaat-vo-edukacija-na-svoite-vraboteni'
        },
        'gjorgji': {
            text: 'Бидејки го проширивме нашиот бизнис и добивме многу поголем спектар на услуги, решивме да ' +
                'инвестираме нешто во самите себе и во нашата компанија за да го \n' +
                'искористиме тоа на најдобар можен начин \n' +
                'и да бидеме по ефикасни  и препознатливи на пазарот.',
            link: 'https://faktor.mk/fitnes-instruktor-chija-kompanija-investira-vo-svoite-vraboteni-promovirame-uspeshni-prikazni-'
        },
        'elena': {
            text: 'Сметам дека постојано треба да се надоградуваме себеси, \n' +
                'и навистина сум презадоволна од соработката со Вас \n' +
                'и Вашата Aкадемија за Дигитален Маркетинг.',
            link: 'https://faktor.mk/predizvikot-da-rabotish-vo-semejna-firma-uspeshnata-prikazna-na-elena-lazova'
        },
        'melina': {
            text: 'Сите предавања ни се достапни во секое време.\n' +
                'Тоа е особено ми се допадна, бидејќи со започнувањето на нашиот бизнис понекогаш се случува и да немаме време.',
            link: 'https://creativehub.mk/blog/akademija-za-digitalen-marketing-uspesni-kompanii/'
        },
        'angela': {
            text: 'Секоја компанија има обврска кон своите вработени, да ги поддржи во нивниот развој, да ги мотивира ' +
                'да ги извршуваат своите работни обврски, да бидат \n' +
                'извонредни во тоа што го прават, континуирано да ги развијат нивните компетенции, а со тоа ќе ги ' +
                'поттикнеме за личен развој, ќе им овозможиме подобра иднина, а со тоа тие ќе  влијаат на развојот' +
                ' на компанијата и заедницата.',
            link: 'https://creativehub.mk/blog/sopstvenicko-duo-koe-vlozuva-vo-akademija-za-digitalen-marketing/'
        }
    }

    let mobileBtn;
    let mobileText;

    const createMobileBtn = (director) => {
        mobileBtn = document.createElement("button")
        mobileBtn.classList.add('director-see-more')
        mobileBtn.classList.add('w-100')
        mobileBtn.classList.add('mt-3')
        mobileBtn.innerText = 'Види повеќе';
        mobileBtn.addEventListener("click", () => window.open(directorsMap[director].link, '_blank'))
    }

    const createMobileText = (director) => {
        mobileText = document.createElement("p")
        mobileText.innerText = directorsMap[director].text;
    }

    const onMobileDirectorSelection = (director) => {
        Object.keys(directorsMap).forEach(key => document.getElementById('director-mobile-' + key).style.display = 'none')
        const directorEl = document.getElementById('director-mobile-' + director);
        mobileBtn && mobileBtn.remove();
        mobileText && mobileText.remove();

        createMobileBtn(director);
        createMobileText(director)

        directorEl.append(mobileText);
        directorEl.append(mobileBtn);
        directorEl.style.display = 'block'
    }

    let directorLink = 'https://faktor.mk/promovirame-kompanii-koi-vlozuvaat-vo-edukacija-na-svoite-vraboteni';
    document.getElementById('director-btn').addEventListener("click", () => window.open(directorLink))
    onMobileDirectorSelection('panajotis') // Init mobile

    Array.from(document.getElementsByClassName('company-box')).forEach(el => {
        const director = el.dataset.director;
        const companyBoxElement = el;

        el.addEventListener("click", () => {
            // For mobile
            onMobileDirectorSelection(director)
            // End mobile
            document.getElementById('director-text').innerText = directorsMap[director].text;
            directorLink = directorsMap[director].link;
            removeSelectedClass();
            companyBoxElement.classList.add('selected');
        }, false)
    })

    const removeSelectedClass = () => {
        Array.from(document.getElementsByClassName('company-box')).forEach(el => {
            el.classList.remove('selected')
        })
    }
    // End of directors

    // Our students modals
    $("#klimentina-video").on('hidden.bs.modal', function (e) {
        $("#klimentina-video iframe").attr("src", $("#klimentina-video iframe").attr("src"));
    });
    $("#sofija-video").on('hidden.bs.modal', function (e) {
        $("#sofija-video iframe").attr("src", $("#sofija-video iframe").attr("src"));
    });
    // End of our students modals

    // Feedback modals
    $("#bizbee-video").on('hidden.bs.modal', function (e) {
        $("#bizbee-video iframe").attr("src", $("#bizbee-video iframe").attr("src"));
    });
    $("#marketing-video").on('hidden.bs.modal', function (e) {
        $("#marketing-video iframe").attr("src", $("#marketing-video iframe").attr("src"));
    });
    $("#power-video").on('hidden.bs.modal', function (e) {
        $("#power-video iframe").attr("src", $("#power-video iframe").attr("src"));
    });
    // End of feedback modals

    // Calculator
    const calculatorPrice = document.getElementById('calculator-monthly-price');
    const calculatorPriceBox = document.getElementById('calculator-price-box');
    const calculator = {
        type: null,
        rati: null,
    }

    document.getElementsByName('calculator-rati').forEach((el) =>
        el.addEventListener("change", (e) => {
            calculator.rati = parseInt(e.target.value);
            canCalculate();
            calculate();
        })
    );

    document.getElementsByName('academy-price').forEach((el) =>
        el.addEventListener("change", (e) => {
            calculator.type = parseInt(e.target.value);
            canCalculate();
            calculate();
        })
    );

    const canCalculate = () => {
        if (calculator.rati != null && parseInt(calculator.type) > 0) {
            calculatorPriceBox.style.visibility = 'visible';
        } else {
            calculatorPriceBox.style.visibility = 'hidden';
        }
    }

    const calculate = () => {
        if (calculator.rati === 0) {
            calculatorPrice.innerHTML = calculator.type + ' €';
        } else {
            const price = Math.round(Number(calculator.type) / Number(calculator.rati));
            calculatorPrice.innerHTML = price + ' €';
        }
    }
    // End of calculator
});

