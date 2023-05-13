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
            <a class="menu-link notify is-active" href="{{ url('/aboutus') }}">About</a>
            <a class="menu-link" href="{{ url('/carboncalculator') }}">CO²</a>
            <a class="menu-link notify" href="{{ url('/contact') }}">Contact Us</a>
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
                            Behind The Scenes @GreenLife
                        </h1>
                    </div>
                    <img class="content-wrapper-img" src="{{asset('imports/assets/images/TEAM.png')}}" alt="">
                </div>

                <div class="content-section">
                    <div class="content-section-title">All About Us</div>
                    <div class="apps-card">
                        <div class="app-card" style="width: 100%;">
       <span>
                           <img width="32px" height="32px" src="{{asset('imports/assets/images/startup.png')}}" style="padding-right: 5px;" alt="">

GREEN LIFE       </span>
                            <div class="app-card__subtext"><P> Green Life is a cutting-edge startup that offers on-demand Business Intelligence solutions to entrepreneurs, governments, and businesses seeking flexible support. Our team of experts is dedicated to providing a wide range of services, including dashboarding, analysis, project management, back-end, and front-end engineering, tailored to meet the unique needs of each client.</P></div>
                    </div>
                </div>
                    <div class="content-section" style="position: center;">
                        <div class="content-section-title">Points about Green Life </div>
                        <div class="apps-card">
                            <div class="app-card" style="width:45%;">
       <span>
           <img src="{{asset('imports/assets/images/focus.png')}}" style="padding-right: 5px;" alt="">
        Current Focus
       </span>
                                <div class="app-card__subtext">We are currently working on building intelligent power bi solutions that combines the power of efficient analysis and data mining which helps decision makers by exactitude,clarity and ease of use. At Green Life, we are dedicated to staying at the forefront of innovation and delivering high-quality results that exceed our clients’ expectations.</div>
                                <div class="app-card-buttons">
                                    <button class="content-button status-button">Check more</button>
                                    <div class="menu"></div>
                                </div>
                            </div>
                            <div class="app-card" style="width: 50%;">
       <span>
                      <img src="{{asset('imports/assets/images/purpose.png')}}" style="padding-right: 5px;" alt="">
        Your Dream. Our Mission.
       </span>
                                <div class="app-card__subtext">We firmly believe in the values of hard work and dedication. Our team of experts is committed to providing the highest level of service and expertise to our clients, and we are willing to put in the hard work and dedication necessary to achieve their goals.
                                    We understand that success doesn’t come easy, and we are committed to putting in the effort required to deliver high-quality results.
                                    @ hubinit, we take pride in our work and believe that our dedication is the key to our clients’ success.</div>
                                <div class="app-card-buttons">
                                    <button class="content-button status-button">Check more</button>
                                    <div class="menu"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content-section" style="position: center;">
                        <div class="content-section-title">Our Team</div>
                        <div class="apps-card">
                            <div class="app-card" style=" width:31%; text-align: center;">
                                <div class="app-card__subtext">
                                    <img width="450" height="450" src="{{asset('imports/assets/images/ahmed.png ')}}" alt="">
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
                                    <img width="450" height="450" src="{{asset('imports/assets/images/noursen.png')}}" alt="">
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
                                    <img width="450" height="450" src="{{asset('imports/assets/images/siwar.png')}}" alt="">
                                </div>
                                <div class="app-card-buttons" style="margin-right:auto;">
                                    <h2 style="text-align: center;">Siwar Tabbena</h2>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
        </div>
    </div>
    <div class="overlay-app"></div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'>
    <script src="{{asset('imports/assets/js/script.js')}}"></script>

</body>
</html>
