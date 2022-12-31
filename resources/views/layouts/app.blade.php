<!doctype html>
<html lang="en">
  <head>
    <title>Xtreme</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" sizes="114x114" href="{{ asset('images/background/favicon.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/layoutStyle.css')}}">
</head>
  @yield('header')
  <body>


    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3 logo">

              <a href="{{url('/')}}" class="navbar-brand">
              <img src="{{asset('images/logo/xtreme-logos_white.png')}}" id="logo_white" style="" srcset="">
              <img src="{{asset('images/logo/xtreme-logos_black.png')}}" id="logo_black" style="" srcset="">

            </a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
                
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="{{url('/')}}" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a href="{{route('pricing')}}" class="nav-link text-uppercase font-weight-bold">Pricing</a></li>                     
                        <li class="nav-item"><a href="{{route('blogs')}}" class="nav-link text-uppercase font-weight-bold">Blog</a></li>
                        <li class="nav-item"><a href="{{route('contact')}}" class="nav-link text-uppercase font-weight-bold">Contact</a></li>
                        <li class="nav-item"><a href="{{route('faq')}}" class="nav-link text-uppercase font-weight-bold">Faq</a></li>
                  </ul>
                </div>
        </nav>
    </header>


    <main>
@yield('content')
   
    </main>
     

<footer class="section-p1 footer mt-5 pt-5" >
    <div class="col">
      <img class="logo" src="./Sources/logo.png" alt="">
      <h4>Contact</h4>
      <p> <strong>Address:</strong> 16th km, დავით აღმაშენებლის ხეივანი, Tbilisi 0131</p>
      <p> <strong>Phone:</strong>  +(995) 598 43 87 88</p>
      <p> <strong>Hours:</strong> 9:00-24:00, Mon-Sat</p>
      <div class="follow">
        <h4>Follow Us</h4>
        <div class="icon">
          <i class="fab fa-facebook f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-pinterest-p"></i>
          <i class="fab fa-youtube"></i>
        </div>
      </div>
    </div>
    <div class="col">
      <h4>xTreme</h4>
      <a href="#">Home</a>
      <a href="#">FAQ</a>
      <a href="#">Pricing</a>
      <a href="#">Contact Us</a>     
    
    </div>
    <div class="col">
      <h4>About</h4>
      <a href="#">About Us</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms & Conditions</a>
      <a href="#">Contact Us</a>     
    
    </div>


  </footer>
    <script src="https://kit.fontawesome.com/8f18f5e6c2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
      $(function () {
          $(window).on('scroll', function () {
              if ( $(window).scrollTop() > 10 ) {
                  $('.navbar').addClass('active');
              } else {
                  $('.navbar').removeClass('active');
              }
          });
      });
          </script>
  </body>
</html>

@yield('footer')