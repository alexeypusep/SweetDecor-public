@extends('layouts.adminlayout')

@section('title', 'Таблица "Товары"')

@section('head', 'Редактировать товар')

@section('content')

    <a class="btn bg-gradient-success rounded pl-1 pr-1 pt-1 pb-1 mb-2" href="{{ route('adminorders.index') }}"><i class="fas fa-chevron-left"></i> Назад</a>

    <div class="card card-primary">
        <!-- form start -->
        <form action="{{ route('adminorders.update', $orders[0]['id_order']) }}" method="POST" enctype="multipart/form-data" runat="server">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName">Статус</label>
                    <select name="status" class="form-control">
                        @if ($orders[0]['status'] == 'В обработке')
                            <option selected value="В обработке">В обработке</option>
                            <option value="Ожидает оплаты">Ожидает оплаты</option>
                            <option value="В работе">В работе</option>
                            <option value="Готов">Готов</option>
                        @endif
                        @if ($orders[0]['status'] == 'Ожидает оплаты')
                            <option value="В обработке">В обработке</option>
                            <option selected value="Ожидает оплаты">Ожидает оплаты</option>
                            <option value="В работе">В работе</option>
                            <option value="Готов">Готов</option>
                        @endif
                        @if ($orders[0]['status'] == 'В работе')
                            <option value="В обработке">В обработке</option>
                            <option value="Ожидает оплаты">Ожидает оплаты</option>
                            <option selected value="В работе">В работе</option>
                            <option value="Готов">Готов</option>
                        @endif
                        @if ($orders[0]['status'] == 'Готов')
                            <option value="В обработке">В обработке</option>
                            <option value="Ожидает оплаты">Ожидает оплаты</option>
                            <option value="В работе">В работе</option>
                            <option selected value="Готов">Готов</option>
                        @endif
                    </select>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Применить изменения</button>
            </div>
        </form>
    </div>

@endsection
