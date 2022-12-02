<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEZIN</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon-airmaster.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <style>
        .bell{
            position: absolute;
            right: -2px;
            top: -5px;
            padding: 0 6px;
            border-radius: 50%;
            font-size: 14px ;
            background-color: #a20b8d;
            color: #fff;
        }
    </style>

</head>
<body>

<header class="dark">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="/"><img src="{{asset('assets/img/logo.png')}}"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <div class="menu" style="padding-left: 180px;">
                    <ul class="navbar-nav mb-2 mb-lg-0 align-items-right">
                        <li class="nav-item header__item" style="padding-left: 30px;">
                            <a href="index.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item header__item" style="padding-left: 30px;">
                            <a href="find_help.html" class="nav-link">Find Help</a>
                        </li>
                        <li class="nav-item header__item" style="padding-left: 30px;">
                            <a href="" class="nav-link">Support</a>
                        </li>
                        <li class="nav-item header__item" style="padding-left: 30px;">
                            <a href="" class="nav-link">Contact Us</a>
                        </li>
                        <li class="nav-item header__item" style="padding-left: 30px;">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Self-Improvement</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Meditation</a>
                                <a class="dropdown-item" href="#">Inspiration</a>
                            </div>
                        </li>
                        @if(Auth::check())
                        <li  class="nav-item header__item" style="padding-left: 20px;">
                            <a style="position:relative;" href="{{route('tasks')}}"><img src="{{asset('assets/img/bell.png')}}" width="30" alt=""> <span class="bell">{{$taskCount}}</span></a>
                        </li>
                        @endif

                    </ul>
                    <a href="/login" class="header__button d-md-none open-form">{{ Auth::user()->name ?? 'LOGIN'}}</a>
                </div>
            </div>
            <a href="/login" class="header__button d-none d-md-flex">{{ Auth::user()->name ?? 'LOGIN'}}</a>
        </nav>
    </div>
</header>

<section id="hero">
    <div class="hero-outer">
        <div class="container">
            <div class="hero-inner">
                <h1 class="hero-title">We’d like to improve the quality of your life through your own assistance!</h1>
                <p class="hero-text d-none d-md-block">Sezin is a platform that treats people as individuals, promoting respect, dignity and recognising</p>
                <a href="{{route('interview')}}" class="hero__button">GET STARTED</a>
            </div>
        </div>
    </div>
</section>

<section id="second">
    <div class="container">
        <div class="second-outer">
            <div class="second-left">
                <img src="{{asset('assets/img/second-left.png')}}" alt="welcome-vector">
            </div>
            <div class="second-right">
                <h2>Welcome to Sezin</h2>
                <img src="{{asset('assets/img/Line.png')}}" style="margin-left: 25px; margin-top: -50px;">
                <p>We exist to:</p>
                <ul>
                    <li>
                        work for and promote the preservation and safeguarding of good mental health
                    </li>
                    <li>
                        work for, promote and provide for the well-being, interests and rights of people who have mental ill health
                    </li>
                </ul>
                <div class="second-button"><a href="" class="second__button">DISCOVER</a></div>
            </div>
        </div>
    </div>
</section>

<section id="third">
    <div class="container">
        <div class="third-block">
            <h2>How are you feeling today?</h2>

            <div class="block-left">
                <ul class="left-list">
                    <li>
                        <a href="">Anxios</a>
                    </li>
                    <li>
                        <a href="">Unmotivated</a>
                    </li>
                    <li class="list-focus">
                        <a href="">Lonely</a>
                    </li>
                    <li>
                        <a href="">Sad</a>
                    </li>
                    <li>
                        <a href="">Tired</a>
                    </li>
                    <li>
                        <a href="">Stressed</a>
                    </li>
                    <li>
                        <a href="">Positive</a>
                    </li>
                    <li>
                        <a href=""><img src="{{asset('assets/img/arrow.png')}}"></a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>
<section id="fourth">
    <div class="container">
        <h2>Articles</h2>
        <img src="{{asset('assets/img/line-4.png')}}">
        <div class="articles">
            @foreach($articles as $article)
            <div class="article">
                <h3>{{$article->title}}</h3>
                <p>{{$article->description}}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>
