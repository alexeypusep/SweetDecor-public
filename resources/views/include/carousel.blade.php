<!--"Карусель"-->
<div id="carousel-ex" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Индикаторы-->
    <ol class="carousel-indicators">
        <li class="active" data-target="#carousel-ex" data-slide-to="0"></li>
        <li data-target="#carousel-ex" data-slide-to="1"></li>
        <li data-target="#carousel-ex" data-slide-to="2"></li>
        <li data-target="#carousel-ex" data-slide-to="3"></li>
        <li data-target="#carousel-ex" data-slide-to="4"></li>
        <li data-target="#carousel-ex" data-slide-to="5"></li>
        <li data-target="#carousel-ex" data-slide-to="6"></li>
        <li data-target="#carousel-ex" data-slide-to="7"></li>
    </ol>
    <!--Индикаторы-->
    <!--Элемент 1-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <!--Стиль для фона с картинкой-->
            <div class="view" style="background: url(https://sweetdecor.spb.ru/public/img/catalog/img/%D0%94%D0%B5%D0%BA%D0%BE%D1%80%20%D0%B8%D0%B7%20%D1%81%D0%B0%D1%85%D0%B0%D1%80%D0%BD%D0%BE%D0%B9%20%D0%BC%D0%B0%D1%81%D1%82%D0%B8%D0%BA%D0%B8.jpeg); background-repeat: no-repeat; background-size: cover;">
                <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4">
                            <strong>Декор из сахарной мастики</strong>
                        </h1>
                        <p>
                            <strong>Фигурки, цветы, надписи и разнообразный сладкий декор</strong>
                        </p>
                        <p class="mb-4 d-none d-md-block">
                            <strong>из специальной кондитерской пасты на основе сахарной пудры..</strong>
                        </p>
                        <?php
                        $categ = 'Декор из сахарной мастики';
                        $pole = 'code';
                        $sort = 'asc';
                        $title = 'Декор из сахарной мастики';
                        ?>
                        <a href="{{ route('tovarsview', ['categ' => $categ, 'pole' => $pole, 'sort' => $sort, 'title' => $title]) }}" class="btn btn-outline-white btn-lg rounded-pill">Сахарная мастика</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Элемент 1-->
        <!--Элемент 2-->
        <div class="carousel-item">
            <div class="view" style="background-image: url(https://sweetdecor.spb.ru/public/img/catalog/img/%D0%94%D0%B5%D0%BA%D0%BE%D1%80%20%D0%B8%D0%B7%20%D1%88%D0%BE%D0%BA%D0%BE%D0%BB%D0%B0%D0%B4%D0%BD%D0%BE%D0%B9%20%D0%B3%D0%BB%D0%B0%D0%B7%D1%83%D1%80%D0%B8.jpeg); background-repeat: no-repeat; background-size: cover;">
                <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4">
                            <strong>Декор из шоколадной глазури и шоколада</strong>
                        </h1>
                        <p>
                            <strong>Элементы декора для тортов и пирожных из глазури.</strong>
                        </p>
                        <p class="mb-4 d-none d-md-block">
                            <strong></strong>
                        </p>
                        <a href="#" class="btn btn-outline-white btn-lg rounded-pill">Шоколадная глазурь и шоколад</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Элемент 2-->
        <!--Элемент 3-->
        <div class="carousel-item">
            <div class="view" style="background-image: url(https://sweetdecor.spb.ru/public/img/catalog/img/%D0%94%D0%B5%D0%BA%D0%BE%D1%80%20%D0%B8%D0%B7%20%D0%B2%D0%B0%D1%84%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B9%20%D0%B1%D1%83%D0%BC%D0%B0%D0%B3%D0%B8.jpeg); background-repeat: no-repeat; background-size: cover;">
                <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4">
                            <strong>Декор из вафельной бумаги</strong>
                        </h1>
                        <p>
                            <strong>Съедобные картинки, различные текстуры, объемные украшения.</strong>
                        </p>
                        <p class="mb-4 d-none d-md-block">
                            <strong>Границы применения вафельных листов зависят лишь от вашей фантазии.</strong>
                        </p>
                        <a href="#" class="btn btn-outline-white btn-lg rounded-pill">Вафельная бумага</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Элемент 3-->
        <!--Элемент 4-->
        <div class="carousel-item">
            <div class="view" style="background-image: url(https://sweetdecor.spb.ru/public/img/catalog/img/%D0%94%D0%B5%D0%BA%D0%BE%D1%80%20%D0%B8%D0%B7%20%D0%B8%D0%B7%D0%BE%D0%BC%D0%B0%D0%BB%D1%8C%D1%82%D0%B0%20%D0%BB%D0%B5%D0%B4%D0%B5%D0%BD%D1%86%D1%8B.jpeg); background-repeat: no-repeat; background-size: cover;">
                <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4">
                            <strong>Декор из изомальта (леденцы)</strong>
                        </h1>
                        <p>
                            <strong>Изомальт — сахарозаменитель. Он делается из кристаллов сахара, но не повышает гликемический индекс.</strong>
                        </p>
                        <p class="mb-4 d-none d-md-block">
                            <strong>Леденцы из изомальта  можно использовать в качестве декора для тортов и как самостоятельный продукт</strong>
                        </p>
                        <a href="#" class="btn btn-outline-white btn-lg rounded-pill">Леденцы из изомальта</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Элемент 4-->
        <!--Элемент 5-->
        <div class="carousel-item">
            <div class="view" style="background-image: url(https://sweetdecor.spb.ru/public/img/catalog/img/%D0%94%D0%B5%D0%BA%D0%BE%D1%80%20%D0%B8%D0%B7%20%D0%BC%D0%B0%D1%80%D1%88%D0%BC%D1%8D%D0%BB%D0%BB%D0%BE%D1%83.jpeg); background-repeat: no-repeat; background-size: cover;">
                <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4">
                            <strong>Декор из маршмэллоу</strong>
                        </h1>
                        <p>
                            <strong>Кондитерское изделие, напоминающее пастилу или суфле.</strong>
                        </p>
                        <p class="mb-4 d-none d-md-block">
                            <strong>Шары из маршмеллоу. Мордашки из маршмеллоу. Маршмеллоу на палочке. Подарочные наборы из маршмеллоу.</strong>
                        </p>
                        <a href="#" class="btn btn-outline-white btn-lg rounded-pill">Маршмэллоу</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Элемент 5-->
        <!--Элемент 6-->
        <div class="carousel-item">
            <div class="view" style="background-image: url(https://sweetdecor.spb.ru/public/img/catalog/img/%D0%94%D0%B5%D0%BA%D0%BE%D1%80%20%D0%B8%D0%B7%20%D0%B7%D0%B5%D1%84%D0%B8%D1%80.jpeg); background-repeat: no-repeat; background-size: cover;">
                <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4">
                            <strong>Декор из зефира</strong>
                        </h1>
                        <p>
                            <strong>Зефир - это  сахаристое кондитерское изделие, которое получают путем взбивания фруктово-ягодного пюре с сахаром и яичным белком.</strong>
                        </p>
                        <p class="mb-4 d-none d-md-block">
                            <strong>Цветы из зефира. Зефирные завитки. Букеты из зефира Подарочные зефирные наборы.</strong>
                        </p>
                        <a href="#" class="btn btn-outline-white btn-lg rounded-pill">Зефир</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Элемент 6-->
        <!--Элемент 7-->
        <div class="carousel-item">
            <div class="view" style="background-image: url(https://sweetdecor.spb.ru/public/img/catalog/img/%D0%91%D0%B5%D0%B7%D0%B5.jpeg); background-repeat: no-repeat; background-size: cover;">
                <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4">
                            <strong>Безе</strong>
                        </h1>
                        <p>
                            <strong>Безе (меренга) – десерт из  взбитых и запеченных яичных белков. В этом разделе Вы найдете  безе на палочке, россыпью, в рожке  разных форм и расцветок.</strong>
                        </p>
                        <p class="mb-4 d-none d-md-block">
                            <strong>Безе на палочке. Безе россыпью. Безе в рожке. Безе в подарочной коробочке.</strong>
                        </p>
                        <a href="#" class="btn btn-outline-white btn-lg rounded-pill">Безе</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Элемент 7-->
        <!--Элемент 8-->
        <div class="carousel-item">
            <div class="view" style="background-image: url(https://sweetdecor.spb.ru/public/img/catalog/img/%D0%94%D0%B5%D0%BA%D0%BE%D1%80%20%D0%B8%D0%B7%20%D0%B8%D0%BC%D0%B1%D0%B8%D1%80%D0%BD%D0%BE%D0%B3%D0%BE%20%D1%82%D0%B5%D1%81%D1%82%D0%B0.jpeg); background-repeat: no-repeat; background-size: cover;">
                <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4">
                            <strong>Декор из имбирного теста</strong>
                        </h1>
                        <p>
                            <strong>Пряники различной формы и размеров для украшения тортов  и десертов.</strong>
                        </p>
                        <p class="mb-4 d-none d-md-block">
                            <strong>Пряничный декор. Пряники. Топперы из имбирных пряников с глазурью.</strong>
                        </p>
                        <a href="#" class="btn btn-outline-white btn-lg rounded-pill">Имбирное тесто</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Элемент 8-->
    </div>
    <!--Кнопки для перелистывания элементов-->
    <!--Кнопка влево (предыидущий)-->
    <a href="#carousel-ex" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true">
                <svg fill="#FFFFFF" height="36" viewBox="0 0 24 24" width="36" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
                    <path d="M0-.5h24v24H0z" fill="none"/>
                </svg>
            </span>
    </a>
    <!--Кнопка влево (предыидущий)-->
    <!--Кнопка вправо (следующий)-->
    <a href="#carousel-ex" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true">
                <svg fill="#FFFFFF" height="36" viewBox="0 0 24 24" width="36" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/>
                    <path d="M0-.25h24v24H0z" fill="none"/>
                </svg>
            </span>
    </a>
    <!--Кнопка вправо (следующий)-->
    <!--Кнопки для перелистывания элементов-->
</div>
<!--"Карусель"-->
