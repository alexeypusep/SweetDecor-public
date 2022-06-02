@extends('layouts.add')

@section('title', 'Контакты')

@section('content')

    <div class="container-fluid mt-5 mb-5">
        <!-- Section: Block Content -->
        <section class="mb-4">

            <style>
                .map-container {
                    overflow: hidden;
                    position: relative;
                    height: 0;
                }

                .map-container iframe {
                    left: 0;
                    top: 0;
                    height: 100%;
                    width: 100%;
                    position: absolute;
                }
            </style>
            <!-- Section heading -->
            <h3 class="font-weight-bold pb-2 mb-5 text-center">Магазины в которых Вы можете приобрести наши фигурки</h3>
            <div hidden class="card mb-5">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Yandex Maps -->
                        <div id="map-within-card-2" class="map-container rounded-left" style="height: 400px"><a href="https://yandex.ru/maps/2/saint-petersburg/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Санкт‑Петербург</a><a href="https://yandex.ru/maps/geo/sankt_peterburg/53152804/?ll=30.370429%2C59.907520&utm_medium=mapframe&utm_source=maps&z=11.34" style="color:#eee;font-size:12px;position:absolute;top:14px;">Санкт-Петербург — Яндекс.Карты</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUyuNrPcC" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                        <!-- Yandex Maps -->
                    </div>
                    <div class="col-10 col-md-4 mx-auto align-self-center py-4">
                        <h6 class="font-weight-bold grey-text text-uppercase small">Офис</h6>
                        <h5 class="font-weight-normal mb-4">Россия, Санкт-Петербург</h5>
                        <p class="text-muted font-weight-light">По вопросам сотрудничества и оптовых покупок писать на Email или в социальные сети</p>
                        <p class="text-muted font-weight-light mb-1">Email: <a href="mailto:sweetdecor.spb@yandex.ru">sweetdecor.spb@yandex.ru</a></p>
                        <p>
                            <a href="https://www.instagram.com/sweetdecor.spb.ru/" target="_blank" class="nav-link waves-effect">
                                <i class="fab fa-instagram fa-lg red-text"></i>
                            </a>
                            <a href="https://vk.com/club210246630" target="_blank" class="nav-link waves-effect">
                                <i class="fab fa-vk fa-lg blue-text"></i>
                            </a>
                            <a href="https://t.me/sweetdecorspb" target="_blank" class="nav-link waves-effect">
                                <i class="fab fa-telegram fa-lg blue-text"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="card mb-5">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Yandex Maps -->
                        <div id="map-within-card-2" class="map-container rounded-left" style="height: 400px"><a href="https://yandex.ru/maps/org/spetskonditer/217521894625/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">СпецКондитер</a><a href="https://yandex.ru/maps/2/saint-petersburg/category/goods_for_confectioners/38174851981/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Товары для кондитеров в Санкт‑Петербурге</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUB7-aNgC" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                        <!-- Yandex Maps -->
                    </div>
                    <div class="col-10 col-md-4 mx-auto align-self-center py-4">
                        <h6 class="font-weight-bold grey-text text-uppercase small">СпецКондитер</h6>
                        <h5 class="font-weight-normal mb-4"><i class="fas fa-map-marker-alt"></i> Россия, Санкт-Петербург Шлиссельбургский проспект, 3</h5>
                        <p class="text-muted font-weight-light"><i class="fas fa-globe"></i><a href="https://spezkonditer.ru/" target="_blank"> spezkonditer.ru</a></p>
                        <p class="text-muted font-weight-light mb-1"><i class="fas fa-phone-alt"></i> <a href="tel:+7(812)987-10-01">+7(812)987-10-01</a>, <a href="tel:+7(950)662-20-41">+7(950)662-20-41</a></p>
                    </div>
                </div>
            </div>
            <div class="card mb-5">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Yandex Maps -->

                        <div id="map-within-card-2" class="map-container rounded-left" style="height: 400px"><a href="https://yandex.ru/maps/org/sweetdeal/157920720365/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">SweetDeal</a><a href="https://yandex.ru/maps/2/saint-petersburg/category/goods_for_confectioners/38174851981/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Товары для кондитеров в Санкт‑Петербурге</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUB7-XKTD" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                        <!-- Yandex Maps -->
                    </div>
                    <div class="col-10 col-md-4 mx-auto align-self-center py-4">
                        <h6 class="font-weight-bold grey-text text-uppercase small">SweetDeal</h6>
                        <h5 class="font-weight-normal mb-4"><i class="fas fa-map-marker-alt"></i> Россия, Санкт-Петербург, проспект Ударников, 42</h5>
                        <p class="text-muted font-weight-light mb-1"><i class="fas fa-phone-alt"></i> <a href="tel:+7(994)405-23-77">+7(994)405-23-77</a></p>
                    </div>
                </div>
            </div>

        </section>
        <!-- Section: Block Content -->
    </div>

@endsection
