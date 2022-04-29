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
                        <input type="text" class="form-control input-disabled" value="{{ Auth::user()->referral_link }}" disabled="">
{{--                        <ul class="list-group mt-3">--}}
{{--                            <li class="list-group-item">Логин: {{ Auth::user()->username }}</li>--}}
{{--                            <li class="list-group-item">Реферал: {{ Auth::user()->referrer->name ?? 'Не указан' }}</li>--}}
{{--                            <li class="list-group-item">Количество рефералов: {{ count(Auth::user()->referrals)  ?? '0' }}</li>--}}
{{--                        </ul>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card widget_2 traffic">
                    <div class="body">
                        <div class="row">
                            <div class="col-xxl-8 col-xl-7 col-lg-6 col-md-4 col-sm-6">
                                <h6>Финансовый счёт</h6>
                                <small class="mt-1">Общая сумма на Вашем счете</small>
{{--                                @dd(Auth::user()->balance)--}}
{{--                                <h2><span style="color:blue;">{{ DB::table('users')->where('balance')->get()}}<span style="font-size:18px;">₽</span></span></h2>--}}
                                <h2><span style="color:blue;">{{Auth::user()->balance}} <span style="font-size:18px;"> ₽</span></span></h2>

                            </div>
                            <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 col-sm-12">
                                <a href="{{route('user-financial')}}" class="btn btn-primary mt-2 mb-2 ml-xl-5">Пополнить баланс</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card widget_2 sales">
                    <div class="body">
                        <div class="row">
                            <div class="col-xxl-8 col-xl-7 col-lg-6 col-md-4 col-sm-6">
                                <h6>Активные инвестиции</h6>
                                <small>Актуальная сумма, которая инвестирована в проекты</small>
                                <h2><span style="color:red;">0<span style="font-size:18px;">₽</span></span></h2>
                            </div>
                            <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 col-sm-12">
                                <a href="{{route('offers.index')}}" class="btn btn-primary mt-2 mb-2 ">Инвестировать</a>
                                <a href="{{route('user-project')}}" class="btn btn-primary mt-2 mb-2">Мои проекты</a>
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
                            <div class="col-xxl-8 col-xl-7 col-lg-6 col-md-4 col-sm-6">
                                <h6>Всего выведено</h6>
                                <small class="mt-1">Общая сумма выведенных Вами средств</small>
                                <h2><span style="color:red;">0<span style="font-size:18px;">₽</span></span></h2>
                            </div>
                            <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 col-sm-12 text-center">
                                <a href="{{route('user-financial')}}" class="btn btn-primary mt-2 mb-3">Вывести деньги</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card widget_2 sales">
                    <div class="body">
                        <div class="row">
                            <div class="col-xxl-8 col-xl-7 col-lg-6 col-md-4 col-sm-6">
                                <h6>Общая прибыль</h6>
                                <small class="mt-1">Доход в совокупности, полученный от инвестиций и с партнёрской программы за весь период</small>
                                <h2><span style="color:red;">0<span style="font-size:18px;">₽</span></span></h2>
                            </div>
                            <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 col-sm-12 text-center">
                                <a href="{{route('user-financial')}}" class="btn btn-primary mt-2 mb-3 ml-lg-5">Переводы</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
