@extends('layouts.adminlayout')

@section('title', 'Таблица "Товары"')

@section('head', 'Редактировать товар')

@section('content')

    <a class="btn bg-gradient-success rounded pl-1 pr-1 pt-1 pb-1 mb-2" href="{{ route('adminclients.index') }}"><i class="fas fa-chevron-left"></i> Назад</a>

    <div class="card card-primary">
        <!-- form start -->
        <form action="{{ route('adminclients.update', $client[0]['id_klient']) }}" method="POST" enctype="multipart/form-data" runat="server">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName">Фамилия</label>
                    <input name="lastname" type="text" class="form-control" id="exampleInputName" value="{{ $client[0]['lastname'] }}" placeholder="Фамилия" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Имя</label>
                    <input name="firstname" type="text" class="form-control" id="exampleInputName" value="{{ $client[0]['firstname'] }}" placeholder="Имя" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Отчесво</label>
                    <input name="middlename" type="text" class="form-control" id="exampleInputName" value="{{ $client[0]['middlename'] }}" placeholder="Отчесво" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Email</label>
                    <input name="email" type="text" class="form-control" id="exampleInputName" value="{{ $client[0]['email'] }}" placeholder="Email" required>
                </div>
                <div hidden class="form-group">
                    <label>Фото</label>
                    <p class="text-danger">Оставите поле пустым, если изображение менять не нужно!</p>
                    <div class="form-check">
                        <input type="checkbox" name="dellavatar" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label text-danger" for="exampleCheck1">Поставите галочку, если изображение нужно удалить!</label>
                    </div>
                    <p class="text-danger"></p>
                    <input accept="image/*" id="avatar" name="avatar" type="file">
                    <div class="pt-4">
                        <img id="img" src="http://127.0.0.1:8000/{{ $client[0]['avatar'] }}" class="preview rounded mb-2" width="200">
                    </div>
                    <script type="text/javascript">
                        avatar.onchange = evt => {
                            const [file] = avatar.files
                            if (file) {
                                img.src = URL.createObjectURL(file)
                            }
                        }
                    </script>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Телефон</label>
                    <input name="phone" type="text" class="form-control" id="exampleInputName" value="{{ $client[0]['phone'] }}" placeholder="Телефон" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Статус почты</label>
                    <select name="status" class="form-control">
                        <option selected="{{ $client[0]['status'] }}">{{ $client[0]['status'] }}</option>
                        @if ($client[0]['status'] == 0) <option value="1">1</option> @else <option value="0">0</option> @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Статус акции</label>
                    <select name="discount" class="form-control">
                        <option selected="{{ $client[0]['discount'] }}">{{ $client[0]['discount'] }}</option>
                        @if ($client[0]['discount'] == 0) <option value="1">1</option> @else <option value="0">0</option> @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Удаление</label>
                    <select name="del" class="form-control">
                        <option selected="{{ $client[0]['del'] }}">{{ $client[0]['del'] }}</option>
                        @if ($client[0]['del'] == 0) <option value="1">1</option> @else <option value="0">0</option> @endif
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
