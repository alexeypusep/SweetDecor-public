@extends('layouts.add')

@section('title', 'Вход')

@section('content')

    <div class="container my-5 py-5 z-depth-1">
        <!--Section: Content-->
        <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
            <!--Grid row-->
            <div class="row d-flex justify-content-center">
                <!--Grid column-->
                <div class="col-md-6">
                    <!-- Default form login -->
                    <form class="text-center" action="{{ route('signin_cabinet') }}" method="post">
                        @csrf

                        @if (session('success'))
                            <p class="text-danger">{{ session('success') }}</p>
                        @endif

                        <p class="h4 mb-4">Авторизация</p>
                        <!-- Email -->
                        <input required type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Логин" name="email">
                        <!-- Password -->
                        <input required type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Пароль" name="password">

                        <div class="d-flex justify-content-around">
                            <div>
                                <!-- Remember me -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                                    <label class="custom-control-label" for="defaultLoginFormRemember">Запомнить меня</label>
                                </div>
                            </div>
                            <div>
                                <!-- Forgot password -->
                                <a href="{{ route('recovery') }}">Забыли пароль?</a>
                            </div>
                        </div>
                        <!-- Sign in button -->
                        <button class="btn btn-info btn-block my-4 js_sendAuth" type="submit">Войти</button>

                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <p class="text-danger">{{ $error }}</p>
                            @endforeach
                        @endif

                        <!-- Register -->
                        <p>Ещё не зарегистрировались?
                            <a href="{{ route('signup') }}"> Регистрация</a>
                        </p>
                    </form>
                    <!-- Default form login -->
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </section>
        <!--Section: Content-->
    </div>

@endsection
