var bac1=document.getElementById("qOne")
var hide1=document.getElementById("aOne")
bac1.style.backgroundColor="grey";
hide1.style.display="block";
bac1.addEventListener("click", function(){
var color=bac1.style.backgroundColor;
switch(color) {
    case "grey":
        bac1.style.backgroundColor="white";
        hide1.style.display="none";
        break;
    case "white":
        bac1.style.backgroundColor="grey";
        hide1.style.display="block";
        break;
    default:        
} 
});
var bac2=document.getElementById("qTwo")
var hide2=document.getElementById("aTwo")
bac2.style.backgroundColor="white";
hide2.style.display="none";
bac2.addEventListener("click", function(){
var color=bac2.style.backgroundColor;
switch(color) {
    case "white":
        bac2.style.backgroundColor="grey";
        hide2.style.display="block";
        break;
    case "grey":
        bac2.style.backgroundColor="white";
        hide2.style.display="none";
        break;
    default:        
} 
});
var bac3=document.getElementById("qThree")
var hide3=document.getElementById("aThree")
bac3.style.backgroundColor="white";
hide3.style.display="none";
bac3.addEventListener("click", function(){
var color=bac3.style.backgroundColor;
switch(color) {
    case "white":
        bac3.style.backgroundColor="grey";
        hide3.style.display="block";
        break;
    case "grey":
        bac3.style.backgroundColor="white";
        hide3.style.display="none";
        break;
    default:        
} 
});
var bac4=document.getElementById("qFour")
var hide4=document.getElementById("aFour")
bac4.style.backgroundColor="white";
hide4.style.display="none";
bac4.addEventListener("click", function(){
var color=bac4.style.backgroundColor;
switch(color) {
    case "white":
        bac4.style.backgroundColor="grey";
        hide4.style.display="block";
        break;
    case "grey":
        bac4.style.backgroundColor="white";
        hide4.style.display="none";
        break;
    default:        
} 
});
var bac5=document.getElementById("qFive")
var hide5=document.getElementById("aFive")
bac5.style.backgroundColor="white";
bac5.addEventListener("click", function(){
var color=bac5.style.backgroundColor;
switch(color) {
    case "white":
        bac5.style.backgroundColor="grey";
        hide5.style.display="block";
        break;
    case "grey":
        bac5.style.backgroundColor="white";
        hide5.style.display="none";
        break;
    default:        
} 
});
var bac6=document.getElementById("qSix")
var hide6=document.getElementById("aSix")
bac6.style.backgroundColor="white";
bac6.addEventListener("click", function(){
var color=bac6.style.backgroundColor;
switch(color) {
    case "white":
        bac6.style.backgroundColor="grey";
        hide6.style.display="block";
        break;
    case "grey":
        bac6.style.backgroundColor="white";
        hide6.style.display="none";
        break;
    default:        
} 
});
var bac7=document.getElementById("qSeven")
var hide7=document.getElementById("aSeven")
bac7.style.backgroundColor="white";
bac7.addEventListener("click", function(){
var color=bac7.style.backgroundColor;
switch(color) {
    case "white":
        bac7.style.backgroundColor="grey";
        hide7.style.display="block";
        break;
    case "grey":
        bac7.style.backgroundColor="white";
        hide7.style.display="none";
        break;
    default:        
} 
});

    
const config2 ={
    type:'carousel',
    perView:3,
    breakpoints: {
      1024:{perView: 2},
      600:{perView:1}
    }
  }
  new Glide('.glide2', config2).mount()

var glideMulti = new Glide('.glide', {
    type: 'carusel',
    autoplay: 2000,
    animationDuration: 1000,
    perView: 3,
    breakpoints: {
    1024:{perView: 2},
    600:{perView:1}
    }    
  });
  glideMulti.mount();

  var glideMulti1 = new Glide('.glide1', {
    type: 'carusel',
    autoplay: 2000,
    animationDuration: 500,
    perView: 3,
    breakpoints: {
    1024:{perView: 2},
    600:{perView:1}
    }    
  });
  glideMulti1.mount();
  const config3 ={
    type:'carousel',
    perView:3,
    breakpoints: {
      1024:{perView: 2},
      600:{perView:1}
    }
  }
  new Glide('.glide3', config3).mount()
  
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

  