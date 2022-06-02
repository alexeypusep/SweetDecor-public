@extends('layouts.add')

@section('title', 'Создание пароля')

@section('content')

    <div class="container my-5 py-5 z-depth-1">
        <!--Section: Content-->
        <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
            <!--Grid row-->
            <div class="row d-flex justify-content-center">
                <!--Grid column-->
                <div class="col-md-6">
                    <!-- Default form login -->
                    <form class="text-center" action="{{ route('recovery_pass_reg', $_GET['list']) }}" method="post">
                        @csrf
                        @if (session('success'))
                            <p class="text-danger">{{ session('success') }}</p>
                        @endif

                        <p class="h4 mb-4">Создание нового пароля</p>
                        <!-- Password -->
                        <input required type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Пароль" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="password">
                        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-2" >
                            Минимум 8 символов
                        </small>
                        <!-- Repeat Password -->
                        <input required type="password" id="defaultRegisterFormRepeatPassword" class="form-control" placeholder="Повтор пароля" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="password_confirmation">
                        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-2">
                            Введите пароль еще раз
                        </small>

                        <!-- Sign in button -->
                        <button class="btn btn-info btn-block my-4 js_sendAuth" type="submit">Восстановить</button>

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
