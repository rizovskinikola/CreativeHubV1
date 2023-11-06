  const config ={
    type:'carousel',
    perView:4,
    breakpoints: {
      1024:{perView: 2},
      700:{perView:1}
    }
  }
  new Glide('.glide', config).mount()
  const config1 ={
    type:'carousel',
    perView:4,
    breakpoints: {
      1024:{perView: 2},
      700:{perView:1}
    }
  }
  new Glide('.glide1', config1).mount()
  const track = {
    pay: null,
    answer: null,
  };
  $(document).ready(function(){
    $("#exampleModalCenter").on('hidden.bs.modal', function(e) {
      $("#exampleModalCenter iframe").attr("src", $("#exampleModalCenter iframe").attr("src"));
  });
  $("#exampleModalCenter1").on('hidden.bs.modal', function(e) {
      $("#exampleModalCenter1 iframe").attr("src", $("#exampleModalCenter1 iframe").attr("src"));
  });
  $("#exampleModalCenter2").on('hidden.bs.modal', function(e) {
      $("#exampleModalCenter2 iframe").attr("src", $("#exampleModalCenter2 iframe").attr("src"));
  });
  $("#exampleModalCenter3").on('hidden.bs.modal', function(e) {
      $("#exampleModalCenter3 iframe").attr("src", $("#exampleModalCenter3 iframe").attr("src"));
  });
  });
  document.querySelectorAll("input").forEach((el) =>
  
    el.addEventListener("change", (e) => {
      const type = e.target.name;
      const value = e.target.value;
      track[type] = value;
  
      let selected_element = document.getElementById('result1');
  
      if(track.pay != null && track.answer != null) {
        if(track.answer === "0") {
          selected_element.innerHTML ="Месечно ќе издвојувам по" + track.pay + "€";
        } else {
          selected_element.innerHTML = "Месечно ќе издвојувам " + "<br>" + Math.round(Number(track.pay) / Number(track.answer)) + "€"
        }
        selected_element.style.padding = '3px';
        selected_element.style.color = '#FFFFFF';
        selected_element.style.padding = '8%';
        selected_element.style.backgroundColor = 'black';
      }
    })
  );
  (function(e,t,o,n,p,r,i){e.visitorGlobalObjectAlias=n;e[e.visitorGlobalObjectAlias]=e[e.visitorGlobalObjectAlias]||function(){(e[e.visitorGlobalObjectAlias].q=e[e.visitorGlobalObjectAlias].q||[]).push(arguments)};e[e.visitorGlobalObjectAlias].l=(new Date).getTime();r=t.createElement("script");r.src=o;r.async=true;i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)})(window,document,"https://diffuser-cdn.app-us1.com/diffuser/diffuser.js","vgo");
  vgo('setAccount', '651120725');
  vgo('setTrackByDefault', true);

  vgo('process');




