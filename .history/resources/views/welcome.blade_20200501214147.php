<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Garden</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">

    <body>

        <nav>
            <img src="{{asset('/img/MyGarden.png')}}" width="70" height="40" style="margin-top:10px;margin-left:30px">
            <ul>
                <li><a href="">Main Page</a></li>
                <li><a href="">About us</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Garden</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>

        <div class="banner">
            <img src="{{url('/img/gardenbanner.jpg')}}" alt="">
        </div>

        <div class="container">

        </div>

    </body>
</html>
