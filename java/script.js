jQuery(document).ready(function(){

    var $this = $('.program');
    if ($this.find('div').length > 2) {
        $('.program').append('<div><a href="javascript:;" class="showMore"></a></div>');
    }
    
    // If more than 2 Education program, hide the remaining
      $('.program .program-1').slice(0,3).addClass('shown');
      $('.program .program-1').not('.shown').hide();
      $('.program .showMore').on('click',function(){
          $('.program .program-1').not('.shown').toggle(300);
          $(this).toggleClass('showLess');
      });
  
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

  