@extends('layouts.add')

@section('title', 'Корзина')

@section('content')

<div class="container my-5 py-3 z-depth-1 rounded">
    <!--Section: Content-->
    <section class="dark-grey-text">
        <!-- Shopping Cart table -->
        <div class="table-responsive">
            <table class="table product-table mb-0">
                <!-- Table head -->
                <thead class="mdb-color lighten-5">
                <tr>
                    <th></th>
                    <th class="font-weight-bold">
                        <strong>Наименование</strong>
                    </th>
                    <th class="font-weight-bold">
                        <strong>Вес</strong>
                    </th>
                    <th></th>
                    <th class="font-weight-bold">
                        <strong>Цена</strong>
                    </th>
                    <th class="font-weight-bold">
                        <strong>Количество</strong>
                    </th>
                    <th class="font-weight-bold">
                        <strong>Сумма</strong>
                    </th>
                    <th></th>
                </tr>
                </thead>
                <!-- /.Table head -->
                <!-- Table body -->
                <tbody>

                <?php $total = 0;?>

                @for($i = 0; $i < session('cart_count_guest'); $i++)

                    <!-- First row -->
                    <tr>
                        <th scope="row">
                            <img src="{{ session('guestcartphoto')[$i] }}" alt="" class="img-fluid z-depth-0" style="width: 100px">
                        </th>
                        <td>
                            <h5 class="mt-3">
                                <strong>{{ session('guestcartnaim')[$i] }}</strong>
                            </h5>
                            <p class="text-muted">{{ session('guestcartcategory')[$i] }}</p>
                            <p class="text-muted"><strong>Примечание</strong></p>
                            <p class="text-muted">{{ session('guestcartprim')[$i] }}</p>
                        </td>
                        <td>{{ session('guestcartmass')[$i] }}</td>
                        <td></td>
                        <td>
                            {{ session('guestcartprice')[$i] }}₽
                        </td>
                        <td>{{ session('guestcartkol')[$i] }}</td>
                        <td class="font-weight-bold">
                            <?php
                                $summ = session('guestcartkol')[$i] * session('guestcartprice')[$i];
                            ?>
                            <strong>{{ $summ }}₽</strong>
                        </td>
                        <td>
                            <form action="{{ route('deleteposgu', $i) }}" method="post">
                                @csrf
                                <button class="btn btn-sm waves-effect">
                                    <i class="fas fa-lg red-text fa-window-close"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php
                        $total += $summ;
                    ?>
                    <!-- /.First row -->
                @endfor
                <!-- Fourth row -->
                <tr>
                    <td class="text-right">
                        <i class="fas fa-info-circle text-muted fa-3x"></i>
                    </td>
                    <td class="text-left text-danger">
                        Все наши товары мы изготавливаем под заказ! Срок изготовления составляет от 3 до 5 рабочих дней.
                        Вес не является точной информацией, а указан для справки и может отличаться от полученного вами.
                    </td>
                    <td colspan="1"></td>
                    <td>
                        <h4 class="mt-2">
                            <strong>Итого</strong>
                        </h4>
                    </td>
                    <td class="text-right">
                        <h4 class="mt-2">
                            <?php session(['total' => $total]) ?>
                            <strong>{{ $total }}₽</strong>
                        </h4>
                    </td>
                    <td colspan="3" class="text-right">
                        <form action="{{ route('shoregorder') }}" method="post">
                            @csrf
                            <button @if($total <= 0) disabled @endif class="btn blue-gradient btn-rounded">Оформить заказ
                                <i class="fas fa-angle-right right"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <!-- Fourth row -->
                </tbody>
                <!-- /.Table body -->
            </table>
        </div>
        <!-- /.Shopping Cart table -->
    </section>
    <!--Section: Content-->
</div>

@endsection
