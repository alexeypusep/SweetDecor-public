<nav class="navbar-light rounded">

    <!-- Navbar brand -->
    <a class="navbar-brand rounded" href="{{ route('tovarsview', ['categ' => 'Декор из сахарной мастики', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Декор из сахарной мастики']) }}">Все категории</a>

    <!-- Collapse button -->
    <button class="ml-5 navbar-toggler toggler-example animated border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation" onclick="getico()">
                        <span class="dark-blue-text">
                          <i id="icomen" class="fas fa-angle-down text-dark" style="transition: 1s;"></i>
                        </span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse show" id="navbarSupportedContent1">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsview', ['categ' => 'Младенцы', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Младенцы']) }}">Младенцы</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsview', ['categ' => 'Ангелы|Крещение', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Ангелы и Крещение']) }}">Ангелы/Крещение</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsview', ['categ' => 'Единороги', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Единороги']) }}">Единороги</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsview', ['categ' => 'Домашние животные', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Домашние животные']) }}">Домашние животные</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsview', ['categ' => 'Дикие животные (разделы)', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Дикие животные']) }}">Дикие животные</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsview', ['categ' => 'Мифологические животные|персонажи|драконы', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Мифологические животные (персонажи и драконы)']) }}">Мифологические животные/персонажи/драконы</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsview', ['categ' => 'Декор из сахарной мастики|Птицы', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Птицы']) }}">Птицы</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsview', ['categ' => 'Декор из сахарной мастики|Морские обитатели', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Морские обитатели']) }}">Морские обитатели</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsview', ['categ' => 'Декор из сахарной мастики|Насекомые', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Насекомые']) }}">Насекомые</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsview', ['categ' => 'Динозавры', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Динозавры']) }}">Динозавры</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0" href="{{ route('tovarsview', ['categ' => 'Свадьба|помолвка', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Свадьба и Помолвка']) }}">Свадьба/помолвка</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0" href="{{ route('tovarsview', ['categ' => 'Праздники', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Праздники']) }}">Праздники</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0" href="{{ route('tovarsview', ['categ' => 'Транспорт', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Транспорт']) }}">Транспорт</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0" href="{{ route('tovarsview', ['categ' => 'Инструменты|оружие|аксессуары', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Инструменты, оружие, аксессуары']) }}">Инструменты/оружие/аксессуары</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0" href="{{ route('tovarsview', ['categ' => 'Спорт', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Спорт']) }}">Спорт</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0" href="{{ route('tovarsview', ['categ' => 'Профессии', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Профессии']) }}">Профессии</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0" href="{{ route('tovarsview', ['categ' => 'Документы', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Документы']) }}">Документы</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0" href="{{ route('tovarsview', ['categ' => 'Надписи|таблички', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Надписи и Таблички']) }}">Надписи/таблички</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0" href="{{ route('tovarsview', ['categ' => 'Цифры', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Цифры']) }}">Цифры</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0" href="{{ route('tovarsview', ['categ' => 'Цветы', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Цветы']) }}">Цветы</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0" href="{{ route('tovarsview', ['categ' => 'Растения', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Цветы, растения, деревья']) }}">Растения</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0" href="{{ route('tovarsview', ['categ' => 'Деревья', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Цветы, растения, деревья']) }}">Деревья</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0" href="{{ route('tovarsview', ['categ' => 'Дополнительный декор', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Дополнительный декор']) }}">Дополнительный декор</a>
            </li>
        </ul>
        <!-- Links -->
    </div>
    <!-- Collapsible content -->
</nav>
