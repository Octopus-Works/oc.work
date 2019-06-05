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

    .mask.rgba-gradient {
    background:  -webkit-linear-gradient(45deg, rgba(208, 33, 46, .6),  rgba(96, 66, 69, 0.59) 100%);
    background: -o-linear-gradient(45deg, rgba(234, 21, 129, .6), rgba(10, 23, 187, .6) 100%);
    background: linear-gradient(to 45deg, rgba(234, 21, 129, .6), rgba(10, 23, 187, .6) 100%);
}


  </style>
  <style type="text/css">
    html,
    body,
    header,
    .intro-2 {
      height: 100%;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .intro-2 {
        height: 900px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .intrteso-2 {
        height: 980px;
      }
    }


    .streak.streak-mt {
      height: 100%;
    }


    .software-lp .rgba-gradient {
      background: -webkit-gradient(linear, 45deg, from(#68d0ff), to(#453cf5));
      background: -webkit-linear-gradient(45deg, #68d0ff, #453cf5 100%);
      background: -o-linear-gradient(45deg, #68d0ff, #453cf5 100%);
      background: linear-gradient(to 45deg, #68d0ff, #453cf5 100%);
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

    .software-lp .blue-gradient-mask {
      background: -webkit-linear-gradient(50deg, rgba(116, 184, 255, .8), rgba(87, 79, 240, .8));
      background: -o-linear-gradient(50deg, rgba(116, 184, 255, .8), rgba(87, 79, 240, .8));
      background: linear-gradient(40deg, rgba(116, 184, 255, .8), rgba(87, 79, 240, .8));
    }


    html,
    body,
    header,
    .jarallax {
      height: 100%;
    }





    /*! CSS Used from: https://use.fontawesome.com/releases/v5.8.1/css/all.css */
    .fas {
      -moz-osx-font-smoothing: grayscale;
      -webkit-font-smoothing: antialiased;
      display: inline-block;
      font-style: normal;
      font-variant: normal;
      text-rendering: auto;
      line-height: 1;
    }

    .fa-quote-left:before {
      content: "\f10d";
    }

    .fa-quote-right:before {
      content: "\f10e";
    }

    .fas {
      font-family: "Font Awesome 5 Free";
    }

    .fas {
      font-weight: 900;
    }

    /*! CSS Used from: https://mdbootstrap.com/previews/templates/portfolio/css/bootstrap.min.css */
    *,
    ::after,
    ::before {
      box-sizing: border-box;
    }

    h2,
    h5 {
      margin-top: 0;
      margin-bottom: .5rem;
    }

    h2,
    h5 {
      margin-bottom: .5rem;
      font-weight: 500;
      line-height: 1.2;
    }

    h2 {
      font-size: 2rem;
    }

    h5 {
      font-size: 1.25rem;
    }

    .mx-4 {
      margin-right: 1.5rem !important;
    }

    .mx-4 {
      margin-left: 1.5rem !important;
    }

    .mb-5 {
      margin-bottom: 3rem !important;
    }

    .text-center {
      text-align: center !important;
    }

    .font-italic {
      font-style: italic !important;
    }

    @media print {

      *,
      ::after,
      ::before {
        text-shadow: none !important;
        box-shadow: none !important;
      }

      h2 {
        orphans: 3;
        widows: 3;
      }

      h2 {
        page-break-after: avoid;
      }
    }

    /*! CSS Used from: https://mdbootstrap.com/previews/templates/portfolio/css/mdb.min.css */
    :disabled {
      pointer-events: none !important;
    }

    h2,
    h5 {
      font-weight: 300;
    }

    .rgba-indigo-strong,
    .rgba-indigo-strong:after {
      background-color: rgba(63, 81, 181, .7);
    }

    .white-text {
      color: #fff !important;
    }

    .flex-center {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      height: 100%;
    }

    .h2-responsive {
      font-size: 145%;
    }

    @media (min-width:576px) {
      .h2-responsive {
        font-size: 140%;
      }
    }

    @media (min-width:768px) {
      .h2-responsive {
        font-size: 170%;
      }
    }

    @media (min-width:992px) {
      .h2-responsive {
        font-size: 170%;
      }
    }

    @media (min-width:1200px) {
      .h2-responsive {
        font-size: 200%;
      }
    }

    .fadeIn {
      -webkit-animation-name: fadeIn;
      animation-name: fadeIn;
    }

    .mask {
      background-attachment: fixed;
    }















    /*! CSS Used from: https://use.fontawesome.com/releases/v5.8.1/css/all.css */
    .fas {
      -moz-osx-font-smoothing: grayscale;
      -webkit-font-smoothing: antialiased;
      display: inline-block;
      font-style: normal;
      font-variant: normal;
      text-rendering: auto;
      line-height: 1;
    }

    .fa-quote-left:before {
      content: "\f10d";
    }

    .fa-quote-right:before {
      content: "\f10e";
    }

    .fas {
      font-family: "Font Awesome 5 Free";
    }

    .fas {
      font-weight: 900;
    }

    /*! CSS Used from: https://mdbootstrap.com/previews/templates/portfolio/css/bootstrap.min.css */
    *,
    ::after,
    ::before {
      box-sizing: border-box;
    }

    h2,
    h5 {
      margin-top: 0;
      margin-bottom: .5rem;
    }

    h2,
    h5 {
      margin-bottom: .5rem;
      font-weight: 500;
      line-height: 1.2;
    }

    h2 {
      font-size: 2rem;
    }

    h5 {
      font-size: 1.25rem;
    }

    .mx-4 {
      margin-right: 1.5rem !important;
    }

    .mx-4 {
      margin-left: 1.5rem !important;
    }

    .mb-5 {
      margin-bottom: 3rem !important;
    }

    .text-center {
      text-align: center !important;
    }

    .font-italic {
      font-style: italic !important;
    }

    @media print {

      *,
      ::after,
      ::before {
        text-shadow: none !important;
        box-shadow: none !important;
      }

      h2 {
        orphans: 3;
        widows: 3;
      }

      h2 {
        page-break-after: avoid;
      }
    }

    /*! CSS Used from: https://mdbootstrap.com/previews/templates/portfolio/css/mdb.min.css */
    :disabled {
      pointer-events: none !important;
    }

    h2,
    h5 {
      font-weight: 300;
    }

    .rgba-indigo-strong,
    .rgba-indigo-strong:after {
      background-color: rgba(63, 81, 181, .7);
    }

    .white-text {
      color: #fff !important;
    }

    .flex-center {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      height: 100%;
    }

    .h2-responsive {
      font-size: 145%;
    }

    @media (min-width:576px) {
      .h2-responsive {
        font-size: 140%;
      }
    }

    @media (min-width:768px) {
      .h2-responsive {
        font-size: 170%;
      }
    }

    @media (min-width:992px) {
      .h2-responsive {
        font-size: 170%;
      }
    }

    @media (min-width:1200px) {
      .h2-responsive {
        font-size: 200%;
      }
    }

    .fadeIn {
      -webkit-animation-name: fadeIn;
      animation-name: fadeIn;
    }

    .streak {
      display: block;
      position: relative;
      overflow: hidden;
      height: 250px;
    }

    .streak.streak-md {
      height: 400px;
    }

    @media (max-width:736px) {
      .streak.streak-md {
        height: 300px;
      }
    }

    .streak.streak-photo {
      background-repeat: no-repeat;
      -webkit-background-size: cover;
      background-size: cover;
      background-position: center;
    }

    @media (min-width:1366px) {
      .streak.streak-photo {
        background-attachment: fixed;
      }
    }

    .mask {
      background-attachment: fixed;
    }

    /*! CSS Used keyframes */
    @-webkit-keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    /*! CSS Used fontfaces */
    @font-face {
      font-family: "Font Awesome 5 Free";
      font-style: normal;
      font-weight: 400;
      font-display: auto;
      src: url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.eot);
      src: url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.eot#iefix) format("embedded-opentype"), url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.woff2) format("woff2"), url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.woff) format("woff"), url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.ttf) format("truetype"), url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.svg#fontawesome) format("svg");
    }

    @font-face {
      font-family: "Font Awesome 5 Free";
      font-style: normal;
      font-weight: 900;
      font-display: auto;
      src: url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.eot);
      src: url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.eot#iefix) format("embedded-opentype"), url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.woff2) format("woff2"), url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.woff) format("woff"), url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.ttf) format("truetype"), url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.svg#fontawesome) format("svg");
    }




    @media screen and (min-width: 400px) {
      .img1 {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-image: url('../img/mobile/graphic/graphic.png');
    }
    .img2 {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-image: url('../img/mobile/graphic/graphic1.png');
    }
    .img3 {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-image: url('../img/mobile/graphic/graphic2.png');
    }


}

@media screen and (min-width: 800px) {
  .img1 {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-image: url('../img/graphic/graphic.png');
    }
    .img2 {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-image: url('../img/graphic/graphic1.png');
    }
    .img3 {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-image: url('../img/graphic/graphic2.png');
    }

}




  </style>

</head>

<body class="designer">

  <!-- Navigation & Intro -->
  <header class="mb-5"> 

    @include('incs.nav')


    <!-- Intro Section -->

    <!-- <section class="view intro-2 test custom-primary">


  
    <div id="container" class="view jarallax" data-jarallax='{"speed": 0.2}'>

        <div class="test z-depth-2 h-100   wow fadeInRightBig" data-wow-delay="0" style="background-image: url('../img/graphic/graphic.png');">    </div>
          <div class="test z-depth-2  h-100   wow fadeInLeftBig"  data-wow-delay="0.5s" style="background-image: url('../img/graphic/graphic1.png');">    </div>
            <div id="moveing" class=" moveing  h-100   wow fadeInUpBig" data-wow-delay="1s" style="background-image: url('../img/graphic/graphic2.png');"></div>
          




    </section> -->
    <div id="container" class="view jarallax custom-primary" data-jarallax='{"speed": 0.2}'>
        <div class="img z-depth-2 h-100   wow fadeInRightBig" data-wow-delay="0" style="">
          <div class="img1 z-depth-2  h-100   wow fadeInLeftBig"  data-wow-delay="0.5s" style=""> 
            <div id="moveing" class=" moveing  img2 h-100   wow fadeInUpBig" data-wow-delay="1s" style="">
            </div>
          </div>
        </div>
      <div class="mask ">

        <div class="container h-100 d-inline-flex  ml-5  align-items-center">

          <div class="row smooth-scroll">

           
            <div class="col-6">

              <div class="wow fadeInUp ">

                <h2 class="display-3 font-weight-bold white-text mb-3"> <strong class="">Graphic  </strong> <br> <strong class="">Design</strong>  </h2>

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
    
    <section>
    
    <h2 class="text-uppercase custom-primary-text text-center font-weight-bold my-4 pt-5 wow fadeIn"  data-wow-delay="0.2s">Services</h2>
    <hr class="between-sections pb-5">
    <!-- Second container -->
    <div class="container ">

      <!-- Secion heading -->


      <!-- First row -->
      <div class="row  wow fadeIn" data-wow-delay="0.2s">

        <div class="col-lg-3 col-md-6 text-center mt-1">

          <div class="icon-area">

            <a
              class="btn-floating btn-lg custom-primary darken-1 p-5 mb-4 d-inline-flex justify-content-center align-items-center">

              <i class="fas fa-eye d-flex  justify-content-center"></i>

            </a>

            <h6><strong class="font-weight-bold mb-3 pb-3">Visual identity</strong></h6>

            <p class="mt-4">Visible elements of a brand such as color, form, shape, etc.
                are necessary to reflect and convey the symbolic meaning of the brand </p>

          </div>

        </div>

        <div class="col-lg-3 col-md-6 text-center mt-1">

          <div class="icon-area">

            <a
              class="btn-floating btn-lg custom-primary darken-1 p-5 mb-4 d-inline-flex justify-content-center align-items-center">

              <i class="fas fa-bullhorn d-flex justify-content-center"></i>

            </a>

            <h6><strong class="font-weight-bold mb-3 pb-3">Marketing & Advertising</strong></h6>

            <p class="mt-4">Octopus creates methods that helps you grow your business
                getting people interested in your product or service
                 </p>

          </div>

        </div>

        <div class="col-lg-3 col-md-6 text-center mt-1">

          <div class="icon-area">

            <a
              class="btn-floating btn-lg custom-primary darken-1 p-5 mb-4 d-inline-flex justify-content-center align-items-center">

              <i class="fas fa-book d-flex justify-content-center"></i>

            </a>

            <h6><strong class="font-weight-bold mb-3 pb-3">Publications</strong></h6>

            <p class="mt-4">Octopus offers different ways of making your product
                or service become publicly knows.</p>

          </div>

        </div>

        <div class="col-lg-3 col-md-6 text-center mt-1">

          <div class="icon-area">

            <a
              class="btn-floating btn-lg custom-primary darken-1 p-5 mb-4 d-inline-flex justify-content-center align-items-center">

              <i class="fas fa-paint-brush d-flex justify-content-center"></i>

            </a>

            <h6><strong class="font-weight-bold mb-3 pb-3">Art & Illustration</strong></h6>

            <p class="mt-4">At Octopus we provide professional work by using our team’s artistic skills
                and technical knowledge to strengths the understating of a text </p>

          </div>

        </div>

      </div>
      <!-- First row -->

    </div>
    <!-- Second container -->
  </section>
    <!-- Streak -->
    <div class="streak streak-photo streak-md"
      style="background-image:url('https://mdbootstrap.com/img/Photos/Horizontal/Things/full page/img%20%287%29.jpg')">

      <div class="flex-center mask rgba-gradient">

        <div class="text-center white-text">

          <h3 class="h3-responsive mb-5"><i class="fas fa-quote-left" aria-hidden="true"></i> Lorem ipsum dolor sit

            amet, consectetur adipisicing elit. <i class="fas fa-quote-right" aria-hidden="true"></i></h3>

          <h5 class="text-center font-italic wow fadeIn" data-wow-delay="0.2s">~ Erich Fromm</h5>

        </div>

      </div>

    </div>
    <!-- Streak -->

    <!-- Projects section v.2 -->
    <section id="portfolio" class="section mt-2 pb-5 mb-4">

      <div class="container">

        <!-- Section heading -->
        <div class="row mt-4">

          <div class="col-md-12 ">

            <h2 class="text-uppercase text-center font-weight-bold custom-primary-text my-4 pt-5 wow fadeIn"
              data-wow-delay="0.2s">Our

              projects</h2>

            <hr class="between-sections">



          </div>

        </div>

      </div>

      <!-- First column -->
      <div class="col-md-12 wow fadeIn" data-wow-delay="0.4s">

        <!-- Nav tabs -->
        <ul class="nav md-pills flex-center flex-wrap mx-0" role="tablist">


          <li class="nav-item">

            <a class="nav-link font-weight-bold active" data-toggle="tab" href="#panel32" role="tab">

              BRANDING</a>

          </li>

          <li class="nav-item">

            <a class="nav-link font-weight-bold" data-toggle="tab" href="#panel33" role="tab">

              MUSIC COVER</a>

          </li>

          <li class="nav-item">

            <a class="nav-link font-weight-bold" data-toggle="tab" href="#panel34" role="tab">

              PRINT DESIGN</a>

          </li>

        </ul>

      </div>

      <!-- Tab panels -->
      <div class="tab-content">


        <!-- Panel 2 -->
        <div class="tab-pane fade show in active" id="panel32" role="tabpanel">

          <br>

          <!-- First row -->
          <div class="row ml-5 mr-5 mt-2 flex-center">

            <!-- First column -->
            <div class="col-lg-3 col-md-6">

              <!-- Featured image -->
              <div class="view overlay zoom z-depth-2">

                <img src="../img/graphic profile/bharotti- logo/01-Kitchen-mockup-vol-6.jpg" class="img-fluid">

              </div>

              <p class="text-uppercase text-center font-weight-bold blue-custom-primary-text mt-4 mb-4">Bharotti</p>

            </div>
            <!-- First column -->

            <!-- Second column -->
            <div class="col-lg-3 col-md-6">

              <!-- Featured image -->
              <div class="view overlay zoom z-depth-2">

                  <img src="../img/graphic profile/bharotti- logo/02-Kitchen-mockup-vol-6.jpg" class="img-fluid">
  
                </div>
  
                <p class="text-uppercase text-center font-weight-bold blue-custom-primary-text mt-4 mb-4">Bharotti</p>

            </div>
            <!-- Second column -->

            <!-- Third column -->
            <div class="col-lg-3 col-md-6">

              <!-- Featured image -->
              <div class="view overlay zoom z-depth-2">

                  <img src="../img/graphic profile/bharotti- logo/03-Kitchen-mockup-vol-6.jpg" class="img-fluid">
  
                </div>
  
                <p class="text-uppercase text-center font-weight-bold blue-custom-primary-text mt-4 mb-4">Bharotti</p>

            </div>
            <!-- Third column -->

            <!-- Fourth column -->
            <div class="col-lg-3 col-md-6">

                <div class="view overlay zoom z-depth-2">

                    <img src="../img/graphic profile/bharotti- logo/Unti89tled-1.jpg" class="img-fluid">
    
                  </div>
    
                  <p class="text-uppercase text-center font-weight-bold blue-custom-primary-text mt-4 mb-4">Bharotti</p>
  
              </div>

            </div>
            <!-- Fourth column -->
            <br>

            <!-- First row -->
            <div class="row ml-5 mr-5 mt-2 flex-center">
  
              <!-- First column -->
              <div class="col-lg-3 col-md-6">
  
                <!-- Featured image -->
                <div class="view overlay zoom z-depth-2">
  
                  <img src="../img/graphic profile/bharotti- logo/Untikjtled-1.jpg" class="img-fluid">
  
                </div>
  
                <p class="text-uppercase text-center font-weight-bold blue-custom-primary-text mt-4 mb-4">Bharotti</p>
  
              </div>
              <!-- First column -->
  
              <!-- Second column -->
              <div class="col-lg-3 col-md-6">
  
                <!-- Featured image -->
                <div class="view overlay zoom z-depth-2">
  
                    <img src="../img/graphic profile/bharotti- logo/Untitddled-1.jpg" class="img-fluid">
    
                  </div>
    
                  <p class="text-uppercase text-center font-weight-bold blue-custom-primary-text mt-4 mb-4">Bharotti</p>
  
              </div>
              <!-- Second column -->
  
              <!-- Third column -->
              <div class="col-lg-3 col-md-6">
  
                <!-- Featured image -->
                <div class="view overlay zoom z-depth-2">
  
                    <img src="../img/graphic profile/bharotti- logo/Untitled-1.jpg" class="img-fluid">
    
                  </div>
    
                  <p class="text-uppercase text-center font-weight-bold blue-custom-primary-text mt-4 mb-4">Bharotti</p>
  
              </div>
              <!-- Third column -->
  
              <!-- Fourth column -->
              <div class="col-lg-3 col-md-6">
  
                  <div class="view overlay zoom z-depth-2">
  
                      <img src="../img/graphic profile/nabed sori - logo/397aef67360127.5b368cbd5899e.png" class="img-fluid">
      
                    </div>
      
                    <p class="text-uppercase text-center font-weight-bold blue-custom-primary-text mt-4 mb-4">Nabed Sori</p>
    
                </div>
  
              </div>
              <!-- Fourth column -->



              <br>

              <!-- First row -->
              <div class="row ml-5 mr-5 mt-2 flex-center">
    
                <!-- First column -->
                <div class="col-lg-3 col-md-6">
    
                  <!-- Featured image -->
                  <div class="view overlay zoom z-depth-2">
    
                      <img src="../img/graphic profile/nabed sori - logo/خيارات لونية.jpg" class="img-fluid">
      
                    </div>
      
                    <p class="text-uppercase text-center font-weight-bold blue-custom-primary-text mt-4 mb-4">Nabed Sori</p>
    
                </div>
                <!-- First column -->
    
                <!-- Second column -->
                <div class="col-lg-3 col-md-6">
    
                  <!-- Featured image -->
                  <div class="view overlay zoom z-depth-2">
    
                      <img src="../img/graphic profile/nabed sori - logo/Sketch-Losgo-Mockup-PSD.jpg" class="img-fluid">
      
                    </div>
      
                    <p class="text-uppercase text-center font-weight-bold blue-custom-primary-text mt-4 mb-4">Nabed Sori</p>
    
                </div>
                <!-- Second column -->
    
                <!-- Third column -->
                <div class="col-lg-3 col-md-6">
    
                  <!-- Featured image -->
                  <div class="view overlay zoom z-depth-2">
    
                      <img src="../img/graphic profile/nabed sori - logo/547b6e67360127.5b368cbd57e7a.jpg" class="img-fluid">
      
                    </div>
      
                    <p class="text-uppercase text-center font-weight-bold blue-custom-primary-text mt-4 mb-4">Nabed Sori</p>
    
                </div>
                <!-- Third column -->
    
                <!-- Fourth column -->
                <div class="col-lg-3 col-md-6">
    
                    <div class="view overlay zoom z-depth-2">
    
                        <img src="../img/graphic profile/nabed sori - logo/45fabd67360127.5b368cbd56099.png" class="img-fluid">
        
                      </div>
        
                      <p class="text-uppercase text-center font-weight-bold blue-custom-primary-text mt-4 mb-4">Nabed Sori</p>
      
                  </div>
    
                </div>
                <!-- Fourth column -->
        </div>
       







  
          <!-- First row -->




        <!-- Panel 3 -->
        <div class="tab-pane fade" id="panel33" role="tabpanel">

          <br>

          <!-- First row -->
          <div class="row ml-5 mr-5 mt-2 flex-center">

            <!-- First column -->
            <div class="col-lg-3 col-md-6">

              <!-- Featured image -->
              <div class="view overlay zoom z-depth-2">

                <img src="../img/graphic profile/mohammed al majzoub - music cover/2d575e67481139.5b3b75472b631.jpg" class="img-fluid">

              </div>

              <p class="text-uppercase text-center font-weight-bold blue-custom-primary-text mt-4 mb-4">mohammed al majzoub - music cover</p>

            </div>
            <!-- First column -->

            <!-- Second column -->
            <div class="col-lg-3 col-md-6">

              <!-- Featured image -->
              <div class="view overlay zoom z-depth-2">

                <img src="../img/graphic profile/mohammed al majzoub - music cover/6e398f67481139.5b3b7546df109.png" class="img-fluid">

              </div>

              <p class="text-uppercase text-center font-weight-bold blue-custom-primary-text mt-4 mb-4">mohammed al majzoub - music cover</p>

            </div>
            <!-- Second column -->

            <!-- Third column -->
            <div class="col-lg-3 col-md-6">

              <!-- Featured image -->
              <div class="view overlay zoom z-depth-2">

                <img src="../img/graphic profile/mohammed al majzoub - music cover/97cb2167481139.5b3b7546deac9.jpg" class="img-fluid">

              </div>

              <p class="text-uppercase text-center font-weight-bold blue-custom-primary-text mt-4 mb-4">mohammed al majzoub - music cover</p>

            </div>
            <!-- Third column -->

            <!-- First row -->
          </div>

        </div>
        <!-- Panel 3 -->

        <!-- Panel 4 -->
        <div class="tab-pane fade" id="panel34" role="tabpanel">

          <br>

          <!-- First row -->
          <div class="row ml-5 mr-5 mt-2 flex-center">

            <!-- First column -->
            <div class="col-lg-12 col-md-12">

              <!-- Featured image -->
              <div class="view overlay zoom z-depth-2">

                <img src="../img/graphic profile/pacman - magazine ( layout)/Screen Shot 2019-05-20 at 4.09.28 PM.png" class="img-fluid">

              </div>

              <p class="text-uppercase text-center font-weight-bold blue-custom-primary-text mt-4 mb-4">pacman  magazine</p>

            </div>
            <!-- First column -->



          </div>
          <!-- First row -->

        </div>
        <!-- Panel 4 -->

      </div>
      <!-- Tab panels -->

    </section>
    <!-- Projects section v.2 -->






  </main>
  <!-- Main layout -->


  <hr class="between-sections">

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
