@extends('layouts.add')

@section('title', 'Команда')

@section('content')

    <div class="container my-5">
        <!--Section: Content-->
        <section class="team-section text-center dark-grey-text">
            <!-- Section heading -->
            <h3 class="font-weight-bold pb-2 mb-5">Наша замечательная команда</h3>
            <!-- Section description -->
            <p hidden class="text-muted w-responsive mx-auto mb-5">ОПИСАНИЕ</p>
            <!-- Grid row -->
            <div class="row text-center justify-content-center">
                <!-- Grid column -->
                <div class="col-md-4 mb-4">
                    <div class="avatar mx-auto">
                        <img src="https://sweetdecor.spb.ru/img/imgindex/dogovor.png" class="rounded-circle z-depth-1-half" alt="Sample avatar" width="200" height="200">
                    </div>
                    <h4 class="font-weight-bold dark-grey-text my-4">Оксана Павловна</h4>
                    <h6 class="text-uppercase grey-text mb-3"><strong>Менеджер</strong></h6>
                    <!-- VK-->
                    <a href="" target="_blank" type="button" class="text-blue btn-floating btn-sm mx-1 mb-0 btn-fb">
                        <i class="fab fa-vk fa-2x"></i>
                    </a>
                    <!--telegram -->
                    <a href="" target="_blank" type="button" class="text-info btn-floating btn-sm mx-1 mb-0 btn-dribbble">
                        <i class="fab fa-telegram fa-2x"></i>
                    </a>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-4 mb-4">
                    <div class="avatar mx-auto">
                        <img src="https://img.freepik.com/free-vector/computer-service-abstract-concept-illustration_335657-1897.jpg?t=st=1649749606~exp=1649750206~hmac=1f135b804d3d99199a604fc76b80ba30cee4adc14b6ca3ee985cb4923b92be03&w=826" class="rounded-circle z-depth-1-half" alt="Sample avatar" width="200" height="200">
                    </div>
                    <h4 class="font-weight-bold dark-grey-text my-4">Алексей Витальевич</h4>
                    <h6 class="text-uppercase grey-text mb-3"><strong>Техническая поддержка</strong></h6>
                    <!-- VK-->
                    <a href="https://vk.com/id137314635" target="_blank" type="button" class="text-blue btn-floating btn-sm mx-1 mb-0 btn-fb">
                        <i class="fab fa-vk fa-2x"></i>
                    </a>
                    <!--telegram -->
                    <a href="https://t.me/pusep_alexey" target="_blank" type="button" class="text-info btn-floating btn-sm mx-1 mb-0 btn-dribbble">
                        <i class="fab fa-telegram fa-2x"></i>
                    </a>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </section>
        <!--Section: Content-->
    </div>

@endsection
