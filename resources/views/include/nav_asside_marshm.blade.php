<nav class="navbar-light rounded">

    <!-- Navbar brand -->
    <a class="navbar-brand rounded" href="{{ route('tovarsmarshm', ['categ' => 'Декор из маршмеллоу', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Декор из маршмеллоу']) }}">Все категории</a>

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
                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsmarshm', ['categ' => 'Декор из маршмеллоу|Мордашки 3D', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Мордашки 3D']) }}">Мордашки 3D</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsmarshm', ['categ' => 'Декор из маршмеллоу|Мордашки 2D', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Мордашки 2D']) }}">Мордашки 2D</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsmarshm', ['categ' => 'Декор из маршмеллоу|Мордашки в подарочной коробке', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Мордашки в подарочной коробке']) }}">Мордашки в подарочной коробке</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsmarshm', ['categ' => 'Декор из маршмеллоу|Мордашки в стаканчике', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Мордашки в стаканчике']) }}">Мордашки в стаканчике</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsmarshm', ['categ' => 'Декор из маршмеллоу|Мордашки в индивидуальной упаковке', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Мордашки в индивидуальной упаковке']) }}">Мордашки в индивидуальной упаковке</a>
            </li>
        </ul>
        <!-- Links -->
    </div>
    <!-- Collapsible content -->
</nav>
