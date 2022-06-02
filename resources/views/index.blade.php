@extends('layouts.add')

@section('title', 'Мир Сладкого Декора СПБ - Главная страница')

@section('content')

    @include('include.carousel')

    <div class="container mt-5">
        <!--Section: Content-->
        <section class="dark-grey-text">
            <!-- Section heading -->
            <h1 class="text-center font-weight-bold mb-4 pb-2">Мир Сладкого Декора</h1>
            <!-- Section description -->
            <h5 class="text-center mx-auto w-responsive mb-5">Мы рады приветствовать Вас в нашем "Мире Сладкого Декора!" На нашем сайте Вы найдете огромный ассортимент фигурок и декора из сахарной мастики, а также многочисленные идеи для оформления Ваших кулинарных шедевров!</h5>

            <div hidden class="container mt-5">
                <!--Section: Content-->
                <section class="">
                    <!-- Grid row -->
                    <div class="row justify-content-center">
                        <!-- Grid column -->
                        <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                            <div class="jumbotron card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient12.webp);">
                                <div class="text-white text-center">
                                    <div>
                                        <h2 class="card-title h4-responsive pt-3 mb-5 font-bold"><strong><i class="fas fa-shopping-basket"></i> Каталог фигурок</strong></h2>
                                        <a class="btn btn-outline-white rounded btn-md">Перейти</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Grid column -->
                        <!-- Grid column -->
                        <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                            <div class="jumbotron card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient12.webp);">
                                <div class="text-white text-center">
                                    <div>
                                        <h2 class="card-title h4-responsive pt-3 mb-5 font-bold"><strong><i class="fas fa-certificate"></i> Новинки месяца</strong></h2>
                                        <a class="btn btn-outline-white rounded btn-md">Перейти</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Grid column -->
                        <!-- Grid column -->
                        <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                            <div class="jumbotron card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient12.webp);">
                                <div class="text-white text-center">
                                    <div>
                                        <h2 class="card-title h4-responsive pt-3 mb-5 font-bold"><strong><i class="far fa-star"></i> Популярные товары</strong></h2>
                                        <a class="btn btn-outline-white rounded btn-md">Перейти</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Grid column -->
                        <!-- Grid column -->
                        <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                            <div class="jumbotron card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient12.webp);">
                                <div class="text-white text-center">
                                    <div>
                                        <h2 class="card-title h4-responsive pt-3 mb-5 font-bold"><strong><i class="fas fa-gift"></i> Акции</strong></h2>
                                        <a class="btn btn-outline-white rounded btn-md">Перейти</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Grid column -->
                        <!-- Grid column -->
                        <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                            <div class="jumbotron card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient12.webp);">
                                <div class="text-white text-center">
                                    <div>
                                        <h2 class="card-title h4-responsive pt-3 mb-5 font-bold"><strong><i class="far fa-lightbulb"></i> Идеи сладкого декора</strong></h2>
                                        <a class="btn btn-outline-white rounded btn-md">Перейти</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </section>
                <!--Section: Content-->
            </div>

            <style>
                .d-grid {
                    display: grid;
                    grid-template-columns: repeat(2.5, 1fr);
                    grid-auto-rows: 150px;
                    grid-gap: 7px;
                }

                .item {
                    position: relative;
                }

                .item:nth-child(1) {
                    grid-column: 1 / 2;
                    grid-row: 1 / 4;
                }

                .item:nth-child(2) {
                    grid-column: 2;
                    grid-row: 0 / 3;
                }

                .item:nth-child(3) {
                    grid-column: 2;
                    grid-row: 2 / 3;
                }

                .item:nth-child(4) {
                    grid-column: 2;
                    grid-row: 3 / 3;
                }

                .item a {
                    position: absolute;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    top: 0;
                    overflow: hidden;
                }

                .item img {
                    height: 100%;
                    width: 100%;
                    object-fit: cover;
                }
            </style>

            <!-- Grid row -->
            <div class="row align-items-center">
                <!-- Grid column -->
                <div class="col-lg-6">
                    <!-- Category -->
                    <?php
                        $categ = 'Декор из сахарной мастики';
                        $pole = 'code';
                        $sort = 'asc';
                        $title = 'Декор из сахарной мастики';
                    ?>
                    <a href="{{ route('tovarsview', ['categ' => $categ, 'pole' => $pole, 'sort' => $sort, 'title' => $title]) }}" class="text-warning">
                        <h6 class="font-weight-bold mb-3"><i class="fas fa-chart-line"></i> Акция</h6>
                    </a>
                    <!-- Post title -->
                    <h4 class="font-weight-bold mb-3"><strong>Скидка на Ваш первый заказ!</strong></h4>
                    <!-- Excerpt -->
                    <p>
                        Пройдите регистрацию на нашем сайте и получите скидку 10% на Ваш первый заказ!
                        <br><small class="text-danger"></small><small></small>
                    </p>
                    <!-- Read more button -->
                    <a href="{{ route('tovarsview', ['categ' => $categ, 'pole' => $pole, 'sort' => $sort, 'title' => $title]) }}" class="btn btn-warning btn-md rounded-pill mx-0 mb-4">Каталог</a>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-lg-6">
                    <div id="mdb-lightbox-ui"></div>
                    <div class="d-grid mdb-lightbox">
                        <figure class="item">
                            <a href="https://sweetdecor.spb.ru/tovars/3a21472984d4c71a2ea55f097668c899" class="z-depth-1 rounded" data-size="1600x1067">
                                <img src="https://sweetdecor.spb.ru/img/IMG_20220320_101116.jpg" />
                            </a>
                        </figure>
                        <figure class="item">
                            <a href="https://sweetdecor.spb.ru/tovars/54a65431b5660d061df595d0b4f6226b" class="z-depth-1 rounded" data-size="1600x1067">
                                <img src="https://sweetdecor.spb.ru/img/IMG_20220320_140445.jpg" />
                            </a>
                        </figure>
                        <figure class="item">
                            <a href="https://sweetdecor.spb.ru/tovars/67a87f7b5477439b8aea5d771f89e206" class="z-depth-1 rounded" data-size="1600x1067">
                                <img src="https://sweetdecor.spb.ru/img/IMG_20220320_214927.jpg " />
                            </a>
                        </figure>
                        <figure class="item">
                            <a href="https://sweetdecor.spb.ru/tovars/3b594c769ecde74439566e8e9955ddff" class="z-depth-1 rounded" data-size="1600x1067">
                                <img src="https://sweetdecor.spb.ru/img/IMG_20220224_020337.jpg" />
                            </a>
                        </figure>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->

            <hr class="my-5">
            <!-- Grid row -->
            <div class="row align-items-center">
                <!-- Grid column -->
                <div class="col-lg-6">
                    <div id="mdb-lightbox-ui"></div>
                    <div class="d-grid mdb-lightbox">
                        <figure class="item">
                            <a href="" class="z-depth-1 rounded" data-size="1600x1067">
                                <img src="https://sweetdecor.spb.ru/img/imgindex/IMG_1.jpg" />
                            </a>
                        </figure>
                        <figure class="item">
                            <a href="" class="z-depth-1 rounded" data-size="1600x1067">
                                <img src="https://sweetdecor.spb.ru/img/imgindex/IMG_2.jpg" />
                            </a>
                        </figure>
                        <figure class="item">
                            <a href="" class="z-depth-1 rounded" data-size="1600x1067">
                                <img src="https://sweetdecor.spb.ru/img/imgindex/IMG_3.jpg" />
                            </a>
                        </figure>
                        <figure class="item">
                            <a href="" class="z-depth-1 rounded" data-size="1600x1067">
                                <img src="https://sweetdecor.spb.ru/img/imgindex/IMG_4.jpg" />
                            </a>
                        </figure>
                    </div>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-lg-6">
                    <!-- Category -->
                    <a href="{{ route('ideasforcake') }}" class="green-text">
                        <h6 class="font-weight-bold mb-3"><i class="fas fa-award"></i> Идеи для Ваших тортов</h6>
                    </a>
                    <!-- Post title -->
                    <h4 class="font-weight-bold mb-3"><strong>Наши фигурки в действии</strong></h4>
                    <!-- Excerpt -->
                    <p>Описание идей для тортиков)))</p>
                    <!-- Read more button -->
                    <a href="{{ route('ideasforcake') }}" class="btn btn-success btn-md rounded-pill mx-0">Подробнее</a>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->

            @if($best_tovars_count > 0)
                <hr class="my-5">
                <!-- Grid row -->
                <div class="row align-items-center">
                    <!-- Grid column -->
                    <div class="col-lg-6">
                        <!-- Category -->
                        <a href="{{ route('besttovars') }}" class="pink-text">
                            <h6 class="font-weight-bold mb-3"><i class="far fa-star"></i> Лучшие товары</h6>
                        </a>
                        <!-- Post title -->
                        <h4 class="font-weight-bold mb-3"><strong>Наши лучшие товары</strong></h4>
                        <!-- Excerpt -->
                        <p>Описание идей для товаров)))</p>
                        <!-- Read more button -->
                        <a href="{{ route('besttovars') }}" class="btn btn-pink btn-md rounded-pill mx-0">Подробнее</a>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-lg-6">
                        <div id="mdb-lightbox-ui"></div>
                        <div class="d-grid mdb-lightbox">
                            @if($best_tovars_count < 4)
                                @for($i = 0; $i < $best_tovars_count; $i++)
                                    <figure class="item">
                                        <a href="" class="z-depth-1 rounded" data-size="1600x1067">
                                            <img src="{{ $best_tovars[$i]['photo1'] }}" />
                                        </a>
                                    </figure>
                                @endfor
                            @else
                                @for($i = 0; $i < 4; $i++)
                                    <figure class="item">
                                        <a href="" class="z-depth-1 rounded" data-size="1600x1067">
                                            <img src="{{ $best_tovars[$i]['photo1'] }}" />
                                        </a>
                                    </figure>
                                @endfor
                            @endif
                        </div>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            @endif

            @if($sale_tovars_count > 0)
                <hr class="my-5">

                <!-- Grid row -->
                <div class="row align-items-center">
                    <!-- Grid column -->
                    <div class="col-lg-6">
                        <div id="mdb-lightbox-ui"></div>
                        <div class="d-grid mdb-lightbox">
                            @if($sale_tovars_count < 4)
                                @for($i = 0; $i < $sale_tovars_count; $i++)
                                    <figure class="item">
                                        <a href="" class="z-depth-1 rounded" data-size="1600x1067">
                                            <img src="{{ $sale_tovars[$i]['photo1'] }}" />
                                        </a>
                                    </figure>
                                @endfor
                            @else
                                @for($i = 0; $i < 4; $i++)
                                    <figure class="item">
                                        <a href="" class="z-depth-1 rounded" data-size="1600x1067">
                                            <img src="{{ $sale_tovars[$i]['photo1'] }}" />
                                        </a>
                                    </figure>
                                @endfor
                            @endif
                        </div>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-lg-6">
                        <!-- Category -->
                        <a href="{{ route('saletovars') }}" class="info-text">
                            <h6 class="font-weight-bold mb-3"><i class="fas fa-coins"></i> Акции</h6>
                        </a>
                        <!-- Post title -->
                        <h4 class="font-weight-bold mb-3"><strong>Наши акционные товары</strong></h4>
                        <!-- Excerpt -->
                        <p>Описание товаров по акции)))</p>
                        <!-- Read more button -->
                        <a href="{{ route('saletovars') }}" class="btn btn-info btn-md rounded-pill mx-0">Подробнее</a>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            @endif
        </section>
        <!--Section: Content-->
    </div>

    <div class="container  my-5 py-5 px-4 px-lg-0">
        <!-- Section -->
        <section>
            <style>
                .timeline {
                    position: relative;
                    list-style: none;
                    padding: 1rem 0;
                    margin: 0;
                }

                .timeline::before {
                    content: '';
                    position: absolute;
                    left: 50%;
                    top: 0;
                    bottom: 0;
                    width: 2px;
                    margin-left: -1px;
                    background-color: #50a1ff;
                }

                .timeline-element {
                    position: relative;
                    width: 50%;
                    padding: 1rem 0;
                    padding-right: 2.5rem;
                    text-align: right;
                }

                .timeline-element::before {
                    content: '';
                    position: absolute;
                    right: -8px;
                    top: 1.35rem;
                    display: inline-block;
                    width: 16px;
                    height: 16px;
                    border-radius: 50%;
                    border: 2px solid #50a1ff;
                    background-color: #fff;
                }

                .timeline-element:nth-child(even)::before {
                    right: auto;
                    left: -8px;
                }

                .timeline-element:nth-child(even) {
                    margin-left: 50%;
                    padding-left: 2.5rem;
                    padding-right: 0;
                    text-align: left;
                }

                @media (max-width: 767.98px) {
                    .timeline::before {
                        left: 8px;
                    }
                }

                @media (max-width: 767.98px) {
                    .timeline-element {
                        width: 100%;
                        text-align: left;
                        padding-left: 2.5rem;
                        padding-right: 0;
                    }
                }

                @media (max-width: 767.98px) {
                    .timeline-element::before {
                        top: 1.25rem;
                        left: 1px;
                    }
                }

                @media (max-width: 767.98px) {
                    .timeline-element:nth-child(even) {
                        margin-left: 0rem;
                    }
                }

                @media (max-width: 767.98px) {
                    .timeline-element {
                        width: 100%;
                        text-align: left;
                        padding-left: 2.5rem;
                        padding-right: 0;
                    }
                }

                @media (max-width: 767.98px) {
                    .timeline-element:nth-child(even)::before {
                        left: 1px;
                    }
                }

                @media (max-width: 767.98px) {
                    .timeline-element::before {
                        top: 1.25rem;
                    }
                }
            </style>
            <h3 class="font-weight-bold text-center dark-grey-text pb-2">Как стать счастливым обладателем чудесных фигурок</h3>
            <hr class="w-header my-4">
            <p class="lead text-center text-muted pt-2 mb-5">Для этого необходимо сделать несколько простых шагов</p>

            <div class="row">
                <div class="col-lg-8 mx-auto">

                    <ol class="timeline">
                        <li class="timeline-element">
                            <h5 class="font-weight-bold dark-grey-text mb-3"><small>Первый шаг: </small><strong>ВЫБЕРИ</strong> <small>товар</small></h5>
                            <p class="grey-text font-small"><time datetime="2017-02-08">Начало</time></p>
                            <p><img class="img-fluid z-depth-1-half rounded" src="https://sweetdecor.spb.ru/img/imgindex/cart.png"></p>
                            <p class="text-muted">Выберите интересующий Вас декор из Каталога и сохраните его  в «Корзине».</p>
                        </li>
                        <li class="timeline-element">
                            <h5 class="font-weight-bold dark-grey-text mb-3"><small>Шаг второй: </small><strong>ОФОРМИ</strong> <small>заказ</small></h5>
                            <p class="grey-text font-small"><time datetime="2017-08-17">Второй шаг</time></p>
                            <p><img class="img-fluid z-depth-1-half rounded" src="https://sweetdecor.spb.ru/img/imgindex/oform.png"></p>
                            <p class="text-muted">
                                Зайдите в «Корзину», проверьте свои  покупки.
                            </p>
                            <p class="text-muted">
                                Нажав кнопку «Оформить заказ», внесите свои данные для регистрации Вашего заказа и согласования его с менеджером.
                            </p>
                        </li>
                        <li class="timeline-element">
                            <h5 class="font-weight-bold dark-grey-text mb-3"><small>Третий шаг: </small><strong>СОГЛАСУЙ</strong> <small>заказ с менеджером</small></h5>
                            <p class="grey-text font-small"><time datetime="2018-03-26">Третий шаг</time></p>
                            <p><img class="img-fluid z-depth-1-half rounded" src="https://sweetdecor.spb.ru/img/imgindex/dogovor.png"></p>
                            <p class="text-muted">
                                Дождитесь звонка менеджера! Согласуйте Ваш заказ с  менеджером.
                            </p>
                            <p class="text-muted">
                                Далее на указанную Вами электронную почту
                                Вы получите письмо с согласованным бланком заказа, в котором
                                будут указаны срок изготовления, способ доставки и итоговая сумма заказа.
                            </p>
                        </li>
                        <li class="timeline-element">
                            <h5 class="font-weight-bold dark-grey-text mb-3"><small>Четвертый шаг: </small><strong>ОПЛАТИ</strong> <small>заказ</small></h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">Четвертый шаг</time></p>
                            <p><img class="img-fluid z-depth-1-half rounded" src="https://sweetdecor.spb.ru/img/imgindex/pay.webp"></p>
                            <p class="text-muted">После 100% оплаты заказ будет запущен в работу.</p>
                        </li>
                        <li class="timeline-element">
                            <h5 class="font-weight-bold dark-grey-text mb-3"><small>Пятый шаг: </small><strong>ПОЛУЧИ</strong> <small>заказ</small></h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">Завершение</time></p>
                            <p><img class="img-fluid z-depth-1-half rounded" src="https://sweetdecor.spb.ru/img/imgindex/poluch.webp"></p>
                            <p class="text-muted">Получите свой заказ, в соответствии, с выбранным способом доставки!</p>
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- Section -->
    </div>

@endsection
