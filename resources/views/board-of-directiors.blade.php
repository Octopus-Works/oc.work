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
      background-image: url('../img/mobile/board of director/1.png');
    }
    .img2 {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-image: none;
    }
    .img3 {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-image: url('../img/mobile/board of director/graphic2.png');
    }


}

@media screen and (min-width: 800px) {
  .img1 {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-image: url('../img/board of director/1.png');
    }
    .img2 {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-image: url('../img/board of director/2.png');
    }
    .img3 {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-image: url('../img/board of director/graphic2.png');
    }

}







  </style>

</head>

<body class="designer">

  <!-- Navigation & Intro -->
  <header>
    @include('incs.nav')


    <div id="container" class="view jarallax" style="background-color: #1e1e1e" data-jarallax='{"speed": 0.2}'>
        <div class="img1 z-depth-2 h-100   wow fadeInRightBig" data-wow-delay="0" >
          <div id="moveing" class="img2 moveing z-depth-2  h-100   wow fadeInLeftBig"  data-wow-delay="0.5s" > 
          </div>
        </div>
      <div class="mask ">
  
        <div class="container h-100 d-inline-flex   align-items-center">
  
          <div class="row smooth-scroll">
  
           
            <div class="col-12">
  
              <div class="wow fadeInUp ">
  
                {{-- <h2 class="display-3 font-weight-bold mt-5 custom-primary-text"> <strong class="white-text">Contact  </strong>  <strong class="white-text">US</strong>  </h2> --}}
  
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
<section class="team-section text-center my-5">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold my-5 custom-primary-text">Meet Our Directors</h2>
    <!-- Section description -->
    <p class="dark-grey-text w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
      eum porro a pariatur veniam.</p>
  
    <!--Grid row-->
    <div class="row text-center">
  
      <!--Grid column-->
      <div class="col-md-4 mb-md-0 mb-5">
  
        <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" class="rounded-circle z-depth-1 img-fluid">
          </div>
          <!--Content-->
          <h4 class="font-weight-bold dark-grey-text mt-4">Anna Deynah</h4>
          <h6 class="font-weight-bold custom-primary-text my-3">Web Designer</h6>
          <p class="font-weight-normal dark-grey-text">
            <i class="fas fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod
            eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>
          <!--Review-->
          <div class="orange-text">
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star-half-alt"> </i>
          </div>
        </div>
  
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class="col-md-4 mb-md-0 mb-5">
  
        <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg" class="rounded-circle z-depth-1 img-fluid">
          </div>
          <!--Content-->
          <h4 class="font-weight-bold dark-grey-text mt-4">John Doe</h4>
          <h6 class="font-weight-bold custom-primary-text my-3">Web Developer</h6>
          <p class="font-weight-normal dark-grey-text">
            <i class="fas fa-quote-left pr-2"></i>Ut enim ad minima veniam, quis nostrum exercitationem ullam
            corporis suscipit laboriosam, nisi ut aliquid commodi.</p>
          <!--Review-->
          <div class="orange-text">
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
          </div>
        </div>
  
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class="col-md-4">
  
        <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle z-depth-1 img-fluid">
          </div>
          <!--Content-->
          <h4 class="font-weight-bold dark-grey-text mt-4">Maria Kate</h4>
          <h6 class="font-weight-bold custom-primary-text my-3">Photographer</h6>
          <p class="font-weight-normal dark-grey-text">
            <i class="fas fa-quote-left pr-2"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui
            blanditiis praesentium voluptatum deleniti atque corrupti.</p>
          <!--Review-->
          <div class="orange-text">
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="far fa-star"> </i>
          </div>
        </div>
  
      </div>
      <!--Grid column-->
  
    </div>
    <!--Grid row-->
   <hr class="w-50 mt-5 mb-5">



    <!--Grid row-->
    <div class="row text-center">
  
            <!--Grid column-->
            <div class="col-md-4 mb-md-0 mb-5">
        
              <div class="testimonial">
                <!--Avatar-->
                <div class="avatar mx-auto">
                  <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" class="rounded-circle z-depth-1 img-fluid">
                </div>
                <!--Content-->
                <h4 class="font-weight-bold dark-grey-text mt-4">Anna Deynah</h4>
                <h6 class="font-weight-bold custom-primary-text my-3">Web Designer</h6>
                <p class="font-weight-normal dark-grey-text">
                  <i class="fas fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod
                  eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>
                <!--Review-->
                <div class="orange-text">
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star-half-alt"> </i>
                </div>
              </div>
        
            </div>
            <!--Grid column-->
        
            <!--Grid column-->
            <div class="col-md-4 mb-md-0 mb-5">
        
              <div class="testimonial">
                <!--Avatar-->
                <div class="avatar mx-auto">
                  <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg" class="rounded-circle z-depth-1 img-fluid">
                </div>
                <!--Content-->
                <h4 class="font-weight-bold dark-grey-text mt-4">John Doe</h4>
                <h6 class="font-weight-bold custom-primary-text my-3">Web Developer</h6>
                <p class="font-weight-normal dark-grey-text">
                  <i class="fas fa-quote-left pr-2"></i>Ut enim ad minima veniam, quis nostrum exercitationem ullam
                  corporis suscipit laboriosam, nisi ut aliquid commodi.</p>
                <!--Review-->
                <div class="orange-text">
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                </div>
              </div>
        
            </div>
            <!--Grid column-->
        
            <!--Grid column-->
            <div class="col-md-4">
        
              <div class="testimonial">
                <!--Avatar-->
                <div class="avatar mx-auto">
                  <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle z-depth-1 img-fluid">
                </div>
                <!--Content-->
                <h4 class="font-weight-bold dark-grey-text mt-4">Maria Kate</h4>
                <h6 class="font-weight-bold custom-primary-text my-3">Photographer</h6>
                <p class="font-weight-normal dark-grey-text">
                  <i class="fas fa-quote-left pr-2"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui
                  blanditiis praesentium voluptatum deleniti atque corrupti.</p>
                <!--Review-->
                <div class="orange-text">
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="far fa-star"> </i>
                </div>
              </div>
        
            </div>
            <!--Grid column-->
        
          </div>
          <!--Grid row-->
   
  </section>
  <!-- Section: Testimonials v.3 -->

