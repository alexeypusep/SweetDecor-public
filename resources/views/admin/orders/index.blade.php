@extends('layouts.adminlayout')

@section('title', 'Таблица "Клиент"')

@section('head', 'Все клиенты')

@section('content')

    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
            <tr>
                <th>
                    ФИО клиента
                </th>
                <th>
                    Номер заказа
                </th>
                <th>
                    Информация о заказе
                </th>
                <th>
                    Общая сумма
                </th>
                <th>
                    Статус
                </th>
                <th>
                    Дата оформления заказа
                </th>
                <th>
                </th>
            </tr>
            </thead>
            <tbody class="teal-centr">
            @foreach($orders as $order)
                <tr>
                    <td>
                        {{ $order->klients['lastname'] }} {{ $order->klients['firstname'] }} {{ $order->klients['middlename'] }}
                    </td>
                    <td>
                        {{ $order['number'] }}
                    </td>
                    <td>
                        <?php echo nl2br($order->info) ?>
                    </td>
                    <td>
                        {{ $order['total'] }}
                    </td>
                    <td>
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
                    </td>
                    <td>
                        {{ $order['created_at'] }}
                    </td>
                    <td class="project-actions text-right">
                        <a hidden class="btn btn-primary btn-sm" href="#"><i class="fas fa-folder"></i>Просмотр</a>
                        <a class="btn btn-info btn-sm" href="{{ route('adminorders.edit', $order['id_order']) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Редактировать
                        </a>
                        <form class="mt-2" action="{{ route('adminorders.destroy', $order['id_order']) }}" method="POST" style="display: inline-block">
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
            {{ $orders->links() }}
        </div>
    </div>

@endsection
