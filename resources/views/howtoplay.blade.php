<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>How to Play</title>

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
            .full-height {
                height: 100vh;
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

			
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .box {
				text-align: left;
                width: 300px;
				padding: 25px;
				margin: 25px;
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
	<div class="top-left links">
		<a href="{{ route('welcome') }}">Wikihunt</a> 
	</div>
    <div class="flex-center full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif

        <div class="content">
			<div class="title m-b-md">
				How to Play
			</div>

            <div class="box">
                You can't play the game yet, you dummy!
				But on a more serious note, the goal of the game is go from 
				a wikipedia page to specific 'goal' wikipedia page. When 
				you reach the 'goal' you will be scored according to how 
				fast you reached the goal page, as well as how few clicks 
				you used to get it.     
            </div>
		</div>
    </div>
</body>

</html>
