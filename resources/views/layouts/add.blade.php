<?php
$protocol = (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on'))?'https://':'http://';
if ($protocol != 'http://'){
    $public = '/public/';
}
else {
    $public = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="yandex-verification" content="c758d81ee5095a4a" />
    <meta name = "description" content = "Фигурки из сахарной мастики в наличии и на заказ! Все для декора торта! Море интересных идей для сладкого декора!">
    <title>@yield('title')</title>
    <!-- MDB icon -->
    <link rel="icon" href="{{ asset($public.'img/logotip.png') }}" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset($public.'bootstrap/css/bootstrap.min.css') }}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{ asset($public.'bootstrap/css/mdb.min.css') }}">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{ asset($public.'bootstrap/css/style.css') }}">
    <!--Для работы карусели-->
    <style>
        html,
        body,
        header,
        .carousel{
            height: 60vh;
        }
        @media (max-width: 740px){
            html,
            body,
            header,
            .carousel{
                height: 100vh;
            }
        }
        @media (min-width: 800px) and (max-width: 850px){
            html,
            body,
            header,
            .carousel{
                height: 100vh;
            }
        }
    </style>
    <!--Для работы карусели-->
    <!-- Yandex.Metrika informer -->
    <a href="https://metrika.yandex.ru/stat/?id=87760913&amp;from=informer" target="_blank" rel="nofollow">
        <img hidden src="https://informer.yandex.ru/informer/87760913/3_1_FFFFFFFF_FFFFFFFF_0_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="87760913" data-lang="ru" />
    </a>
    <!-- /Yandex.Metrika informer -->

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(87760913, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true,
            trackHash:true
        });
    </script>
    <!-- /Yandex.Metrika counter -->
</head>


<body>

    <div class="sticky-top" @if ($_SERVER['REQUEST_URI'] == '/') { style="background-color: #0d0d0d" } @else { style="background-color: white" } @endif>
        @include('include.header')
    </div>


    <main>
        @yield('content')
    </main>

    @include('include.footer')

    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset($public.'bootstrap/js/jquery.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset($public.'bootstrap/js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset($public.'bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset($public.'bootstrap/js/mdb.min.js') }}"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>
    <script>
        $( document ).ready(function() {
            new WOW().init();
        });
    </script>

    </body>
</html>