</div>



  </main>
  <!-- Main layout -->

<hr>
  
<div class="container mb-5">
    <!-- Second section -->
    <section id="what-next" class="section feature-box">

      <h1 class="section-heading text-center custom-primary-text mb-5 mt-5 pt-4 wow fadeIn">What Next</h1>

      <p class=" dark-gray text-center w-responsive mx-auto wow fadeIn my-5" data-wow-delay="0.2s">Lorem ipsum dolor sit amet,
        consectetur adipisicing elit. Amet maiores aspernatur aut animi debitis. Ad excepturi dolor tempora at aperiam
        earum veritatis ullam. Culpa tempora possimus necessitatibus excepturi, quisquam officia.</p>

      <!-- First row -->
      <div class="row features-big text-center wow fadeIn" data-wow-delay="0.4s">

        <!-- First column -->
        <div class="col-md-6 mb-5">

          <i class="fa fa-phone fa-6x mb-5 custom-primary-text" aria-hidden="true"></i>

          <h4 class="font-weight-bold mb-4 custom-primary-text">Get in touch
          </h4>

          <p class="dark-grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
            nam,
            aperiam minima assumenda deleniti hic.</p>

        </div>
        <!-- First column -->

        <!-- Second column -->
        <div class="col-md-6 mb-5">

          <i class="fas fa-money-bill-alt fa-6x mb-5 custom-primary-text" aria-hidden="true"></i>
          <h4 class="font-weight-bold mb-4 custom-primary-text">Get pricing
          </h4>

          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam,
            aperiam minima assumenda deleniti hic.</p>

        </div>
        <!-- Second column -->


      </div>
      <!-- First row -->

    </section>
  </div>




  @include('incs.footer')

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





  <script>
    $("#container").mousemove(function (e) {

      parallaxIt(e, ".moveing", -90);
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






