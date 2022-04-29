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
            <div class="col-lg-6">
                <div class="card widget_2 traffic">
                    <div class="body">
                        <h6>Привлечено рефералов</h6>
                        <h2 class="text-warning">{{ count(Auth::user()->referrals)  ?? '0' }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card widget_2 traffic">
                    <div class="body">
                        <h6>Ваш статус</h6>
                        <h2 class="text-black">Start</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Условия</strong> партнёрской программы</h2>
                    </div>
                    <div class="body conditions">
                        <p class="mb-0"><i class="fas fa-times text-danger" aria-hidden="true"></i> Сумма личных инвестиций достигает 15 000 рублей</p>
                        <p class="mb-0"><i class="fas fa-times text-danger" aria-hidden="true"></i> Вы пригласили реферала</p>
                        <p class="mb-0"><i class="fas fa-times text-danger" aria-hidden="true"></i> Ваш реферал инвестировал более 15 000 рублей</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12">

                <div class="card">
                    <div class="header">
                        <h2><strong>Промокод</strong> для рефералов</h2>
                    </div>

                    <div class="body">
                        <p>Ваш код приглашения</p>

                        <input type="text" value="DVNS" class="form-control" disabled="">
                        <br>
                        <!--  <div class="text-right js-sweetalert">
                             <button class="btn btn-danger waves-effect success btn-raised" onclick="generateCodeAlert();">Сгенерировать новый</button>
                             <button class="btn btn-primary waves-effect success btn-raised" onclick="alertGenerate('Промокод успешно скопирован!', 'success');">Скопировать промокод</button>
                         </div> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Ссылка</strong> для рефералов</h2>
                    </div>

                    <div class="body">
                        <p>Ваша реферальная ссылка</p>

                        <input type="text" class="form-control" value="{{ Auth::user()->referral_link }}" disabled="">
                        <br>
                        <!--div class="text-right js-sweetalert">
                            <button class="btn btn-primary waves-effect" onclick="alertGenerate('Ссылка успешно скопирована!', 'success');">Скопировать ссылку</button>
                        </div-->
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Как пригласить друзей?</strong></h2>
                    </div>

                    <div class="body">
                        <p style="font-size: 17px;line-height: 22px;margin-bottom: 0px;">Скопируйте ссылку, отправьте ее другу по почте или SMS,
                            сообщением в любимом мессенджере или просто
                            разместите информацию у Вас на стене в социальной
                            сети и напишите пригласительный код!</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12" id="referalstag">
                <div class="card">
                    <div class="header">
                        <h2><strong>Заметка</strong> к списку</h2>
                    </div>
                    <div class="body conditions">
                        <p><i class="fas fa-times text-danger" aria-hidden="true"></i> - Реферал не выполнил условия</p>
                        <p><i class="fas fa-check text-success" aria-hidden="true"></i> - Реферал выполнил часть условий</p>
                        <p class="mb-0"><i class="fas fa-check-double text-success" aria-hidden="true"></i> - Реферал выполнил все условия</p>
                        <br><p>Общая сумма инвестиций: 0</p>
                    </div>
                </div>

                <!--
                    Шапка вкладок
                -->
                <div class="card">
                    <div class="header">
                        <h2><strong>Список</strong> рефералов</h2>
                    </div>
                    <div class="body">
                        <ul class="nav nav-tabs" style="display: flex; justify-content: space-between;">
                            <li class="nav-item start"><a class="nav-link active" data-toggle="tab" href="#start"><i class="fas fa-gem" aria-hidden="true"></i> Start</a></li>
                            <!--li class="nav-item"><a class="nav-link" data-toggle="tab" href="#review">Отзывы</a></li-->
                            <li class="nav-item silver"><a class="nav-link" data-toggle="tab" href="#silver"><i class="fas fa-gem" aria-hidden="true"></i> Silver</a></li>
                            <li class="nav-item gold"><a class="nav-link" data-toggle="tab" href="#gold"><i class="fas fa-gem" aria-hidden="true"></i> Gold</a></li>
                            <li class="nav-item platinum"><a class="nav-link" data-toggle="tab" href="#platinum"><i class="fas fa-gem" aria-hidden="true"></i> Platinum</a></li>
                            <li class="nav-item emerald"><a class="nav-link" data-toggle="tab" href="#emerald"><i class="fas fa-gem" aria-hidden="true"></i> Emerald</a></li>
                            <li class="nav-item ruby"><a class="nav-link" data-toggle="tab" href="#ruby"><i class="fas fa-gem" aria-hidden="true"></i> Ruby</a></li>
                            <li class="nav-item diamond"><a class="nav-link" data-toggle="tab" href="#diamond"><i class="fas fa-gem" aria-hidden="true"></i> Diamond</a></li>
                            <li class="nav-item blue_diamond"><a class="nav-link" data-toggle="tab" href="#blue_diamond"><i class="fas fa-gem" aria-hidden="true"></i> Blue diamond</a></li>
                            <li class="nav-item black_diamond"><a class="nav-link" data-toggle="tab" href="#black_diamond"><i class="fas fa-gem" aria-hidden="true"></i> Black diamond</a></li>
                        </ul>
                    </div>
                </div>

                <div class="tab-content">
                    <div class="tab-pane active" id="start">
                        <div class="card" style="margin-top: -20px;">
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover dataTable js-referals">
                                        <thead>
                                        <tr>
                                            <th>Логин</th>
                                            <th>Дата</th>
                                            <th>Уровень</th>
                                            <!--                                            <th>Доход</th>-->
                                            <th>Общие инвестиции</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($referrals as $referral)
                                        <tr>
                                            <th scope="row">{{$referral->name}}</th>
                                            <td>{{$referral-> created_at}}</td>
                                            <td>{{$referral-> username}}</td>
                                            <td>0</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="silver">
                        <div class="card" style="margin-top: -20px;">
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover dataTable js-referals">
                                        <thead>
                                        <tr>
                                            <th>Логин</th>
                                            <th>Дата</th>
                                            <th>Уровень</th>
                                            <!--                                            <th>Доход</th>-->
                                            <th>Общие инвестиции</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="gold">
                        <div class="card" style="margin-top: -20px;">
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover dataTable js-referals">
                                        <thead>
                                        <tr>
                                            <th>Логин</th>
                                            <th>Дата</th>
                                            <th>Уровень</th>
                                            <!--                                            <th>Доход</th>-->
                                            <th>Общие инвестиции</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="platinum">
                        <div class="card" style="margin-top: -20px;">
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover dataTable js-referals">
                                        <thead>
                                        <tr>
                                            <th>Логин</th>
                                            <th>Дата</th>
                                            <th>Уровень</th>
                                            <!--                                            <th>Доход</th>-->
                                            <th>Общие инвестиции</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="emerald">
                        <div class="card" style="margin-top: -20px;">
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover dataTable js-referals">
                                        <thead>
                                        <tr>
                                            <th>Логин</th>
                                            <th>Дата</th>
                                            <th>Уровень</th>
                                            <th>Общие инвестиции</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="ruby">
                        <div class="card" style="margin-top: -20px;">
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover dataTable js-referals">
                                        <thead>
                                        <tr>
                                            <th>Логин</th>
                                            <th>Дата</th>
                                            <th>Уровень</th>
                                            <th>Общие инвестиции</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="diamond">
                        <div class="card" style="margin-top: -20px;">
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover dataTable js-referals">
                                        <thead>
                                        <tr>
                                            <th>Логин</th>
                                            <th>Дата</th>
                                            <th>Уровень</th>
                                            <th>Общие инвестиции</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="blue_diamond">
                        <div class="card" style="margin-top: -20px;">
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover dataTable js-referals">
                                        <thead>
                                        <tr>
                                            <th>Логин</th>
                                            <th>Дата</th>
                                            <th>Уровень</th>
                                            <th>Общие инвестиции</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Larry</td>
                                            <td>Jellybean</td>
                                            <td>@lajelly</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Larry</td>
                                            <td>Kikat</td>
                                            <td>@lakitkat</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="black_diamond">
                        <div class="card" style="margin-top: -20px;">
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover dataTable js-referals">
                                        <thead>
                                        <tr>
                                            <th>Логин</th>
                                            <th>Дата</th>
                                            <th>Уровень</th>
                                            <th>Общие инвестиции</th>
                                        </tr>
                                        </thead>
                                        <tbody>
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
@endsection
