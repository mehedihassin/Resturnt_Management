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
    {{-- font awesome cdn --}}
    <script src="https://kit.fontawesome.com/72826e8494.js" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- font awesome cdn --}}
    <script src="https://kit.fontawesome.com/72826e8494.js" crossorigin="anonymous"></script>


</head>

<body class="sub_page">

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
                <a class="nav-link" href="{{route('fontend.home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('fontend.menu')}}">Menu<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('fontend.about')}}">About</a>
              </li>
              <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="booking.html" class="dropdown-item">Book Table</a>
                    <a href="{{route('fontend.ourteam')}}" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                </div>
            </div>
              <li class="nav-item">
                <a class="nav-link" href="{{route('fontend.booking')}}">Book Table</a>
              </li>

              <li class="nav-item">
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
                    <li class="nav-item"> <a class="nav-link" href="{{ route('login') }}">Log in</a></li>

                        @if (Route::has('register'))
                        <li class="nav-item">   <a class="nav-link" href="{{ route('register') }}">Register</a></li>
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

  <!-- our team -->

  <div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
            <h1 class="mb-5">Our Master Chefs</h1>
        </div>


        <div class="row g-4">
            @foreach ($teams as $team)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="rounded-circle overflow-hidden m-4">
                        <img class="img-fluid" src="{{asset('images/'. $team->image)}}" alt="">
                    </div>
                    <h5 class="mb-0">{{$team->name}}</h5>
                    <small>{{$team->designation}}</small>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-secondary mx-1" href=""><i class="fa-brands fa-x-twitter"></i></a>
                        <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


    </div>
</div>

  <!-- end our team -->

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
