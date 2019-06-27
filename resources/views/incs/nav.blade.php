    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar custom-secondary-trans ">
        <div class="container">
  
          <a class="navbar-brand" href="#">
            <img src="../img/whitelogo.png" height="70">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="list-unstyled navbar-nav mr-auto">
              <li class="nav-item dropdown  ml-4 mb-0 {{ Request::routeIs('home') ? 'active' : '' }}">
                <a class="nav-link d white-text" href="{{route('home')}}" aria-haspopup="true" aria-expanded="false"> Home </a>
  
              </li>
              <li class="nav-item dropdown ml-4 {{ Request::routeIs('software-engineering') || Request::routeIs('visual-production') || Request::routeIs('graphic-design') || Request::routeIs('architecture')  ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle white-text" id="navbarDropdownMenuLink12" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Sections </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item {{ Request::routeIs('software-engineering') ? 'active' : '' }}" href="{{route('software-engineering')}}">Software Engineering</a>
                  <a class="dropdown-item {{ Request::routeIs('visual-production') ? 'active' : '' }}" href="{{route('visual-production')}}">Visual Proudction</a>
                  {{-- <a class="dropdown-item {{ Request::routeIs('graphic-design') ? 'active' : '' }}" href="{{route('graphic-design')}}">Graphic Design</a> --}}
                  <a class="dropdown-item {{ Request::routeIs('architecture') ? 'active' : '' }}" href="{{route('architecture')}}">Architecture & Interior Design</a>
                </div>
              </li>
              <li class="nav-item ml-4 {{ Request::routeIs('about') ? 'active' : '' }}">
                <a class="nav-link white-text" href="{{route('about')}}" data-offset="90">About Us</a>
              </li>

              

              <li class="nav-item dropdown ml-4 {{ Request::routeIs('board-of-directiors') || Request::routeIs('chair-man-letter') ? 'active' : '' }} ">
                  <a class="nav-link dropdown-toggle white-text" id="navbarDropdownMenuLink12" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Board of Directiors </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item {{ Request::routeIs('board-of-directiors') ? 'active' : '' }}" href="{{route('board-of-directiors')}}">Board Of Directiors</a>
                    <a class="dropdown-item {{ Request::routeIs('chair-man-letter') ? 'active' : '' }}" href="{{route('chair-man-letter')}}">Chair Man Letter</a>

                  </div>
                </li>

              


              
           
              <li class="nav-item  ml-4 {{ Request::routeIs('contact-us') ? 'active' : '' }}">
                <a class="nav-link  white-text" aria-haspopup="true" href="{{route('contact-us')}}" aria-expanded="false">Contact Us </a>
              </li>
            </ul>
            <!-- Social Icon  -->
            <ul class="navbar-nav nav-flex-icons">
              <li class="nav-item ml-4">
                <a class="nav-link">
                  <i class="fab fa-facebook-f white-text"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link">
                  <i class="fab fa-twitter white-text"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link">
                  <i class="fab fa-instagram white-text"></i>
                </a>
              </li>
  
            </ul>
          </div>
        </div>
        </div>
      </nav>