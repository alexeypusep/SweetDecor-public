@extends('layouts.add')

@section('title', 'Лучшие товары')

@section('content')

    <br><a class="mr-5"></a><a class="mr-5"></a><a class="mr-5"></a><a class="pl-2 pr-2 pt-2 pb-2 ml-5" href="{{ url()->previous() }}"><i class="fas fa-angle-double-left fa-2x text-muted"></i></a>
    <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example rounded">
        <div class="container">
            <section class="text-center mb-4">
                <h2 class="mt-3 mb-5">Лучшие товары</h2>

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

@endsection
