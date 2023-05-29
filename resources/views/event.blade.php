@auth
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alumni</title>
    <!-- Required meta tag -->
    <meta charset="utf-8" />
    <!-- FONT CSS -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- SLICK CSS -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <!-- VENOBOX CSS -->
    <link rel="stylesheet" href="{{ asset('css/venobox.min.css') }}">
    <!-- WOW ANIMATED CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <!-- DEFAULT CSS -->
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <!-- === HEADER PART START === -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Alumni Linked</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="home"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <span> Profile</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="jobs"><i class="fa fa-list-alt" aria-hidden="true"></i><span> Jobs</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-users" aria-hidden="true"></i><span> Forum</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i><span> Alumni</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="event"><i class="fa fa-calendar" aria-hidden="true"></i><span> Events</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="companis"><i class="fa fa-building-o" aria-hidden="true"></i><span> Company</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i><span> Message</span></a>
            </li>
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
                  </form>
            </li>
          </ul>
          <ul class="navbar-nav">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out" aria-hidden="true"></i><span> Sign Out</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          <ul>
        </div>
      </nav>

    <!-- === HEADER PART END === -->




    <!-- === HEADER PART START === -->
    <section class="event_list">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="event_content">
                        <div class="head">

                            <h2>Career Development Boot-camp by DevilEye</h2>
                            <p>Hosted bt Facebook</p>
                        </div>
                        <div class="require">
                            <p>
                            Event Type: Online <br>
                            Platform: Zoom <br>
                            Date: 05:08:2023
                            </p>
                        </div>
                        <div class="des">
                            <h5>Event Description</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus
                                sit amet augue nec urna efficitur tincidunt. Vivamus consectetur
                                aliquam lectus commodo ....</p>
                        </div>
                        <div class="btns d-flex justify-content-around">
                            <a href="readmore" class="btn1">Read More</a>
                            <a href="" class="btn2">Join Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="event_content">
                        <div class="head">

                            <h2>Networking is life by Palash Roy</h2>
                            <p>Hosted by US-Bangla</p>
                        </div>
                        <div class="require">
                            <p>
                            Event Type: Offline <br>
                            Location: Green University <br>
                            Date: 05:28:2023
                            </p>
                        </div>
                        <div class="des">
                            <h5>Event Description</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus
                                sit amet augue nec urna efficitur tincidunt. Vivamus consectetur
                                aliquam lectus commodo ....</p>
                        </div>
                        <div class="btns d-flex justify-content-around">
                            <a href="readmore" class="btn1">Read More</a>
                            <a href="" class="btn2">Join Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="event_content">
                        <div class="head">

                            <h2>Career Development Boot-camp by DevilEye</h2>
                            <p>Hosted bt Facebook</p>
                        </div>
                        <div class="require">
                            <p>
                            Event Type: Online <br>
                            Platform: Zoom <br>
                            Date: 05:08:2023
                            </p>
                        </div>
                        <div class="des">
                            <h5>Event Description</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus
                                sit amet augue nec urna efficitur tincidunt. Vivamus consectetur
                                aliquam lectus commodo ....</p>
                        </div>
                        <div class="btns d-flex justify-content-around">
                            <a href="readmore" class="btn1">Read More</a>
                            <a href="" class="btn2">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- === HEADER PART END === -->



    <!-- === HEADER PART START === -->
    <!-- === HEADER PART END === -->



    <!-- === HEADER PART START === -->
    <!-- === HEADER PART END === -->



    <!-- === HEADER PART START === -->
    <!-- === HEADER PART END === -->



    <!-- === HEADER PART START === -->
    <!-- === HEADER PART END === -->



    <!-- === HEADER PART START === -->
    <!-- === HEADER PART END === -->



    <!-- === HEADER PART START === -->
    <!-- === HEADER PART END === -->



    <!-- === HEADER PART START === -->
    <!-- === HEADER PART END === -->



    <!-- === HEADER PART START === -->
    <!-- === HEADER PART END === -->



    <!-- === HEADER PART START === -->
    <!-- === HEADER PART END === -->



    <!-- JQUERY FILE -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <!-- POPPER JS -->
    <script src="js/popper.min.js"></script>
    <!-- BOOTSTRAP JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- MIXITUP js -->
    <script src="js/mixitup.min.js"></script>
    <!-- VENOBOX js -->
    <script src="js/venobox.min.js"></script>
    <!-- SLICK JS -->
    <script src="js/slick.min.js"></script>
    <!-- COUNTER WAYPOINT JS -->
    <script src="js/waypoints.min.js"></script>
    <!-- TYPE JS -->
    <script src="js/typed.min.js"></script>
    <!-- COUNTER JS -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- WOW ANIMATED JS -->
    <script src="js/wow.min.js"></script>
    <!-- CUSTOM JS -->
    <script src="js/custom.js"></script>
</body>

</html>
@endauth
@guest
    @if (Route::has('login'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    @endif
@endguest



