@extends('layouts.adminlayout')

@section('title', 'Таблица "Товары"')

@section('head', 'Все товары')

@section('content')

    <div class="row">
        <div class="col-10">
            <form action="{{ route('search') }}" class="form-inline md-form form-sm">
                @csrf
                <i class="fas fa-search" aria-hidden="true"></i>
                <input name="search" class="form-control form-control-sm ml-3 mr-3 w-25" type="text" placeholder="Поиск" aria-label="Search" value="{{ session('search') }}" required>
                <select name="selectsearch" class="custom-select form-control-border border-width-2 mr-2" id="exampleSelectBorderWidth2">
                    @if(session('selectsearch') == 'code')
                        <option selected value="code">Артикул</option>
                        <option value="naim">Наименование</option>
                    @else
                        <option value="code">Артикул</option>
                        <option selected value="naim">Наименование</option>
                    @endif


                </select>
                <button class="btn btn-info btn-sm bg-gradient-green ml-2" type="submit">Найти</button>
                <a href="{{ route('admintovars.index') }}" class="btn btn-danger btn-sm ml-2" >Сбросить</a>
            </form>

        </div>
    </div>

    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
            <tr>
                <th>
                    Артикул
                </th>
                <th>
                    Название
                </th>
                <th style="width: 5%">
                    Цена по дог. комиссии
                </th>
                <th>
                    Цена
                </th>
                <th>
                    Фото 1
                </th>
                <th>
                    Акция
                </th>
                <th>
                    Best
                </th>
                <th>
                    Категория
                </th>
                <th>
                    Удаление
                </th>
                <th>
                </th>
            </tr>
            </thead>
            <tbody class="teal-centr">
            @foreach($tovars as $tovar)
                <tr>
                    <td>
                        {{ $tovar['code'] }}
                    </td>
                    <td>
                        {{ $tovar['naim'] }}
                    </td>
                    <td>
                        {{ $tovar['price_comm'] }}
                    </td>
                    <td>
                        {{ $tovar['price'] }}
                    </td>
                    <td>
                        <img width="50" src="https://sweetdecor.spb.ru/{{ $tovar['photo1'] }}">
                    </td>
                    <td>
                        {{ $tovar['sale'] }}
                    </td>
                    <td>
                        {{ $tovar['best'] }}
                    </td>
                    <td>
                        {{ $tovar['category'] }}
                    </td>
                    <td class="text-center">
                        @if ($tovar['del'] == 0)
                            <p class="bg-gradient-green rounded">Не удалён</p>
                        @elseif ($tovar['del'] == 1)
                            <p class="bg-gradient-red rounded">Удалён</p>
                        @endif
                    </td>
                    <td class="project-actions text-right">
                        <a hidden class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            Просмотр
                        </a>
                        <?php if (isset($_GET['page'])) {session(['page' => $_GET['page'],]);} elseif(session()->exists('page')) {session()->pull('page');} ?>

                        <a class="btn btn-info btn-sm" href="{{ route('admintovars.edit', $tovar['id_tovar']) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Редактировать
                        </a>
                        <form class="mt-2" action="{{ route('admintovars.destroy', $tovar['id_tovar']) }}" method="POST" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger btn-sm delete-btn">
                                <i class="fas fa-trash">
                                </i>
                                Удалить
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
            {{ $tovars->links() }}
        </div>
    </div>

@endsection
