<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">

     
    <!--GOOGLE FONDS--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,800;0,900;1,600&display=swap" rel="stylesheet">
 

    <!--GOOGLE FONDS--->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>




    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-4.6.0-dist/css/bootstrap.min.css">


    <link rel="shortcut icon" href="Images\favicon.png" type="image/x-icon">
  


    <title>Power-BI & SQL</title>
    <script>
        $(document).ready(function() {

            $("a").on('click', function(event) {


                if (this.hash !== "") {
                    background: #FFA928;

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
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '950882672134128');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=950882672134128&ev=PageView&noscript=1"
/></noscript>
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
    

<!--BELOW NAVBAR SECTION-->

<section>
 <div id='header'>

 <div class="container">
  <div class="text-center" style="padding-bottom:30px">
     <h3 class="text-center" style="font-weight:900;font-size:40px;color:#FAFAFA;padding-top:700px" id="thePadding">ШТО Е ВСУШНОСТ MICROSOFT POWER BI?</h3>
      <img src="Images/line.png" class="responsive">
  </div>
 </div>


 </div>



</section>
<button onclick="topFunction()" id="myBtnScroll" title="Go to top"> <img src="arrow.png" alt="Go top " class="responsive"></button>

<!--BELOW NAVBAR SECTION--END-->

<!--THE PROGRAM SECTION-->
<section>
    <div id="secondBG">
        <div class="container" style="color: white;">
            <div id="text" class="text-center">
               <h4 class="text-left" style="font-size:18px">Power BI е збир на софтверски сервиси, апликации и врски меѓу податоци кои ги претвораат неповрзаните бази на податоци во интерактивни, взаемно поврзани и интелигентни визуализации на посакуваните информации.<br> Oвозможува лесно поврзување со изворите на податоци, визуализација и генерирање на извештаи, временски серии, предвидувања и останати прикази.</h4>
            </div>
            <br>
            <h6 class="text-center" style="font-weight:800;font-size:32px">ПРЕТПРОГРАМА</h6>
            <h5 class="text-center"style="font-weight:800;font-size:25px">Затоа што сметаме дека воведот во темата е важен.</h5>
            <br>
            <div class="row text-center">
                <div class="col-md-4">
                    <iframe id="firstVideo" width="auto" height="auto" src="https://www.youtube.com/embed/NAb2xRH2LD0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <iframe id="secondVideo" width="auto" height="auto" src="https://www.youtube.com/embed/-qcjKTx-dXA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <iframe id="thirdVideo" width="auto" height="auto" src="https://www.youtube.com/embed/bNhCDW8SdIY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
               <br>
               <div id="buttons">
                <a href="#singUp"> <button type="button" class="btn btn-dark" id="imIn" style="width:200px"><b>Се пријавувам!</b></button> </a>
                </div>
                <br>
            </div>
            <br>
            <h5 style="font-weight: 900;font-size: 30px; color: #1D1A42;margin-bottom:0" class="text-center">ЗА КОГО Е НАМЕНЕТ ОВОЈ КУРС?</h5>
            <br>
        </div>
    </div>

    <div class="text-center">
     <img src="Images/forwhois.png" class="responsive" id="forwhois_destop" style="width: -webkit-fill-available;">
     <img src="Images/forwhois_mobile.png" class="responsive" id="forwhois_mobile" style="width: -webkit-fill-available;">
 
 </div>
</section>

<!--THE PROGRAM SECTION--END-->


<!--THIS SECTION NEEDS FIXING-->


<section>
   <div id="thirdBG" >
    <div class="container">
        <br>
        <h5 style="font-weight: 800; font-size: 30px;" class="text-center">ЗOШТО Е ОВОЈ КУРС ДОБАР ЗА КОМПАНИИТЕ?</h5>
        <div class="row">
            <div class="col-md-4">
              <img src="Images/card1.png" class="responsive" alt="Зошто е курсот битен?">
            </div>
            <div class="col-md-4">
                <img src="Images/card2.png" class="responsive" alt="Зошто е курсот битен?">

            </div>
            <div class="col-md-4">
                <img src="Images/card3.png" class="responsive" alt="Зошто е курсот битен?">

            </div>

        </div>
    </div>
</div>
</section>
<br><br>
<div class="container text-center">
        <h4 class="text-center" style="font-weight:800;font-size:32px;">Компаниите кои ги унапредија знаењата на своите вработени</h4>
        <img src="Images/secondLine.png" class="responsive">
    </div>
<!--COMPANY SECTION-->
<br>
<img src="Images/logos.png" class="responsive" alt="logos" id="logos1"style="    width: -webkit-fill-available;">
<img src="Images/logos2.png" class="responsive" alt="logos" id="logos2">
<br>
<section>
   <div class="container" style="text-align: -webkit-center;">
       <h5 class="text-left" style="font-weight: 900;font-size: 30px;">ШТО ВКЛУЧУВА ПРОГРАМАТА?</h5>
       <img src="Images/program_destop.png" class="responsive" alt="Програма" id="program_destop">
       <img src="Images/program_mobile.png" class="responsive" alt="Програма" id="program_mobile">

        <br><br>
        <h5 class="text-right" style="font-weight: 900;font-size: 28px;">ПРОГРАМА ПОДГОТВЕНА <br>ОД ВРВЕН ПРОФЕСИОНАЛЕЦ</h5>
        <br>
        <img src="Images/ivana.png" class="responsive" alt="Profesionalec" id="ivana">
        <img src="Images/ivana_mobile.png" class="responsive" alt="Profesionalec" id="ivana_mob">
        <br><br>

        <!--IVANA MOBILE MISING-->
        <h4 class="text-left" style="font-weight: 900;font-size: 33px;">АЛУМНИТЕ ВЕЛАТ:</h4>
        <img src="Images/alumni.png" class="responsive" alt="Alumni" id="alumni_destop">
        <img src="Images/alumni_mobile.png" class="responsive" alt="Alumni" id="alumni_mobile">
        
        <img src="Images/below_alumni_destop.png" class="responsive" alt="Alumni" id="Balumni_destop">
        <img src="Images/below_alumni_mobile.png" class="responsive" alt="Alumni" id="Balumni_mobile">

   </div>
</section>

<!--COMPANY SECTION END -->

<!--ABOVE FORM-->
<br>
<!-- <section>
    <div>
        <img src="Images/wantsomething.png" alt="Сакаш нешто понапредно?" class="responsive" id="wantsomething_destop"style="    width: -webkit-fill-available;">
        <img src="Images/wantsomething_mobile.png" alt="Сакаш нешто понапредно?" class="responsive" id="wantsomething_mobile"style="    width: -webkit-fill-available;">

    </div>
</section> -->
<!--ABOVE FORM--END-->

<section>
 <div id="formBG"> 
  <br><br><br>
  <div class="container">
 
    <div class="row">
            <div class="col-md-6">
                <img src="Images/beapart.png" class="responsive" alt="Пријави се денес!">
            </div>
            <div class="col-md-6">
                <h3 class="text-left" style="font-weight:700;color:white;">MICROSOFT POWER BI & SQL<br>
          Образец за аплицирање
                </h3>
                <br>
                <!-- <div id="linksForForm">
                    <span style="font-weight:700; float:right;color:#FF8800">Следна група: Септември 2021</span>
                </div> -->
                <br>
                <form class="row g-3" action="" method="POST" id="singUp" accept-charset="UTF-8">
                    <?php 


           if($_SERVER["REQUEST_METHOD"] == "POST")
           {

                

               $userName = $_POST['name'];                                       
               $lastName = $_POST['surname'];
               
               $email = $_POST['email'];
               
               $phoneNumber = $_POST['phonenumber'];
               $messageSubject =$_POST['subject'];
             
       
               
               $to = "contact@creativehub.mk";
               
               $body = "";
               $body = "Power-bi & SQL Course"."\r\n";
               $body .= "Name: ".$userName. "\r\n";
               $body .= "LastName: ".$lastName. "\r\n";
               $body .= "Email: ".$email. "\r\n";
               $body .= "Phone Number:".$phoneNumber."\r\n";

           
               if( mail($to,$messageSubject, $body)  ) {
           
                   echo "<script>
                      
                   swal({
                     title: 'Ви благодариме за интересот!',
                     text: 'Нашите координатори ќе ве контактираат наскоро.',
                     icon: 'success',
                     button: 'Great!',
                   });
           
                            </script>";
           
           
           
               } else {
           
                 echo "<script>alert('Mail was not sent. Please try again later');</script>";
           
               }
                
           }
           
       


  ?>
                    <div class="col-md-6">
                        <input style="border:none;padding:10px; border-radius:12px;" type="text" class="form-control shadow bg-white"
                            placeholder="Име" name="name" aria-label="Firstname" style="color: #003577;" required>
                    </div>
                    <div class="col-md-6">
                        <input style="border:none;padding:10px; border-radius:12px;" type="text" class="form-control shadow bg-white"
                            placeholder="Презиме" name="surname" aria-label="Lastname" style="color: #003577;" required>
                    </div>
                    <div class="col-md-12">
                        <input style="border:none;padding:10px; border-radius:12px;" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                            type="email" class="form-control shadow  bg-white" placeholder="Email" name="email"
                            aria-label="Email" style="color: #003577;" required>
                    </div>
                    <div class="col-md-12" id="subjectInput">
                        <input style="border:none;padding:10px; border-radius:12px;" type="text" class="form-control shadow  bg-white"
                            placeholder="Subject" aria-label="Subject" style="color: #003577;" name="subject">
                    </div>

                    <div class="col-md-12">
                        <input style="border:none;padding:10px; border-radius:12px;" type="number" class="form-control shadow bg-white"
                            placeholder="Телефонски број" name="phonenumber" aria-label="Email" required>
                    </div>
                    <div id="submitbtn">
                    

                        <button type="submit" id="sendbtn" value="Submit" class="btn btn"><b>Испрати</b></button>
                    </div>


                </form>
                <br>
                <p class="text-left" style="font-size:12px;color:white">Со кликнување на ‘‘Испрати‘‘ се согласувам и давам одобрение Креативе Хуб ДООЕЛ - Скопје да ги користи и да врши обработка на моите лични податоци, како и да ги чува во збирката на лични податоци за потребите на процесот за членување во здружението се додека има потреба од нив, по што ќе бидат избришани/уништени во согласност со Законот за заштита на личните податоци. Го задржувам правото во секое време повлекувањето на согласноста да го дадам во писмена форма.</p>
                <br>
                <p class="text-left" style="font-size:12px;color:white">*За изучување со физичко присуство задолжително е да се прикаже сертификат за примена вакцина.
   За повеќе детали околу формирање на соодветна група, ќе бидете известени по mail или при телефонски повик.</p>

            </div>

        </div>
  </div>
 </div>

</section>

<?php
require_once('../footer.php')
?>


<!--FOOTER END--->
<script  src="../bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
<script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
<script type="text/javascript">
    (function(e,t,o,n,p,r,i){e.visitorGlobalObjectAlias=n;e[e.visitorGlobalObjectAlias]=e[e.visitorGlobalObjectAlias]||function(){(e[e.visitorGlobalObjectAlias].q=e[e.visitorGlobalObjectAlias].q||[]).push(arguments)};e[e.visitorGlobalObjectAlias].l=(new Date).getTime();r=t.createElement("script");r.src=o;r.async=true;i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)})(window,document,"https://diffuser-cdn.app-us1.com/diffuser/diffuser.js","vgo");
    vgo('setAccount', '651120725');
    vgo('setTrackByDefault', true);

    vgo('process');
</script>

</body>
</html>