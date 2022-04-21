@extends('layouts.userapp')
@section('user-content')
    <div class="body_scrol"l>
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Мой профиль</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('user-dashboard')}}"><i class="zmdi zmdi-home"></i> Smart X-Investment</a></li>
                        <li class="breadcrumb-item active">Мой профиль</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    <a href="profile-edit.html" class="btn btn-info btn-icon float-right"><i class="zmdi zmdi-edit"></i></a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xl-4 col-lg-12 col-md-12">
                    <div class="card mcard_3">
                        <div class="body">
                            <a href="profile.html"><img src="http://smartx.beget.tech/profile/assets/images/profile_av.jpg" width="200" class="rounded-circle" alt="profile-image"></a>
                            <h4 class="m-t-10">{{Auth::user()->name}} <span> [{{Auth::user()->id}}]</span></h4>
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <p class="text-muted">{{Auth::user()->email}} </p>
                                    <a href="" class="btn btn-light">Документы</a>
                                    <a href="" class="btn btn-warning">Настройки профиля</a>
                                    <a href="{{route('user-requisites')}}" class="btn btn-info">Реквизиты</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="body">
                            <h6>Последние транзакции</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Сумма</th>
                                        <th>Тип</th>
                                        <th>Реквизиты</th>
                                        <th>Дата запроса</th>
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
                            <div class="text-right">
                                <!--button class="btn btn-neutral pull-right">Редактировать</button-->
                                <a href="{{route('user-financial')}}"><button class="btn btn-primary pull-right">Все транзакции</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">
                            <h6>Документы</h6>
                            <div class="table-responsive">
                                <p class="text-center">Нет загруженых документов<br>
                                    Пожалуйста, <a href="">загрузите</a> документы</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
