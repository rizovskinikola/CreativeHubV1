$(document).ready(function () {
    $("#nikolaMentorModal").on('hidden.bs.modal', function (e) {
        $("#nikolaMentorModal iframe").attr("src", $("#nikolaMentorModal iframe").attr("src"));
    });
    $("#sasheMentorModal").on('hidden.bs.modal', function (e) {
        $("#sasheMentorModal iframe").attr("src", $("#sasheMentorModal iframe").attr("src"));
    });

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
});

