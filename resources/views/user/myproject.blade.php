@extends('layouts.userapp')
@section('user-content')
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Мои проекты</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="main"><i class="zmdi zmdi-home"></i> Smart X-Investment</a></li>
                    <li class="breadcrumb-item active">Мои проекты</li>
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
                    <h4>Мои проекты</h4>
                    <div class="body">
                        <div class="row">
                            <div class="col-12">
                               <div class="card-body">
                                   <h3 class="mx-auto">Вы еще не инвестировали ни в один проект</h3>
                                   <p class="mx-auto">Мы подготовили для Вас несколько вариантов, что бы Вам было легче принять решение</p>
                                   <a  href="{{route('offers.index')}}" class="btn btn-success mx-auto">Выбрать проект</a>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
