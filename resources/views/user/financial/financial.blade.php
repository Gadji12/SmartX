@extends('layouts.userapp')
@section('user-content')
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Финансы</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="main"><i class="zmdi zmdi-home"></i> Smart X-Investment</a></li>
                    <li class="breadcrumb-item active">Финансы</li>
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
            <div class="col-lg-12 col-md-12 d-flex balances" style="flex-wrap: wrap;">
                <div class="card mcard_3 col-xl-4 col-lg-6">
                    <div class="body">
                        <a href="javascript:void(0);" style="color:#000;"><i style="font-size: 50px;" class="zmdi zmdi-balance-wallet"></i></a>
                        <h4 class="m-t-10">Счёт для вывода</h4>
                        <div class="row">
                            <div class="col-12">
                                <small>Баланс</small>
                                <h5>0₽</h5>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-12 text-center">
                                <a href="{{route('user-withdrawal')}}" class="btn btn-warning"  id="withbtn" onclick="withdraw('#withbtn');">Вывести деньги</a>
                                <p style="margin-top: 10px;margin-bottom: 0px;">Минимальная сумма вывода: 300₽</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mcard_3 col-xl-4 col-lg-6">
                    <div class="body">
                        <a href="javascript:void(0);" style="color:#000;"><i style="font-size: 50px;" class="zmdi zmdi-card-travel"></i></a>
                        <h4 class="m-t-10">Счёт для инвестиций</h4>
                        <div class="row">
                            <div class="col-12">
                                <small>Баланс</small>
                                <h5>{{Auth::user()->balance}}₽</h5>
                            </div>
                        </div><br>
                        <div class="row mb-2">
                            <div class="col-12 text-center">
                                <a href="{{route('user-up-balance')}}" class="btn btn-warning" style="color:#fff;width:45%;min-width: 150px;" id="withbtn">Пополнить счёт</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card mcard_3 col-xl-4 col-lg-12">
                    <div class="body">
                        <a href="javascript:void(0);" style="color:#000;"><i style="font-size: 50px;" class="zmdi zmdi-balance"></i></a>
                        <h4 class="m-t-10">Перевод на другой счёт</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group text-left">
                                    <label for="">Сумма перевода</label>
                                    <div class="input-group masked-input mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">₽</span>
                                        </div>
                                        <input type="text" class="form-control money-dollar" id="sendAmount" placeholder="Введите сумму">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group text-left">
                                    <label for="">Логин пользователя</label>
                                    <div class="input-group masked-input mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="zmdi zmdi-account"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="sendUserlogin" placeholder="Введите логин">
                                    </div>
                                </div>
                            </div>  <br>
                            <div class="col-12 mb-0">
                                <div class="form-group text-right">
                                    <button class="btn btn-warning" id="sendMoney" style="color:#fff;width:45%;min-width: 150px;">Перевести</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <h6>История транзакций</h6>
                        <div class="table-responsive">
                            <table class="table table-striped text-center">
                                <thead>
                                <tr>
                                    <th>Сумма</th>
                                    <th>Тип</th>
                                    <th>Реквизиты</th>
                                    <th>Дата Запроса</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($transactions as $transaction)
                                    <tr>
                                        <td>{{$transaction ->amount}} Р</td>
                                        <td>{{$transaction ->type}}</td>
                                        <td>{{$transaction ->requisites}}</td>
                                        <td>{{$transaction ->created_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!--div class="text-right">
                            <a href="profile-edit.php"><button class="btn btn-neutral pull-right">Платёжные данные</button></a>
                            <button class="btn btn-primary pull-right">Запросить вывод</button>
                        </div-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
