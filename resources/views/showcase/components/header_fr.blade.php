  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
      <div class="container-fluid">

          <div class="row justify-content-center align-items-center">
              <div class="col-xl-11 d-flex align-items-center justify-content-between">
                  <h1 class="logo"><a href="index.html">IBN BATOUTA</a></h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                  <nav id="navbar" class="navbar">
                      <ul>
                          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
                          <li><a class="nav-link scrollto" href="#about">IAIB</a></li>
                          <li><a class="nav-link scrollto" href="#services">OPPORTUNITES</a></li>
                          <li><a class="nav-link scrollto " href="#portfolio">Formations</a></li>
                          <li><a class="nav-link scrollto" href="#team">Equipe</a></li>
                          {{-- <li><a class="nav-link  " href="blog.html">Presse</a></li> --}}
                          <li class="dropdown"><a href="#"><span>Presse</span> <i class="bi bi-chevron-down"></i></a>
                              <ul>
                                  <li><a href="#">Drop Down 1</a></li>
                                  <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                      <ul>
                                          <li><a href="#">Deep Drop Down 1</a></li>
                                          <li><a href="#">Deep Drop Down 2</a></li>
                                          <li><a href="#">Deep Drop Down 3</a></li>
                                          <li><a href="#">Deep Drop Down 4</a></li>
                                          <li><a href="#">Deep Drop Down 5</a></li>
                                      </ul>
                                  </li>
                                  <li><a href="#">Drop Down 2</a></li>
                                  <li><a href="#">Drop Down 3</a></li>
                                  <li><a href="#">Drop Down 4</a></li>
                              </ul>
                          </li>
                          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                          <li class="dropdown"><a href="{{ route('french') }}"><span>Français</span> <i class="bi bi-chevron-down"></i></a>
                              <ul>
                                  {{-- <li><a href="{{ route('french') }}">Français</a></li> --}}
                                  <li><a href="{{ route('english') }}">Anglais</a></li>
                                  <li><a href="{{ route('arabic') }}">Arabe</a></li>
                              </ul>
                          </li>
                      </ul>
                      <i class="bi bi-list mobile-nav-toggle"></i>
                  </nav><!-- .navbar -->
              </div>
          </div>

      </div>
  </header><!-- End Header -->
