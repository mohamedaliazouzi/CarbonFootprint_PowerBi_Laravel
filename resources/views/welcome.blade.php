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
            <a class="menu-link is-active" href="{{ url('/') }}">Home</a>
            <a class="menu-link notify" href="{{ url('/aboutus') }}">About</a>
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
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><button class="content-button status-button"> Dashboard</button>
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
                        <h1 style="font-size: 20pt;" class="img-content">
                            "Eliminate Carbon... Save Environment"
                        </h1>
                        <div class="content-text">The Green Life project aims to empower organizations and governments with the ability to make informed decisions based on data analysis, leading to a reduction in their carbon footprint, promoting sustainable practices, and encouraging environmental responsibility. Through the utilization of business intelligence tools, organizations can obtain critical insights into their carbon emissions and implement targeted strategies to mitigate them, resulting in a more sustainable future for all.
                        </div>
                        <a href="{{ route('register') }}"><button  class="content-button">Start free trial</button></a>
                    </div>
                    <img class="content-wrapper-img" src="{{asset('imports/assets/images/glass.png')}}" alt="">
                </div>
                <div class="content-section">
                    <div class="content-section-title">Green Life Main Features</div>
                    <div class="apps-card">
                        <div class="app-card">
       <span>
<img  src="{{asset('imports/assets/images/dashboardicon.png')}}" alt="">
All Aspects Included       </span>
                            <div class="app-card__subtext">Our dashboard provides a holistic view of sustainability, taking into account not just carbon emissions, but also a wide range of related environmental, social, and economic indicators. By including indicators such as air quality, biodiversity, poverty rates, energy consumption, and more. </div>
                            <div class="app-card-buttons">
                                <button class="content-button status-button">Read More</button>
                                <div class="menu"></div>
                            </div>
                        </div>
                        <div class="app-card">
       <span>
           <img  src="{{asset('imports/assets/images/elastic.png')}}" style="padding-right: 5px;" alt="">

Flexible and Customizable       </span>
                            <div class="app-card__subtext"> Our flexible and customizable dashboard lets users focus on their specific needs and priorities. It helps organizations track progress towards sustainability goals, identify areas for improvement, and make data-driven decisions that benefit both their bottom line and the planet.</div>
                            <div class="app-card-buttons">
                                <button class="content-button status-button">Read More</button>
                                <div class="menu"></div>
                            </div>
                        </div>
                        <div class="app-card">
       <span>
       <img src="{{asset('imports/assets/images/efficiency (1).png')}}" style="padding-right: 5px;">
        Effective For Decision makers
       </span>
                            <div class="app-card__subtext">Our reports are designed to provide clear and concise summaries of all relevant data, analysis, and recommendations, so that decision-makers can quickly and confidently assess the situation and determine the best course of action </div>
                            <div class="app-card-buttons">
                                <button class="content-button status-button">Read More</button>
                                <div class="menu"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-section">
                    <div class="content-section-title">Main Technologies</div>
                    <ul>
                        <li class="adobe-product">
                            <div class="products">
                                <img  src="{{asset('imports/assets/images/talend_logo_icon_170648.png')}}" alt="">
                            </div>
                            <span class="status">
        <span class="status-circle green"></span>For data Integration</span>
                            <div class="button-wrapper">
                                <button class="content-button status-button open">Check more</button>

                                <div class="menu">
                                    <button class="dropdown">
                                        <ul>
                                            <li><a href="#">Go to Discover</a></li>
                                            <li><a href="#">Learn more</a></li>
                                            <li><a href="#">Uninstall</a></li>
                                        </ul>
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="adobe-product">
                            <div class="products">
                                <img  src="{{asset('imports/assets/images/postgresql_plain_logo_icon_146389 (1).png')}}" alt="">
                                 PostgreSQL
                            </div>

                            <span class="status">
        <span class="status-circle"></span>
        Local Database</span>
                            <div class="button-wrapper">
                                <button class="content-button status-button open">Check More</button>
                                <div class="pop-up">
                                    <div class="pop-up__title">Update This App
                                        <svg class="close" width="24" height="24" fill="none" stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-x-circle">
                                            <circle cx="12" cy="12" r="10"/>
                                            <path d="M15 9l-6 6M9 9l6 6"/>
                                        </svg>
                                    </div>
                                    <div class="pop-up__subtitle">Adjust your selections for advanced options as
                                        desired before continuing. <a href="#">Learn more</a></div>
                                    <div class="checkbox-wrapper">
                                        <input type="checkbox" id="check1" class="checkbox">
                                        <label for="check1">Import previous settings and preferences</label>
                                    </div>
                                    <div class="checkbox-wrapper">
                                        <input type="checkbox" id="check2" class="checkbox">
                                        <label for="check2">Remove old versions</label>
                                    </div>
                                    <div class="content-button-wrapper">
                                        <button class="content-button status-button open close">Cancel</button>
                                        <button class="content-button status-button">Continue</button>
                                    </div>
                                </div>
                                <div class="menu">
                                    <button class="dropdown">
                                        <ul>
                                            <li><a href="#">Go to Discover</a></li>
                                            <li><a href="#">Learn more</a></li>
                                            <li><a href="#">Uninstall</a></li>
                                        </ul>
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="adobe-product">
                            <div class="products">
                                <img  src="{{asset('imports/assets/images/icons8-power-bi-2021-64.png')}}" alt="">
                                Power Bi
                            </div>
                            <span class="status">
        <span class="status-circle green"></span>
        Dashboarding And Analysis</span>
                            <div class="button-wrapper">
                                <button class="content-button status-button open">Check more</button>
                                <div class="menu">
                                    <button class="dropdown">
                                        <ul>
                                            <li><a href="#">Go to Discover</a></li>
                                            <li><a href="#">Learn more</a></li>
                                            <li><a href="#">Uninstall</a></li>
                                        </ul>
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="adobe-product">
                            <div class="products">
                                <img  src="{{asset('imports/assets/images/laravel.png')}}" alt="">

                            </div>
                            <span class="status">
        <span class="status-circle green"></span>
        Framework used for web app</span>
                            <div class="button-wrapper">
                                <button class="content-button status-button open">Check more</button>
                                <div class="menu">
                                    <button class="dropdown">
                                        <ul>
                                            <li><a href="#">Go to Discover</a></li>
                                            <li><a href="#">Learn more</a></li>
                                            <li><a href="#">Uninstall</a></li>
                                        </ul>
                                    </button>
                                </div>
                            </div>
                        </li>

                    </ul>
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
