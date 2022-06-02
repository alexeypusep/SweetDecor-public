@extends('layouts.adminlayout')

@section('title', 'Таблица "Товары"')

@section('head', 'Добавить товар')

@section('content')

    <a class="btn bg-gradient-success rounded pl-1 pr-1 pt-1 pb-1 mb-2" href="{{ route('admintovars.index') }}"><i class="fas fa-chevron-left"></i> Назад</a>

    <div class="card card-primary">
        <!-- form start -->
        <form action="{{ route('admintovars.store') }}" method="POST" enctype="multipart/form-data" runat="server">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName">Артикул</label>
                    <input name="code" type="text" class="form-control" id="exampleInputName" placeholder="Введите артикул" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Название</label>
                    <input name="naim" type="text" class="form-control" id="exampleInputName" placeholder="Введите название" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Цена по договору комиссии</label>
                    <input name="price_comm" type="text" class="form-control" id="exampleInputName" placeholder="Введите цену" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Цена</label>
                    <input name="price" type="text" class="form-control" id="exampleInputName" placeholder="Введите цену" required>
                </div>
                <div class="form-group">
                    <label>Категория</label>
                    <select name="category" class="form-control">
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

                        <option disabled><h1>Декор из изомальта</h1></option>
                        <option value="Декор из изомальта|Леденцы на палочке|Диаметр 3 см">Декор из изомальта/Леденцы на палочке/Диаметр 3 см</option>
                        <option value="Декор из изомальта|Леденцы на палочке|Диаметр 4 см">Декор из изомальта/Леденцы на палочке/Диаметр 4 см</option>
                        <option value="Декор из изомальта|Леденцы на палочке|Шарики">Декор из изомальта/Леденцы на палочке/Шарики</option>
                        <option value="Декор из изомальта|Леденцы на палочке|Сердечки">Декор из изомальта/Леденцы на палочке/Сердечки</option>
                        <option value="Декор из изомальта|Леденцы на палочке|Леденцы погремушки">Декор из изомальта/Леденцы на палочке/Леденцы погремушки</option>
                        <option value="Декор из изомальта|Леденцы на палочке|Топперы из изомальта">Декор из изомальта/Леденцы на палочке/Топперы из изомальта</option>
                        <option value="Декор из изомальта|Леденцы на палочке|Цифры">Декор из изомальта/Леденцы на палочке/Цифры</option>
                        <option value="Декор из изомальта|Леденцы на палочке|Леденцы с картинкой на вафельной бумаге">Декор из изомальта/Леденцы на палочке/Леденцы с картинкой на вафельной бумаге</option>

                        <option disabled><h1>Декор из шоколадной глазур</h1></option>

                        <option disabled><h1>Декор из маршмеллоу</h1></option>
                        <option value="Декор из маршмеллоу|Мордашки 3D">Декор из маршмеллоу/Мордашки 3D</option>
                        <option value="Декор из маршмеллоу|Мордашки 2D">Декор из маршмеллоу/Мордашки 2D</option>
                        <option value="Декор из маршмеллоу|Мордашки в подарочной коробке">Декор из маршмеллоу/Мордашки в подарочной коробке</option>
                        <option value="Декор из маршмеллоу|Мордашки в стаканчике">Декор из маршмеллоу/Мордашки в стаканчике</option>
                        <option value="Декор из маршмеллоу|Мордашки в индивидуальной упаковке">Декор из маршмеллоу/Мордашки в индивидуальной упаковке</option>

                        <option disabled><h1>Безе</h1></option>
                        <option value="Декор из безе|Безе на палочке">Декор из безе/Безе на палочке</option>
                        <option value="Декор из безе|Безе в подарочной коробке">Декор из безе/Безе в подарочной коробке</option>
                        <option value="Декор из безе|Безе россыпью (весовая)">Декор из безе/Безе россыпью (весовая)</option>
                        <option value="Декор из безе|Безе в рожке">Декор из безе/Безе в рожке</option>
                        <option value="Декор из безе|Безе в стаканчике">Декор из безе/Безе в стаканчике</option>

                        <option disabled><h1>Декор из имбирного теста</h1></option>
                    </select>
                </div>
                <div class="form-group">
                        <label>Фото 1</label><br><br>
                        <input accept="image/*" id="photo1" name="photo1" type="file" required>
                        <div id="preview1" class="pt-4">
                            <img id="img1" class="preview rounded mb-2" width="200">
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
                        <label>Фото 2</label><br><br>
                        <input accept="image/*" id="photo2" name="photo2" type="file">
                        <div class="pt-4">
                            <img id="img2" class="preview rounded mb-2" width="200">
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
                        <label>Фото 3</label><br><br>
                        <input accept="image/*" id="photo3" name="photo3" type="file">
                        <div class="pt-4">
                            <img id="img3" class="preview rounded mb-2" width="200">
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
                        <label>Фото 4</label><br><br>
                        <input accept="image/*" id="photo4" name="photo4" type="file">
                        <div class="pt-4">
                            <img id="img4" class="preview rounded mb-2" width="200">
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
                    <input name="size" type="text" class="form-control" id="exampleInputName" placeholder="Введите размер" required>
                </div>
                <div class="form-group">
                    <label>Индекс размера</label>
                    <select name="indexsize" class="form-control">
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
                    <input name="mass" type="text" class="form-control" id="exampleInputName" placeholder="Введите массу" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Материал</label>
                    <textarea name="material" class="form-control" id="exampleInputDisc" placeholder="Введите описание материала" required></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Красители</label>
                    <textarea name="colorant" class="form-control" id="exampleInputDisc" placeholder="Введите описание красителей" required></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Каркас</label>
                    <input name="carcass" type="text" class="form-control" id="exampleInputName" placeholder="Введите описание каркаса" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Хранение</label>
                    <textarea name="storage" class="form-control" id="exampleInputDisc" placeholder="Введите описание хранения" required></textarea>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>

@endsection
