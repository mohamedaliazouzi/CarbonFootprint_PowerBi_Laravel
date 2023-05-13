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

        #iframe-container {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%;
            overflow: hidden;
        }

        #iframe-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
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
            <a class="menu-link" href="{{ url('/') }}">Home</a>
            <a class="menu-link" href="{{ url('/aboutus') }}">About</a>
            <a class="menu-link" href="{{ url('/carboncalculator') }}">CO²</a>
            <a class="menu-link" href="{{ url('/contact') }}">Contact Us</a>
            <a class="menu-link notify is-active" href="{{ url('/home') }}">Dashboard</a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search">
        </div>
        <div class="header-profile">
            <div class="notification">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><form action="{{ route('logout') }}" method="POST">
                                    {{ csrf_field() }}
                                    <button class="content-button status-button" type="submit">Logout</button>
                                </form>
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
                @if (auth()->check())
                    <h2>Welcome, {{ auth()->user()->name }}!</h2>
                @else
                    <h2>Welcome, guest!</h2>
                @endif

                    <div id="iframe-container" style="padding:0px;padding-bottom:56.25%; position:relative; display:block; width: 100% ;margin-top: 20px">
                        <iframe id="myiframe" width="100%" height="100%"
                                src="https://app.powerbi.com/reportEmbed?reportId=2091d698-9710-418d-ac4b-f9e9a83c2f8e&autoAuth=true&ctid=604f1a96-cbe8-43f8-abbf-f8eaf5d85730"
                                frameborder="0" allowfullscreen="" style="position:absolute; top:0; left: 0">
                        </iframe>
                    </div>
                <script>
                    var iframe = document.getElementById('myiframe');
                    var url = iframe.src;
                    iframe.src = url + "&navContentPaneEnabled=false";
                </script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'>
    <script src="{{asset('imports/assets/js/script.js')}}"></script>
</body>
</html>
