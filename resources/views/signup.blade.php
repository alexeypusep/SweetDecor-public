@extends('layouts.add')

@section('title', 'Регистрация')

@section('content')

    <div class="container my-5 py-5 z-depth-1">
        <!--Section: Content-->
        <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
            <!--Grid row-->
            <div class="row d-flex justify-content-center">
                <!--Grid column-->
                <div class="col-md-6">
                    <!-- Default form register -->
                    <form class="text-center" action="{{ route('clients.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <p class="h4 mb-4">Регистрация</p>
                        <div class="form-row mb-4">
                            <div class="col">
                                <!-- Last name -->
                                <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Фамилия" name="lastName" value="<?php  //echo $_SESSION['profil']['last_name'] ?>">
                            </div>
                            <div class="col">
                                <!-- First name -->
                                <input required type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Имя*" name="firstName" value="<?php  //echo $_SESSION['profil']['name'] ?>">
                            </div>
                            <div class="col">
                                <!-- Middle name -->
                                <input type="text" id="defaultRegisterFormMiddleName" class="form-control" placeholder="Отчество" name="middleName" value="<?php  //echo $_SESSION['profil']['middle_name'] ?>">
                            </div>
                        </div>

                        <!-- Phone -->
                        <input type="text" id="defaultRegisterFormPhone" class="form-control mb-4" placeholder="Ваш телефон" name="phone" value="<?php  //echo $_SESSION['profil']['phone'] ?>">

                        <!-- E-mail -->
                        <input required type="text" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail*" name="email" value="<?php  //echo $_SESSION['profil']['email'] ?>">

                        <!-- Password -->
                        <input required type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Пароль*" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="password">
                        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-2" >
                            Минимум 8 символов
                        </small>
                        <!-- Repeat Password -->
                        <input required type="password" id="defaultRegisterFormRepeatPassword" class="form-control" placeholder="Повтор пароля*" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="password_confirmation">
                        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-2">
                            Введите пароль еще раз
                        </small>

                        <!-- Newsletter -->
                        <div class="custom-control custom-checkbox mb-3">
                            <input required type="checkbox" name="check" class="custom-control-input" id="defaultRegisterFormNewsletter">
                            <label class="custom-control-label" for="defaultRegisterFormNewsletter">Согласие на обработку персональных данных</label>
                        </div>

                        <!-- Phone number
                        <input type="number" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number"
                          aria-describedby="defaultRegisterFormPhoneHelpBlock">
                        <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                          Optional - for two step authentication
                        </small>
                        Phone number -->

                        <!-- Newsletter
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
                          <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our
                            newsletter</label>
                        </div>
                        Newsletter -->

                        @if (session('success'))
                            <p class="text-danger">{{ session('success') }}</p>
                        @endif
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <p class="text-danger">{{ $error }}</p>
                            @endforeach
                        @endif

                        <!-- Sign up button -->
                        <button class="btn btn-info my-4 btn-block js_sendReg" type="submit">Зарегистрироваться</button>

                        <!-- Social register
                        <p>or sign up with:</p>

                            <a href="#" class="mx-1" role="button"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="mx-1" role="button"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="mx-1" role="button"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="mx-1" role="button"><i class="fab fa-github"></i></a>

                        <hr>
                        Social register -->
                        <!-- Terms of service -->
                        <p>Нажимая
                            <em>Зарегистрироваться</em>, вы соглашаетесь с нашими
                            <a href="sogl.php" target="_blank">условиями обслуживания</a>

                        <p>Уже зарегистрировались?
                            <a href="{{ route('signin') }}"> Авторизация</a>
                        </p>
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
