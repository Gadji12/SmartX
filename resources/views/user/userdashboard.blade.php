@extends('layouts.userapp')
@section('user-content')
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Главная</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="main"><i class="zmdi zmdi-home"></i> Smart X-Investment</a></li>
                    <li class="breadcrumb-item active">Главная</li>
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
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card widget_2 traffic">
                    <div class="body">
                        <h6>Ваша реферальная ссылка</h6>
                        <input type="text" class="form-control input-disabled" value="smartx.beget.tech/referal_reg.php?id=124" disabled="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card widget_2 traffic">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-8 col-md-6 col-sm-12">
                                <h6>Финансовый счёт</h6>
                                <small class="mt-1">Общая сумма на Вашем счете</small>
                                <h2><span style="color:red;">0<span style="font-size:18px;">₽</span></span></h2>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="{{route('user-financial')}}" class="btn btn-primary mt-2 mb-2 ml-5">Пополнить баланс</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card widget_2 sales">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-9 col-md-6 col-sm-12">
                                <h6>Активные инвестиции</h6>
                                <small>Актуальная сумма, которая инвестирована в проекты</small>
                                <h2><span style="color:green;">0<span style="font-size:18px;">₽</span></span></h2>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <a href="{{route('offers.index')}}" class="btn btn-primary mt-2 mb-2 ">Инвестировать</a>
                                <a href="{{route('user-project')}}" class="btn btn-primary mt-2 mb-2 ml-3">Мои проекты</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card widget_2 sales">
                    <div class="body">
                        <h6>Заработано на Smart X-Investment</h6>
                        <small>Общая сумма, полученная от инвестиций</small>
                        <h2><span style="color:red;">0<span style="font-size:18px;">₽</span></span></h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card widget_2 sales">
                    <div class="body">
                        <h6>Партнёрская программа</h6>
                        <small>Общая сумма средств, заработанных в партнерстве Smart X-Invesment</small>
                        <h2><span style="color:red;">0<span style="font-size:18px;">₽</span></span></h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card widget_2 sales">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-9 col-md-6 col-sm-12">
                                <h6>Всего выведено</h6>
                                <small class="mt-1">Общая сумма выведенных Вами средств</small>
                                <h2><span style="color:red;">0<span style="font-size:18px;">₽</span></span></h2>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <a href="{{route('user-financial')}}" class="btn btn-primary mt-2 mb-3 ml-2">Вывести деньги</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card widget_2 sales">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-9 col-md-6 col-sm-12">
                                <h6>Общая прибыль</h6>
                                <small class="mt-1">Доход в совокупности, полученный от инвестиций и с партнёрской программы за весь период</small>
                                <h2><span style="color:red;">0<span style="font-size:18px;">₽</span></span></h2>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <a href="{{route('user-financial')}}" class="btn btn-primary mt-2 mb-3 ml-5">Переводы</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <style>--}}
{{--        .slimScrollDiv{--}}
{{--            max-height:240px!important;--}}
{{--        }--}}
{{--    </style>--}}
@endsection
