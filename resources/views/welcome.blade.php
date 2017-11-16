<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wikihunt</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .mid-height{
                height: 50vh;
            }

            .full-height {
                height: 100vh;
            }

            .full-width{
                width: 100vmax;
            }

            .mid-width{
                width: 50vh;
            }

            .flex-left{
                align-items: left;
                display: flex;
                justify-content: left; 
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .box-left {
                position: absolute;
                left: 180px;
                top: 18px;
            }

            .box-right {
                position: absolute;
                right: 180px;
                top: 18px;
            }

            .top-center {
                position: absolute;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/gameSelection') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Wikihunt
                </div>
                <div class="flex-center position-ref mid-height full-width">
                    <div class="box-left">
                        <p><b><font size="6">Official Challenges</font></b></p>
                        <ul>
                            <li>Trash to Treasure</li>
                            <li>Cars to Hitler</li>
                            <li>World Wonders</li>
                        </ul>
                    </div>

                    <div class="top-center">
                        <p><b><font size="6">Popular Challenges</font></b> </p>
                        <ul>
                            <li>Vermin to Sun</li>
                            <li>Man to Asphalt</li>
                            <li>Something to Somewhere</li>
                        </ul>
                    </div>

                    <div class="box-right">
                        <p><b><font size="6">New Challenges</font></b> </p>
                        <ul>
                            <li>Why</li>
                            <li>Even</li>
                            <li>Tho?</li>
                        </ul>
                    </div>
                </div>
                <div class="links">
                    <a href="{{ route('gameSelection') }}">Create New Game</a>
                    <a href="{{ route('howtoplay') }}">How to Play</a>
                </div>
            </div>
        </div>
    </body>
</html>
