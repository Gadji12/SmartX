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
                        <h6>Финансовый счёт</h6>
                        <h2><span style="color:red;">0<span style="font-size:18px;">₽</span></span></h2>
                        <small>Общая сумма на Вашем счете</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card widget_2 sales">
                    <div class="body">
                        <h6>Активные инвестиции</h6>
                        <h2><span style="color:red;">0<span style="font-size:18px;">₽</span></span></h2>
                        <small>Актуальная сумма, которая инвестирована в проекты</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card widget_2 sales">
                    <div class="body">
                        <h6>Заработано на Smart X-Investment</h6>
                        <h2><span style="color:red;">0<span style="font-size:18px;">₽</span></span></h2>
                        <small>Общая сумма, полученная от инвестиций</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card widget_2 sales">
                    <div class="body">
                        <h6>Партнёрская программа</h6>
                        <h2><span style="color:red;">0<span style="font-size:18px;">₽</span></span></h2>
                        <small>Общая сумма средств, заработанных в партнерстве Smart X-Invesment</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card widget_2 sales">
                    <div class="body">
                        <h6>Всего выведено</h6>
                        <h2><span style="color:red;">0<span style="font-size:18px;">₽</span></span></h2>
                        <small>Общая сумма выведенных Вами средств</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card widget_2 sales">
                    <div class="body">
                        <h6>Общая прибыль</h6>
                        <h2><span style="color:red;">0<span style="font-size:18px;">₽</span></span></h2>
                        <small>Доход в совокупности, полученный от инвестиций и с партнёрской программы за весь период</small>
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
