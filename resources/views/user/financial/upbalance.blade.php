@extends('layouts.userapp')
@section('user-content')
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Финансы</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="main"><i class="zmdi zmdi-home"></i> Smart X-Investment</a></li>
                    <li class="breadcrumb-item active">Пополнить баланс</li>
                </ul>
                <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="body">
                        <h3>ПОПОЛНИТЬ БАЛАНС</h3>
                        <p>текущий баланс: <span>{{Auth::user()->balance}}</span></p>
                        <div class="row clearfix mt-1">
                            <div class="col-sm-12">
                                <form action="{{route('postbalance')}}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="balance" class="form-control no-resize">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success mx-auto">Пополнить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
