<?php
$protocol = (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on'))?'https://':'http://';
if ($protocol != 'http://'){
    $public = 'https://sweetdecor.spb.ru/';
}
else {
    $public = '';
}
?>

@extends('layouts.add')

@section('title', 'Личный кабинет')

@section('content')

    <!--Section: Author Box-->
    <section hidden class="my-5">
        <div class="media mt-4 px-1 pl-5">
            <img height="150" class="rounded-circle d-flex z-depth-1 mr-3" style="" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Circle-icons-profile.svg/1200px-Circle-icons-profile.svg.png">
            <div class="media-body">
                <h5 class="font-weight-bold mt-0">
                    <a class="blue-grey-text">{{ session('lastName').' '.session('firstName').' '.session('middleName') }}</a>
                    @if(session('admin') == '1')
                        <a class="grey-text ml-5" target="_blank" href="{{ route('adminpanel') }}">Admin-panel
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                            </svg>
                        </a>
                    @endif
                </h5>
                <ul class="list-unstyled list-inline mb-2 pt-1">
                    <li class="list-inline-item">
                        <a class="grey-text mr-1"><i class="fab fa-lg fa-instagram red-text"> </i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="grey-text mr-1"><i class="fab fa-lg fa-vk blue-text"> </i></a>
                    </li>
                </ul>
                <p><strong>Ваш email: </strong> {{ session('email') }}</p>
                <p><strong>Ваш телефон: </strong> {{ session('phone') }}</p>
            </div>
            <h5><a class="blue-grey-text text-center pr-5" href="{{ route('exit') }}"> Выход <i class="fas fa-sign-out-alt black-text"></i></a></h5>
        </div>
    </section>
    <!--Section: Author Box-->

    <div class="container my-5">
        <!-- Section -->
        <section>
            <style>
                .md-pills .nav-link.active {
                    color: #fff;
                    background-color: #616161;
                }
                button.close {
                    position: absolute;
                    right: 0;
                    z-index: 2;
                    padding-right: 1rem;
                    padding-top: .6rem;
                }
            </style>

            <?php $i = 1;?>
            @foreach($orders as $order)
                <!-- Modal -->
                <div class="modal fade" id="modal{{ $i }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                                <!-- Grid row -->
                                <div class="row">

                                    <!-- Grid column -->
                                    <div class="col py-5 pl-5 pr-5">

                                        <h5 class="font-weight-normal mb-3">Заказ №{{ $i }}</h5>

                                        <div class=""><?php echo nl2br($order->info) ?></div>

                                        <ul class="list-unstyled font-small mt-5">
                                            <li>
                                                <p class="text-uppercase mb-2"><strong>Сумма</strong></p>
                                                <p class="text-muted mb-4">{{ $order->total }}₽</p>
                                            </li>

                                            <li>
                                                <p class="text-uppercase mb-2"><strong>Дата оформления</strong></p>
                                                <p class="text-muted mb-4">{{ $order->created_at }}</p>
                                            </li>

                                            <li>
                                                <p class="text-uppercase mb-2"><strong>Статус</strong></p>
                                                @if($order->status == 'В обработке')
                                                    <p class="badge badge-info">{{ $order->status }}</p>
                                                @endif
                                                @if($order->status == 'Ожидает оплаты')
                                                    <span class="badge badge-secondary">{{ $order->status }}</span>
                                                @endif
                                                @if($order->status == 'В работе')
                                                    <p class="badge badge-warning">{{ $order->status }}</p>
                                                @endif
                                                @if($order->status == 'Готов')
                                                    <p class="badge badge-success">{{ $order->status }}</p>
                                                @endif
                                            </li>
                                        </ul>

                                    </div>
                                    <!-- Grid column -->
                                </div>
                                <!-- Grid row -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <?php $i++;?>
            @endforeach


            <h6 class="font-weight-bold text-center grey-text text-uppercase small mb-4">Личный кабинет</h6>
            <div class="row">
                <div class="col">
                    <h3 class="font-weight-bold dark-grey-text pb-2 mr-5">{{ session('lastName').' '.session('firstName').' '.session('middleName') }}</h3>
                    <p class="lead text-muted pt-2">
                        <strong>Ваш email: </strong> {{ session('email') }}<br>
                        <strong>Ваш телефон: </strong> {{ session('phone') }}
                    </p>
                </div>
                <div class="col text-right">
                    <h5 class="text-right">
                        @if(session('admin') == '1')
                            <a class="grey-text text-right" target="_blank" href="{{ route('adminpanel') }}">Admin-panel
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                </svg>
                            </a>
                        @endif
                    </h5>
                    <h5>
                        <a class="dark-grey-text text-right" href="{{ route('exit') }}">Выход <i class="fas fa-sign-out-alt dark-grey-text"></i></a>
                    </h5>
                </div>
            </div>
            <hr class="mb-5">

            @if(!empty($orders[0]))
            <!--First row-->
            <div class="row mb-5">
                <!--First column-->
                <div class="col-12">
                    <!-- Nav tabs -->
                    <ul class="nav md-pills flex-center flex-wrap mx-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active font-weight-bold text-uppercase rounded" data-toggle="tab" href="#panel1" role="tab">Ваши заказы</a>
                        </li>
                        <li hidden class="nav-item">
                            <a class="nav-link font-weight-bold text-uppercase" data-toggle="tab" href="#panel2" role="tab">Design</a>
                        </li>
                        <li hidden class="nav-item">
                            <a class="nav-link font-weight-bold text-uppercase" data-toggle="tab" href="#panel3" role="tab">Mockup</a>
                        </li>
                    </ul>
                </div>
                <!--First column-->
            </div>
            <!--First row-->
            @endif
            <!--Tab panels-->
            <div class="tab-content mb-5">
                <!--Panel 1-->
                <div class="tab-pane fade show in active" id="panel1" role="tabpanel">
                    <!-- Grid row -->
                    <div class="row">
                        <?php $i = 1;?>
                        @foreach($orders as $order)
                            <!-- Grid column -->
                            <div class="col-md-12 col-lg-4">
                                <!-- Card -->
                                <a class="card hoverable mb-4" data-toggle="modal" data-target="#modal{{ $i }}">
                                    <!-- Card content -->
                                    <div class="card-body">
                                        <h5 class="my-3">Заказ №{{ $i }}</h5>
                                        <p class="card-text mb-3">Сумма: {{ $order->total }}₽</p>
                                        <p class="card-text mb-3">Дата оформления заказа: {{ $order->created_at }}</p>
                                        @if($order->status == 'В обработке')
                                            <span class="badge badge-info">{{ $order->status }}</span>
                                        @endif
                                        @if($order->status == 'Ожидает оплаты')
                                            <span class="badge badge-secondary">{{ $order->status }}</span>
                                        @endif
                                        @if($order->status == 'В работе')
                                            <span class="badge badge-warning">{{ $order->status }}</span>
                                        @endif
                                        @if($order->status == 'Готов')
                                            <span class="badge badge-success">{{ $order->status }}</span>
                                        @endif
                                    </div>
                                </a>
                                <!-- Card -->
                            </div>
                            <!-- Grid column -->
                            <?php $i++;?>
                        @endforeach
                    </div>
                    <!-- Grid row -->
                </div>
                <!--Panel 1-->

                <!--Panel 2-->
                <div hidden class="tab-pane fade" id="panel32" role="tabpanel">
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-12 col-lg-4">
                            <!-- Card -->
                            <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">
                                <!-- Card image -->
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img9.jpg" alt="Card image cap">
                                <!-- Card content -->
                                <div class="card-body">
                                    <h5 class="my-3">Paper Bag</h5>
                                    <p class="card-text text-uppercase mb-3">Bag</p>
                                </div>
                            </a>
                            <!-- Card -->
                        </div>
                        <!-- Grid column -->
                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-4">
                            <!-- Card -->
                            <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">
                                <!-- Card image -->
                                <img class="card-img-top" src=" https://mdbootstrap.com/img/Photos/Others/img4.jpg" alt="Card image cap">
                                <!-- Card content -->
                                <div class="card-body">
                                    <h5 class="my-3">Book</h5>
                                    <p class="card-text text-uppercase mb-3">Book</p>
                                </div>
                            </a>
                            <!-- Card -->
                        </div>
                        <!-- Grid column -->
                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-4">
                            <!-- Card -->
                            <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">
                                <!-- Card image -->
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img8.jpg" alt="Card image cap">
                                <!-- Card content -->
                                <div class="card-body">
                                    <h5 class="my-3">Magazine</h5>
                                    <p class="card-text text-uppercase mb-3">Book</p>
                                </div>
                            </a>
                            <!-- Card -->
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
                <!--Panel 2-->

            </div>
            <!--Tab panels-->

        </section>
        <!-- Section -->

    </div>

@endsection
