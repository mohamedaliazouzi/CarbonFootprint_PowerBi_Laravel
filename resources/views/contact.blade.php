<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <!-- Styles -->

    <link href="{{URL::asset('imports/assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <style>
        body {
            font-family: var(--body-font);
            background-size: cover;
            background-position: center;
            background-image: url('{{ asset('imports/assets/images/wallpaperflareom_wallpaper.jpg') }}');
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 0em;
            width: 100%;
            height: 100%;
        }

        @media screen and (max-width: 480px) {
            body {
                padding: 0em;
            }
        }

        img {
            max-width: 100%;
        }
    </style>

</head>
<body>

<div class="app">
    <div class="header">
        <div style="padding-left: 0% ;float: left;">
            <img src="{{asset('imports/assets/images/Untitled-1.png')}}" alt="">

        </div>
        <div class="header-menu">
            <a class="menu-link " href="{{ url('/') }}">Home</a>
            <a class="menu-link notify " href="{{ url('/aboutus') }}">About</a>
            <a class="menu-link" href="{{ url('/carboncalculator') }}">CO²</a>
            <a class="menu-link notify is-active" href="{{ url('/contact') }}">Contact Us</a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search">
        </div>
        <div class="header-profile">
            <div class="notification">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">
                                <button class="content-button status-button"> Dashboard</button>
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                               class="text-sm text-gray-700 dark:text-gray-500 underline">
                                <button class="content-button status-button"> Login</button>
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                   class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">
                                    <button class="content-button status-button open"> Register</button>
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="wrapper">

        <div class="main-container">

            <div class="content-wrapper">
                <div class="content-wrapper-header">
                    <div class="content-wrapper-context">
                        <h1 style="font-size: 28pt;text-align: center;" class="img-content">
                            Call Us, Write Us, Or Knock On Our Door
                            Let’s Connect
                        </h1>
                    </div>
                    <img class="content-wrapper-img" src="{{asset('imports/assets/images/TEAM.png')}}" alt="">
                </div>

                <div class="content-section">
                    <div class="content-section-title">Contact Us</div>
                    <div class="apps-card">
                        <div class="app-card" style="width: 45%;">
       <span>
       <img  src="{{asset('imports/assets/images/icons8-email-64.png')}}" alt="">
         Lets Build A Bridge!      </span>
                            <div class="app-card__subtext"><P>@GreenLife, we are passionate about understanding our clients’ businesses and working collaboratively to develop solutions that meet their unique needs. We would be delighted to meet with you to learn more about your business and discuss how we can help you achieve your goals.</P>
                                <div class="input-bar" style="padding-bottom: 10px;">
                                    <input type="text" placeholder="Full Name">
                                </div>
                                <div style="padding-bottom: 10px;"class="input-bar">
                                    <input  type="text" placeholder="Phone Number">
                                </div>
                                <div class="input-bar" style="padding-bottom: 10px;">
                                    <input tyle="padding-bottom: 10px;" type="text" placeholder="Email">
                                </div>
                                <div class="input-bar" style="padding-bottom: 10px;">
                                    <input type="text" placeholder="Message">
                                </div>

                            </div>
                            <div class="app-card-buttons" style="margin-right:auto;">
                                <button class="content-button status-button">Send</button>
                            </div>


                        </div>
                        <div class="app-card" style="width: 50%;">
       <span>
       <img  src="{{asset('imports/assets/images/location.png')}}" alt="">
         Let's Meet
       </span>
                            <div class="app-card__subtext"><P>Give Us A Call
                                    +216 71 30 23 00</P>
                                <p>Adress : Z.I CHOTRANA II - B.P. 160 PÔLE TECHNOLOGIQUE</p>
                                <p>2083 CITE EL GHAZALA RAOUED</p>
                                <p>Email: green.life@esprit.tn</p>

                            </div>
                            <div class="app-card-buttons" style="margin-right:auto;">
                                <button class="content-button status-button">Book a meeting</button>
                            </div>


                        </div>
                    </div>


<!--                    <div class="content-section" style="position: center;">
                        <div class="content-section-title">Our Team</div>
                        <div class="apps-card">
                            <div class="app-card" style=" width:31%; text-align: center;">
                                <div class="app-card__subtext">
                                    <img width="450" height="450" src="{{asset('imports/assets/images/ahmed-removebg-preview.png')}}" alt="">
                                </div>
                                <div class="app-card-buttons" style="margin-right:auto;">
                                    <h2>Ahmed Harrabi</h2>
                                </div>
                            </div>
                            <div class="app-card" style=" width:31%; text-align: center;">
                                <div class="app-card__subtext">
                                    <img width="450" height="450" src="{{asset('imports/assets/images/medali-removebg-preview.png')}}" alt="">
                                </div>
                                <div class="app-card-buttons" style="margin-right:auto;">
                                    <h2 style="text-align: center;">Mohamed Ali Azouzi</h2>
                                </div>
                            </div>
                            <div class="app-card" style=" width:31%; text-align: center;">
                                <div class="app-card__subtext">
                                    <img width="450" height="450" src="{{asset('imports/assets/images/noursen-removebg-preview.png')}}" alt="">
                                </div>
                                <div class="app-card-buttons" style="margin-right:auto;">
                                    <h2 style="text-align: center;">Noursen Amami</h2>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="content-section" style="position: center;">
                        <div class="content-section-title"></div>
                        <div class="apps-card">
                            <div class="app-card" style=" width:31%; text-align: center;">
                                <div class="app-card__subtext">
                                    <img  width="450" height="450" src="{{asset('imports/assets/images/amal.png')}}" alt="">
                                </div>
                                <div class="app-card-buttons" style="margin-right:auto;">
                                    <h2 style="text-align: center;">Amal Nouira</h2>
                                </div>
                            </div>
                            <div class="app-card" style=" width:31%; text-align: center;">
                                <div class="app-card__subtext">
                                    <img width="450" height="450"src="{{asset('imports/assets/images/IMG_0461-removebg-preview-.png')}}" alt="">
                                </div>
                                <div class="app-card-buttons" style="margin-right:auto;">
                                    <h2 style="text-align: center;">Ahmed Bahrouni</h2>
                                </div>
                            </div>
                            <div class="app-card" style=" width:31%; text-align: center;">
                                <div class="app-card__subtext">
                                    <img width="450" height="450" src="{{asset('imports/assets/images/group.png')}}" alt="">
                                </div>
                                <div class="app-card-buttons" style="margin-right:auto;">
                                    <h2 style="text-align: center;">Siwar Tabbena</h2>
                                </div>
                            </div>

                        </div>
                    </div>-->

                </div>
            </div>
        </div>
        <div class="overlay-app"></div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'>
        <script src="{{asset('imports/assets/js/script.js')}}"></script>

</body>
</html>
