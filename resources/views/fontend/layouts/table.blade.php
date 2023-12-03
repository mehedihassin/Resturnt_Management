<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="{{asset('ui/fontend')}}/images/favicon.png" type="">

  <title> Feane </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('ui/fontend')}}/css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="{{asset('ui/fontend')}}/https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="{{asset('ui/fontend')}}/https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="{{asset('ui/fontend')}}/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{asset('ui/fontend')}}/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('ui/fontend')}}/css/responsive.css" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- font awesome cdn --}}
    <script src="https://kit.fontawesome.com/72826e8494.js" crossorigin="anonymous"></script>

</head>

<body>

  <div class="hero_area">
    <div class="bg-box">
      <img src="{{asset('ui/fontend')}}/images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{route('fontend.home')}}">
            <span>
              Feane
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item active">
                <a class="nav-link" href="{{route('fontend.home')}}">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('fontend.menu')}}">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('fontend.about')}}">About</a>
              </li>
              <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="booking.html" class="dropdown-item">Booking</a>
                    <a href="{{route('fontend.ourteam')}}" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                </div>
            </div>
              <li class="nav-item">
                <a class="nav-link" href="#">Book Table <span class="sr-only">(current)</span> </a>
              </li>

              <li>
                @if (Route::has('login'))

                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('profile.edit')}}">Profile</a>
                        </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();">Logout</a>

                        </form>
                        </li>


                    @else
                    <li class="nav-item"> <a class="nav-link" href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>

                        @if (Route::has('register'))
                        <li class="nav-item">   <a class="nav-link" href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                        @endif
                    @endauth

            @endif


            </li>
            <li class="nav-item">
                <a class="nav-link" href=""><i class="fa-solid fa-cart-plus text-warning"></i>CART[{{$count}}]</a>
              </li>
            </ul>
            <div class="user_option">
              <a href="" class="order_online">
                Order Online
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

  </div>


  <!-- book section -->
  <section class="book_section layout_padding  ">
    <div class="container ">
      <div class="heading_container">
        <h2>
          Book A Table
        </h2>
      </div>
      <div class="row text-center">
        <div class="col-md-12">
          <div class="form_container">
            <form action="{{route('reservation.store')}}" method="POST">
                @csrf
              <div>
                <input type="text" name="name" class="form-control" required="" placeholder="Your Name" />
              </div>
              <div>
                <input type="email" name="email" class="form-control" required="" placeholder="Your Email" />
              </div>
              <div>
                <input type="text" name="phone" class="form-control" required="" placeholder="Phone Number" />
              </div>

              <div>
                <select name="guest" class="form-control nice-select wide">
                  <option value="" disabled selected>
                   guest
                  </option>
                  <option value="1">
                    1
                  </option>
                  <option value="2">
                    2
                  </option>
                  <option value="3">
                    3
                  </option>
                  <option value="4">
                    4
                  </option>
                  <option value="5">
                    5
                  </option>
                </select>
              </div>
              <div>
                <input name="date" required="" type="date" class="form-control">
              </div>
              <div>
                <select name="time" class="form-control nice-select wide">
                  <option value="" disabled selected>
                    Time
                  </option>
                  <option value="breakfast">
                    Breakfast
                  </option>
                  <option value="lunch">
                    Lunch
                  </option>
                  <option value="dinner">
                    Dinner
                  </option>
                </select>
              </div>
              <div class="btn_box">
                <button type="submit">
                  Book Now
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container ">
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end book section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Feane
            </a>
            <p>
              Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am -10.00 Pm
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a><br><br>
          &copy; <span id="displayYear"></span> Distributed By
          <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="{{asset('ui/fontend')}}/js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="{{asset('ui/fontend')}}/https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="{{asset('ui/fontend')}}/js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="{{asset('ui/fontend')}}/https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="{{asset('ui/fontend')}}/https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="{{asset('ui/fontend')}}/https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="{{asset('ui/fontend')}}/js/custom.js"></script>
  <!-- Google Map -->
  <script src="{{asset('ui/fontend')}}/https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
