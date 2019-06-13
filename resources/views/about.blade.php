<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">

  <link href="/css/octopus-style.css" rel="stylesheet">

  <style>

@-webkit-keyframes rotating /* Safari and Chrome */ {
  from {
    -webkit-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes rotating {
  from {
    
    -ms-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  to {
    -ms-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
.rotating {
  -webkit-transform-origin: 92.5% 36.3%;

  transform-origin: 92.5% 36.3%;


  -webkit-animation: rotating 2s linear infinite;
  -moz-animation: rotating 2s linear infinite;
  -ms-animation: rotating 2s linear infinite;
  -o-animation: rotating 2s linear infinite;
  animation: rotating 2s linear infinite;

}

    html,
    body,
    header,
    .jarallax {
      height: 100%;
    }

    .designer .mask.rgba-gradient {
      background: -webkit-gradient(linear, 45deg, from(rgba(234, 21, 129, .6)), to(rgba(10, 23, 187, .6)));
      background: -webkit-linear-gradient(45deg, rgba(234, 21, 129, .6), rgba(10, 23, 187, .6) 100%);
      background: -o-linear-gradient(45deg, rgba(234, 21, 129, .6), rgba(10, 23, 187, .6) 100%);
      background: linear-gradient(to 45deg, rgba(234, 21, 129, .6), rgba(10, 23, 187, .6) 100%);
    }



    
 @media screen and (min-width: 300px) {
  .img1 {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-image: url('../img/mobile/it/it.png');
    }
    .img2 {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-image: url('../img/mobile/it/iit.png');
    }
    .img3 {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-image: url('../img/mobile/it/iiit.png');
    }

    .img4 {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-image: url('../img/mobile/it/iit.png');
    }
    .img5 {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-image: url('../img/mobile/it/iiit.png');
    }

}

@media screen and (min-width: 800px) {
  .img1 {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-image: url('../img/about us/1.png');
    }
    .img2 {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-image: url('../img/about us/2.png');
    }
    .img3 {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-image: url('../img/about us/3.png');
    }

    .img4 {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-image: url('../img/about us/4.png');
    }
    .img5 {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-image: url('../img/about us/5.png');
    }


}


  </style>

</head>

<body class="designer">

  <!-- Navigation & Intro -->
  <header>
    @include('incs.nav')


    <div id="container" class="view jarallax" data-jarallax='{"speed": 0.2}'>
        <div class="img1 z-depth-2 h-100   wow fadeInRightBig" data-wow-delay="0" >
          <div id="moveing" class="img2   h-100  moveing  wow fadeInLeftBig"  data-wow-delay="0.5s" > 
            <div id="moveing" class=" img4 moveing  h-100   wow fadeInUpBig" data-wow-delay="1s" >
                <div id="moveing" class=" img3 moveing h-100   wow fadeInUpBig" data-wow-delay="1s" >
           
                </div>
            </div>
          </div>
   
     
      <div class="mask ">
  
        <div class="container h-100 d-inline-flex  ml-5  align-items-center">
  
          <div class="row smooth-scroll">
  
           
            <div class="col-6">
  
              <div class="wow fadeInUp ">
  
                {{-- <h2 class="display-3 font-weight-bold mt-5 custom-primary-text"> <strong class="">Software  </strong> <br> <strong class="">Engineering</strong>  </h2> --}}
  
              </div>
  
            </div>
  
          </div>
  
        </div>
  
      </div>
  
  
      
    </div>
  </header>
  <!-- Navigation & Intro -->

  <!-- Main layout -->
  <main>

<div class="container">
<!-- Section: Testimonials v.3 -->   
 <section id="about" class=" pb-5">

                  <!-- Section heading -->
                  <h2 class="h1-responsive custom-primary-text font-weight-bold text-center mt-5">Who Are We ? </h2>
                  <hr class="w-25 my-3">
                  <p class="lead dark-grey-text text-center w-responsive mx-auto mb-5 pb-3">
                      We are a group of Syrians who founded the company Octopus Works in the late 2018. We believe in leaving a print by creating the perfect result in merging between Arts and Technology. Our sections include Visual production, Visual communication, software engineering, and architecture. 
                    </p>
          
          
                </section>
                <!-- Section: About Us -->
                <hr class="w-100">

                <div class="row pt-4 mt-5">

                  <!-- Grid column -->
                  <div class="col-lg-12 col-md-12 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">

                      <!-- Secion heading -->
                      <h3 class="mb-5 text-center custom-primary-text title font-weight-bold wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
                          <strong>Our mission</strong>
                          <hr class="w-25">

                      </h3>
                      <!-- Description -->
                      <p class="dark-grey-text text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta ratione quisquam, dicta
                          ab cupiditate iure eaque? Repellendus voluptatum, magni impedit delectus, beatae maxime temporibus
                          maiores quibusdam.</p>
                      <p  class="dark-grey-text text-center">Rem magnam ad perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut possimus
                          in hic molestias repellendus illo ullam odit quia velit. Lorem ipsum dolor sit amet, consectetur
                          adipisicing elit.</p>

                  </div>
                  <!-- Grid column -->


              </div>

              <hr class="w-100">


              <div class="row pt-4 mt-5 mb-5">

                <!-- Grid column -->
                <div class="col-lg-12 col-md-12 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">

                    <!-- Secion heading -->
                    <h3 class="mb-5 text-center custom-primary-text title font-weight-bold wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
                        <strong>Our Vision</strong>
                        <hr class="w-25">

                    </h3>
                    <!-- Description -->
                    <p class="dark-grey-text text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta ratione quisquam, dicta
                        ab cupiditate iure eaque? Repellendus voluptatum, magni impedit delectus, beatae maxime temporibus
                        maiores quibusdam.</p>
                    <p  class="dark-grey-text text-center">Rem magnam ad perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut possimus
                        in hic molestias repellendus illo ullam odit quia velit. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit.</p>

                </div>
                <!-- Grid column -->


            </div>


</div>



  </main>
  <!-- Main layout -->

  



  @include('incs.footer')


  <!-- JQuery -->

  <script>
    //Animation init
    new WOW().init();

    // initialize scrollspy
    $('body').scrollspy({

      target: '.dotted-scrollspy'
    });

    // initialize lightbox
    $(function () {

      $("#mdb-lightbox-ui").load("../mdb-addons/mdb-lightbox-ui.html");
    });



  </script>


<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/utils/Draggable.min.js'></script>





<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/utils/Draggable.min.js'></script>





<script>
  $("#container").mousemove(function (e) {

    parallaxIt(e, ".moveing", -40);
  });
  $( "#container" ).mouseout(function(e) {
parallaxIt(e, ".moveing", 0)

});
  function parallaxIt(e, target, movement) {
    var $this = $("#container");
    var relX = e.pageX - $this.offset().left;
    var relY = e.pageY - $this.offset().top;

    TweenMax.to(target, 1, {
      x: (relX - $this.width() / 2) / $this.width() * movement,
      y: (relY - $this.height() / 2) / $this.height() * movement
    });
  }

  $('#moveing').on("animationend", function () {
    $("#moveing").removeClass("animated")
  });

</script>

</body>

</html>






