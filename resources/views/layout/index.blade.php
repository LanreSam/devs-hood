
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>DevsHood - Team of Computer Scientist</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/devs-hood.png') }}" rel="icon">

  <!-- Google Fonts -->
  <link href="{{ asset('assets/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700') }}" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('assets/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  @livewireStyles

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left d-flex">
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="#header" class="scrollto"><img src="{{ asset('assets/img/devs-hood.png') }}" alt="" class="img-fluid mb-4"></a>
        <h1 class="mr-3"><a href="#intro" class="scrollto"><span class="text-light">DevsHood</span></a></h1>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#footer">Contact Us</a></li>
        </ul>
      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">

        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>DevsHood<br>Team of Computer <span>Scientist!</span></h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>

        <div class="col-md-6 intro-img order-md-last order-first">
            <img src="{{ asset('assets/img/intro-img.png') }}" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  {{ $slot }}

  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

                <div class="col-sm-6">

                  <div class="footer-info">
                    <h3>DevsHood</h3>
                    <p>Devhood is a tech conglomerates that are purpose driven with the aim of helping and assisting brands and cooperate organizations to be digitally, globally recognized and attainable.</p>
                  </div>

                  <div class="footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Please kindly enter your email in the input field provided below and click the subscribe button, to subscribe to our newsletter where we share amazing contents, deals & promotion and useful information that might take your business to the next level.</p>
                    <form action="{{ route('store.email') }}" method="post">
                        @csrf
                        <input type="email" name="email"><input type="submit"  value="Subscribe">

                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </form>
                  </div>

                </div>

                <div class="col-sm-6">
                  <div class="footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                      <li><a href="#intro">Home</a></li>
                      <li><a href="#about">About us</a></li>
                      <li><a href="#portfolio">Portfolio</a></li>
                      <li><a href="#">Terms of service</a></li>
                      <li><a href="#">Privacy policy</a></li>
                    </ul>
                  </div>

                  <div class="footer-links">
                    <h4>Contact Us</h4>
                    <p>
                      <strong class="text-light">Phone:</strong> +234 8128 251 336<br>
                      <strong class="text-light">Email:</strong> Devshood@gmail.com<br>
                      <span class="text-danger">Email currently not active use phone instead</span>
                    </p>
                  </div>

                  <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  </div>

                </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">

              <h4>Send us a message</h4>
              <p>We typically reply to messages within 24 hours, for urgent replies, you can call us, or contact anyone on the team</p>

                <form action="{{ route('send.email') }}" method="post" role="form" class="">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />

                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />

                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />

                        @error('subject')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>

                        @error('message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="text-center"><button type="submit" title="Send Message" class="btn">Send Message</button></div>

                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below if you want to use a preloader -->
  {{-- <div id="preloader"></div> --}}

  {{-- sweet alert library --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>


  <!-- JavaScript Libraries -->
  <script src="{{ asset('assets/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('assets/lib/mobile-nav/mobile-nav.js') }}"></script>
  <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('assets/contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  @livewireScripts

    @if(Session::has('subscribe-msg'))
        <script>
            swal("Subscription Successful!", "{!! Session::get('subscribe-msg') !!}", "success", {
                button:"Close",
                title: "DevsHood",
                closeOnClickOutside: false,
            })
        </script>
    @endif

    @if(Session::has('mail-msg'))
        <script>
            swal("Message Sent Successfully!", "{!! Session::get('mail-msg') !!}", "{{ asset('assets/img/devs-hood.png') }}", {
                button:"Close",
                title: "DevsHood",
                closeOnClickOutside: false,
            })
        </script>
    @endif
</body>
</html>
