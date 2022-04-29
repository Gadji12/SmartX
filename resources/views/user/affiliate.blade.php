@extends('layouts.userapp')
@section('user-content')
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Партнерская программа</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="main"><i class="zmdi zmdi-home"></i> Smart X-Investment</a></li>
                    <li class="breadcrumb-item active">Партнерская программа</li>
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
                <div class="alert alert-info" role="alert">
                    <div class="container">
                        <div class="alert-icon">
                            <i class="zmdi zmdi-alert-circle-o"></i>
                        </div>
                        <strong class="mx-auto">Ваша реферальная ссылка <a class="ml-2" href="https://investfond.pro/reg.php?referalLink=cxfylz7x"> https://investfond.pro/reg.php?referalLink=cxfylz7x</a></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">
                                     <i class="zmdi zmdi-close"></i>
                                 </span>
                            </button>
                     </div>
                </div>
                    <div class="col-xl-12 col-lg-7 col-md-12">
                        <div class="card">
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-10 py-4 col-md-8 col-sm-8">
                                        <h2>Партнерская программа</h2>
                                        <p>Общая сумма средств, заработанная в партнерстве с SmartX-investment </p>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-4 py-5">
                                        <a href="blog-details.html" class="btn btn-info rounded-lg btn-lg">0 RUB</a>
                                    </div>
                                </div>
                            </div>
                          <button href="blog-details.html" class="btn btn-info rounded-lg btn-lg mt-2">Условия партнерки</button>
                        </div>
                    </div>
                <div class="col-xl-12 col-lg-7 col-md-12 pt-2">
                    <div class="card">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-12 py-1">
                                    <p> Все пользователи, которые будут регистрироваться по данной реферальной ссылке, будут являться Вашими партнерами-инвесторами.<br><br> При условии, если вы проинвестировали более 15.000 RUB в проект(ы), то тем самым Вы активируете партнерскую программу, по которой получаете по 7% с 1-го поколения от суммы инвестированных ими средств в проекты. <br><br> А также по 3% до 9 поколения *. И это еще не все... Когда инвесторы начнут получать прибыль от действующих проектов, вы будете зарабатывать по 2% до 9-го поколения * от их прибыли.</p>
                                    <p class="text-muted">*Для того, чтобы получать % до 9-го поколения, нужно накопить общий объем инвестиций и выполнить условия:</p>

                                    <h5>2 линия - статус «Silver»</h5>
                                        <ul>
                                            <li>* 50 000 RUB личный объём инвестиций</li>
                                            <li>* 100 000 RUB общий объём инвестиций</li>
                                            <li>* 2 личных приглашённых, которые в совокупности проинвестировали в проекты 30 000 RUB, каждый по 15 000 RUB</li>
                                        </ul>

                                    <h5>3 линия - статус «Gold»</h5>
                                        <ul>
                                            <li>* 50 000 RUB личный объём инвестиций</li>
                                            <li>* 300 000 RUB общий объём инвестиций</li>
                                            <li>* 3 приглашённых, которые в совокупности проинвестировали в проекты 45 000 RUB, каждый по 15 000 RUB</li>
                                            <li>* Один реферал может дать для статуса до 50% (максимум 150 000 RUB, все что свыше не считается на квалификацию)</li>
                                            <li>* Второй реферал до 30% (максимум 90 000 RUB.) и все остальные</li>
                                        </ul>

                                    <h5>4 линия - «Platinum»</h5>
                                        <ul>
                                            <li>* 50 000 RUB личный объём инвестиций</li>
                                            <li>* 500 000 RUB общий объём инвестиций</li>
                                            <li>* 4 приглашённых, которые в совокупности проинвестировали в проекты 60 000 RUB, каждый по 15 000 RUB</li>
                                            <li>* Один реферал может дать для статуса до 50% (максимум 250 000 RUB)</li>
                                            <li>* Второй реферал до 30% (максимум 150 000 RUB) и все остальные</li>
                                        </ul>

                                    <h5>5 линия - «Emerald»</h5>
                                        <ul>
                                            <li>* 50 000 RUB личный объём инвестиций</li>
                                            <li>* 1 000 000 RUB общий объём инвестиций</li>
                                            <li>* 5 приглашённых, которые в совокупности проинвестировали в проекты 75 000 RUB, каждый по 15 000 RUB</li>
                                            <li>* Один реферал может дать для статуса до 50% (максимум 500 000 RC RUB)</li>
                                            <li>* Второй реферал до 30% (300 000 RUB) и все остальные</li>
                                        </ul>

                                    <h5>6 линия - «Ruby»</h5>
                                        <ul>
                                            <li>* 50 000 RUB личный объём инвестиций</li>
                                            <li>* 1 500 000 RUB общий объём инвестиций</li>
                                            <li>* 6 приглашённых, которые в совокупности проинвестировали в проекты 90 000 RUB, каждый по 15 000 RUB</li>
                                            <li>* Один реферал может дать для статуса до 50% (максимум 750 000 RUB)</li>
                                            <li>* Второй реферал до 30% (максимум 450 000 RUB) и все остальные</li>
                                        </ul>

                                    <h5>7 линия - «Diamond»</h5>
                                        <ul>
                                            <li>* 50 000 RUB личный объём инвестиций</li>
                                            <li>* 2 000 000 RUB общий объём инвестиций</li>
                                            <li>* 7 приглашённых, которые в совокупности проинвестировали в проекты 105 000 RUB, каждый по 15 000 RUB</li>
                                            <li>* Один реферал может дать для статуса до 50% (максимум 1 000 000 RUB)</li>
                                            <li>* Второй реферал до 30% (максимум 600 000 RUB) и все остальные</li>
                                        </ul>
                                    <h5>8 линия - «Blue Diamond»</h5>
                                    <ul>
                                        <li>* 50 000 RUB личный объём инвестиций</li>
                                        <li>* 2 500 000 RUB общий объём инвестиций</li>
                                        <li>* 8 приглашённых, которые в совокупности проинвестировали в проекты 120 000 RUB, каждый по 15 000 RUB</li>
                                        <li>* Один реферал может дать для статуса до 50% (максимум 1 250 000 RUB)</li>
                                        <li>* Второй реферал до 30% (максимум 750 000 RUB) и все остальные</li>
                                    </ul>
                                    <h5>9 линия - «Black Diamond»</h5>
                                        <ul>
                                            <li>* 50 000 RUB личный объём инвестиций</li>
                                            <li>* 3 000 000 RUB общий объём инвестиций</li>
                                            <li>* 9 приглашённых, которые в совокупности проинвестировали в проекты 135 000 RUB, каждый по 15 000 RUB</li>
                                            <li>* Один реферал может дать для статуса до 50% (максимум 1 500 000 RUB)</li>
                                            <li>* Второй реферал до 30% (максимум 900 000 RUB) и все остальные</li>
                                        </ul>
                                    <button href="blog-details.html" class="btn btn-info rounded-lg btn-lg mt-2">Скрыть условия</button>
                                    <h4>Все мои рефералы</h4>
                                    <div class="card">
                                        <div class="body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">ФИО</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($referrals as $referral)
                                                    <tr>
{{--                                                        <th scope="row">1</th>--}}
                                                        <td class="text-center">{{$referral->name}} - {{$referral->lastname}}</td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <h4>Таблица начислений вознаграждений</h4>
                                    <div class="card">
                                        <div class="body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Дата</th>
                                                        <th>Тип</th>
                                                        <th>Комментарий</th>
                                                        <th>Сумма</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
