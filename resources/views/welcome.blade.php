<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ASTON EVENTS</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-image: url("astonuni2.jpeg");

            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
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

        .content {
            text-align: center;
        }

        .title {
            font-size: 200px;
            color: black;

        }

        .links>a {
            color: black;
            padding: 0 55px;
            font-size: 20px;
            font-weight: bold;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        h1 {
            font-size: 144pt;
            font-family: 'Luckiest Guy';
            color: #fff;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-shadow: 0px -6px 0 #212121,
                0px -6px 0 #212121,
                0px 6px 0 #212121,
                0px 6px 0 #212121,
                -6px 0px 0 #212121,
                6px 0px 0 #212121,
                -6px 0px 0 #212121,
                6px 0px 0 #212121,
                -6px -6px 0 #212121,
                6px -6px 0 #212121,
                -6px 6px 0 #212121,
                6px 6px 0 #212121,
                -6px 18px 0 #212121,
                0px 18px 0 #212121,
                6px 18px 0 #212121,
                0 19px 1px rgba(0, 0, 0, .1),
                0 0 6px rgba(0, 0, 0, .1),
                0 6px 3px rgba(0, 0, 0, .3),
                0 12px 6px rgba(0, 0, 0, .2),
                0 18px 18px rgba(0, 0, 0, .25),
                0 24px 24px rgba(0, 0, 0, .2),
                0 36px 36px rgba(0, 0, 0, .15);
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}" style="color:black">Home</a>
            @else
            <a href="{{ route('login') }}" style="color:black">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" style="color:black">Register</a>
            @endif
            <a href="{{ url('items') }}" style="color:black">View Events</a>
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                <h1>Aston Events</h1>
            </div>
        </div>
    </div>
</body>

</html>