<?php
    if (empty(session('category'))){
        session([
            'category' => 'Декор из сахарной мастики',
        ]);
    }
    if (empty(session('sort'))){
        session([
            'sort' => 'asc',
        ]);
    }
    if (empty(session('pole'))){
        session([
            'pole' => 'code',
        ]);
    }
    if (empty(session('title'))){
        session([
            'title' => 'Декор из сахарной мастики',
        ]);
    }
?>

@extends('layouts.add')

@section('title', 'Декор из сахарной мастики')

@section('content')

        <nav class="mt-2" aria-label="breadcrumb">
            <ol class="breadcrumb white pl-5">
                <li class="breadcrumb-item"><a class="text-dark" href="{{ route('home') }}">Главная</a></li>
                <li class="breadcrumb-item"><a class="text-dark" href="{{ route('catalog') }}">Каталог</a></li>
                <li class="breadcrumb-item"><a class="text-dark" href="">Декор из сахарной мастики</a></li>
                <li class="breadcrumb-item active">{{ session('title') }}</li>
            </ol>
        </nav>

        <div class="row ml-5 mr-5">

            <div class="col mb-5">
                @include('include.nav_asside_sah_mast')
            </div>

            @if(session('category') == 'Домашние животные')
                @include('catalog.sah_mast.pets')
            @elseif(session('category') == 'Дикие животные (разделы)')
                @include('catalog.sah_mast.animals')
            @elseif(session('category') == 'Лесные животные')
                @include('catalog.sah_mast.animals_forest')
            @elseif(session('category') == 'Сафари')
                @include('catalog.sah_mast.animals_safari')
            @elseif(session('category') == 'Праздники')
                @include('catalog.sah_mast.holidays')
            @else
                <div class="col-lg-9 mb-5">
                    <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example rounded">
                        <div class="container">
                            <section class="text-center mb-4">
                                <h2 class="pt-3">{{ session('title') }}</h2>
                                <ul class="nav justify-content-end py-1">
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Сортировка</a>
                                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="{{ route('tovarsview', ['categ' => session('category'), 'pole' => 'code', 'sort' => 'asc', 'title' => session('title')]) }}">По умолчанию</a>
                                            <a class="dropdown-item" href="{{ route('tovarsview', ['categ' => session('category'), 'pole' => 'price', 'sort' => 'asc', 'title' => session('title')]) }}">По возрастанию цены</a>
                                            <a class="dropdown-item" href="{{ route('tovarsview', ['categ' => session('category'), 'pole' => 'price', 'sort' => 'desc', 'title' => session('title')]) }}">По убыванию цены</a>
                                        </div>
                                    </li>
                                </ul>
                                <br>
                                <div class="row wow fadeIn">

                                    @foreach ($tovars as $tovar)
                                        @include('include.tovar')
                                    @endforeach

                            </section>
                            <div>
                                {{ $tovars->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <script type="text/javascript">

            let a = 0;

            function getico() {
                if (a == 0) {
                    a = 1;
                    document.getElementById("icomen").style.transform = 'rotate(180deg)';
                }
                else {
                    a = 0;
                    document.getElementById("icomen").style.transform = 'rotate(0deg)';
                }
            }
        </script>

@endsection
