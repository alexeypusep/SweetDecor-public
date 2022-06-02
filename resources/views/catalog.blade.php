@extends('layouts.add')

@section('title', 'Каталог')

@section('content')

    <div class="container mt-5">
        <!--Section: Content-->
        <section class="">
            @if(session('success')) <h4 class="text-center">{{ session('success') }}</h4> @endif
            <!-- Section heading -->
            <h3 class="text-center font-weight-bold mb-5">Наши товары</h3>
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                    <!-- Card -->
                    <div class="card hoverable">
                        <?php
                            $categ = 'Декор из сахарной мастики';
                            $pole = 'code';
                            $sort = 'asc';
                            $title = 'Декор из сахарной мастики';
                        ?>
                        <a href="{{ route('tovarsview', ['categ' => $categ, 'pole' => $pole, 'sort' => $sort, 'title' => $title]) }}">
                            <!-- Card image -->
                            <img class="card-img-top" src="https://sweetdecor.spb.ru/public/img/catalog/img/%D0%94%D0%B5%D0%BA%D0%BE%D1%80%20%D0%B8%D0%B7%20%D1%81%D0%B0%D1%85%D0%B0%D1%80%D0%BD%D0%BE%D0%B9%20%D0%BC%D0%B0%D1%81%D1%82%D0%B8%D0%BA%D0%B8.jpeg" alt="Фото категории">
                        </a>
                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <a href="{{ route('tovarsview', ['categ' => $categ, 'pole' => $pole, 'sort' => $sort, 'title' => $title]) }}" class="black-text">Декор из сахарной мастики</a>
                            <!-- Text -->
                            <a href="{{ route('tovarsview', ['categ' => $categ, 'pole' => $pole, 'sort' => $sort, 'title' => $title]) }}">
                                <p class="card-title text-muted font-small mt-3 mb-2">Фигурки, цветы, надписи и разнообразный сладкий декор из специальной кондитерской пасты на основе сахарной пудры.</p>
                            </a>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                    <!-- Card -->
                    <div class="card hoverable">
                        <a href="">
                            <!-- Card image -->
                            <img class="card-img-top" src="https://sweetdecor.spb.ru/public/img/catalog/img/%D0%94%D0%B5%D0%BA%D0%BE%D1%80%20%D0%B8%D0%B7%20%D1%88%D0%BE%D0%BA%D0%BE%D0%BB%D0%B0%D0%B4%D0%BD%D0%BE%D0%B9%20%D0%B3%D0%BB%D0%B0%D0%B7%D1%83%D1%80%D0%B8.jpeg" alt="Фото категории">
                        </a>
                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <a href="" class="black-text">Декор из шоколадной глазури и шоколада</a>
                            <!-- Text -->
                            <a href="">
                                <p class="card-title text-muted font-small mt-3 mb-2">Элементы декора для тортов и пирожных из глазури.</p>
                            </a>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">

                    <!-- Card -->
                    <div class="card hoverable">
                        <a href="">
                            <!-- Card image -->
                            <img class="card-img-top" src="https://sweetdecor.spb.ru/public/img/catalog/img/%D0%94%D0%B5%D0%BA%D0%BE%D1%80%20%D0%B8%D0%B7%20%D0%B2%D0%B0%D1%84%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B9%20%D0%B1%D1%83%D0%BC%D0%B0%D0%B3%D0%B8.jpeg" alt="Фото категории">

                            <!-- Card content -->
                            <div class="card-body">

                                <!-- Title -->
                                <a href="" class="black-text">Декор из вафельной бумаги</a>
                                <!-- Text -->
                                <p class="card-title text-muted font-small mt-3 mb-2">Съедобные картинки, различные текстуры, объемные украшения – границы применения вафельных листов зависят лишь от вашей фантазии (цветы из вафельной бумаги, топперы из вафельной бумаги, элементы декора из вафельной бумаги).</p>

                            </div>
                        </a>
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
            <br><br><br>
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                    <!-- Card -->
                    <div class="card hoverable">
                        <?php
                        $categ = 'Декор из изомальта';
                        $pole = 'code';
                        $sort = 'asc';
                        $title = 'Декор из изомальта';
                        ?>
                        <a href="{{ route('tovarsisomalt', ['categ' => $categ, 'pole' => $pole, 'sort' => $sort, 'title' => $title]) }}">
                            <!-- Card image -->
                            <img height="350" class="card-img-top" style="object-fit: cover;" src="https://sweetdecor.spb.ru/public/img/catalog/img/%D0%94%D0%B5%D0%BA%D0%BE%D1%80%20%D0%B8%D0%B7%20%D0%B8%D0%B7%D0%BE%D0%BC%D0%B0%D0%BB%D1%8C%D1%82%D0%B0%20%D0%BB%D0%B5%D0%B4%D0%B5%D0%BD%D1%86%D1%8B.jpeg" alt="Фото категории">
                        </a>
                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <a href="{{ route('tovarsisomalt', ['categ' => $categ, 'pole' => $pole, 'sort' => $sort, 'title' => $title]) }}" class="black-text">Декор из изомальта (леденцы)</a>
                            <!-- Text -->
                            <a href="{{ route('tovarsisomalt', ['categ' => $categ, 'pole' => $pole, 'sort' => $sort, 'title' => $title]) }}">
                                <p class="card-title text-muted font-small mt-3 mb-2">
                                    Изомальт — сахарозаменитель. Он делается из кристаллов сахара, но не повышает гликемический индекс.
                                    Леденцы из изомальта  можно использовать в качестве декора для тортов и как самостоятельный продукт
                                    (леденцы, леденцы-погремушки, топперы из изомальта, вазы из изомальта, элементы декора из изомальта).
                                </p>
                            </a>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                    <!-- Card -->
                    <div class="card hoverable">
                        <?php
                        $categ = 'Декор из маршмеллоу';
                        $pole = 'code';
                        $sort = 'asc';
                        $title = 'Декор из маршмеллоу';
                        ?>
                        <a href="{{ route('tovarsmarshm', ['categ' => $categ, 'pole' => $pole, 'sort' => $sort, 'title' => $title]) }}">
                            <!-- Card image -->
                            <img height="350" class="card-img-top" style="object-fit: cover;" src="https://sweetdecor.spb.ru/public/img/catalog/img/%D0%94%D0%B5%D0%BA%D0%BE%D1%80%20%D0%B8%D0%B7%20%D0%BC%D0%B0%D1%80%D1%88%D0%BC%D1%8D%D0%BB%D0%BB%D0%BE%D1%83.jpeg" alt="Фото категории">
                        </a>
                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <a href="{{ route('tovarsmarshm', ['categ' => $categ, 'pole' => $pole, 'sort' => $sort, 'title' => $title]) }}" class="black-text">Декор из маршмеллоу</a>
                            <!-- Text -->
                            <a href="{{ route('tovarsmarshm', ['categ' => $categ, 'pole' => $pole, 'sort' => $sort, 'title' => $title]) }}">
                                <p class="card-title text-muted font-small mt-3 mb-2">Кондитерское изделие, напоминающее пастилу или суфле. Шары из маршмеллоу. Мордашки из маршмеллоу. Маршмеллоу на палочке. Подарочные наборы из маршмеллоу.</p>
                            </a>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                    <!-- Card -->
                    <div class="card hoverable">
                        <a href="">
                            <!-- Card image -->
                            <img class="card-img-top" src="https://sweetdecor.spb.ru/public/img/catalog/img/%D0%94%D0%B5%D0%BA%D0%BE%D1%80%20%D0%B8%D0%B7%20%D0%B7%D0%B5%D1%84%D0%B8%D1%80.jpeg" alt="Фото категории">

                            <!-- Card content -->
                            <div class="card-body">

                                <!-- Title -->
                                <a href="" class="black-text">Декор из зефира</a>
                                <!-- Text -->
                                <p class="card-title text-muted font-small mt-3 mb-2">Зефир - это  сахаристое кондитерское изделие, которое получают путем взбивания фруктово-ягодного пюре с сахаром и яичным белком. Цветы из зефира. Зефирные завитки. Букеты из зефира Подарочные зефирные наборы.</p>

                            </div>
                        </a>
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
            <br><br><br>
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                    <!-- Card -->
                    <div class="card hoverable">
                        <?php
                        $categ = 'Декор из безе';
                        $pole = 'code';
                        $sort = 'asc';
                        $title = 'Декор из безе';
                        ?>
                        <a href="{{ route('tovarsbeze', ['categ' => $categ, 'pole' => $pole, 'sort' => $sort, 'title' => $title]) }}">
                            <!-- Card image -->
                            <img height="350" class="card-img-top" style="object-fit: cover;" src="https://sweetdecor.spb.ru/public/img/catalog/img/%D0%91%D0%B5%D0%B7%D0%B5.jpeg" alt="Фото категории">
                        </a>
                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <a href="{{ route('tovarsbeze', ['categ' => $categ, 'pole' => $pole, 'sort' => $sort, 'title' => $title]) }}" class="black-text">Безе</a>
                            <!-- Text -->
                            <a href="{{ route('tovarsbeze', ['categ' => $categ, 'pole' => $pole, 'sort' => $sort, 'title' => $title]) }}">
                                <p class="card-title text-muted font-small mt-3 mb-2">
                                    Безе (меренга) – десерт из  взбитых и запеченных яичных белков.
                                    В этом разделе Вы найдете  безе на палочке, россыпью, в рожке  разных форм и расцветок.
                                    Безе на палочке. Безе россыпью. Безе в рожке. Безе в подарочной коробочке.
                                </p>
                            </a>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                    <!-- Card -->
                    <div class="card hoverable">
                        <a href="">
                            <!-- Card image -->
                            <img class="card-img-top" src="https://sweetdecor.spb.ru/public/img/catalog/img/%D0%94%D0%B5%D0%BA%D0%BE%D1%80%20%D0%B8%D0%B7%20%D0%B8%D0%BC%D0%B1%D0%B8%D1%80%D0%BD%D0%BE%D0%B3%D0%BE%20%D1%82%D0%B5%D1%81%D1%82%D0%B0.jpeg" alt="Фото категории">

                            <!-- Card content -->
                            <div class="card-body">

                                <!-- Title -->
                                <a href="" class="black-text">Декор из имбирного теста</a>
                                <!-- Text -->
                                <p class="card-title text-muted font-small mt-3 mb-2">Пряники различной формы и размеров для украшения тортов  и десертов. Пряничный декор. Пряники. Топперы из имбирных пряников с глазурью.</p>

                            </div>
                        </a>
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </section>
        <!--Section: Content-->
    </div>

@endsection
