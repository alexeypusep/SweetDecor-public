<div class="col-lg-9 mb-5 text-center">
    <div class="row row-cols-1 row-cols-md-4 justify-content-center">
        <div class="col mb-4">
            <!-- Card -->
            <div class="card waves-effect zoom">
                <!--Card image-->
                <div class="view overlay">
                    <img height="300" class="card-img-top" style="object-fit: cover;" src="https://sweetdecor.spb.ru/img/671.jpg"
                         alt="Card image cap">
                    <a href="{{ route('tovarsview', ['categ' => 'Дикие животные', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => session('title')]) }}">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--Card content-->
                <a class="text-dark" href="{{ route('tovarsview', ['categ' => 'Дикие животные', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => session('title')]) }}">
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title pt-2">Все дикие животные</h4>
                    </div>
                </a>
            </div>
            <!-- Card -->
        </div>
        <div class="col mb-4">
            <!-- Card -->
            <div class="card waves-effect zoom">
                <!--Card image-->
                <div class="view overlay">
                    <img height="300" class="card-img-top" style="object-fit: cover;" src="https://sweetdecor.spb.ru/storage/app/public/img/XHFFQ5k3eV22TGWmNC5BmZLIw7D7CadFWpKiNpBm.jpg"
                         alt="Card image cap">
                    <a href="{{ route('tovarsview', ['categ' => 'Лесные животные', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => session('title')]) }}">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--Card content-->
                <a class="text-dark" href="{{ route('tovarsview', ['categ' => 'Лесные животные', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => session('title')]) }}">
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title pt-2">Лесные животные</h4>
                    </div>
                </a>
            </div>
            <!-- Card -->
        </div>
        <div class="col mb-4">
            <!-- Card -->
            <div class="card waves-effect zoom">
                <!--Card image-->
                <div class="view overlay">
                    <img height="300" class="card-img-top" style="object-fit: cover;" src="https://sweetdecor.spb.ru/img/561.jpg"
                         alt="Card image cap">
                    <a href="{{ route('tovarsview', ['categ' => 'Сафари', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => session('title')]) }}">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--Card content-->
                <a class="text-dark" href="{{ route('tovarsview', ['categ' => 'Сафари', 'pole' => session('pole'), 'sort' => session('sort'), 'title' => session('title')]) }}">
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title pt-2">Сафари</h4>
                    </div>
                </a>
            </div>
            <!-- Card -->
        </div>
    </div>
</div>
