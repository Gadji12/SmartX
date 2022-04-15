@extends('layouts.userapp')
@section('user-content')
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Подробности проекта</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="main"><i class="zmdi zmdi-home"></i> Smart X-Investment</a></li>
                        <li class="breadcrumb-item"><a href="offers">Список проектов</a></li>
                        <li class="breadcrumb-item active">Подробности проекта</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-12">
                                    <div class="preview preview-pic tab-content">
                                        <div class="tab-pane active" id="product_1">
                                            <img src="{{asset('/storage/'.$offer->picture_offer)}}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-8 col-md-12">
                                    <div class="product details">
                                        <h3 class="product-title mb-0">"Полезный источник"</h3>
                                        <p>Сеть автоматов по очистке и продаже питьевой воды по г. Сочи</p>
                                        <h5 class="price mt-0">Необходимая сумма: <span class="col-amber" style="color:#ff6100 !important;">9500000₽</span></h5>
                                        <h5 class="price">Рыночная премия: <span class="col-amber" style="color:#ff6100 !important;">25%</span></h5>
                                        <hr>
                                        <p class="product-description">Сеть автоматов по очистке и продаже питьевой воды по г. Сочи</p>
                                        <div class="action">
                                            <a href="invest?id=1"><button class="btn btn-success waves-effect" type="button">Инвестировать</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#about">Финансы</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#conditions">Условия</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#team">Команда</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#files">Дополнительные файлы</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="about">
                                    <p>Сумма к размещению: 9 500 000₽</p>
                                    <p>Количество долей: 1 500</p>
                                    <p>Осталось долей: 4 840</p>
                                    <p>Стоимость доли: 5 000₽</p>
                                    <p>Уже собрано: 800 000₽</p>
                                    <p>Осталось дней: </p>
                                </div>
                                <div class="tab-pane" id="conditions">
                                    Рыночная премия 5%
                                </div>
                                <div class="tab-pane" id="team">
                                    <h6 class="text-center mb-0">Участники команды не указаны</h6>
                                </div>
                                <div class="tab-pane" id="files">
                                    <h6 class="text-center mb-0">Нет дополнительных файлов</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
