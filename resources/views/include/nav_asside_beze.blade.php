<nav class="navbar-light rounded">

    <!-- Navbar brand -->
    <a class="navbar-brand rounded" href="{{ route('tovarsbeze', ['categ' => 'Декор из безе', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Декор из безе']) }}">Все категории</a>

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
                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsbeze', ['categ' => 'Декор из безе|Безе на палочке', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Безе на палочке']) }}">Безе на палочке</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsbeze', ['categ' => 'Декор из безе|Безе в подарочной коробке', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Безе в подарочной коробке']) }}">Безе в подарочной коробке</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsbeze', ['categ' => 'Декор из безе|Безе россыпью (весовая)', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Безе россыпью (весовая)']) }}">Безе россыпью (весовая)</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsbeze', ['categ' => 'Декор из безе|Безе в рожке', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Безе в рожке']) }}">Безе в рожке</a>
            </li>
            <li class="nav-item">
                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsbeze', ['categ' => 'Декор из безе|Безе в стаканчике', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Безе в стаканчике']) }}">Безе в стаканчике</a>
            </li>
        </ul>
        <!-- Links -->
    </div>
    <!-- Collapsible content -->
</nav>
