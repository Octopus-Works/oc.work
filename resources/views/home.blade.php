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


  <style>



    html,
    body,
    header,
    .jarallax {
      height: 100%;
    }

    @media (max-width: 450px) {

      html,
      body,
      header,
      .intro-3 {
        height: 820px;
      }
    }

    @media (min-width: 451px) and (max-width: 740px) {

      html,
      body,
      header,
      .intro-3 {
        height: 900px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .intro-3 {
        height: 950px;
      }
    }




 .mask.rgba-gradient {
    background:  -webkit-linear-gradient(45deg, rgba(208, 33, 46, .6),  rgba(96, 66, 69, 0.59) 100%);
    background: -o-linear-gradient(45deg, rgba(234, 21, 129, .6), rgba(10, 23, 187, .6) 100%);
    background: linear-gradient(to 45deg, rgba(234, 21, 129, .6), rgba(10, 23, 187, .6) 100%);
}



    .intro-3 {
      background: no-repeat #ff3f71;
      background-image: -webkit-linear-gradient(330deg, #ff3c6d, #ffa76d, #ff73bb, #6caafd, #1fe4d4);
      background-image: -o-linear-gradient(330deg, #ff3c6d, #ffa76d, #ff73bb, #6caafd, #1fe4d4);
      background-image: linear-gradient(120deg, #ff3c6d, #ffa76d, #ff73bb, #6caafd, #1fe4d4);
      -webkit-background-size: 800% 400%;
      background-size: 800% 400%;
      -webkit-animation-name: introAnimation;
      animation-name: introAnimation;
      -webkit-animation-duration: 30s;
      animation-duration: 30s;
      -webkit-animation-timing-function: linear;
      animation-timing-function: linear;
      -webkit-animation-delay: 0;
      animation-delay: 0;
      -webkit-animation-iteration-count: infinite;
      animation-iteration-count: infinite;
    }

    /*! CSS Used from: Embedded */
    body,
    header,
    .intro-3 {
      height: 100%;
    }

    @media (max-width: 450px) {

      body,
      header,
      .intro-3 {
        height: 820px;
      }
    }

    @media (min-width: 451px) and (max-width: 740px) {

      body,
      header,
      .intro-3 {
        height: 900px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      body,
      header,
      .intro-3 {
        height: 950px;
      }
    }

    *,
    ::after,
    ::before {
      box-sizing: border-box;
    }

    img {
      vertical-align: middle;
      border-style: none;
    }

    .img-fluid {
      max-width: 100%;
      height: auto;
    }

    .mb-3 {
      margin-bottom: 1rem !important;
    }

    @media print {

      *,
      ::after,
      ::before {
        text-shadow: none !important;
        box-shadow: none !important;
      }

      img {
        page-break-inside: avoid;
      }
    }

    :disabled {
      pointer-events: none !important;
    }

    .img-fluid {
      max-width: 100%;
      height: auto;
    }

    .gallery {
      -webkit-column-count: 3;
      column-count: 3;
      -webkit-column-width: 33%;
      column-width: 33%;
    }

    .gallery .pics {
      -webkit-transition: all 350ms ease;
      -o-transition: all 350ms ease;
      transition: all 350ms ease;
    }

    .gallery .animation {
      -webkit-transform: scale(1);
      -ms-transform: scale(1);
      transform: scale(1);
    }

    @media (max-width:450px) {
      .gallery {
        -webkit-column-count: 1;
        column-count: 1;
        -webkit-column-width: 100%;
        column-width: 100%;
      }
    }

    .streak.streak-md {
      height: 100%;
    }







    :disabled {
      pointer-events: none !important;
    }

    .icon-area .circle-icon i {
      -webkit-box-shadow: 0 8px 19px #a31621;
      box-shadow: 0 8px 19px #a31621;
      width: 100px;
      height: 100px;
      line-height: 1.4;
      padding: 1.8rem;
      font-size: 2rem;
      -webkit-border-radius: 50%;
      border-radius: 50%;
      background: #fff;
    }

    .icon-area .circle-icon i:hover {
      background: #ebeef9;
    }

  </style>






  <link href="/css/octopus-style.css" rel="stylesheet">


</head>

<body>

  <!-- Navigation & Intro -->
  <header>







    @include('incs.nav')





    <!-- Intro Section -->
    <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}'
      style="background-image: url('/img/Octopus.jpg'); background-repeat: no-repeat; background-size: cover; background-position: right right;">

      <div class="mask rgba-gradient">

 
    </div>
    </div>







    <!-- Intro Section -->
    <!-- <section class="view intro-3">
      <div class="container h-100 d-flex justify-content-center align-items-center">
        <div class="row">

          <div class="col-md-12 col-lg-4 offset-lg-1 text-center text-lg-left white-text mt-5 mt-md-0">
            <h1 class="intro-custom-primary-text font-weight-bold mt-sm-5 mt-0 mb-4 wow fadeInLeft"
              data-wow-delay="0.3s">Clean Layout
              For Your Web</h1>
            <h6 class="mb-4 wow fadeInLeft" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur adipisicing
              elit. Rem repellendus quasi fuga nesciunt dolorum nulla fugiat!</h6>

          </div>

          <div class="col-md-12 col-lg-6 mt-4 mt-md-0 wow fadeInRight" data-wow-delay="0.3s">
            <img src="https://mdbootstrap.com/img/Others/cards32.png" alt="Sample Image" class="img-fluid">
          </div>

        </div>
      </div>
    </section> -->

  </header>
  <!-- Navigation & Intro -->

  <!-- Main content -->
  <main>

    <div class="container">

      <div class="container-fluid light-grey-background">
        <div class="container py-4">

          <!--Section: Services-->
          <section id="services" class="mt-3 mb-3 pb-3">



      
              <section id="about" class="mb-5 pb-5">

                  <!-- Section heading -->
                  <h2 class="h1-responsive custom-primary-text font-weight-bold text-center mt-5">Who Are We ? </h2>
                  <hr class=" w-25 my-3">
                  <p class="lead grey-text text-center w-responsive mx-auto mb-5 pb-3">
                      We are a group of Syrians who founded the company Octopus Works in the late 2018. We believe in leaving a print by creating the perfect result in merging between Arts and Technology. Our sections include Visual production, Visual communication, software engineering, and architecture. 
                    </p>
          
          
                </section>
                <!-- Section: About Us -->


            <!-- Section heading -->
            <h2 class=" h1-responsive text-center title my-5  pt-4 pb-5 custom-primary-text font-weight-bold wow fadeIn"
              data-wow-delay="0.2s">
              <strong>Our services</strong>
              <hr class="w-25 ">
            </h2>
   

            <!-- First row -->
            <div class="row wow fadeIn" data-wow-delay="0.4s">

              <!-- First column -->
              <div class="col-md-6 mb-4 text-center">

                <!--Panel-->
                <div class="card card-body text-left white hoverable">
                  <p class="font-weight-bold title font-weight-bold dark-grey-text text-uppercase spacing mt-4 mx-4">
                    <i class="fas fa-square custom-primary-text mr-2" aria-hidden="true"></i>
                    <strong>Software Engineering</strong>
                  </p>
                  <p class="grey-text font-small mx-4">Full custom and professionally designed website,
                    we develop apps that bring your ideas to life ....

                    <p class="font-small font-weight-bold custom-primary-text mx-4 mb-0">
                      <a class="custom-primary-text" href="./software-engineering.html">read more</a>
                    </p>
                  </p>
                </div>
                <!--/.Panel-->

              </div>
              <!-- /First column -->

              <!-- Second column -->
              <div class="col-md-6 mb-4 text-center">

                <!--Panel-->
                <div class="card card-body text-left white hoverable">
                  <p class="font-weight-bold title font-weight-bold dark-grey-text text-uppercase spacing mt-4 mx-4">
                    <i class="fas fa-square custom-primary-text mr-2" aria-hidden="true"></i>
                    <strong>Visual Production</strong>
                  </p>
                  <p class="grey-text font-small mx-4">
                    At octopus works, our team creates a commercial content which is meant to grab attention ....
                    <p class="font-small font-weight-bold custom-primary-text mx-4 mb-0">
                      <a class="custom-primary-text" href="./visual-production.html">read more</a>
                    </p>
                  </p>
                </div>
                <!--/.Panel-->

              </div>
              <!-- /.Second column -->

              <!-- Third column -->
              <div class="col-md-6 mb-4 text-center">

                <!--Panel-->
                <div class="card card-body text-left white hoverable">
                  <p class="font-weight-bold title font-weight-bold dark-grey-text text-uppercase spacing mt-4 mx-4">
                    <i class="fas fa-square custom-primary-text mr-2" aria-hidden="true"></i>
                    <strong>Visual Coummunication</strong>
                  </p>
                  <p class="grey-text font-small mx-4">
                      At Octopus Works we provide professional work by using our team's artistic skills ...
                    <p class="font-small font-weight-bold custom-primary-text mx-4 mb-0">
                      <a class="custom-primary-text" href="./graphic-design.html">read more</a>
                    </p>
                  </p>
                </div>
                <!--/.Panel-->

              </div>
              <!-- /.Third column -->

              <!-- Fourth column -->
              <div class="col-md-6 mb-4 text-center">

                <!--Panel-->
                <div class="card card-body text-left white hoverable">
                  <p class="font-weight-bold title font-weight-bold dark-grey-text text-uppercase spacing mt-4 mx-4">
                    <i class="fas fa-square custom-primary-text mr-2" aria-hidden="true"></i>
                    <strong>Architecture & Interior Design</strong>
                  </p>
                  <p class="grey-text font-small mx-4">
                    Architecture is defined as the art  and science of designing buildings and structure....
                    <p class="font-small font-weight-bold custom-primary-text mx-4 mb-0">
                      <a class="custom-primary-text" href="architecture.html">read more</a>
                    </p>
                  </p>
                </div>
                <!--/.Panel-->

              </div>
              <!-- /.Fourth column -->

            </div>
            <!-- /.First row -->

          </section>
          <!--/Section: Services-->

        </div>
      </div>
      <!--Second container-->

      <hr>
      
      <section id="about" class="mb-5 pb-5">

        <!-- Section heading -->
        <h2 class="h1-responsive custom-primary-text font-weight-bold text-center mt-5">Why Octopus Works ? </h2>
        <hr class=" w-25 my-3">
        <p class="lead grey-text text-center w-responsive mx-auto mb-5 pb-3">We open the first location of the Place in
            Our work mentality is different than the environment we work in. We think outside the box!! The works we offer is on a global standard. We’re very creative and our creativity is a result of how much knowledge and experience we hold in the back of our heads and that is what distinguishes us 
          </p>


      </section>
      <!-- Section: About Us -->
      <hr>



    </div>

    <!-- Streak -->
    <div class="container">

      <section class="mt-3 mb-5 pt-1 pb-5">

        <!-- Section heading -->
        <h2 class="h1-responsive text-center title my-5 pt-4 pb-4 custom-primary-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">
          <strong>Our projects</strong>
        </h2>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-12 d-flex justify-content-center mb-5 pb-2">

            <button type="button" class="btn btn-rounded custom-primary font-weight-bold waves-effect filter"
              data-rel="all">All</button>
            <button type="button" class="btn btn-rounded custom-primary font-weight-bold waves-effect filter"
              data-rel="1">Branding</button>
            <button type="button" class="btn btn-rounded custom-primary font-weight-bold waves-effect filter"
              data-rel="2">web design</button>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="gallery" id="gallery">

          <!-- Grid column -->
          <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/58.jpg" alt="Card image cap">
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/7.jpg" alt="Card image cap">
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/4.jpg" alt="Card image cap">
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/63.jpg" alt="Card image cap">
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/64.jpg" alt="Card image cap">
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/5.jpg" alt="Card image cap">
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>

      <hr class="mt-5">







    </div>

    <!-- Streak -->


    <!-- Second container -->

    <div class="container">

      <!-- Section: Team v.1 -->
      <section class="team-section text-center my-5" id="team">

        <!-- Section heading -->
        <h2 class="h1-responsive text-center custom-primary-text my-5  font-weight-bold wow fadeIn"
          data-wow-delay="0.2s">
          <strong>True words from our customers</strong>
        </h2>

        <!-- Section description -->
        <p class="grey-text w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit,
          error amet numquam iure provident voluptate
          esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.
        </p>

        <div class="row mt-5 pt-5">

          <!-- Grid column -->
          <div class="col-lg-4 col-md-12 mb-5">

            <!-- Card -->
            <div class="card testimonial-card">

              <!-- Background color -->
              <div class="card-up custom-primary-gradient"></div>

              <!-- Avatar -->
              <div class="avatar mx-auto white">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg"
                  class="rounded-circle img-responsive">
              </div>

              <div class="card-body">
                <!-- Name -->
                <h4 class="mt-1 custom-primary-text">
                  <strong>John Doe</strong>
                </h4>
                <hr>
                <!-- Quotation -->
                <p class="dark-grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci.</p>
              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-12 mb-5">

            <!-- Card -->
            <div class="card testimonial-card">

              <!-- Background color -->
              <div class="card-up custom-primary-gradient">
              </div>

              <!-- Avatar -->
              <div class="avatar mx-auto white">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg"
                  class="rounded-circle img-responsive">
              </div>

              <div class="card-body">
                <!-- Name -->
                <h4 class=" custom-primary-text mt-1">
                  <strong>Anna Aston</strong>
                </h4>
                <hr>
                <!-- Quotation -->
                <p class="dark-grey-text">Neque cupiditate assumenda in maiores repudiandae mollitia architecto.</p>
              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-12 mb-5">

            <!-- Card -->
            <div class="card testimonial-card">

              <!-- Background color -->
              <div class="card-up  custom-primary-gradient"></div>

              <!-- Avatar -->
              <div class="avatar mx-auto white">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg"
                  class="rounded-circle img-responsive">
              </div>

              <div class="card-body">
                <!-- Name -->
                <h4 class="mt-1 ">
                  <strong>Maria Kate</strong>
                </h4>
                <hr>
                <!-- Quotation -->
                <p class="dark-grey-text">Delectus impedit saepe officiis ab aliquam repellat, rem totam unde ducimus.
                </p>
              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

        </div>

      </section>
      <!-- Section: Team v.1 -->

    </div>

<hr>


  </main>
  <!-- Main content -->



  <div class="container mb-5">
    <!-- Second section -->
    <section id="what-next" class="section feature-box">

      <h1 class="section-heading text-center custom-primary-text mb-5 mt-5 pt-4 wow fadeIn">What Next</h1>



      <!-- First row -->
      <div class="row features-big text-center wow fadeIn" data-wow-delay="0.4s">

        <!-- First column -->
        <div class="col-md-6 mb-5">
            <a class="custom-primary-text" href="./contact-us.html">
          <i class="fa fa-phone fa-6x mb-5 custom-primary-text" aria-hidden="true"></i>

          <h4 class="font-weight-bold mb-4 custom-primary-text"> Get in touch
          </h4>

        </a>

        </div>
        <!-- First column -->

        <!-- Second column -->
        <div class="col-md-6 mb-5">
            <a class="custom-primary-text" href="./contact-us.html">

          <i class="fas fa-money-bill-alt fa-6x mb-5 custom-primary-text" aria-hidden="true"></i>
          <h4 class="font-weight-bold mb-4 custom-primary-text">Get pricing
          </h4>

        </a>

        </div>
        <!-- Second column -->


      </div>
      <!-- First row -->

    </section>
  </div>


  @include('incs.footer')

  <script>
    // Animation init
    new WOW().init();

    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').material_select();
    });


    // Gallery
    $(function () {
      var selectedClass = "";
      $(".filter").click(function () {
        selectedClass = $(this).attr("data-rel");
        $("#gallery").fadeTo(100, 0.1);
        $("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
        setTimeout(function () {
          $("." + selectedClass).fadeIn().addClass('animation');
          $("#gallery").fadeTo(300, 1);
        }, 300);
      });
    });

  </script>

</body>

</html>
