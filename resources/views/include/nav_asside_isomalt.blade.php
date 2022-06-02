<nav class="navbar-light rounded">

    <!-- Navbar brand -->
    <a class="navbar-brand rounded" href="{{ route('tovarsisomalt', ['categ' => 'Декор из изомальта', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Декор из изомальта']) }}">Все категории</a>

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
                <a class="list-group-item list-group-item-action border-0 rounded" href="{{ route('tovarsisomalt', ['categ' => 'Леденцы на палочке', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => 'Леденцы на палочке']) }}">Леденцы на палочке</a>
            </li>
        </ul>
        <!-- Links -->
    </div>
    <!-- Collapsible content -->
</nav>
