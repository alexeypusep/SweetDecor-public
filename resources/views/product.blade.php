@extends('layouts.add')

@section('title') {{ $tovar['naim'] }} @endsection

@section('content')

    <div class="container my-5 py-2">
        <a class="pl-2 pr-2 pt-2 pb-2 text-dark mb-5" href="{{ url()->previous() }}"><i class="fas fa-chevron-left"></i> Назад</a>
        <!--Section: Content-->
        <section class="text-center mt-2">
            <!-- Section heading -->
            <h3 class="font-weight-bold mb-5">Описание товара</h3>
            <div class="row">
                <div class="col-lg-6">
                    <!--Carousel Wrapper-->
                    <div id="carousel-thumb1" class="carousel slide carousel-fade carousel-thumbnails mb-5 pb-4" data-ride="carousel">
                        <!--Slides-->
                        <div class="carousel-inner text-center text-md-left" role="listbox">
                            <div class="carousel-item active text-center">
                                <img src="https://sweetdecor.spb.ru/{{ $tovar['photo1'] }}" alt="1 slide" class="img-fluid" style="height: 500px">
                            </div>
                            <?php if (!empty($tovar['photo2'])) {?>
                            <div class="carousel-item text-center">
                                <img src="https://sweetdecor.spb.ru/{{ $tovar['photo2'] }}" alt="2 slide" class="img-fluid" style="height: 500px">
                            </div>
                            <?php };?>
                            <?php if (!empty($tovar['photo3'])) {?>
                            <div class="carousel-item text-center">
                                <img src="https://sweetdecor.spb.ru/{{ $tovar['photo3'] }}" alt="3 slide" class="img-fluid" style="height: 500px">
                            </div>
                            <?php };?>
                            <?php if (!empty($tovar['photo4'])) {?>
                            <div class="carousel-item text-center">
                                <img src="https://sweetdecor.spb.ru/{{ $tovar['photo4'] }}" alt="4 slide" class="img-fluid" style="height: 500px">
                            </div>
                            <?php };?>
                        </div>
                        <!--/.Slides-->

                        <!--Thumbnails-->
                        <a class="carousel-control-prev" href="#carousel-thumb1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-thumb1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Thumbnails-->

                    </div>
                    <!--/.Carousel Wrapper-->

                </div>

                <div class="col-lg-5 text-center text-md-left">

                    <h1 class="h1-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">{{ $tovar['naim'] }}</h1>
                    @if($tovar['sale'] != null)<span class="badge badge-danger product ml-xl-0 ml-4">Акция</span>@endif
                    @if($tovar['best'] == 1)<span class="badge badge-success product mb-4 ml-2">Бестселлер</span>@endif

                    <div class="font-weight-normal">

                        <h4 class="ml-xl-0 ml-4 mt-4">
                            <strong>Артикул: </strong>{{ $tovar['code'] }}</h4>
                        <h4 class="ml-xl-0 ml-4 mt-4">
                            <strong>Размер: </strong>{{ $tovar['size'] }}</h4>
                        <h4 class="ml-xl-0 ml-4 mt-4">
                            <strong>Индекс размера: </strong>{{ $tovar['indexsize'] }}</h4>
                        <h4 class="ml-xl-0 ml-4 mt-4">
                            <strong>Вес: </strong>{{ $tovar['mass'] }}</h4>
                        <p class="ml-xl-0 ml-2">
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-info-circle text-muted fa-3x"></i>
                            </div>
                            <div class="col">
                                <p class="text-danger">
                                    Все наши товары мы изготавливаем под заказ! Срок изготовления составляет от 3 до 5 рабочих дней.
                                    Вес не является точной информацией, а указан для справки и может отличаться от полученного вами.
                                </p>
                            </div>
                        </div>
                        </p>
                        <p class="ml-xl-0 ml-2 mt-4">
                            <h4><strong>Примечание</strong></h4>
                            <!--Material textarea-->
                            <div class="md-form">
                                <textarea id="form7" class="md-textarea form-control" rows="3" onkeyup="prime()"></textarea>
                                <label for="form7">Например, какой цвет фигурки вам нужен</label>
                            </div>
                        </p>
                        <div class="mt-5">
                            <div class="row mt-3 mb-4">
                                <div class="col-md-12 text-center text-md-left text-md-right">

                                    <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
                                        <strong>Стоимость: </strong>
                                        <span class="red-text font-weight-bold">
                                            @if($tovar['sale'] != null)
                                                <strong>{{ $tovar['sale'] }}₽</strong>
                                                <span class="grey-text">
                                                    <small>
                                                        <s>{{ $tovar['price'] }}₽</s>
                                                    </small>
                                                </span>
                                            @else
                                                <strong>{{ $tovar['price'] }}₽</strong>
                                            @endif
                                        </span>
                                        <p><small>(Стоимость действительна только при заказе на сайте и может отличаться от цен в розничных магазинах)</small></p>
                                    </h3>

                                    <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
                                        <strong>Количество: </strong>
                                        <div class="md-form">
                                            <input id="form8" class="md-textarea form-control" rows="3" placeholder="Введите количество товара (поумолчанию 1)" onkeyup="koll()">
                                        </div>
                                    </h3>

                                    <form action="{{ route('addcart', $tovar['id_tovar']) }}" method="post">
                                        @csrf
                                        <input hidden type="text" id="prim" name="primechanie" value="">
                                        <input hidden type="text" id="kollich" name="kolichestvo" value="">
                                        <button class="btn cloudy-knoxville-gradient rounded waves-effect"><i class="fas fa-cart-plus fa-lg green-text" aria-hidden="true"></i> Добавить в корзину</button>
                                        <br><br>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <!--Accordion wrapper-->
                        <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">

                            <!-- Accordion card -->
                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingTwo1">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo1"
                                       aria-expanded="false" aria-controls="collapseTwo1">
                                        <h5 class="mb-0 text-info">
                                            Подробнее <i class="fas fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseTwo1" class="collapse" role="tabpanel" aria-labelledby="headingTwo1"
                                     data-parent="#accordionEx1">
                                    <div class="card-body">
                                        <p class="ml-xl-0 ml-4">
                                            <strong>Каркас: </strong>{{ $tovar['carcass'] }}</p>
                                        <p class="ml-xl-0 ml-4">
                                            <strong>Материал: </strong>{{ $tovar['material'] }}</p>
                                        <p class="ml-xl-0 ml-4">
                                            <strong>Красители: </strong><a class="text-warning">{{ $tovar['colorant'] }}</a></p>
                                        <p class="ml-xl-0 ml-4">
                                            <strong>Сроки и условия хранения: </strong>{{ $tovar['storage'] }}</p>
                                    </div>
                                </div>

                            </div>
                            <!-- Accordion card -->
                        </div>
                        <!-- Accordion wrapper -->
                    </div>
                </div>
            </div>

        </section>
        <!--Section: Content-->

    </div>
    <script>
        $('#your-custom-id-material').mdbDropSearch();

        function prime() {
            document.getElementById("prim").value = document.getElementById("form7").value;
        }

        function koll() {
            document.getElementById("kollich").value = document.getElementById("form8").value;
        }
    </script>

@endsection
