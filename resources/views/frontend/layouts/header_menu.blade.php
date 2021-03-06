<nav role="navigation" class="mobileNavigation ">
  <div id="menuToggle">
      <input type="checkbox" />
      <span></span>
      <span></span>
      <span></span>

      <ul id="menu">
          <li><a href="index.html">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Info</a></li>
          <li><a href="#">Contact</a></li>

      </ul>


  </div>
  <a class="navbar-brand logo" href="#">Online Quiz</a>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light desktopNavigation">
  <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">

          <ul class="navbar-nav">
              <li class="nav-item dropdown services">
                  <label for="check" class="servicesLabel">
                      <input type="checkbox" id="check" />
                      <span></span>
                      <span></span>
                      <span></span>
                  </label>
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Services
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li>
                          <a class="dropdown-item" href="#">Something else here</a>
                      </li>
                  </ul>
              </li>

              <li class="nav-item">
                  <a class="nav-link text-right" aria-current="page" href="#">About Us</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Join Us
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li>
                          <a class="dropdown-item" href="#">Something else here</a>
                      </li>
                  </ul>
              </li>
              <a class="navbar-brand logo" href="#" style="margin-top: 24px;">Online Quiz</a>
              <li>
                  <a class="nav-link text-right"><span class="timeline">24x7</span></a>
              </li>
              <li class="nav-item counsellor">
                  <button type="button" class="btn btn-outline-warning">
                      <img src="{{ asset('/frontend/images/Icons/headphones.png')}}" class="yellowFilteredColor" />
                      Online Quiz
                  </button>
              </li>
              <li class="nav-item login">
                  <a class="nav-link" href="#"><img src="{{ asset('/frontend/images/Icons/enter.png')}}" class="img-fluid yellowFilteredColor')}}" /> Online Quiz
                  </a>
              </li>
          </ul>
      </div>
  </div>
</nav>
