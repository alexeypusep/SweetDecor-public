<?php
$protocol = (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on'))?'https://':'http://';
if ($protocol != 'http://'){
    $public = '/public/';
}
else {
    $public = '';
}
?>

<nav class="navbar navbar-expand-lg @if ($_SERVER['REQUEST_URI'] == '/') navbar-dark @else navbar-light text-black @endif">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand waves-effect rounded">
            <img class="img-fluid" src="{{ asset($public.'img/logotip2.png') }}" style="width: 30px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expended="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--Меню шапки и все подменю-->
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link waves-effect rounded">Главная</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('catalog') }}" class="nav-link waves-effect rounded">Каталог</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contacts') }}" class="nav-link waves-effect rounded">Магазины</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('teams') }}" class="nav-link waves-effect rounded">О компании</a>
                </li>
                <li class="nav-item">
                    <a href="https://ya.cc/t/g9kQRTjj3PywNP" class="nav-link waves-effect rounded" target="_blank">Отзывы</a>
                </li>
                <li hidden class="nav-item">
                    <a href="{{ route('download') }}" class="nav-link waves-effect rounded">Приложение</a>
                </li>
            </ul>
            <!--Меню шапки и все подменю-->
            <!--Правая сторона шапки-->
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item rounded">
                    <a href="@if ((int)session('cart_count') > 0 or (int)session('cart_count_guest') > 0) {{ route('basket.index') }} @endif" class="nav-link waves-effect rounded">
                        <?php $arr = 1?>
                        <span class="badge red z-depth-1 mr-1">@if(session('id_klient')) {{ session('cart_count') }} @elseif(session('cart_count_guest')) {{ session('cart_count_guest') }} @endif</span> <!--Количество товаров в корзине-->
                        <i class="fa fa-shopping-cart"></i>
                        <span class="clearfix d-none d-sm-inline-block">Корзина</span>
                    </a>
                </li>
                <li class="nav-item rounded">
                    <a href="https://www.instagram.com/sweetdecor.spb.ru/" target="_blank" class="nav-link waves-effect">
                        <i class="fab fa-instagram red-text"></i>
                    </a>
                </li>
                <li class="nav-item rounded">
                    <a href="https://vk.com/club210246630" target="_blank" class="nav-link waves-effect">
                        <i class="fab fa-vk blue-text"></i>
                    </a>
                </li>
                <li class="nav-item rounded">
                    <a href="https://t.me/sweetdecorspb" target="_blank" class="nav-link waves-effect">
                        <i class="fab fa-telegram blue-text"></i>
                    </a>
                </li>
                <!--Иконка аккаунта-->
                <li class="nav-item dropdown rounded">
                    <a href="{{ route('accaunt') }}" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"> {{ session('firstName') }} </i>
                    </a>
                </li>
            </ul>
            <!--Иконка аккаунта-->
            <!--Правая сторона шапки-->
        </div>
    </div>
</nav>
