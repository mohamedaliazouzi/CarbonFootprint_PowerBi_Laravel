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
            <a class="menu-link is-active" href="{{ url('/carboncalculator') }}">CO²</a>
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
                            Explore our Carbon Footprint Calculator
                        </h1>
                    </div>
                    <img class="content-wrapper-img" src="{{asset('imports/assets/images/TEAM.png')}}" alt="">
                </div>

                <div class="content-section">
                    <div class="apps-card">

                    <div class="app-card" style="width: 45%;">
       <span>
       <img  src="{{asset('imports/assets/images/icons8-calculatrice-64.png')}}" alt="">
         Carbon Footprint Calculator</span>
                        <div class="app-card__subtext"><P> This calculator allows you to estimate the amount of carbon emissions that your car generates over a certain period of time using our data</P>
                            <div class="input-bar" style="padding-bottom: 10px;">
                                <input type="number"  id='mpg' placeholder="What is your car's MPG?">
                            </div>
                            <div style="padding-bottom: 10px;"class="input-bar">
                                <input  type="number" id='dist' placeholder="What is the total commute distance?(in miles)">
                            </div>
                            <div class="input-bar" style="padding-bottom: 10px;">
                                <input id='trips' type="number" placeholder="How often is this trip per week?">
                            </div>


                        </div>
                        <div class="app-card-buttons" style="margin-right:auto;">
                            <button onclick="calcCO2()" class="content-button status-button">Calculate</button>
                        </div>


                    </div>
                        <div class="app-card" style="width: 45%;" >
                              <span>
       <img  src="{{asset('imports/assets/images/carbon-dioxide.png')}}" alt="">
         Carbon Footprint Results</span>

                            <ul>
                            <li class="adobe-product">
                                <div class="products">
                                    <span  class="status">Your Carbon Footprint is:<span class="status" id="result4" ></span><span>g CO2e / mile</span></span>
                                </div>

                                <div class="button-wrapper">
                                    <button class="content-button status-button open">Expand Result</button>

                                </div>
                            </li>
                            <li class="adobe-product">
                                <div class="products">
                                    <span  class="status">Your Carbon Footprint this trip is:<span id="result"></span><span>kg CO2e</span></span>

                                </div>

                                <div class="button-wrapper">
                                    <button class="content-button status-button open">Expand Result</button>
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
                                </div>
                            </li>
                            <li class="adobe-product">
                                <div class="products">
                                    <span  class="status">Your Carbon Footprint per week is:<span id="result2"></span><span>kg CO2e</span></span>

                                </div>
                                <div class="button-wrapper">
                                    <button class="content-button status-button open">Expand Result</button>
                                </div>
                            </li>
                            <li class="adobe-product">
                                <div class="products">
                                    <span  class="status">Your Carbon Footprint per year is:<span id="result3"></span><span>kg CO2e</span></span>


                                </div>

                                <div class="button-wrapper">
                                    <button class="content-button status-button open">Expand Result</button>
                                </div>
                            </li>

                        </ul>
                        </div>
                    </div>





            </div>
        </div>
        <div class="overlay-app"></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
        <script src="{{asset('imports/assets/js/script.js')}}"></script>
    <script>
        var res = document.getElementById('result');
        var res2 = document.getElementById("result2");
        var res3 = document.getElementById("result3");
        var res4 = document.getElementById("result4");
        var mpg = document.getElementById('mpg');
        var dist = document.getElementById('dist');
        var trip = document.getElementById('trips');
        function calcCO2() {
            var x = mpg.value;
            var y = dist.value;
            var z = trips.value;
            var calc4 = (8.8/x)*1000;
            var calc = (calc4 * y)/1000;
            var calc2 = (calc * z);
            var calc3 = (calc2*52);
            calc = calc.toFixed(2);
            calc2 = calc2.toFixed(2);
            calc3 = calc3.toFixed(2);
            calc4 = calc4.toFixed(1);
            console.log('calc is: ' + calc);
            res.innerHTML = calc;
            res2.innerHTML = calc2;
            res3.innerHTML = calc3;
            res4.innerHTML = calc4;
        }
    </script>
</body>
</html>
