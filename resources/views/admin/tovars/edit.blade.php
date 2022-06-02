@extends('layouts.adminlayout')

@section('title', 'Таблица "Товары"')

@section('head', 'Редактировать товар')

@section('content')

    <a class="btn bg-gradient-success rounded pl-1 pr-1 pt-1 pb-1 mb-2" href="@if (session('page')) /admintovars?page={{ session('page') }} @else {{ route('admintovars.index') }} @endif"><i class="fas fa-chevron-left"></i> Назад</a>

    <div class="card card-primary">
        <!-- form start -->
        <form action="{{ route('admintovars.update', $tovar[0]['id_tovar']) }}" method="POST" enctype="multipart/form-data" runat="server">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName">Артикул</label>
                    <input name="code" type="text" class="form-control" id="exampleInputName" value="{{ $tovar[0]['code'] }}" placeholder="Введите артикул" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Название</label>
                    <input name="naim" type="text" class="form-control" id="exampleInputName" value="{{ $tovar[0]['naim'] }}" placeholder="Введите название" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Цена по договору комиссии</label>
                    <input name="price_comm" type="text" class="form-control" id="exampleInputName" value="{{ $tovar[0]['price_comm'] }}" placeholder="Введите цену" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Цена</label>
                    <input name="price" type="text" class="form-control" id="exampleInputName" value="{{ $tovar[0]['price'] }}" placeholder="Введите цену" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Стоимость по акции</label>
                    <p class="text-danger">Если акции нет, то поле оставить пустым!</p>
                    <input name="sale" type="text" class="form-control" id="exampleInputName" value="{{ $tovar[0]['sale'] }}" placeholder="Введите стоимость по акции">
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Лучший товар</label>
                    <select name="best" class="form-control">
                        <option selected="{{ $tovar[0]['best'] }}">{{ $tovar[0]['best'] }}</option>
                        @if ($tovar[0]['best'] == 0) <option value="1">1</option> @else <option value="0">0</option> @endif
                    </select>
                </div>
                <div class="form-group">
                    <label>Категория</label>
                    <select name="category" class="form-control">
                        <option selected="{{ $tovar[0]['category'] }}"><h1>{{ $tovar[0]['category'] }}</h1></option>
                        <option disabled><h1>Декор из сахарной мастики</h1></option>
                        <option value="Декор из сахарной мастики|Младенцы">Декор из сахарной мастики/Младенцы</option>
                        <option value="Декор из сахарной мастики|Ангелы|крещение">Декор из сахарной мастики/Ангелы/крещение</option>
                        <option value="Декор из сахарной мастики|Единороги">Декор из сахарной мастики/Единороги</option>

                        <option value="Декор из сахарной мастики|Домашние животные">Декор из сахарной мастики/Домашние животные</option>
                        <option value="Декор из сахарной мастики|Домашние животные|Кошки">Декор из сахарной мастики/Домашние животные/Кошки</option>
                        <option value="Декор из сахарной мастики|Домашние животные|Собачки">Декор из сахарной мастики/Домашние животные/Собачки</option>
                        <option value="Декор из сахарной мастики|Домашние животные|Коровы|бычки">Декор из сахарной мастики/Домашние животные/Коровы/бычки</option>
                        <option value="Декор из сахарной мастики|Домашние животные|Овечки">Декор из сахарной мастики/Домашние животные/Овечки</option>
                        <option value="Декор из сахарной мастики|Домашние животные|Лошадки|пони">Декор из сахарной мастики/Домашние животные/Лошадки/пони</option>
                        <option value="Декор из сахарной мастики|Домашние животные|Прочие домашние животные">Декор из сахарной мастики/Домашние животные/Прочие домашние животные</option>

                        <option value="Декор из сахарной мастики|Дикие животные|Лесные животные|Медведи">Декор из сахарной мастики/Дикие животные/Лесные животные/Медведи</option>
                        <option value="Декор из сахарной мастики|Дикие животные|Лесные животные|Олени">Декор из сахарной мастики/Дикие животные/Лесные животные/Олени</option>
                        <option value="Декор из сахарной мастики|Дикие животные|Лесные животные|Зайки">Декор из сахарной мастики/Дикие животные/Лесные животные/Зайки</option>
                        <option value="Декор из сахарной мастики|Дикие животные|Лесные животные|Лисички">Декор из сахарной мастики/Дикие животные/Лесные животные/Лисички</option>
                        <option value="Декор из сахарной мастики|Дикие животные|Лесные животные|Тигры|львы">Декор из сахарной мастики/Дикие животные/Лесные животные/Тигры/львы</option>
                        <option value="Декор из сахарной мастики|Дикие животные|Лесные животные|Прочие дикие животные">Декор из сахарной мастики/Дикие животные/Лесные животные/Прочие дикие животные</option>

                        <option value="Декор из сахарной мастики|Дикие животные|Сафари|Слоны|бегемоты">Декор из сахарной мастики/Дикие животные/Сафари/Слоны/бегемоты</option>
                        <option value="Декор из сахарной мастики|Дикие животные|Сафари|Жирафы">Декор из сахарной мастики/Дикие животные/Сафари/Жирафы</option>
                        <option value="Декор из сахарной мастики|Дикие животные|Сафари|Тигры|львы">Декор из сахарной мастики/Дикие животные/Сафари/Тигры/львы</option>
                        <option value="Декор из сахарной мастики|Дикие животные|Сафари|Зебры">Декор из сахарной мастики/Дикие животные/Сафари/Зебры</option>
                        <option value="Декор из сахарной мастики|Дикие животные|Сафари|Прочие экзотические животные">Декор из сахарной мастики/Дикие животные/Сафари/Прочие экзотические животные</option>

                        <option value="Декор из сахарной мастики|Мифологические животные|персонажи|драконы">Декор из сахарной мастики/Мифологические животные/персонажи/драконы</option>
                        <option value="Декор из сахарной мастики|Птицы">Декор из сахарной мастики/Птицы</option>
                        <option value="Декор из сахарной мастики|Морские обитатели">Декор из сахарной мастики/Морские обитатели</option>
                        <option value="Декор из сахарной мастики|Насекомые">Декор из сахарной мастики/Насекомые</option>
                        <option value="Декор из сахарной мастики|Динозавры">Декор из сахарной мастики/Динозавры</option>
                        <option value="Декор из сахарной мастики|Свадьба|помолвка">Декор из сахарной мастики/Свадьба/помолвка</option>
                        <option value="Декор из сахарной мастики|Праздники">Декор из сахарной мастики/Праздники</option>
                        <option value="Декор из сахарной мастики|Транспорт">Декор из сахарной мастики/Транспорт</option>
                        <option value="Декор из сахарной мастики|Инструменты|оружие|аксессуары">Декор из сахарной мастики/Инструменты/оружие/аксессуары</option>
                        <option value="Декор из сахарной мастики|Спорт">Декор из сахарной мастики/Спорт</option>
                        <option value="Декор из сахарной мастики|Профессии">Декор из сахарной мастики/Профессии</option>
                        <option value="Декор из сахарной мастики|Документы">Декор из сахарной мастики/Документы</option>
                        <option value="Декор из сахарной мастики|Надписи|таблички">Декор из сахарной мастики/Надписи/таблички</option>
                        <option value="Декор из сахарной мастики|Цифры">Декор из сахарной мастики/Цифры</option>
                        <option value="Декор из сахарной мастики|Цветы|растения|деревья">Декор из сахарной мастики/Цветы/растения/деревья</option>
                        <option value="Декор из сахарной мастики|Дополнительный декор">Декор из сахарной мастики/Дополнительный декор</option>
                        <option disabled><h1>Декор из шоколадной глазур</h1></option>
                        <option disabled><h1>Декор из шоколада</h1></option>
                        <option disabled><h1>Декор их вафельной бумаги</h1></option>
                        <option disabled><h1>Декор из изомальта/леденцы</h1></option>
                        <option disabled><h1>Декор из шоколадной глазур</h1></option>
                        <option disabled><h1>Декор из маршмеллоу</h1></option>
                        <option disabled><h1>Безе</h1></option>
                        <option disabled><h1>Декор из имбирного теста</h1></option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Фото 1</label>
                    <p class="text-danger">Если изображение менять не нужно, то поле оставить пустым!</p>
                    <div class="form-check">
                        <input type="checkbox" name="dellphoto1" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label text-danger" for="exampleCheck1">Поставите галочку, если изображение нужно удалить!</label>
                    </div>
                    <input accept="image/*" id="photo1" name="photo1" type="file">
                    <div id="preview1" class="pt-4">
                        <img id="img1" src="https://sweetdecor.spb.ru/{{ $tovar[0]['photo1'] }}" class="preview rounded mb-2" width="200">
                    </div>
                    <script type="text/javascript">
                        photo1.onchange = evt => {
                            const [file] = photo1.files
                            if (file) {
                                img1.src = URL.createObjectURL(file)
                            }
                        }
                    </script>
                </div>
                <div class="form-group">
                    <label>Фото 2</label>
                    <p class="text-danger">Если изображение менять не нужно, то поле оставить пустым!</p>
                    <div class="form-check">
                        <input type="checkbox" name="dellphoto2" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label text-danger" for="exampleCheck1">Поставите галочку, если изображение нужно удалить!</label>
                    </div>
                    <input accept="image/*" id="photo2" name="photo2" type="file">
                    <div class="pt-4">
                        <img id="img2" src="https://sweetdecor.spb.ru/{{ $tovar[0]['photo2'] }}" class="preview rounded mb-2" width="200">
                    </div>
                    <script type="text/javascript">
                        photo2.onchange = evt => {
                            const [file] = photo2.files
                            if (file) {
                                img2.src = URL.createObjectURL(file)
                            }
                        }
                    </script>

                </div>
                <div class="form-group">
                    <label>Фото 3</label>
                    <p class="text-danger">Если изображение менять не нужно, то поле оставить пустым!</p>
                    <div class="form-check">
                        <input type="checkbox" name="dellphoto3" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label text-danger" for="exampleCheck1">Поставите галочку, если изображение нужно удалить!</label>
                    </div>
                    <input accept="image/*" id="photo3" name="photo3" type="file">
                    <div class="pt-4">
                        <img id="img3" src="https://sweetdecor.spb.ru/{{ $tovar[0]['photo3'] }}" class="preview rounded mb-2" width="200">
                    </div>
                    <script type="text/javascript">
                        photo3.onchange = evt => {
                            const [file] = photo3.files
                            if (file) {
                                img3.src = URL.createObjectURL(file)
                            }
                        }
                    </script>
                </div>
                <div class="form-group">
                    <label>Фото 4</label>
                    <p class="text-danger">Если изображение менять не нужно, то поле оставить пустым!</p>
                    <div class="form-check">
                        <input type="checkbox" name="dellphoto4" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label text-danger" for="exampleCheck1">Поставите галочку, если изображение нужно удалить!</label>
                    </div>
                    <input accept="image/*" id="photo4" name="photo4" type="file">
                    <div class="pt-4">
                        <img id="img4" src="https://sweetdecor.spb.ru/{{ $tovar[0]['photo4'] }}" class="preview rounded mb-2" width="200">
                    </div>
                    <script type="text/javascript">
                        photo4.onchange = evt => {
                            const [file] = photo4.files
                            if (file) {
                                img4.src = URL.createObjectURL(file)
                            }
                        }
                    </script>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Размер</label>
                    <input name="size" type="text" class="form-control" id="exampleInputName" value="{{ $tovar[0]['size'] }}" placeholder="Введите размер" required>
                </div>
                <div class="form-group">
                    <label>Индекс размера</label>
                    <select name="indexsize" class="form-control">
                        <option selected="{{ $tovar[0]['indexsize'] }}">{{ $tovar[0]['indexsize'] }}</option>
                        <option value="XS">XS</option>
                        <option value="XXS">XXS</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                        <option value="XXXL">XXXL</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Масса</label>
                    <input name="mass" type="text" class="form-control" id="exampleInputName" value="{{ $tovar[0]['mass'] }}" placeholder="Введите массу" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Материал</label>
                    <textarea name="material" class="form-control" id="exampleInputDisc" placeholder="Введите описание материала" required>{{ $tovar[0]['material'] }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Красители</label>
                    <textarea name="colorant" class="form-control" id="exampleInputDisc" placeholder="Введите описание красителей" required>{{ $tovar[0]['colorant'] }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Каркас</label>
                    <input name="carcass" type="text" class="form-control" id="exampleInputName" value="{{ $tovar[0]['carcass'] }}" placeholder="Введите описание каркаса" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Хранение</label>
                    <textarea name="storage" class="form-control" id="exampleInputDisc" placeholder="Введите описание хранения" required>{{ $tovar[0]['storage'] }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Удаление</label>
                    <select name="del" class="form-control">
                        <option selected="{{ $tovar[0]['del'] }}">{{ $tovar[0]['del'] }}</option>
                        @if ($tovar[0]['del'] == 0) <option value="1">1</option> @else <option value="0">0</option> @endif
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