<section id="fourth">
    <div class="container">
        <h2>Recent Webinars</h2>
        <img src="{{asset('assets/img/line-4.png')}}">
        <p class="fourth-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.</p>
        <div class="fourth-button"><a href="" class="fourth__button">VIEW ALL</a></div>
        <div class="fourth-cards">
            <a href="">
                <div class="fourth-card-1">
                    <p>How to start thinking positively?</p>
                </div>
            </a>
            <a href="">
                <div class="fourth-card-2">
                    <p>Yoga to reduce fatigue</p>
                </div>
            </a>
            <a href="">
                <div class="fourth-card-3">
                    <p>You are not lazy, bored, or unmotivated</p>
                </div>
            </a>
        </div>
    </div>
</section>

<section id="fifth">
    <div class="container">
        <h2>Download our App</h2>
        <img src="{{asset('assets/img/line-5.png')}}" style="margin-top: -40px;">
        <p>Discover exclusive help and unique content with our mobile experience.</p>
        <a href=""><img src="{{asset('assets/img/Store.png')}}" width="250px" style="margin-top: 30px;"></a>
    </div>
</section>

<section id="sixth">
    <div class="container">

    </div>
</section>

<footer>
    <div class="container">
        <div class="footer-items">
            <div class="footer-col-1">
                <ul>
                    <li class="footer-items-lead"><a href=""><img src="{{asset('assets/img/Logo.png')}}"></a></li>
                    <li><a href="">Sezin, Inc, 234<br>Almaty, Dostyk Street 29/28</a></li>
                    <li><a href=""><i style="font-weight: 1;">info@warehouse.project</i></a></li>
                    <li><a href=""><i style="font-weight: 1;">1-232-3434 (Main)</i></a></li>
                </ul>
            </div>
            <div class="footer-col-2">
                <ul>
                    <li class="footer-items-lead"><a href="">About</a></li>
                    <li><a href="">Profile</a></li>
                    <li><a href="">Features</a></li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">DW News</a></li>
                </ul>
            </div>
            <div class="footer-col-3">
                <ul>
                    <li class="footer-items-lead"><a href="">Help</a></li>
                    <li><a href="">Support</a></li>
                    <li><a href="">Sign up</a></li>
                    <li><a href="">Guide</a></li>
                    <li><a href="">Reports</a></li>
                    <li><a href="">Q&A</a></li>
                </ul>
            </div>
            <div class="footer-col-4">
                <ul>
                    <li class="footer-items-lead">
                        <a>Social Media</a>
                    </li>
                    <li>
                            <span class="social facebook">
                                <a href="#" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                            </span>
                    </li>
                    <li>
                            <span class="social twitter">
                                <a href="#" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                            </span>
                    </li>
                    <li>
                            <span class="social instagram">
                                <a href="#" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
            </div>
            </li>
            </ul>
        </div>
    </div>
    <cite style="font-weight: 1; font-size: 12px;">© Sezin™, 2022. All rights reserved.<br>Company Registration Number: 1223456789.</cite>
    </div>
</footer>

<div id="modal-login">
    <div class="login-window">
        <div class="modal-container-login" >
            <h2>Welcome Back!</h2>
            <p>Kindly fill in your login details to proceed</p>
            <form>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
            </form>
            <a class="forgot-pass-text" href="">i forgot my password?</a><br>
            <div class="login-button-div"><a class="login-button" href="">Login</a></div>
            <p>Don’t have an account yet? <a class="sign-in-a"href="#modal-signin"><b>Sign Up</b></a></p>
        </div>
    </div>
</div>

<div id="modal-signin">
    <div class="signin-window">
        <div class="modal-container-signin" >
            <h2>Welcome Back!</h2>
            <p>Kindly fill in your login details to proceed</p>
            <form>
                <input type="name" placeholder="Full Name">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <input type="password" placeholder="Confirm Password">
            </form>
            <div class="login-button-div"><a class="login-button" href="">SIGNUP</a></div>
            <p>Already have a account yet? <a class="sign-in-a"href="#modal-login"><b>Login</b></a></p>
        </div>
    </div>
</div>
</body>
</html>
