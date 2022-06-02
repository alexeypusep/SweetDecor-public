<div class="col-lg-4 col-md-12 mb-4" data-id="{{ $tovar['id_tovar'] }}">
    <a href="{{ route('tovars.show', $tovar['id_tovar']) }}" class="waves-effect waves-light">
        <img src="{{ asset($tovar['photo1']) }}" class="img-fluid rounded" alt="Photo" style="width:auto; height:auto; max-width:70%!important; max-height:350px!important;">
    </a>
    <br>
    <p class="mb-1">
        <a href="{{ route('tovars.show', $tovar['id_tovar']) }}" class="font-weight-bold black-text">{{ $tovar['naim'] }}</a>
        @if($tovar['sale'] != null)<span class="badge badge-danger product ml-xl-0 ml-4">Акция</span>@endif
        @if($tovar['best'] == 1)<span class="badge badge-success product mb-4 ml-2">Бестселлер</span>@endif
    </p>
    <p class="mb-1">
        @if($tovar['sale'] != null)
            <span class="red-text font-weight-bold">
                <strong>{{ $tovar['sale'] }}₽</strong>
            </span>
            <span class="grey-text">
                <small>
                    <s>{{ $tovar['price'] }}₽</s>
                </small>
            </span>
        @else
            <strong>{{ $tovar['price'] }}₽</strong>
        @endif
    </p>
    <?php session(['uri' => $_SERVER['REQUEST_URI']])?>
    <div class="row justify-content-center">
        <a href="{{ route('tovars.show', $tovar['id_tovar']) }}" data-toggle="tooltip" title="Подробнее о товаре"><button class="btn cloudy-knoxville-gradient btn-sm px-3 waves-effect"><i class="fas fa-info-circle fa-2x indigo-text" aria-hidden="true"></i></button></a>
        <form action="{{ route('addcart', $tovar['id_tovar']) }}" method="post">
            @csrf
            <button class="btn cloudy-knoxville-gradient btn-sm px-3 waves-effect" data-toggle="tooltip" title="Добавить в корзину"><i class="fas fa-cart-plus fa-2x green-text" aria-hidden="true"></i></button>
        </form>
    </div>
</div>
