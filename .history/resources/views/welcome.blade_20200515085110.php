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
            <div class="text-banner">
                <h1>Make Your Garden</h1>
                <h2>Pretty Again!</h2>
            </div>
        </div>

        <div class="container">
            <div class="box">
                <div class="photo">
                    <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/aster-types-of-flowers-1579719549.jpg?crop=1xw:1xh;center,top&resize=480:*">
                </div>
                <div class="info">
                    Cost: 14.99$
                </div>
            </div>
            <div class="box">
                <div class="photo">
                    <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/alstroemeria-1520220681.jpg?crop=1xw:1xh;center,top&resize=480:*">
                </div>
                <div class="info">
                    Cost: 14.99$
                </div>
            </div>
            <div class="box">
                <div class="photo">
                    <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/types-of-flowers-azalea-1520215214.jpg?crop=0.4464398235664776xw:1xh;center,top&resize=480:*">
                </div>
                <div class="info">
                    Cost: 14.99$
                </div>
            </div>
        </div>
        <br style="clear: both">
        <section>

            <div class="garden">
                <img src="https://zielonyogrodek.pl/i/images/7/1/2/d2FjPTkwMHgxLjQwMA==_src_80712-ogrody-w-miecie---rozwizania-na-ma-przestrze-fot.-iBulb-2065951.jpg" alt="">
            </div>
            <div class="garden">
                <img src="https://www.homegarden.pl/wp-content/uploads/2018/03/Garden-modern-look-Wimbledon-Harmony-Garden-729x500.jpg" alt="">
            </div>
            <div class="garden">
                <img src="https://www.fajneogrody.pl/wp-content/uploads/2015/06/polskie-ogrody.jpg" alt="">
            </div>
            <div class="garden">
                <img src="https://przeglad.olkuski.pl/wp-content/uploads/2019/07/ewa_barczyk_I_miejsce_ogrod_przy_gospodarstwie_2.jpg" alt="">
            </div>

        </section>
        <br style="clear: both">
        <h1 style="text-align:center; font-size: 40px; margin-top: 100px">Choose our work</h1>
        <div style="margin-top: 100px;position:relative;">
            <img src="https://cdn.pixabay.com/photo/2014/07/05/08/30/lawnmower-384589_1280.jpg" width="100%" style="height: 80vh;filter:brightness(70%);">
            <form>
                <label for="title">Title</label> <br>
                <input type="text" id="title"> <br><br>
                <label for="email">Email</label> <br>
                <input type="email" id="email"> <br><br>
                <label for="messenger">Messenger</label> <br>
                <textarea name="" id="" cols="50" rows="10" id="messenger"></textarea> <br>
                <button class="btn">Send</button>
            </form>
        </div>

        <section>
            <div class="person">
                <img src="https://www.movieway.pl/wp-content/uploads/2017/11/Dawid-Ogrodnik-Montreal-World-Film-Festival-2013-Photo-N.-Slejskova-2-760x480.jpg" alt="">
                <h4></h4>
                <p></p>
            </div>
            <div class="person">
                <img src="" alt="">
                <h4></h4>
                <p></p>
            </div>
            <div class="person">
                <img src="" alt="">
                <h4></h4>
                <p></p>
            </div>
            <div class="person">
                <img src="" alt="">
                <h4></h4>
                <p></p>
            </div>
        </section>

        <iframe src="" frameborder="0"></iframe>

        <footer></footer>

    </body>
</html>
