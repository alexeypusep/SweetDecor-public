@extends('layouts.add')

@section('title', 'Мир Сладкого Декора СПБ - Идеи для Ваших тортов')

@section('content')

    <div class="container my-5">
        <!-- Section -->
        <section>
            <style>
                .gallery {
                    -webkit-column-count: 3;
                    -moz-column-count: 3;
                    column-count: 3;
                    -webkit-column-width: 33%;
                    -moz-column-width: 33%;
                    column-width: 33%;
                }
                .gallery .pics {
                    -webkit-transition: all 350ms ease;
                    transition: all 350ms ease;
                }
                .gallery .animation {
                    -webkit-transform: scale(1);
                    -ms-transform: scale(1);
                    transform: scale(1);
                }

                @media (max-width: 450px) {
                    .gallery {
                        -webkit-column-count: 1;
                        -moz-column-count: 1;
                        column-count: 1;
                        -webkit-column-width: 100%;
                        -moz-column-width: 100%;
                        column-width: 100%;
                    }
                }

                @media (max-width: 400px) {
                    .btn.filter {
                        padding-left: 1.1rem;
                        padding-right: 1.1rem;
                    }
                }
                button.close {
                    position: absolute;
                    right: 0;
                    z-index: 2;
                    padding-right: 1rem;
                    padding-top: .6rem;
                }
            </style>

            <!-- Modal -->
            <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <!-- Grid row -->
                            <div class="row">
                                <!-- Grid column -->
                                <div class="col-md-6 pt-4 pl-5">
                                    <h5 class="font-weight-normal mb-3">🥳Торт для плотника на день рождения! 🥳</h5>
                                    <p class="text-muted">Очень яркий, красочный....с индивидуальной историей, а самое главное... безумно вкусный торт😍!!!</p>
                                    <ul class="list-unstyled font-small mt-5">
                                        <li>
                                            <p class="text-uppercase mb-2"><strong>Описание</strong></p>
                                            <p class="text-muted mb-4">Вес торта 4,5 кг. Диаметр 20 см, высота 13 см.</p>
                                        </li>
                                        <li>
                                            <p class="text-uppercase mb-2"><strong>Состав</strong></p>
                                            <p class="text-muted mb-4">Ванильный бисквит, клубничное конфи, сливочно- сырный крем, крем-чиз на масле, крем-чиз на белом шоколаде. Декор весь из сахарной мастики.</p>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Grid column -->
                                <!-- Grid column -->
                                <div class="col-md-6">
                                    <div class="view">
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="https://sweetdecor.spb.ru/img/imgmain/14.jpg" style="object-fit: cover; height: 100%;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="https://sweetdecor.spb.ru/img/imgmain/15.jpg" style="object-fit: cover; height: 100%;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="https://sweetdecor.spb.ru/img/imgmain/13.jpg" style="object-fit: cover; height: 100%;">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left black-text"></i></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right black-text"></i></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Grid column -->
                            </div>
                            <!-- Grid row -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <!-- Grid row -->
                            <div class="row">
                                <!-- Grid column -->
                                <div class="col-md-6 pt-4 pl-5">
                                    <h5 class="font-weight-normal mb-3">Торт "Пусть всегда клюёт!"</h5>
                                    <p class="text-muted">Безумно вкусный торт😍!!!</p>
                                    <ul class="list-unstyled font-small mt-5">
                                        <li>
                                            <p class="text-uppercase mb-2"><strong>Описание</strong></p>
                                            <p class="text-muted mb-4"></p>
                                        </li>
                                        <li>
                                            <p class="text-uppercase mb-2"><strong>Состав</strong></p>
                                            <p class="text-muted mb-4"></p>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Grid column -->
                                <!-- Grid column -->
                                <div class="col-md-6">
                                    <div class="view">
                                        <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="https://sweetdecor.spb.ru/img/imgmain/5.jpg" style="object-fit: cover; height: 100%;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="https://sweetdecor.spb.ru/img/imgmain/6.jpg" style="object-fit: cover; height: 100%;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="https://sweetdecor.spb.ru/img/imgmain/7.jpg" style="object-fit: cover; height: 100%;">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left black-text"></i></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right black-text"></i></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Grid column -->
                            </div>
                            <!-- Grid row -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <!-- Grid row -->
                            <div class="row">
                                <!-- Grid column -->
                                <div class="col-md-6 pt-4 pl-5">
                                    <h5 class="font-weight-normal mb-3">Торт "Пусть всегда клюёт!"</h5>
                                    <p class="text-muted">Безумно вкусный торт😍!!!</p>
                                    <ul class="list-unstyled font-small mt-5">
                                        <li>
                                            <p class="text-uppercase mb-2"><strong>Описание</strong></p>
                                            <p class="text-muted mb-4"></p>
                                        </li>
                                        <li>
                                            <p class="text-uppercase mb-2"><strong>Состав</strong></p>
                                            <p class="text-muted mb-4"></p>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Grid column -->
                                <!-- Grid column -->
                                <div class="col-md-6">
                                    <div class="view">
                                        <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="https://sweetdecor.spb.ru/img/imgmain/1.jpg" style="object-fit: cover; height: 100%;">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left black-text"></i></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right black-text"></i></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Grid column -->
                            </div>
                            <!-- Grid row -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="Modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <!-- Grid row -->
                            <div class="row">
                                <!-- Grid column -->
                                <div class="col-md-6 pt-4 pl-5">
                                    <h5 class="font-weight-normal mb-3">Торт "Пусть всегда клюёт!"</h5>
                                    <p class="text-muted">Безумно вкусный торт😍!!!</p>
                                    <ul class="list-unstyled font-small mt-5">
                                        <li>
                                            <p class="text-uppercase mb-2"><strong>Описание</strong></p>
                                            <p class="text-muted mb-4"></p>
                                        </li>
                                        <li>
                                            <p class="text-uppercase mb-2"><strong>Состав</strong></p>
                                            <p class="text-muted mb-4"></p>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Grid column -->
                                <!-- Grid column -->
                                <div class="col-md-6">
                                    <div class="view">
                                        <div id="carouselExampleControls3" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="https://sweetdecor.spb.ru/img/imgmain/2.jpg" style="object-fit: cover; height: 100%;">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls3" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left black-text"></i></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls3" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right black-text"></i></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Grid column -->
                            </div>
                            <!-- Grid row -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="Modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <!-- Grid row -->
                            <div class="row">
                                <!-- Grid column -->
                                <div class="col-md-6 pt-4 pl-5">
                                    <h5 class="font-weight-normal mb-3">Торт "Пусть всегда клюёт!"</h5>
                                    <p class="text-muted">Безумно вкусный торт😍!!!</p>
                                    <ul class="list-unstyled font-small mt-5">
                                        <li>
                                            <p class="text-uppercase mb-2"><strong>Описание</strong></p>
                                            <p class="text-muted mb-4"></p>
                                        </li>
                                        <li>
                                            <p class="text-uppercase mb-2"><strong>Состав</strong></p>
                                            <p class="text-muted mb-4"></p>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Grid column -->
                                <!-- Grid column -->
                                <div class="col-md-6">
                                    <div class="view">
                                        <div id="carouselExampleControls4" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="https://sweetdecor.spb.ru/img/imgmain/8.jpg" style="object-fit: cover; height: 100%;">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls4" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left black-text"></i></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls4" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right black-text"></i></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Grid column -->
                            </div>
                            <!-- Grid row -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="Modal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <!-- Grid row -->
                            <div class="row">
                                <!-- Grid column -->
                                <div class="col-md-6 pt-4 pl-5">
                                    <h5 class="font-weight-normal mb-3">Торт "Пусть всегда клюёт!"</h5>
                                    <p class="text-muted">Безумно вкусный торт😍!!!</p>
                                    <ul class="list-unstyled font-small mt-5">
                                        <li>
                                            <p class="text-uppercase mb-2"><strong>Описание</strong></p>
                                            <p class="text-muted mb-4"></p>
                                        </li>
                                        <li>
                                            <p class="text-uppercase mb-2"><strong>Состав</strong></p>
                                            <p class="text-muted mb-4"></p>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Grid column -->
                                <!-- Grid column -->
                                <div class="col-md-6">
                                    <div class="view">
                                        <div id="carouselExampleControls5" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="https://sweetdecor.spb.ru/img/imgmain/16.jpg" style="object-fit: cover; height: 100%;">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls5" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left black-text"></i></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls5" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right black-text"></i></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Grid column -->
                            </div>
                            <!-- Grid row -->
                        </div>
                    </div>
                </div>
            </div>

            <a class="pl-2 pr-2 pt-2 pb-2" href="{{ url()->previous() }}"><i class="fas fa-angle-double-left fa-2x text-muted"></i></a>

            <h3 class="font-weight-bold text-center dark-grey-text pb-2">Идеи для Ваших тортов</h3>
            <hr class="w-header my-4">
            <p class="lead text-center text-muted pt-2 mb-5">Наши некоторые произведения ускуства</p>
            <!-- Grid row -->
            <div class="gallery" id="gallery">
                <!-- Grid column -->
                <div class="mb-3 pics all 2 animation">
                    <a data-toggle="modal" data-target="#Modal1">
                        <div class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 rounded" src="https://sweetdecor.spb.ru/img/imgmain/14.jpg" style="object-fit: cover; height: 100%;">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 rounded" src="https://sweetdecor.spb.ru/img/imgmain/15.jpg" style="object-fit: cover; height: 100%;">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 rounded" src="https://sweetdecor.spb.ru/img/imgmain/13.jpg" style="object-fit: cover; height: 100%;">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="mb-3 pics animation all 1">
                    <a data-toggle="modal" data-target="#Modal2">
                        <img class="img-fluid z-depth-1 rounded" src="https://sweetdecor.spb.ru/img/imgmain/4.jpg" alt="Card image cap">
                    </a>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="mb-3 pics animation all 1">
                    <a data-toggle="modal" data-target="#Modal3">
                        <img class="img-fluid z-depth-1 rounded" src="https://sweetdecor.spb.ru/img/imgmain/1.jpg" alt="Card image cap">
                    </a>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="mb-3 pics all 2 animation">
                    <a data-toggle="modal" data-target="#Modal4">
                        <img class="img-fluid z-depth-1 rounded" src="https://sweetdecor.spb.ru/img/imgmain/2.jpg" alt="Card image cap">
                    </a>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="mb-3 pics all 2 animation">
                    <a data-toggle="modal" data-target="#Modal5">
                        <img class="img-fluid z-depth-1 rounded" src="https://sweetdecor.spb.ru/img/imgmain/8.jpg" alt="Card image cap">
                    </a>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="pics animation all 1">
                    <a data-toggle="modal" data-target="#Modal6">
                        <img class="img-fluid z-depth-1 rounded" src="https://sweetdecor.spb.ru/img/imgmain/16.jpg" alt="Card image cap">
                    </a>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </section>
        <!-- Section -->
    </div>

    <script type="text/javascript">
        $(function () {
            var selectedClass = "";
            $(".filter").click(function () {
                selectedClass = $(this).attr("data-rel");
                $("#gallery").fadeTo(100, 0.1);
                $("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
                setTimeout(function () {
                    $("." + selectedClass).fadeIn().addClass('animation');
                    $("#gallery").fadeTo(300, 1);
                }, 300);
            });
        });
    </script>
@endsection
