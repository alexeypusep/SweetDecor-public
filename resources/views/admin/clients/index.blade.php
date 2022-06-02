@extends('layouts.adminlayout')

@section('title', 'Таблица "Клиент"')

@section('head', 'Все клиенты')

@section('content')

    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
            <tr>
                <th>
                    Фамилия
                </th>
                <th>
                    Имя
                </th>
                <th>
                    Отчество
                </th>
                <th>
                    Email
                </th>
                <th>
                    Телефон
                </th>
                <th>
                    Статус
                </th>
                <th>
                    Скидка
                </th>
                <th>
                    Удалён
                </th>
                <th>
                </th>
            </tr>
            </thead>
            <tbody class="teal-centr">
            @foreach($clients as $client)
                <tr>
                    <td>
                        {{ $client['lastname'] }}
                    </td>
                    <td>
                        {{ $client['firstname'] }}
                    </td>
                    <td>
                        {{ $client['middlename'] }}
                    </td>
                    <td>
                        {{ $client['email'] }}
                    </td>
                    <td>
                        {{ $client['phone'] }}
                    </td>
                    <td class="text-center">
                        @if ($client['status'] == 1)
                            <p class="bg-gradient-green rounded">Активен</p>
                        @elseif ($client['status'] == 0)
                            <p class="bg-gradient-red rounded">Не активен</p>
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($client['discount'] == 1)
                            <p class="bg-gradient-green rounded">Активна</p>
                        @elseif ($client['discount'] == 0)
                            <p class="bg-gradient-red rounded">Не активна</p>
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($client['del'] == 0)
                            <p class="bg-gradient-green rounded">Не удалён</p>
                        @elseif ($client['del'] == 1)
                            <p class="bg-gradient-red rounded">Удалён</p>
                        @endif
                    </td>
                    <td class="project-actions text-right">
                        <a hidden class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            Просмотр
                        </a>
                        <a class="btn btn-info btn-sm" href="{{ route('adminclients.edit', $client['id_klient']) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Редактировать
                        </a>
                        <form class="mt-2" action="{{ route('adminclients.destroy', $client['id_klient']) }}" method="POST" style="display: inline-block">
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
            {{ $clients->links() }}
        </div>
    </div>

@endsection
