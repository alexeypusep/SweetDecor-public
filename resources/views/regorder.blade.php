@extends('layouts.add')

@section('title', 'Оформление заказа')

@section('content')

    <div class="container my-5 py-3 z-depth-1">
        <a class="btn btn-primary rounded pl-2 pr-2 pt-2 pb-2" href="{{ url()->previous() }}"><i class="fas fa-chevron-left"></i> Назад</a>
        <!--Section: Content-->
        <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
            <!--Grid row-->
            <div class="row d-flex justify-content-center">
                <!--Grid column-->
                <div class="col-md-6">
                    <!-- Default form register -->
                    <form class="text-center" action="{{ route('regorder') }}" method="post">
                        @csrf
                        <p class="h4 mb-4">Оформление заказа на сумму {{ session('total') }}₽</p>
                        <p>Проверьте корректность ваших данных</p>
                        <div class="form-row mb-4">
                            <div class="col">
                                <!-- First name -->
                                <input required type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Имя" name="firstName" value="{{ session('firstName') }}">
                            </div>
                            <div class="col">
                                <!-- Last name -->
                                <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Фамилия" name="lastName" value="{{ session('lastName') }}">
                            </div>
                            <div class="col">
                                <!-- Middle name -->
                                <input type="text" id="defaultRegisterFormMiddleName" class="form-control" placeholder="Отчество" name="middleName" value="{{ session('middleName') }}">
                            </div>
                        </div>
                        <!-- E-mail -->
                        <input required type="text" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="email" value="{{ session('email') }}">
                        <!-- Phone -->
                        <input type="text" id="defaultRegisterFormPhone" class="form-control mb-4" placeholder="Ваш телефон" name="phone" value="{{ session('phone') }}">
                        <!-- Sign up button -->
                        <form action="" method="post">
                            <input hidden type="text" name="itog" value="">
                            <button class="btn btn-info my-4 btn-block" type="submit">Оформить</button>
                        </form>
                    </form>
                    <!-- Default form register -->
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </section>
        <!--Section: Content-->
    </div>

@endsection
